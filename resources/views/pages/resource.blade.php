@extends('layouts.layout')
@section('title', 'Resources')
@section('content')
    <div id="root">
        <v-app>
            <template>
                <div>
                  <v-container class="mt-3">
                    <v-card flat class="py-5">
                      <v-row>
                        <v-col cols="12" sm="12" md="6" lg="4">
                          <v-card
                            :loading="internLoading"
                            elevation="4"
                            outlined
                            rounded="xl"
                          >
                            <template slot="progress">
                              <v-progress-linear color="blue-grey" height="5" indeterminate>
                              </v-progress-linear>
                            </template>
                            <v-img height="250" contain src="/images/internship.jpg"> </v-img>
                            <v-card-title> Internship Program </v-card-title>
                            <v-card-text>
                              Start Your Carrer as a SAARC Health Worker
                            </v-card-text>
                            <v-divider class="mx-4"> </v-divider>
                            <v-card-subtitle class="title"
                              >Available Positions:</v-card-subtitle
                            >
                            <v-card-text>
                              <v-chip-group
                                v-model="internPostSelect"
                                active-class="blue-grey darken-2 white--text"
                                column
                              >
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Assistant
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Counselor
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Nurse
                                </v-chip>
                              </v-chip-group>
                            </v-card-text>
                            <v-card-actions class="justify-end">
                              <v-btn color="blue-grey darken-4" text @click="applyIntern">
                                <v-icon left class="mr-2"> mdi-account-check-outline </v-icon>
                                Apply Now
                              </v-btn>
                            </v-card-actions>
                          </v-card>
                        </v-col>
                        <v-col cols="12" sm="12" md="6" lg="4">
                          <v-card
                            :loading="exchangeLoading"
                            elevation="4"
                            outlined
                            rounded="xl"
                          >
                            <template slot="progress">
                              <v-progress-linear color="deep-purple" height="5" indeterminate>
                              </v-progress-linear>
                            </template>
                            <v-img height="250" contain src="/images/exchange_program.jpg">
                            </v-img>
                            <v-card-title> Exchange Program </v-card-title>
                            <v-card-text>
                              Opportunity to work around the SAARC Countries
                            </v-card-text>
                            <v-divider class="mx-4"> </v-divider>
                            <v-card-subtitle class="title">Work As:</v-card-subtitle>
                            <v-card-text>
                              <v-chip-group
                                v-model="exchangePostSelect"
                                active-class="deep-purple darken-2 white--text"
                                column
                              >
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Doctor
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Pharmacist
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Nurse
                                </v-chip>
                              </v-chip-group>
                            </v-card-text>
                            <v-card-actions class="justify-end">
                              <v-btn color="deep-purple darken-4" text @click="applyExchange">
                                <v-icon left class="mr-2"> mdi-account-check-outline </v-icon>
                                Apply Now
                              </v-btn>
                            </v-card-actions>
                          </v-card>
                        </v-col>
                        <v-col cols="12" sm="12" md="6" lg="4">
                          <v-card elevation="4" outlined rounded="xl">
                            <template slot="progress">
                              <v-progress-linear color="green" height="5" indeterminate>
                              </v-progress-linear>
                            </template>
                            <v-img height="250" src="/images/job_vacancy.jpg"> </v-img>
                            <v-card-title> Vacancy </v-card-title>
                            <v-card-text> Be a SAARC Worker </v-card-text>
                            <v-divider class="mx-4"> </v-divider>
                            <v-card-subtitle class="title">Vacant Positions:</v-card-subtitle>
                            <v-card-text>
                              <v-chip-group
                                v-model="vacancySelect"
                                active-class="green darken-2 white--text"
                                column
                              >
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Manager
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Counselor
                                </v-chip>
                                <v-chip>
                                  <v-icon left class="mr-2"> mdi-account-outline</v-icon>
                                  Influencer
                                </v-chip>
                              </v-chip-group>
                            </v-card-text>
                            <v-card-actions class="justify-end">
                              <v-btn color="green darken-4" text>
                                <v-icon left class="mr-2"> mdi-account-check-outline </v-icon>
                                Apply Now
                              </v-btn>
                            </v-card-actions>
                          </v-card>
                        </v-col>
                      </v-row>
                    </v-card>
                  </v-container>
                </div>
              </template>
              <script>
              export default {
                data() {
                  return {
                    internLoading: false,
                    exchangeLoading: false,
                    internPostSelect: "",
                    exchangePostSelect: "",
                    vacancySelect: "",
                  };
                },
                methods: {
                  applyIntern() {
                    this.internLoading = true;
                    setTimeout(() => (this.internLoading = false), 2000);
                  },
                  applyExchange() {
                    this.exchangeLoading = true;
                    setTimeout(() => (this.exchangeLoading = false), 2000);
                  },
                },
              };
              </script>
        </v-app>
    </div>
@endsection

    <script src="{{ asset('/js/home.js') }}" defer></script>
