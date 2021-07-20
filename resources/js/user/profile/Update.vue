<template>
  <v-col cols="auto" justify="space-around">
    <v-dialog
      transition="dialog-bottom-transition"
      max-width="600"
      v-model="dialog"
    >
    <validation-observer ref="observer" v-slot="{}">
      <v-card>
        <v-toolbar color="primary" dark>Update User</v-toolbar>
        <v-card-text>
          <validation-provider
            :rules="{
              max: 50,
              min: 2,
              regex: /^[A-Za-z\s]+$/,
              required: true,
            }"
            name="Account Name"
            v-slot="{ errors }"
          >
            <v-text-field
              :error-messages="errors"
              mt-5
              label="New Name"
              outlined
              v-model="form_fields.name"
            ></v-text-field>
          </validation-provider>
          <validation-provider
            :rules="{
              required: true,
              email: true,
            }"
            name="Email"
            v-slot="{ errors }"
          >
            <v-text-field
              :error-messages="errors"
              mt-5
              label="New Email"
              outlined
              v-model="form_fields.email"
            ></v-text-field>
          </validation-provider>
          <validation-provider
            :rules="{
              required: true,
            }"
            name="Password"
            v-slot="{ errors }"
          >
            <v-text-field
              :error-messages="errors"
              type="password"
              mt-5
              label="Current Password"
              outlined
              v-model="form_fields.password"
            ></v-text-field>
          </validation-provider>
        </v-card-text>
        <v-card-actions class="justify-end">
          <v-btn text @click="updateUserDetails(form_fields.id)">Update</v-btn>
          <v-btn text @click="dialog = false">Close</v-btn>
        </v-card-actions>
      </v-card>
    </validation-observer>
    </v-dialog>
  </v-col>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      form_fields: [],
      dialog: false,
      errors: [],
    };
  },
  mounted() {
    const self = this;
    self.userData();
  },
  created() {},
  methods: {
    update() {
      const self = this;
      self.dialog = true;
    },
    async userData() {
      const self = this;
      await axios.get("current-user").then((res) => {
        self.form_fields = res.data.data;
      });
    },
    updateUserDetails(_id) {
      const self = this;
      self.$refs.observer.validate().then(async (result) => {
      axios
        .put(`${"user-update"}/${_id}`, self.form_fields)
        .then((response) => {
          if (response.data.status == true) {
            Vue.$toast.success(response.data.message);
            window.location.reload();
            self.dialog = false;
          }
          if (response.data.status == false) {
            Vue.$toast.error(response.data.message);
            self.form_fields.password = "";
          }
        })
        .catch((err) => {
          console.log(err);
        });
      });
    },
  },
};
</script>