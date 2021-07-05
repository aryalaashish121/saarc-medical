<template>
  <div>
 
    <h1>This is Logout</h1>
  </div>
</template>
<script>
import axios from "axios";

import Navbar from "../nav/Nav.vue";
export default {
  components: {
    Navbar,
  },
  data(){
      return{

      }
  },
  methods:{
       logout(evt) {
       if(confirm("Are you sure you want to log out?")) {
         axios.get('api/logout').then(response => {
          localStorage.removeItem('auth_token');
          delete axios.defaults.headers.common['Authorization'];
          this.$router.go('/login');
        })
        .catch(error => {
          localStorage.removeItem('auth_token');
          delete axios.defaults.headers.common['Authorization'];
          this.$router.go('/login');
        });       
       }
       }
  }
  
};
</script>