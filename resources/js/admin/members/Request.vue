<template>
  <div>
    <ViewMembers ref="viewMembers"></ViewMembers>

    <v-snackbar v-model="snackbar" :timeout="5000">
      {{ snackbar_text }}

      <template v-slot:action="{ attrs }">
        <v-btn color="blue" text v-bind="attrs" @click="snackbar = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>

    <v-data-table
      :headers="headers"
      :loading="isLoading"
      :items="membersList"
      item-key="id"
      :server-items-length="totalMembers"
      show-select
      :options.sync="options"
      :items-per-page="15"
      class="elevation-0 mt-4 rounded-lg p-6"
      loading-text="Loading members requests data .."
      :footer-props="{
        showFirstLastPage: true,
        firstIcon: 'mdi-arrow-collapse-left',
        lastIcon: 'mdi-arrow-collapse-right',
        itemsPerPageOptions: [5, 10, 15],
      }"
    >
      <template v-slot:top>
        <v-toolbar flat>
          <v-row no-gutters> Members </v-row>
          <v-row no-gutters>
            <v-col cols="12" md="2">
              <v-text-field
                class="flex mr-2 mt-6"
                outlined
                v-model="filters.application_no"
                dense
                label="Application no."
              ></v-text-field>
            </v-col>

            <v-col cols="12" md="3">
              <v-text-field
                class="flex mr-2 mt-6"
                outlined
                v-model="filters.name"
                dense
                label="Members Name"
              ></v-text-field>
            </v-col>

            <v-col cols="12" md="2">
              <v-autocomplete
                class="ml-2 mt-6"
                outlined
                v-model="filters.status"
                :items="filterStatusItems"
                item-text="text"
                item-value="value"
                dense
                label="Status"
                :allow-overflow="false"
                :clearable="true"
              ></v-autocomplete>
            </v-col>
            <!-- <v-col cols="12" md="2">
              <v-autocomplete
                class="ml-2 mt-6"
                outlined
                v-model="filters.memberstatus"
                :items="filterMemberStatus"
                item-text="text"
                item-value="value"
                dense
                label="Accepted/Rejected"
                :allow-overflow="false"
                :clearable="true"
              ></v-autocomplete>
            </v-col> -->
          </v-row>

          <v-spacer></v-spacer>
          <v-btn dark fab x-small class="primary elevation-1">
            <v-icon>mdi-plus</v-icon>
          </v-btn>

          <v-btn
            fab
            dark
            x-small
            class="ml-2 orange elevation-1"
            @click="loadMembers"
          >
            <v-icon>mdi-refresh</v-icon>
          </v-btn>

          <v-btn fab dark x-small class="ml-2 green elevation-1">
            <v-icon>mdi-export-variant</v-icon>
          </v-btn>
        </v-toolbar>
      </template>
      <template v-slot:[`item.full_name`]="{ item }">
        {{ item.first_name_en }} {{ item.last_name_en }}
      </template>
      <template v-slot:[`item.address`]="{ item }">
        {{ item.p_municipality }}-{{ item.p_ward_no }},
        {{ item.p_village_name }}
      </template>
      <template v-slot:[`item.is_aproved`]="{ item }">
        <v-switch
          v-model="item.is_aproved"
          readonly
          color="green"
          inset
        ></v-switch>
      </template>
      <template v-slot:[`item.status`]="{ item }">
        <v-switch
          v-model="item.status"
          color="green"
          @change="onStatusChange($event, item.id)"
          inset
        ></v-switch>
      </template>

      <template v-slot:[`item.actions`]="{ item }">
        <v-btn
          @click="viewMemberDetails(item.id)"
          outlined
          small
          color="primary"
          icon
        >
          <v-icon small dark> mdi-eye-outline </v-icon>
        </v-btn>

        <v-btn @click="check(item)" outlined small color="success" icon>
          <v-icon small dark> mdi-pencil-outline </v-icon>
        </v-btn>
          <v-btn @click="test(item)" outlined small color="success" icon>
          <v-icon small dark> mdi-pencil-outline </v-icon>
        </v-btn>

        <v-btn @click="deleteMember(item.id)" outlined small icon color="error">
          <v-icon dark small> mdi-delete-outline </v-icon>
        </v-btn>
      </template>
    </v-data-table>
  </div>
</template>
<script>
import axios from "axios";
import ViewMembers from "./View.vue";

