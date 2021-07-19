<template>

<div class="mt-3">
    <user-update ref="updateUser"></user-update>
  Name: {{user_data.name}}
  Email: {{user_data.email}}
  <v-btn @click="changeDetails">Update</v-btn>
</div>
</template>
<script>
import axios from 'axios';
import Update from './Update.vue';
export default {
  components:{
    'user-update':Update,
  },
  data(){
    return{
      user_data:[],
      membership_data:[],
    }
  },
  created(){
    console.log('loading profile component');
    this.userData();
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
    changeDetails(){
      const self = this;
      
      self.$refs.updateUser.update();
    }

  } 
}
</script>