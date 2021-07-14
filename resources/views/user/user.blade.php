<?php
$checkmembership = App\Models\Member::where('user_id', Auth::user()->id)
    ->get()
    ->first(); ?>
<div id="app">
    <template>

        <v-app id="inspire">
            <v-app-bar app color="white" flat>
                <v-avatar :color=" $vuetify.breakpoint.smAndDown ? 'grey darken-1' : 'transparent'" size="36">
                    <v-img src="/saarc_logo.jpg"> </v-img>
                </v-avatar>

                <v-tabs centered class="ml-n9" color="grey darken-1">
                    <v-tab link exact :to="{ name: 'user.dashboard' }">
                        <v-icon left> mdi-view-dashboard </v-icon>
                        Dashboard
                    </v-tab>
                    {{-- @if (!$checkmembership)
                    <v-tab link exact :to="{ name: 'user.apply' }" >
                        <v-icon left> mdi-account-check </v-icon>
                        Apply
                    </v-tab>
                    @endif --}}
                    <v-tab link exact :to="{ name: 'user.resources' }">
                        <v-icon left> mdi-hammer-screwdriver </v-icon>
                        Resources
                    </v-tab>
                    <v-tab link exact :to="{ name: 'user.contactUs' }">
                        <v-icon left> mdi-phone </v-icon>
                        Contact Us
                    </v-tab>

                </v-tabs>

                <v-menu class="ml-3 elevation-3" offset-y>
                    <template v-slot:activator="{on}">
                        <v-btn icon v-on="on">
                            <v-avatar color="primary" size="40">
                                <img src="/images/user.png" alt="user">
                            </v-avatar>
                        </v-btn>
                    </template>

                    <v-list class="elevation-0">
                        <v-list-item class="elevation-0" link
                            @click="clickLogout('{{ route('logout') }}','{{ url('/login') }}')">
                            <v-list-item-icon>
                                <v-icon>mdi-logout</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Logout</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </v-menu>


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
@include('layouts.fbchat');
<script src="{{ asset('js/app.js') }}" defer></script>
