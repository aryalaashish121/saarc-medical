<template>
  <div class="mt-3">
    <Payment ref="addPayment"></Payment>
    <ProgressBar />
    <edit-membership ref="editMembership"></edit-membership>
    <div v-if="membership==null">
      <ApplyNow />
    </div>
    <div v-else-if="membership.is_paid==false">
      <pre>
      you are under processing. 
      Note. your payment voucher must have information same as you submitted on application details. 
      Your application no is 
      <i><u>{{membership.application_no}}</u></i>
      
      <v-btn @click="pay(membership.id)">Pay</v-btn>
      </pre>
    </div>
    <div v-else-if="membership.is_aproved==true">
      <MembershipApproved />
    </div>
    <div v-else-if="membership.is_rejected==true">
      <MembershipRejected />
    </div>
    <div v-else-if="membership.is_rejected==false && membership.is_aproved==false">
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
      membership:[],
    };
  },
  beforeCreate() {
    
  },
  mounted() {
    this.checkUserMembership();
  },
  
  methods: {
   async checkUserMembership(){
    const self = this;
    await axios.get("current-user").then((res) => {
      self.user_data = res.data.data;
      self.membership = res.data.data.membership;
      // if(Self.membership==null){
      //   this.$router.push('/apply');
      // }
      console.log('Membership data bellow');
      console.log(self.membership);
      console.log(self.user_data);
    });
  },
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
