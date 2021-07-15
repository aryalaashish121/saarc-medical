<template>
  <div class="mt-3">
    <v-container class="py-10">
      <v-card
        class="mx-auto px-8 py-5"
        max-width="550px"
        elevation="2"
        rounded="xl"
      >
        <v-card-text class="text-center">
          <v-avatar size="120" tile class="rounded">
            <v-img src="/images/saarc_logo.jpg"> </v-img>
          </v-avatar>
        </v-card-text>
        <v-card-title class="headings justify-center display-1">
          Login
        </v-card-title>

        <v-card-text class="mt-2 px-15">
          <h6 class="ml-3 mb-3 black--text">Email</h6>
          <v-text-field class="mx-auto" solo rounded label="email">
          </v-text-field>
          <h6 class="ml-3 mb-3 black--text">Password</h6>
          <v-text-field
            class="mx-auto"
            solo
            rounded
            label="password"
            type="password"
          >
          </v-text-field>
          <v-btn
            block
            x-large
            color="primary"
            rounded
            class="text-capitalize mt-5"
          >
            Login
            <v-icon right dark class="ma-2"> mdi-login-variant </v-icon>
          </v-btn>

          <v-checkbox v-model="checkbox">
            <template v-slot:label>
              <div class="mt-2">Remember Me</div>
            </template>
          </v-checkbox>
          <p>
            Not a member yet?
            <a href="" style="text-decoration-none"> Sign Up </a>
          </p>
        </v-card-text>
        <v-card-text class="text-right">
          <a href="" style="text-decoration-none"> Forgot Your Password? </a>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
};
</script>
<style>
.headings {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
</style>