<template>
  <v-app>
     <Nav ref="navbar"></Nav>

        <app-header @toggle-drawer="$refs.navbar.drawer = !$refs.navbar.drawer"></app-header>

        <v-main>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-main>
  </v-app>
</template>
<script>
import Nav from "./nav/Nav.vue";
import Headers from '../components/Headers.vue';
import Members from "./members/Members.vue"
export default {
  components: {
    Nav,'app-header':Headers,
  },
  data() {
    return {};
  },
};
</script>