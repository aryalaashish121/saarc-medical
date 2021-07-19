<template>
<div>
  This one is proofile page-text
</div>
</template>
<script>
import axios from 'axios';
export default {
  data(){
    return{

    }
  },
  created(){
    console.log('loading profile component');
    const token = sessionStorage.getItem('token'); //Add this line
  },
  methods:{

  }
}
</script>