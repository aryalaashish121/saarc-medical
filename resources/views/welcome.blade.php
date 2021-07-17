@extends('layouts.layout')
@section('title', 'SAARC Medical Co-operation')
@section('content')
    <div id="root">
        <v-app>
            <v-card class="overflow-hidden">
                <v-app-bar color="white" elevation="5" fixed>
                    <v-avatar size="55" tile class="mr-3">
                        <v-img src="/images/saarc_logo.jpg"> </v-img>
                    </v-avatar>

                    <v-divider inset class="mx-4"> </v-divider>

                    <v-tabs right>
                        <v-tab>
                            <v-icon left> mdi-office-building </v-icon>
                            SAARCMC
                            <v-menu bottom origin="center center" transition="scale-transition" open-on-hover offset-y
                                rounded="b-xl">
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                                        <v-icon dark> mdi-chevron-down </v-icon>
                                    </v-btn>
                                </template>

                                <v-list>
                                    <v-list-item link>
                                        <v-list-item-title> About SAARCMC </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> SAARCMC Charter </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> SAARCMC Structure </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> SAARCMC Chairman </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> External SAARC Relations </v-list-item-title>
                                    </v-list-item>
                                </v-list>
                            </v-menu>
                        </v-tab>
                        <v-tab>
                            <v-icon left> mdi-hospital-building </v-icon>
                            SAARCMC Hospitals
                            <v-menu bottom origin="center center" transition="scale-transition" open-on-hover offset-y
                                rounded="b-xl">
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                                        <v-icon dark> mdi-chevron-down </v-icon>
                                    </v-btn>
                                </template>

                                <v-list>
                                    <v-list-item link>
                                        <v-list-item-title> Afghanistan </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Bangladesh </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Bhutan </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> India </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Maldives </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Nepal </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Pakistan </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Sri Lanka </v-list-item-title>
                                    </v-list-item>
                                </v-list>
                            </v-menu>
                        </v-tab>

                        <v-tab>
                            <v-icon left> mdi-hospital-building </v-icon>
                            Registered
                            <v-menu bottom origin="center center" transition="scale-transition" open-on-hover offset-y
                                rounded="b-xl">
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn icon fab color="primary" dark v-bind="attrs" v-on="on">
                                        <v-icon dark> mdi-chevron-down </v-icon>
                                    </v-btn>
                                </template>

                                <v-list>
                                    <v-list-item link>
                                        <v-list-item-title> Health Workers </v-list-item-title>
                                    </v-list-item>
                                    <v-list-item link>
                                        <v-list-item-title> Centers </v-list-item-title>
                                    </v-list-item>
                                </v-list>
                            </v-menu>
                        </v-tab>

                        <v-tab link exact :to="{name: 'resources'}">
                            <v-icon left> mdi-hammer-screwdriver </v-icon> Resources
                        </v-tab>
                        <v-tab>
                            <v-icon left> mdi-phone-classic </v-icon> Contact Us
                        </v-tab>
                    </v-tabs>
                    <v-btn large rounded class="primary ml-5 text-capitalize" text small>
                        Login
                        <v-icon small right> mdi-login-variant </v-icon>
                    </v-btn>
                </v-app-bar>
            </v-card>

            <welcome></welcome>
        </v-app>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection
