<template>
  <div class="">
    <user-update ref="updateUser"></user-update>
    <update-password ref="updatePassword"></update-password>
    <v-container>
      <v-card
        outlined
        rounded="lg"
        elevation="5"
        class="profileBackground mx-auto"
        height="300px"
      >
        <v-card-title class="justify-center">
          <v-avatar class="elevation-10 profileImage" size="210">
            <v-img 
            contain 
            :src="`${profile}`">
            </v-img>
          </v-avatar>
        </v-card-title>
      </v-card>
      <v-card class="user-details mx-auto" flat>
        <v-card-text class="text-center">
          <p class="userBasicsName">{{ user_data.name }}</p>
          <p class="userBasicsEmail">
            <v-icon small> mdi-email </v-icon> {{ user_data.email }}
          </p>
        </v-card-text>
        <v-card-text class="text-center">
          <v-btn
            rounded
            dark
            color="primary"
            class="text-capitalize white--text"
            elevation="3"
            @click="changeDetails"
          >
            <v-icon dark left small> mdi-cog </v-icon> Update
          </v-btn>
          <v-btn
            rounded
            dark
            color="red darken-1"
            class="white--text ml-3 text-capitalize"
            elevation="3"
            @click="updatePassword(user_data.id)"
          >
            <v-icon dark left small> mdi-lock-clock </v-icon> Change Password
          </v-btn>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>
<script>
import axios from "axios";
import UpdatePassword from "./ChangePassword.vue";
import Update from "./Update.vue";
export default {
  components: {
    "user-update": Update,
    "update-password": UpdatePassword,
  },
  data() {
    return {
      profile:"images/user_preview.png",
      user_data: [],
      membership_data: [],
    };
  },
  async mounted() {
    console.log("loading profile component");
    await this.userData();
  },
  created() {},
  methods: {
    userData() {
      const self = this;
      axios.get("current-user").then((response) => {
        self.user_data = response.data.data;
        self.membership_data = response.data.data.membership;
        console.log("membership data list");
        console.log(self.membership_data);
        if(self.membership_data.image){
          self.profile = self.membership_data.image;
        }
        console.log("user data");
        console.log(self.user_data);
      });
    },
    updatePassword(_id) {
      const self = this;
      self.$refs.updatePassword.update(_id);
    },
    changeDetails() {
      const self = this;
      self.$refs.updateUser.update();
    },
  },
};
</script>