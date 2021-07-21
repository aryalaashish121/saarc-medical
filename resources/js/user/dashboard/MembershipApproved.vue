<template>
  <div>
    <v-container class="py-8">
      <v-card flat>
        <v-card-title
          class="timelineMessages justify-center"
          style="font-size: 25px; font-weight: 900"
        >
          <v-icon class="ma-2 mb-2" x-large color="red lighten-2">
            mdi-flag-checkered
          </v-icon>
          Road to Membership
        </v-card-title>
        <v-card-text>
          <v-timeline reverse align-top :dense="$vuetify.breakpoint.smAndDown">
            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-account-plus-outline"
              fill-dot
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-check-circle-outline </v-icon>
                You have applied for membership.
              </span>
            </v-timeline-item>
            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-currency-usd"
              fill-dot
              class="mt-5"
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-check-circle-outline </v-icon>
                Membership Fee Paid
              </span>
            </v-timeline-item>

            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-timer-sand"
              fill-dot
              class="mt-5"
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-check-circle-outline </v-icon>
                Membership Verification Completed.
              </span>
            </v-timeline-item>
            <v-timeline-item
              class="mt-5"
              color="#952175"
              icon="mdi-flag-checkered"
              fill-dot
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-party-popper </v-icon>
                Result
              </span>
              <v-card
                class="mx-auto"
                color="#952175"
                rounded="lg"
                elevation="5"
                dark
                max-width="400"
              >
                <v-card-text>
                  <v-card color="white">
                    <v-img
                      src="/images/approved.jpg"
                      contain
                      height="170px"
                    ></v-img>
                  </v-card>
                </v-card-text>
                <v-card-title
                  class="justify-center font-weight-bold white--text applyTitle"
                >
                  Congratulations! Membership Approved.
                  <v-icon class="ma-2" right> mdi-party-popper </v-icon>
                </v-card-title>
                <v-card-subtitle class="text-center yellow--text applySubtitle">
                  Cheers to working together towards a better fiture. Welcome to
                  the team.
                </v-card-subtitle>

                <v-row align="center" justify="space-around">
                  <v-btn
                    @click="goToResources"
                    color="white"
                    class="ma-5 indigo--text text-capitalize font-weight-bold"
                    rounded
                    small
                  >
                    <v-icon left dark> mdi-magnify </v-icon>
                    Explore
                  </v-btn>
                </v-row>
              </v-card>
            </v-timeline-item>
          </v-timeline>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    goToResources() {
      this.$router.push("/user/resources");
    },
  },
};
</script>
<style>
.applyTitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
.applySubtitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
</style>