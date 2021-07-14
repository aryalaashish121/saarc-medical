<template>

  <div class="mt-3">
    <Payment ref="addPayment"></Payment>
    <ProgressBar />
    <edit-membership ref="editMembership"></edit-membership>
    <div v-if="is_applied_membership === false">
      <ApplyNow />
    </div>
    <div v-else-if="!user_data.is_paid">
      <pre>
      you are under processing. 
      Note. your payment voucher must have information same as you submitted on application details. 
      Your application no is 
      <i><u>{{user_data.application_no}}</u></i>
      
      <v-btn @click="pay(user_data.id)">Pay</v-btn>
      </pre>
    </div>
    <div v-else-if="user_data.is_aproved">
      <MembershipApproved />
    </div>
    <div v-else-if="user_data.is_rejected">
      <MembershipRejected />
    </div>

    <div v-else>
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
    Payment
  },

  data() {
    return {
      user_data: [],
      is_applied_membership: false,
    };
  },
  beforeCreate() {
    const self = this;
    axios.get("/check-user").then((res) => {
      self.is_applied_membership = self.user_data.status;
      self.user_data = res.data.data;
      console.log(self.user_data);
    });
  },
  mounted() {},
  methods: {
    pay(_id){
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
