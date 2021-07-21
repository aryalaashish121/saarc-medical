<template>
  <div class="mt-3">
    <Payment ref="addPayment"></Payment>
    <ProgressBar />
    <edit-membership ref="editMembership"></edit-membership>
    <div v-if="membership == null">
      <ApplyNow />
    </div>
    <div v-else-if="membership.is_paid == false">
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
                color="cyan darken-1"
                icon="mdi-account-plus-outline"
                fill-dot
              >
                <span slot="" class="timelineMessages">
                  <v-icon class="mb-1"> mdi-check-circle-outline </v-icon>
                  You have applied for membership.
                </span>
              </v-timeline-item>
              <v-timeline-item
                color="#952175"
                icon="mdi-currency-usd"
                fill-dot
                class="mt-5"
              >
                <span slot="opposite" class="timelineMessages">
                  <v-icon class="mb-1"> mdi-cash </v-icon>
                  Pay Membership Fee
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
                        src="/images/payment.jpg"
                        contain
                        height="170px"
                      ></v-img>
                    </v-card>
                  </v-card-text>
                  <v-card-title
                    class="
                      justify-center
                      font-weight-bold
                      white--text
                      applyTitle
                    "
                  >
                    Your application no is -
                    <i
                      ><u> {{ membership.application_no }} </u></i
                    >
                  </v-card-title>
                  <v-card-subtitle
                    class="text-center yellow--text applySubtitle"
                  >
                    You are under processing. Note. your payment voucher must
                    have information same as you submitted on application
                    details.
                  </v-card-subtitle>

                  <v-row align="center" justify="space-around">
                    <v-btn
                      @click="pay(membership.id)"
                      color="white"
                      class="ma-5 indigo--text text-capitalize font-weight-bold"
                      rounded
                      small
                    >
                      <v-icon left dark> mdi-cash </v-icon>
                      Pay Now
                    </v-btn>
                  </v-row>
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
    <div v-else-if="membership.is_aproved == true">
      <MembershipApproved />
    </div>
    <div v-else-if="membership.is_rejected == true">
      <MembershipRejected />
    </div>
    <div
      v-else-if="
        membership.is_rejected == false && membership.is_aproved == false
      "
    >
      <OnProgress />
    </div>
  </div>
</template>
<script>
import axios from "axios";
import EditMembership from "../Membership/Edit.vue";
import Payment from "../Membership/payment.vue";
import ApplyNow from "./ApplyNow.vue";
import OnProgress from "./OnProgress.vue";
import MembershipApproved from "./MembershipApproved.vue";
import MembershipRejected from "./MembershipRejected.vue";
import ProgressBar from "../../components/preloader.vue";
export default {
  components: {
    "edit-membership": EditMembership,
    ProgressBar,
    ApplyNow,
    OnProgress,
    MembershipApproved,
    MembershipRejected,
    Payment,
  },

  data() {
    return {
      user_data: [],
      membership: [],
    };
  },
  beforeCreate() {},
  mounted() {
    this.checkUserMembership();
  },

  methods: {
    async checkUserMembership() {
      const self = this;
      await axios.get("current-user").then((res) => {
        self.user_data = res.data.data;
        self.membership = res.data.data.membership;
        // if(Self.membership==null){
        //   this.$router.push('/apply');
        // }
        console.log("Membership data bellow");
        console.log(self.membership);
        console.log(self.user_data);
      });
    },
    pay(_id) {
      const self = this;
      console.log("editing membership application");
      self.$refs.addPayment.add(_id);
    },
    editMembershipForm(_id) {
      const self = this;
      console.log("editing membership application");
      self.$refs.editMembership.edit(_id);
    },
  },
};
</script>
