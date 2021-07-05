<template>

    <v-navigation-drawer v-model="drawer" app>
      <v-layout column align-center>
        <v-flex class="mt-5">
          <v-avatar size="110" tile>
            <img src="/saarc_logo.jpg" alt=""
          /></v-avatar>
        </v-flex>
      </v-layout>
        <v-list dense>
          <v-list-item link exact :to="{ name: 'admin.dashboard' }">
                <v-list-item-action>
                    <v-icon>mdi-home</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Home</v-list-item-title>
                </v-list-item-content>
                
            </v-list-item>
            <v-list-item link exact :to="{ name: 'admin.members' }">
              
                <v-list-item-action>
                    <v-icon>mdi-account-group</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Members</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            <v-list-item link exact :to="{ name: 'admin.trash' }">
                <v-list-item-action>
                    <v-icon>mdi-delete</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Trash</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            <v-list-item link exact  @click.prevent="logout">
                <v-list-item-action>
                    <v-icon> mdi-exit-to-app</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Logout</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            
        </v-list>
    </v-navigation-drawer>
</template>
    
    
</template>
<script>
import axios from 'axios';
export default {

  data() {
    
    return {
      drawer: false,
    }
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
 
};
</script>