<template>
  <div>
    <v-container class="py-8">
      <v-card
        class="mx-auto"
        color="#952175"
        rounded="xl"
        elevation="5"
        dark
        max-width="700"
      >
        <v-card-text>
          <v-card color="white">
            <v-img src="/images/approved.jpg" contain height="350px"></v-img>
          </v-card>
        </v-card-text>
        <v-card-title
          class="justify-center font-weight-bold white--text applyTitle"
        >
          Congratulations
          <v-icon class="ma-2" right large> mdi-party-popper </v-icon>
          <br />
          Your membership request has been verified and approved.
          <br />
        </v-card-title>
        <v-card-subtitle class="text-center yellow--text applySubtitle">
          Cheers to working together towards a better fiture. Welcome to the
          team.
        </v-card-subtitle>

        <v-row align="center" justify="space-around">
          <v-btn
            @click="goToResources"
            color="white"
            class="ma-5 indigo--text"
            rounded
            large
          >
            <v-icon left dark> mdi-magnify </v-icon>
            Explore
          </v-btn>
        </v-row>
      </v-card>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    goToResources() {
      this.$router.push("/user/resources");
    },
  },
};
</script>
<style>
.applyTitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
.applySubtitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
</style>