export default {
  name: "Members",
  components: { ViewMembers },
  data() {
    return {
      snackbar: false,
      snackbar_text: "",
      membersList: [],
      isLoading: false,
      options: {},
      totalMembers: 0,

      headers: [
        {
          text: "Application no.",
          align: "start",
          sortable: true,
          value: "application_no",
        },
        {
          text: "Full Name",
          align: "start",
          sortable: false,
          value: "full_name",
        },
        {
          text: "Address",
          value: "address",
        },
        { text: "Email", value: "first_name_en" },
        { text: "Mobile", value: "mobile", sortable: false, align: "start" },
        { text: "Approved", value: "is_aproved" },
        { text: "Status", value: "status" },
        { text: "Actions", value: "actions", sortable: false },
      ],
      filters: {
        name: "",
        status: "",
        application_no: "",
        memberstatus: false,
      },
      filterStatusItems: [
        { text: "Active", value: true },
        { text: "Inactive", value: false },
      ],
      filterMemberStatus: [
        { text: "Accepted", value: true },
        { text: "Rejected", value: false },
      ],
    };
  },
  computed: {},
  watch: {
    "filters.name": _.debounce(async function () {
      const self = this;
      await self.loadMembers();
    }, 1000),
    "filters.application_no": _.debounce(async function () {
      const self = this;
      await self.loadMembers();
    }, 1000),
    "filters.status": _.debounce(async function () {
      const self = this;
      await self.loadMembers();
    }, 1000),
    "filters.memberstatus": _.debounce(async function () {
      const self = this;
      await self.loadMembers();
    }, 1000),
    options: {
      handler() {
        this.loadMembers();
      },
      deep: true,
    },
  },
  created() {
    this.loadMembers();
  },
  methods: {
    test(){
       self.$store.commit("showSnackbar", {
                            message: "chall dekha",
                            color: false
                        });
    },
    async loadMembers() {
      const self = this;
      self.isLoading = true;
      const { sortBy, sortDesc, itemsPerPage, page } = self.options;

      let params = {
        per_page: self.options.itemsPerPage,
        page: self.options.page,
        name: self.filters.name,
        application_no: self.filters.application_no,
        memberstatus: self.filters.memberstatus,
        status: self.filters.status,
      };

      if (sortBy.length == 1 && sortDesc.length == 1) {
        let sort_by = sortBy[0];
        let sort_desc = sortDesc[0];

        params = {
          per_page: itemsPerPage,
          page: page,
          name: self.filters.name,
          application_no: self.filters.application_no,
          memberstatus: self.filters.memberstatus,
          status: self.filters.status,

          sort_by,
          sort_desc,
        };
      }

      let response = await axios.get("/members", { params });
      if (response) {
        self.membersList = response.data.data;
        self.totalMembers = response.total;
        console.log(response.data.data[0]);
        self.isLoading = false;
      }

      //   await axios.get("/members",{params}).then((res) => {
      //     console.log("Members data here.....");
      //     console.log(res.data);
      //     console.log(res.data);
      //    self.membersList = res.data;
      //    self.isLoading = false;
      // });
    },
    check(_id) {},
    async onStatusChange(e, _id) {
      const self = this;
      let params = {
        status: e,
        id: _id,
      };
      try {
        await axios.post("update-member-status", params);
        self.loadMembers();
        self.snackbar_text = "Status updated sucessfully";
        self.snackbar = true;
      } catch (err) {
        console.log(err);
      }
    },

    async deleteMember(_id) {
      const self = this;
      console.log("Delete data...");
      self.url = "/members";
      let response = await axios.delete(`${self.url}/${_id}`);
      console.log(response);
      self.loadMembers();
    },
    viewMemberDetails(_id) {
      const self = this;
      self.$refs.viewMembers.view(_id);
    },
    //    async save() {
    //   const self = this;
    //   self.loading = false;
    //   const form = _.pick(self.form_fields, [
    //     "school_name",
    //     "registration_no",
    //     "pan",
    //     "edu_reg_no",
    //     "telephone",
    //     "alternate_telephone",
    //     "website",
    //     "email",
    //     "postal_code",
    //     "academic_year_id",
    //     "fiscal_year_id",
    //     "year_start_month_id",
    //     "current_month_id",
    //     "country_id",
    //     "province_id",
    //     "district_id",
    //     "street",
    //     "logo_path",
    //   ]);

    //   self.url = "/appsetting";

    //   if (self.id !== null && self.id > 0) {
    //     await self.put(self.id, form, (res) => {});
    //   } else {
    //     await self.post(form, (res) => {});
    //   }

    //   window.location.reload();
    //   self.loading = false;
    // },
  },
};
</script>