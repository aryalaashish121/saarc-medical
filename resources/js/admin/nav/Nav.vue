<template>
  <nav>
    <v-app-bar absolute app>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title class="text-uppercase">
        <span class="ml-5"> SAARC Medical Corporation </span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-menu> </v-menu>
      <v-btn class="mx-2" elevation="2" outlined text rounded color="black" @click="logout">
        Log Out
        <v-icon right> mdi-exit-to-app </v-icon>
      </v-btn>
    </v-app-bar>
    <v-navigation-drawer app v-model="drawer" class="primary lighten-2">
      <v-layout column align-center>
        <v-flex class="mt-5">
          <v-avatar size="110" tile>
            <img src="/saarc_logo.jpg" alt=""
          /></v-avatar>
        </v-flex>
      </v-layout>
      <v-divider class="mt-3"></v-divider>

      <v-list dense>
        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
          :to="item.href"
        >
          <v-list-item-icon>
            <v-icon class="white--text">
              {{ item.icon }}
            </v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="white--text">
              {{ item.title }}
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>
<script>
import axios from 'axios'
export default {
  data() {
    return {
      drawer: false,
      items: [
        { title: "Home", icon: "mdi-home", href: "/dashboard" },
        { title: "Members", icon: "mdi-account-group", href: "/members" },
        { title: "Trash", icon: "mdi-delete", href: "/trash" },
      ],
    }
  },
    methods:{
      logout(){
       
       let res =  axios.get('logout');
       if(res){
         window.location.reload();
       }
          
          
       
      }
    }
 
};
</script>