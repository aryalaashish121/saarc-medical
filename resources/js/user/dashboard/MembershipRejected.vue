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
            <v-img src="/images/rejected.jpg" contain height="350px"></v-img>
          </v-card>
        </v-card-text>
        <v-card-title
          class="justify-center font-weight-bold white--text applyTitle"
        >
          Sorry
          <v-icon class="ma-2" right large> mdi-emoticon-cry-outline </v-icon>
        </v-card-title>
        <v-card-title
          class="justify-center font-weight-bold white--text applyTitle"
        >
          You did not qualify for our membership.
        </v-card-title>

        <v-card-subtitle class="text-center yellow--text applySubtitle">
          Don't be sad though. You can always re-apply. So, cheer up.
        </v-card-subtitle>

        <v-row align="center" justify="space-around">
          <v-btn
            @click="goToApply"
            color="white"
            class="ma-5 indigo--text"
            rounded
            large
          >
            <v-icon left dark> mdi-account-check </v-icon>
            Re-apply
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
    goToApply() {
      this.$router.push("/user/apply");
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