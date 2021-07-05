<template>
<v-app>
<Nav />
 
</v-app>
</template>

<script>
import Home from "./dashboard/Home.vue";
import Nav from "./components/Nav.vue";
export default {
  components:{
    Home,
    Nav
  },
  mounted() {
    console.log("User component mounted.");
  },
};
</script>
