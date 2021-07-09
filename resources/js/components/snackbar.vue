<template>
    <v-snackbar v-model="notify" :timeout="5000">
      {{ notify_message }}
            <template v-slot:action="{ attrs }">
        <v-btn color="blue" text v-bind="attrs" @click="notify = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>
</template>

<script>
export default {
    data(){
        return{
            notify: false,
            notify_message: "",
        }
    }
}
</script>