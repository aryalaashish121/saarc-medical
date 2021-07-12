<template>
  <v-row>
    <v-col md="4">
      <v-card dark class="mr-4 rounded-lg elevation-0 light-blue accent-2">
        <v-row>
          <v-col md="2">
            <img
              src="/images/study.svg"
              width="50rem"
              height="50rem"
              class="ml-2 mt-2"
            />
          </v-col>
          <v-col>
            <v-card-title>
              <span class="headline"> checking</span>
            </v-card-title>
          </v-col>
        </v-row>
      </v-card>
    </v-col>

    <v-col md="4">
      <v-card dark class="mr-4 rounded-lg elevation-0 green accent-3">
        <v-row>
          <v-col md="2">
            <img
              src="/images/customer.svg"
              width="50rem"
              height="50rem"
              class="ml-2 mt-2"
            />
          </v-col>
          <v-col>
            <v-card-title>
              <span class="headline"> Active: </span>
            </v-card-title>
          </v-col>
        </v-row>
      </v-card>
    </v-col>

    <v-col md="4">
      <v-card dark class="mr-4 rounded-lg elevation-0 deep-orange accent-2">
        <v-row>
          <v-col md="2">
            <img
              src="/images/cross.svg"
              width="50rem"
              height="50rem"
              class="ml-2 mt-2"
            />
          </v-col>
          <v-col>
            <v-card-title>
              <span class="headline"> Inactive: </span>
            </v-card-title>
          </v-col>
        </v-row>

        <v-divider></v-divider>
        <!-- <v-card-text > </v-card-text> -->
      </v-card>
    </v-col>
  </v-row>
</template>