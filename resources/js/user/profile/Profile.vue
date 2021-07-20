<template>

<div class="mt-3">
    <user-update ref="updateUser"></user-update>
    <update-password ref="updatePassword"></update-password>
  Name: {{user_data.name}}
  Email: {{user_data.email}}
  <v-btn @click="changeDetails">Update</v-btn>
  <v-btn @click="updatePassword(user_data.id)">Update Password</v-btn>
</div>
</template>
<script>
import axios from 'axios';
import UpdatePassword from './ChangePassword.vue';
import Update from './Update.vue';
export default {
  components:{
    'user-update':Update,
    'update-password':UpdatePassword,
  },
  data(){
    return{
      user_data:[],
      membership_data:[],
    }
  },
 async mounted(){
     
    console.log('loading profile component');
    await this.userData();
  },
  created(){
   
  },
  methods:{
    userData(){
      const self = this;
      axios.get('current-user').then((response)=>{
        self.user_data = response.data.data;
        self.membership_data = response.data.membership;
        console.log('user data');
        console.log(self.user_data);
      })
    },
    updatePassword(_id){
      const self = this;
      self.$refs.updatePassword.update(_id);
     
    },
    changeDetails(){
      const self = this;
      self.$refs.updateUser.update();
    }

  } 
}
</script>