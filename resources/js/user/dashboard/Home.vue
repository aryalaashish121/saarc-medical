<template>
<div>
  <edit-membership ref="editMembership"></edit-membership>
  <div v-if="is_applied_membership===false">
   Please apply for membership
  </div>
 <div v-else-if="user_data.is_aproved">
   congratulation your membership is apporoved..
 </div>
 <div v-else-if="user_data.is_rejected">
    Sorry your membership is rejected
 </div>
  
  <div v-else>
        Application on process..
    Want to edit you membership...
  <v-btn @click="editMembershipForm(user_data.id)">Edit</v-btn>
  </div>

</div>
</template>
<script>
import axios from 'axios';
import EditMembership from "../Membership/Edit.vue";
export default{
  components:{
  'edit-membership': EditMembership,
  },
  data(){
    return{
      user_data:[],
      is_applied_membership:false,
    }
  },
  created(){
   const self = this;
    axios.get('/check-user').then((res)=>{
        self.is_applied_membership = self.user_data.status;
         self.user_data = res.data.data;
          console.log(self.user_data);
     });
  },
  mounted(){
   
  },
  methods:{

     editMembershipForm(_id){
       const self = this;
       console.log("editing membership application");
       self.$refs.editMembership.edit(_id);
     }
  }
}
</script>
