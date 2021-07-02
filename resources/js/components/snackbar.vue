<template>
<v-snackbar
      v-model="snackbar"
      :timeout="200"
    >
      {{ text }}

      <template v-slot:action="{ attrs }">
        <v-btn
          color="blue"
          text
          v-bind="attrs"
          @click="snackbar = false"
        >
          Close
        </v-btn>
      </template>
    </v-snackbar>
</template>

<script>
export default {
    data(){
        return{
            text:"",
             snackbar:false,
             timeout: 200,
        }
    },

    methods:{
        showSnackBar(){

        }
    }
}

</script>
