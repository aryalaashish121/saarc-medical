<template>
  <v-app>
    <Nav />
    <v-main class="mx-5">
      <router-view></router-view>
    </v-main>
  </v-app>
</template>
<script>
import Nav from "./nav/Nav.vue";
export default {
  components: {
    Nav,
  },
  data() {
    return {};
  },
};
</script>