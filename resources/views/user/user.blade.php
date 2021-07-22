<?php
$checkmembership = App\Models\Member::where('user_id', Auth::user()->id)->first();
Auth::user()->name;
?>
@extends('layouts.layout')
@section('content')
    <div id="app">
        <template>
            <v-app id="inspire">
                <v-main class="grey lighten-3">
                    <v-container>
                        <v-row>
                            <v-col cols="2">
                                <v-sheet rounded="lg">
                                    <v-list color="transparent">
                                        {{-- need condition here --}}
                                        <v-list-item link exact :to="{ name: 'user.dashboard' }">
                                            <v-list-item-content>
                                                <v-list-item-title>
                                                    <v-icon left color="info"> mdi-view-dashboard </v-icon>
                                                    Dashboard
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item link exact :to="{ name: 'user.profile' }">
                                            <v-list-item-content>
                                                <v-list-item-title>
                                                    @if (Auth::user()->membership != null)
                                                        @if (Auth::user()->membership->is_aproved)
                                                            <v-icon left color="primary">mdi-account-check </v-icon>
                                                        @elseif (Auth::user()->membership->is_rejected)
                                                        <v-icon left color="primary">mdi-account-minus </v-icon>
                                                        @endif
                                                        <v-icon left color="green">mdi-account-clock</v-icon>
                                                    @else
                                                        <v-icon left>mdi-account</v-icon>
                                                    @endif
                                                    Profile
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-divider class="my-2"></v-divider>
                                        <v-list-item color="grey lighten-4" link
                                            @click="clickLogout('{{ route('logout') }}','{{ url('/login') }}')">

                                            <v-list-item-content>
                                                <v-list-item-title>
                                                    <v-icon left color="error">mdi-logout</v-icon>
                                                    Logout
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>

                                    </v-list>
                                </v-sheet>
                            </v-col>

                            <v-col>
                                <v-sheet min-height="70vh" rounded="lg">
                                    <!--  -->
                                    <router-view></router-view>
                                </v-sheet>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-main>
            </v-app>
        </template>
    </div>

    @include('layouts.fbchat')
@endsection
<script src="{{ asset('js/app.js') }}" defer></script>
