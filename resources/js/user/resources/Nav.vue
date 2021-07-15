<template>
  <div class="mt-3">
    <v-app-bar color="white" elevation="5">
      <v-avatar size="55" tile class="mr-3">
        <v-img src="/images/saarc_logo.jpg"> </v-img>
      </v-avatar>

      <v-divider inset class="mx-4"> </v-divider>

      <v-tabs right>
        <v-tab>
          <v-icon left> mdi-office-building </v-icon>
          SAARCMC
          <v-menu
            bottom
            origin="center center"
            transition="scale-transition"
            open-on-hover
            offset-y
            rounded="b-xl"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                <v-icon dark> mdi-chevron-down </v-icon>
              </v-btn>
            </template>

            <v-list>
              <v-list-item link v-for="(item, i) in saarcmc_menu" :key="i">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
                <v-divider></v-divider>
              </v-list-item>
            </v-list>
          </v-menu>
        </v-tab>
        <v-tab>
          <v-icon left> mdi-hospital-building </v-icon>
          SAARCMC Hospitals
          <v-menu
            bottom
            origin="center center"
            transition="scale-transition"
            open-on-hover
            offset-y
            rounded="b-xl"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                <v-icon dark> mdi-chevron-down </v-icon>
              </v-btn>
            </template>

            <v-list>
              <v-list-item link v-for="(item, i) in saarcmc_hospitals" :key="i">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
                <v-divider></v-divider>
              </v-list-item>
            </v-list>
          </v-menu>
        </v-tab>
        <v-tab>
          <v-icon left> mdi-card-account-mail-outline </v-icon>
          Registered
          <v-menu
            bottom
            origin="center center"
            transition="scale-transition"
            open-on-hover
            offset-y
            rounded="b-xl"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                <v-icon dark> mdi-chevron-down </v-icon>
              </v-btn>
            </template>

            <v-list>
              <v-list-item link v-for="(item, i) in registered_menu" :key="i">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
                <v-divider></v-divider>
              </v-list-item>
            </v-list>
          </v-menu>
        </v-tab>
        <v-tab>
          <v-icon left> mdi-hammer-screwdriver </v-icon> Resources
        </v-tab>
        <v-tab> <v-icon left> mdi-phone-classic </v-icon> Contact Us </v-tab>
      </v-tabs>
      <v-btn large rounded class="primary ml-5 text-capitalize" text small>
        Login
        <v-icon small right> mdi-login-variant </v-icon>
      </v-btn>
    </v-app-bar>
  </div>
</template>
<script>
export default {
  data() {
    return {
      saarcmc_menu: [
        { title: "About SAARCMC" },
        { title: "SAARC Structure" },
        { title: "SAARC Charter" },
        { title: "SAARC Chairman" },
        { title: "External SAARC Relations" },
      ],
      saarcmc_hospitals: [
        { title: "Afghanistan" },
        { title: "Bangladesh" },
        { title: "Bhutan" },
        { title: "India" },
        { title: "Maldives" },
        { title: "Nepal" },
        { title: "Pakistan" },
        { title: "Sri lanka" },
      ],
      registered_menu: [{ title: "Health Workers" }, { title: "Centers" }],
    };
  },
};
</script>