<template>
   
  <div>
       <ViewMembers ref="viewMembers"></ViewMembers>
      
       <v-data-table
        :headers="headers"
        :loading="isLoading"
        :items="trashmembersList"
        
        item-key="id"
        :server-items-length="trashtotalMembers"
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
            <v-row no-gutters>
              Members Trash
            </v-row>
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
              <v-col cols="12" md="2">
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
              </v-col>
            </v-row>
            
            <v-spacer></v-spacer>
           

            <v-btn
              fab
              dark
              x-small
              class="ml-2 orange elevation-1"
          @click="loadMembers"
            >
              <v-icon>mdi-refresh</v-icon>
            </v-btn>

            <v-btn
              fab
              dark
              x-small
              class="ml-2 green elevation-1"
            
            >
              <v-icon>mdi-export-variant</v-icon>
            </v-btn>
          </v-toolbar>
        </template>
         <template v-slot:[`item.full_name`]="{ item }">
            {{ item.first_name_en }} {{item.last_name_en}}
          </template>
           <template v-slot:[`item.address`]="{ item }">
           {{item.p_municipality}}-{{item.p_ward_no}}, {{item.p_village_name}}
          </template>
          <template v-slot:[`item.is_aproved`]="{item}">
            <v-switch
            v-model="item.status"
            color="green"
            readonly
            inset
          ></v-switch>
          </template>
         <template v-slot:[`item.status`]="{ item }">
          <v-switch
            v-model="item.status"
            color="green"
            readonly
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

          <v-btn
           
            @click="restorMember(item.id)"
            outlined
            small
            color="success"
            icon
          >
            <v-icon small dark> mdi-pencil-outline </v-icon>
          </v-btn>

          <v-btn
          
           
            outlined
            small
            icon
            color="error"
          >
            <v-icon dark small> mdi-delete-outline </v-icon>
          </v-btn>
        </template>
      
      

    </v-data-table>
  </div>
</template>
<script>
import axios from 'axios';
import ViewMembers from "./View.vue";
  export default {
    components:{ViewMembers,},
    data () {
      return {
        trashmembersList:[],
         isLoading:false,
         options: {},
         trashtotalMembers:0,

          headers: [
            {
            text: 'Application no.',
            align: 'start',
            sortable: true,
            value: 'application_no',
          },
        {
            text: 'Full Name',
            align: 'start',
            sortable: false,
            value: 'full_name',
          },
          {
            text: 'Address',
            value: 'address',
            
          },
          { text: 'Email', value: 'first_name_en' },
          { text: 'Mobile', value: 'mobile',sortable: false, align: 'start' },
          { text: 'Approved', value: 'is_aproved' },
          { text: "Status", value: "status" },
          { text: "Actions", value: "actions", sortable: false },
       
      ],
       filters: {
        name: "",
        status: "",
        application_no: "",
        memberstatus:"",
      },
      filterStatusItems: [
        { text: "Active", value: true },
        { text: "Inactive", value: false },
      ],
      filterMemberStatus: [
        { text: "Accepted", value: true },
        { text: "Rejected", value: false },
      ],
      }
    },
    computed: {
    
    },
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
    created(){
      this.loadMembers();
    },
    methods: {
     
      async loadMembers(){
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
     
     let response = await axios.get("/members/trash",{params});
     if(response){
      self.trashmembersList = response.data.data;
      self.trashtotalMembers = response.total;
      console.log("Trash members");
      console.log(response.data.data);
       self.isLoading = false;
     }    
      },
      check(_id){

      },
     async restorMember(_id){
          const self = this;
        try{
        let response = await axios.get(`${"/members/restore"}/${_id}`);
        self.loadMembers();
        console.log(response);
        }catch(err){
            console.log(err);
        }
      },
     
    async deletePermanently(_id){
      const self = this;
      console.log("Delete data...")
      self.url = "/members/trash"
       let response = await axios.delete(`${self.url}/${_id}`);
       console.log(response);
       self.loadMembers();
    },
     
      viewMemberDetails(_id){
          const self = this;
        self.$refs.viewMembers.view(_id);
      }
    },
  }
</script>