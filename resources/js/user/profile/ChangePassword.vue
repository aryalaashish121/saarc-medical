<template>
  <v-col cols="auto" justify="space-around">
    <v-dialog
      transition="dialog-bottom-transition"
      max-width="600"
      v-model="dialog"
    >
      <validation-observer ref="observer" v-slot="{}">
        <v-card>
          <v-toolbar color="primary" dark>
            <v-icon left dark> mdi-lock-clock </v-icon> Change
            Password</v-toolbar
          >
          <v-card-text>
            <!-- <div v-for="(error,index) in errors" :key="index" >
              
                    <li class="red--text">
                        {{error[0]}}
                    </li>
                
            </div> -->
            <v-text-field
              :error-messages="errors.newpassword"
              type="password"
              mt-5
              label="New  Password"
              outlined
              prepend-inner-icon="mdi-key"
              v-model="form_fields.newpassword"
            ></v-text-field>

            <v-text-field
              :error-messages="errors.confirmPassword"
              type="password"
              mt-5
              prepend-inner-icon="mdi-key"
              label="Confirm Password"
              outlined
              v-model="form_fields.confirmPassword"
            ></v-text-field>

            <v-text-field
              :error-messages="errors.password"
              type="password"
              mt-5
              prepend-inner-icon="mdi-key"
              label="Current Password"
              outlined
              v-model="form_fields.password"
            ></v-text-field>
          </v-card-text>
          <v-card-actions class="justify-end">
            <v-btn
              outlined
              color="primary"
              @click="updateUserDetails(form_fields.id)"
            >
              <v-icon left dark> mdi-cog </v-icon> Update</v-btn
            >
            <v-btn outlined color="error" @click="dialog = false"
              >Close <v-icon dark right> mdi-close-circle </v-icon>
            </v-btn>
          </v-card-actions>
        </v-card>
      </validation-observer>
    </v-dialog>
  </v-col>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      form_fields: [],
      errors: [],
    };
  },
  mounted() {
    const self = this;
    self.userData();
  },
  methods: {
    update(_id) {
      const self = this;

      self.dialog = true;
    },
    async userData() {
      const self = this;
      await axios.get("current-user").then((res) => {
        self.form_fields = res.data.data;
      });
    },
    updateUserDetails(_id) {
      const self = this;
      self.$refs.observer.validate().then(async (result) => {
        axios
          .put(`${"user-password"}/${_id}`, self.form_fields)
          .then((response) => {
            if (response.data.status == true) {
              Vue.$toast.success(response.data.message);

              self.dialog = false;
            }
            if (response.data.status == false) {
              Vue.$toast.error(response.data.message);
              self.form_fields.password = "";
            }
          })
          .catch((err) => {
            console.log(err.response.data.errors);
            self.errors = err.response.data.errors;
          });
      });
    },
  },
};
</script>