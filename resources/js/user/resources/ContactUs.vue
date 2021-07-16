<template>
  <div class="mt-3">
    <v-container class="py-10">
      <v-card flat class="px-10 py-2">
        <v-card-title
          class="justify-center display-1 font-weight-bold blue-grey--text"
        >
          Contact Us
        </v-card-title>
        <v-card-subtitle class="text-center font-weight-bold mt-1">
          Have any questions? We would love to hear from you.
        </v-card-subtitle>
        <v-row class="mt-5">
          <v-col cols="12" md="4" sm="12">
            <v-card class="mt-5" rounded="lg" flat>
              <v-alert border="top" color="cyan" colored-border elevation="2">
                <v-card-title class="font-weight-bold">
                  Membership
                  <v-icon class="ml-2" color="cyan darken-2" right>
                    mdi-account-check
                  </v-icon>
                </v-card-title>
                <v-card-text>
                  Are you having trouble figuring out how to be a member of
                  SAARC Medical Cooperation? <br />
                  Our help centre members will guide you through each process
                  thoroughly.
                </v-card-text>
                <v-card-action class="justify-end">
                  <v-btn
                    class="ma-2 text-capitalize"
                    outlined
                    small
                    rounded
                    color="cyan darken-2"
                  >
                    <v-icon left class="mr-2"> mdi-headset </v-icon>
                    Help Centre
                  </v-btn>
                </v-card-action>
              </v-alert>
            </v-card>
          </v-col>
          <v-col cols="12" md="4" sm="12">
            <v-card rounded="lg" flat>
              <v-alert border="top" color="green" colored-border elevation="2">
                <v-card-title class="font-weight-bold">
                  Help & Support
                  <v-icon class="ml-2" color="green darken-2" right>
                    mdi-help-circle-outline
                  </v-icon>
                </v-card-title>
                <v-card-text>
                  Are you having any kind of trouble or you just want to know or
                  clear your doubts on something? We are here to answer all your
                  questions.
                  <br />
                  Our Support Team will get to you and answer all of your
                  questions as soon as possible.
                </v-card-text>
                <v-card-action class="justify-center">
                  <v-btn
                    class="ma-2 text-capitalize"
                    outlined
                    small
                    rounded
                    color="green darken-3"
                  >
                    <v-icon left class="mr-2"> mdi-headset </v-icon>
                    Support Team
                  </v-btn>
                </v-card-action>
              </v-alert>
            </v-card>
          </v-col>
          <v-col cols="12" md="4" sm="12">
            <v-card class="mt-5" rounded="lg" flat>
              <v-alert border="top" color="blue" colored-border elevation="2">
                <v-card-title class="font-weight-bold">
                  Join the Team
                  <v-icon class="ml-2" color="blue darken-2" right>
                    mdi-account-group
                  </v-icon>
                </v-card-title>
                <v-card-text>
                  Are you thinking of joining the SAARC Medical Cooperation Team
                  as an intern or an employee?<br />
                  Our recruitment team will guide you how to and what it's like
                  to be member here.
                </v-card-text>
                <v-card-action class="justify-end">
                  <v-btn
                    class="ma-2 text-capitalize"
                    outlined
                    small
                    rounded
                    color="blue"
                  >
                    <v-icon left class="mr-2"> mdi-headset </v-icon>
                    Recruitment Team
                  </v-btn>
                </v-card-action>
              </v-alert>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
  </div>
</template>
<script>
export default {};
</script>