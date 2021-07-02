<template>
  <div>
      
    <Members />
      <Trash />
  </div>
</template>
<script>
import axios from 'axios';
import Trash from "../members/Trash.vue";
import Members from "../members/Members.vue"
  export default {
   components:{
     Members,Trash
   }
  }
</script>