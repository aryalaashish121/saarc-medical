<template>
  <v-app id="inspire">
    <v-app-bar
      app
      color="white"
      flat
    >
      <v-avatar
        :color="$vuetify.breakpoint.smAndDown ? 'grey darken-1' : 'transparent'"
        size="32"
      ></v-avatar>

      <v-tabs
        centered
        class="ml-n9"
        color="grey darken-1"
      >
        <v-tab
          
        >
          Dashboard
        </v-tab>
         <v-tab
          @click="logout"
        >
         Logout
        </v-tab>
      </v-tabs>

      <v-avatar
        class="hidden-sm-and-down"
        color="grey darken-1 shrink"
        size="32"
      ></v-avatar>
    </v-app-bar>

    <v-main class="grey lighten-3">
      <v-container>
        <v-row>
         

          <v-col>
            <v-sheet
              min-height="70vh"
              rounded="lg"
            >
              <!--  -->
              <Home />
            </v-sheet>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import Home from "../dashboard/Home.vue";
  export default {
      components:{
Home
      },
    data(){
      
    },
     methods:{
      logout(evt) {
       if(confirm("Are you sure you want to log out?")) {
         axios.get('logout').then(response => {
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
  }
  
</script>