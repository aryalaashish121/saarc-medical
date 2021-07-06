<div id="admin">
<template>
  
  <v-app id="inspire">
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
          <v-list-item link exact :to="{ name: 'admin.member-request' }">
            
            <v-list-item-action>
                <v-icon>mdi-account-group</v-icon>
            </v-list-item-action>
            <v-list-item-content>
                <v-list-item-title>Members Request</v-list-item-title>
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
          <v-list-item  link @click="clickLogout('{{route('logout')}}','{{url('/login')}}')">
              <v-list-item-action>
                  <v-icon> mdi-exit-to-app</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                  <v-list-item-title> Logout</v-list-item-title>
              </v-list-item-content>
          </v-list-item>
          
      </v-list>
  </v-navigation-drawer>

  <v-app-bar app color="indigo" dark>
    <v-app-bar-nav-icon  @click="drawer = !drawer"></v-app-bar-nav-icon>
    <v-toolbar-title>SAARC Medical Corporation</v-toolbar-title>
</v-app-bar>

<v-main>
  <v-container class="mt-3"  fluid>
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </v-container>
</v-main>

<v-snackbar
:timeout="snackbarDuration"
:color="snackbarColor"
top
centered
class="mr-30 mb-5"
v-model="showSnackbar">
@{{ snackbarMessage }}
</v-snackbar>
<!-- Snackbar ends -->

<!-- confirm dialog -->
<v-dialog persistent v-model="showDialog" absolute max-width="450px">
 <v-card>
     <v-card-title class="primary white--text">
         <v-icon dark class="mr-3" v-if="dialogIcon" medium>@{{dialogIcon}}</v-icon>
         <span>@{{dialogTitle}}</span>
     </v-card-title>

     <v-card-text>
        @{{dialogMessage}}
     </v-card-text>

     <v-card-actions v-if="dialogType == 'confirm'">
         <v-spacer></v-spacer>
         <v-btn text dark color="error" @click.native="dialogCancel">Cancel</v-btn>
         <v-btn text dark color="primary" @click.native="dialogOk">Ok</v-btn>
     </v-card-actions>
 </v-card>
</v-dialog>

<!-- confirm dialog ends -->

   <!-- loader -->
   <div v-if="showLoader" class="wask_loader bg_half_transparent">
          <scale-loader position="fixed" color="white"></scale-loader>
    </div>

     <!-- the progress bar -->
     <vue-progress-bar></vue-progress-bar>

</v-app>
</template>
</div>

<script src="{{ asset('js/admin.js') }}"></script>

