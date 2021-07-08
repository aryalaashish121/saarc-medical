<?php
$checkmembership = App\Models\Member::where('user_id',Auth::user()->id)->get()->first();
?>
<div id="app">
    <template>
   
        <v-app id="inspire">
            <v-app-bar app color="white" flat>
                <v-avatar :color=" $vuetify.breakpoint.smAndDown ? 'grey darken-1' : 'transparent'" size=" 32">
                    <v-img src="/saarc_logo.jpg"> </v-img>
                </v-avatar>

                <v-tabs centered class="ml-n9" color="grey darken-1">
                    <v-tab link exact :to="{ name: 'user.dashboard' }">
                        <v-icon left> mdi-view-dashboard </v-icon>
                        Dashboard
                    </v-tab>
                    @if(!$checkmembership)
                    <v-tab link exact :to="{ name: 'user.apply' }" >
                        <v-icon left> mdi-account-check </v-icon>
                        Apply
                    </v-tab>
                    @endif
                    <v-tab link exact :to="{ name: 'user.resources' }">
                        <v-icon left> mdi-hammer-screwdriver </v-icon>
                        Resources
                    </v-tab>
                    <v-tab link exact :to="{ name: 'user.contactUs' }">
                        <v-icon left> mdi-phone </v-icon>
                        Contact Us
                    </v-tab>
                    <v-tab link @click="clickLogout('{{ route('logout') }}','{{ url('/login') }}')">
                        <v-icon left> mdi-logout-variant </v-icon>
                        Logout
                    </v-tab>
                </v-tabs>

                <v-avatar class="hidden-sm-and-down" color="grey darken-1 shrink" size="32">
                    <v-img src="/saarc_logo.jpg"> </v-img>
                </v-avatar>
            </v-app-bar>

            <v-main class="grey lighten-3 px-5">
                <v-row>
                    <v-col>
                        <v-sheet min-height="70vh" rounded="lg">
                            <!--  -->
                            <router-view></router-view>
                        </v-sheet>
                    </v-col>
                </v-row>
            </v-main>
        </v-app>
    </template>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
