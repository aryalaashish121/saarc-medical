<template>
  <div>
    <apply-membership ref="applyMembership"></apply-membership>
    <v-container>
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
          <v-timeline align-top :dense="$vuetify.breakpoint.smAndDown">
            <v-timeline-item
              color="#952175"
              icon="mdi-account-plus-outline"
              fill-dot
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-newspaper-variant-outline </v-icon>
                Fill up the form
              </span>

              <v-card
                class="mx-auto mb-10"
                color="#952175"
                rounded="lg"
                elevation="5"
                dark
                max-width="400"
              >
                <v-card-text>
                  <v-card color="white">
                    <v-img
                      src="/images/Joinus.jpg"
                      contain
                      height="170px"
                    ></v-img>
                  </v-card>
                </v-card-text>
                <v-card-title
                  class="justify-center font-weight-bold white--text applyTitle"
                >
                  Seems like you are new
                  <v-icon class="ma-2" right>
                    mdi-account-check-outline
                  </v-icon>
                  <br />
                </v-card-title>
                <v-card-subtitle class="text-center yellow--text applySubtitle">
                  Hurry Up and Apply Now for a membership
                </v-card-subtitle>

                <v-row align="center" justify="space-around">
                  <v-btn
                    @click="goToApply"
                    color="white"
                    class="ma-5 indigo--text text-capitalize font-weight-bold"
                    rounded
                    small
                  >
                    <v-icon left dark> mdi-account-check </v-icon>
                    Apply Now
                  </v-btn>
                </v-row>
              </v-card>
            </v-timeline-item>
            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-currency-usd"
              fill-dot
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-cash </v-icon>
                Pay Membership Fee
              </span>

              <v-card color="cyan darken-1" dark>
                <v-card-text class="font-weight-bold white--text">
                  Once applied, you will be able to pay for the membership.
                </v-card-text>
              </v-card>
            </v-timeline-item>
            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-timer-sand"
              fill-dot
              class="mt-5"
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-account-check-outline </v-icon>
                Membership Verification
              </span>

              <v-card color="cyan darken-1" dark>
                <v-card-text class="font-weight-bold white--text">
                  Once applied and fee paid, your membership will undergo
                  verification for eligibility.
                </v-card-text>
              </v-card>
            </v-timeline-item>
            <v-timeline-item
              color="cyan darken-1"
              icon="mdi-flag-checkered"
              fill-dot
            >
              <span slot="opposite" class="timelineMessages">
                <v-icon class="mb-1"> mdi-party-popper </v-icon>
                Result
              </span>

              <v-card color="cyan darken-1" dark>
                <v-card-text class="font-weight-bold white--text">
                  You will be notified if your membership request has been
                  approved or rejected
                </v-card-text>
              </v-card>
            </v-timeline-item>
          </v-timeline>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>
<script>
import Apply from "../Membership/Apply.vue";
export default {
  components: {
    "apply-membership": Apply,
  },
  data() {
    return {};
  },
  methods: {
    goToApply() {
      const self = this;
      self.$refs.applyMembership.add();
      // this.$router.push("/user/apply");
    },
  },
};
</script>
<style>
.applyTitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  font-size: 18px;
}
.applySubtitle {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
</style>