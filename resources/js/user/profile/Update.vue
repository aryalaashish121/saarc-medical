<template>
  <v-col cols="auto" justify="space-around">
    <v-dialog
      transition="dialog-bottom-transition"
      max-width="600"
      v-model="dialog"
    >
      <v-card>
        <v-toolbar color="primary" dark>Update User</v-toolbar>
        <v-card-text>
          <v-text-field
            mt-5
            label="New Name"
            outlined
            v-model="form_fields.name"
          ></v-text-field>
          <v-text-field
            mt-5
            label="New Email"
            outlined
            v-model="form_fields.email"
          ></v-text-field>
          <v-text-field
            mt-5
            label="Current Password"
            outlined
            v-model="form_fields.password"
          ></v-text-field>
        </v-card-text>
        <v-card-actions class="justify-end">
          <v-btn text @click="updateUserDetails">Update</v-btn>
          <v-btn text @click="dialog = false">Close</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-col>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      form_fields: [],
      dialog: false,

    };
  },
  created(){
      const self = this;
      self.userData();
  },
  methods: {
    update() {
      const self = this;
      self.dialog = true;
    },
    userData() {
      const self = this;
      axios.get("current-user").then((res) => {
        self.form_fields = res.data.data;
      });
    },
    updateUserDetails() {
      const self = this;
      axios.post('user-update').then((response)=>{
           Vue.$toast.success(response.data.message);
      }).catch((err)=>{
          console.log(err);
      })
    },
  },
};
</script>