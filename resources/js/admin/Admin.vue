<template>
<v-app>

        <Home />
</v-app>
</template>
<script>
import Home from './dashboard/Home.vue';
import Nav from "./nav/Nav.vue";
  export default {
      components:{
        Home,Nav
      },
    data () {
     return{
       
     }
   
    }
  }
</script>