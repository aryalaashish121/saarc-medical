<template>
  <div class="mt-3">
    <edit-membership ref="editMembership"></edit-membership>
    <div v-if="is_applied_membership === false">
      <ApplyNow />
      <OnProgress />
      <MembershipApproved />
      <MembershipRejected />
    </div>
    <div v-else-if="user_data.is_aproved">
      <MembershipApproved />
    </div>
    <div v-else-if="user_data.is_rejected">
      <MembershipRejected />
    </div>

    <div v-else>
      <OnProgress />
      <v-btn @click="editMembershipForm(user_data.id)">Edit</v-btn>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import EditMembership from "../Membership/Edit.vue";
import ApplyNow from "./ApplyNow.vue";
import OnProgress from "./OnProgress.vue";
import MembershipApproved from "./MembershipApproved.vue";
import MembershipRejected from "./MembershipRejected.vue";
export default {
  components: {
    "edit-membership": EditMembership,
    ApplyNow,
    OnProgress,
    MembershipApproved,
    MembershipRejected,
  },
  data() {
    return {
      user_data: [],
      is_applied_membership: false,
    };
  },
  created() {
    const self = this;
    axios.get("/check-user").then((res) => {
      self.is_applied_membership = self.user_data.status;
      self.user_data = res.data.data;
      console.log(self.user_data);
    });
  },
  mounted() {},
  methods: {
    editMembershipForm(_id) {
      const self = this;
      console.log("editing membership application");
      self.$refs.editMembership.edit(_id);
    },
  },
};
</script>
