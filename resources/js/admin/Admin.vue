<template>
  <v-app>
    <Nav />
    <v-main class="mx-5">
      <Members />
    </v-main>
   
  </v-app>
</template>
<script>
import Nav from "./nav/Nav.vue";
import Members from "./members/Members.vue"
export default {
  components: {
    Nav,Members
  },
  data() {
    return {};
  },
};
</script>