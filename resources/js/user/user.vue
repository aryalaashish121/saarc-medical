<template>
<v-app>
 
  <Home />
</v-app>
</template>

<script>
import Home from "./dashboard/Home.vue";
export default {
  components:{
    Home,
  },
  mounted() {
    console.log("User component mounted.");
  },
};
</script>
