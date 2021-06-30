<template>
   <v-app>
       <v-alert type="primary">Congratulation you are admin</v-alert>
   </v-app>
</template>

<script>
    export default {
        mounted() {
            console.log('Admin component mounted.')
        }
    }
</script>
