<template>
  <div>
    <edit-membership ref="editMembership"></edit-membership>
    <v-container class="py-2">
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
                      src="/images/rejected.jpg"
                      contain
                      height="170px"
                    ></v-img>
                  </v-card>
                </v-card-text>
                <v-card-title
                  class="justify-center font-weight-bold white--text applyTitle"
                >
                  Sorry! Membership Rejected.
                  <v-icon class="ma-2" right large>
                    mdi-emoticon-cry-outline
                  </v-icon>
                </v-card-title>
                <v-card-subtitle class="text-center yellow--text applySubtitle">
                  Don't be sad though. You can always re-apply. So, cheer up.
                    <v-btn
                    @click="editMembershipForm(user_data.id)"
                    color="white"
                    class="ma-5 indigo--text text-capitalize font-weight-bold"
                    rounded
                    small
                  >
                    <v-icon left dark> mdi-update </v-icon>
                   Re apply
                  </v-btn>
                </v-card-subtitle>
               
              </v-card>
            </v-timeline-item>
          </v-timeline>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>
<script>
import EditMembership from "../Membership/Edit.vue";
export default {
  components: {
    "edit-membership": EditMembership,
  },
  data() {
    return {
      user_data: [],
    };
  },
  mounted() {
    const self = this;
    axios.get("current-user").then((res) => {
      self.user_data = res.data.data.membership;
      console.log(self.user_data);
    });
  },
  methods: {
    // goToResources() {
    //   this.$router.push("/user/resources");
    // },
    editMembershipForm(_id) {
      const self = this;
      console.log("editing membership application");
      self.$refs.editMembership.edit(_id);
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