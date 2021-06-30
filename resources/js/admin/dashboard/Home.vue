<template>
  <div>
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
          <v-card-title> Hello World 3 </v-card-title>
          <v-card-subtitle> address details here </v-card-subtitle>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Admin component mounted.");
  },
};
</script>
