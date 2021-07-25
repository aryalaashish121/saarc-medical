<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>saarcmc - admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
<link href="images/saarc_logo.jpg" rel="icon">
</head>
<body>
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
                  <v-icon color="info">mdi-home</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                  <v-list-item-title>Home</v-list-item-title>
              </v-list-item-content>
              
          </v-list-item>
          <v-list-item link exact :to="{ name: 'admin.member-request' }">
            
            <v-list-item-action>
                <v-icon color="green">mdi-account-clock</v-icon>
            </v-list-item-action>
            <v-list-item-content>
                <v-list-item-title>Members Request</v-list-item-title>
            </v-list-item-content>
        </v-list-item>
          <v-list-item link exact :to="{ name: 'admin.members' }">
              <v-list-item-action>
                  <v-icon color="primary" >mdi-account-multiple-check</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                  <v-list-item-title>Members</v-list-item-title>
              </v-list-item-content>
          </v-list-item>
          <v-list-item link exact :to="{ name: 'admin.member-rejected' }">
            <v-list-item-action>
                <v-icon color="error" >mdi-account-multiple-minus</v-icon>
            </v-list-item-action>
            <v-list-item-content>
                <v-list-item-title>Rejected Members</v-list-item-title>
            </v-list-item-content>
        </v-list-item>
          <v-list-item link exact :to="{ name: 'admin.trash' }">
              <v-list-item-action>
                  <v-icon  color="error">mdi-delete</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                  <v-list-item-title>Trash</v-list-item-title>
              </v-list-item-content>
          </v-list-item>
          
          <v-list-item  link @click="clickLogout('{{route('logout')}}','{{url('/login')}}')">
              <v-list-item-action>
                  <v-icon color="red"> mdi-exit-to-app</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                  <v-list-item-title class="text-warning"> Logout</v-list-item-title>
              </v-list-item-content>
          </v-list-item>
          
      </v-list>
  </v-navigation-drawer>

  <v-app-bar app color="orange darken-2" dark>
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
     <!-- the progress bar -->
     <vue-progress-bar></vue-progress-bar>

</v-app>
</template>
</div>
</body>
<footer>
@include('layouts.fbchat')
<script src="{{ asset('js/admin.js') }}"></script>
</footer>
