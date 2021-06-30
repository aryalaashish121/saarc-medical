<template>
  <div>
    <v-alert>This one is alert message</v-alert>
    <v-row class="px-5">
      <v-col md="4">
        <v-card class="mt-5 outlined elevation-5 rounded-pill">
          <v-avatar class="tile bg-orange">
            <span class="white--text text-h5 ml-5">image avatar</span>
          </v-avatar>
        </v-card>
      </v-col>
      <v-spacer></v-spacer>
      <v-col md="4">
        <v-card class="mt-5" outlined elevation="5">
          <v-card-title> Hello World 3 okey </v-card-title>
          <v-card-subtitle> I m user here here </v-card-subtitle>
        </v-card>
      </v-col>
    </v-row>
    <v-text-field
    label="okey not there text here.."
    >
    </v-text-field>
  </div>
</template>

<script>
import vuetify from '../plugins/vuetify'
export default {
    components:{
        vuetify,
    },
  mounted() {
    console.log("User component mounted.");
  },
};
</script>
