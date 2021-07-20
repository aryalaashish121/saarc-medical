<template>
  <v-dialog transition="dialog-top-transition" max-width="800" v-model="dialog">
    <v-card>
      <v-toolbar color="primary" dark>Payment Details</v-toolbar>
      <v-card-text>
        <v-row class="mt-5">
           <v-col cols="12" md="12">
              <v-text-field
                label="Your application no."
                prepend-inner-icon="mdi-format-text"
                v-model="form_fields.application_no"
                dense
                readonly
              ></v-text-field>
          </v-col>
          <v-col cols="12" md="12">
            <validation-provider
              :rules="{
                required: false,
              }"
              name="Bank Name"
              v-slot="{ errors, valid }"
            >
              <v-text-field
                :error-messages="errors"
                :success="valid"
                outlined
                clearable
                label="Bank Name"
                prepend-inner-icon="mdi-format-text"
                v-model="form_fields.bank_name"
                dense
                v-on:keypress="isName($event)"
              ></v-text-field>
            </validation-provider>
          </v-col>
          <v-col cols="12" md="6">
            <validation-provider
              :rules="{
                required: false,
              }"
              name="Branch Name"
              v-slot="{ errors, valid }"
            >
              <v-text-field
                :error-messages="errors"
                :success="valid"
                outlined
                clearable
                label="Bank branch "
                prepend-inner-icon="mdi-format-text"
                v-model="form_fields.bank_branch"
                dense
                v-on:keypress="isName($event)"
              ></v-text-field>
            </validation-provider>
          </v-col>

          <v-col cols="12" md="6">
            <validation-provider
              :rules="{
                required: false,
              }"
              name="Payment Account No. "
              v-slot="{ errors, valid }"
            >
              <v-text-field
                :error-messages="errors"
                :success="valid"
                outlined
                clearable
                label="Payment Account No."
                prepend-inner-icon="mdi-format-text"
                v-model="form_fields.bank_account_no"
                dense
                v-on:keypress="isName($event)"
              ></v-text-field>
            </validation-provider>
          </v-col>
          <v-col cols="12" md="6">
            <v-btn small rounded class="primary" @click="openUploadPayment">
              <v-icon left dark> mdi-camera </v-icon>
              Upload scan copy of your payment voucher
            </v-btn>

            <v-card flat>
              <v-card-subtitle class="text-center">
                <v-avatar class="profile" color="grey" size="164" tile>
                  <v-img :src="`${payment_slip_image}`"></v-img>
                </v-avatar>
              </v-card-subtitle>
              <v-card-subtitle class="text-center">
                <input
                  type="file"
                  @change="paymentSlipChange"
                  id="change_payment_slip"
                  hidden
                />
              </v-card-subtitle>
            </v-card>
          </v-col>
        </v-row>
      </v-card-text>
      <v-card-actions class="justify-end">
        <v-btn text @click="dialog = false">Close</v-btn>
        <v-btn text @click="update(form_fields.id)">Save</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
import Conversions from "../../utils/conversions";
export default {
  data() {
    return {
      payment_slip_image: "images/voucher.png",
      form_fields: [],
      dialog: false,
    };
  },
  created() {},
  methods: {
   async add(_id) {
      const self = this;
      self.url = "/members";
      console.log("payment add menu");
      self.dialog = true;

     await axios
        .get(`${self.url}/${_id}/edit`)
        .then((res) => {
          self.form_fields = res.data.data;
        })
        .catch((err) => {
          console.log(err);
        });
      console.log(_id);
    },

    openUploadPayment() {
      document.getElementById("change_payment_slip").click();
    },

    paymentSlipChange(e) {
      let _image = e.target.files[0];
      let fileReader = new FileReader();
      fileReader.readAsDataURL(_image);
      fileReader.onload = (e) => {
        console.log(e);
        this.payment_slip_image = e.target.result;
        console.log(this.payment_slip_image);
      };
    },
    async update(_id) {
      const self = this;
      self.url = "/members/payment";
       self.form_fields["payment_slip"] = this.payment_slip_image;
      await axios
        .put(`${self.url}/${_id}`, self.form_fields)
        .then((response) => {
          console.log(response);
          Vue.$toast.success(response.data.message);
          self.dialog = false;
           location.reload();
          if (response.data.status === false) {
            Vue.$toast.error(response.data.message);
          }
        })
        .catch((err) => {
          console.log(err);
        });
      console.log("membership application data..");
      console.log(self.form_fields);
    },
    isName(e) {
      return new Conversions().isName(e);
    },
  },
};
</script>