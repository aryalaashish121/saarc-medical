<template>
  <div class="pa-5">
    <v-card class="mt-3" rounded="lg">
      <v-card-title>
        <v-row>
          <v-col cols="12" sm="3" md="3">
            <v-img
              lazy-src="/saarc_logo.jpg"
              max-height="150"
              max-width="250"
              contain
              src="/saarc_logo.jpg"
            ></v-img>
          </v-col>
          <v-spacer></v-spacer>
          <v-col cols="12" sm="12" md="4">
            <v-card flat>
              <v-card-text class="px-5">
                <v-row>
                  <v-icon left> mdi-map-marker </v-icon> Tinkune-32, Kathmandu
                  (Raja Janak Marg Road)
                </v-row>

                <v-row class="mt-5">
                  <v-icon left> mdi-phone </v-icon>Phone:
                  <a href="tel: 01-4279626" style="text-decoration: none"
                    >01-4279626</a
                  >
                </v-row>

                <v-row class="mt-5">
                  <v-icon left> mdi-email </v-icon>Email:
                  <a
                    href="mailto: info.saarcmacoop@gmail.com"
                    style="text-decoration: none"
                    >info.saarcmacoop@gmail.com</a
                  >
                </v-row>

                <v-row class="mt-5">
                  <v-icon left> mdi-web </v-icon> Web:
                  <a href="www.saarcmc.org" style="text-decoration: none"
                    >www.saarcmc.org</a
                  >
                </v-row>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card-title>
      <v-divider></v-divider>
      <v-card-title class="justify-center title text-decoration-underline">
        Membership Sheet
      </v-card-title>
      <v-card-text class="mt-3">
        <v-row>
          <v-col cols="12" sm="12" md="4">
            <v-text-field
              outlined
              clearable
              prepend-inner-icon="mdi-newspaper-variant-outline"
              label="Application Number"
              type="number"
              dense
            ></v-text-field
          ></v-col>

          <v-col cols="12" sm="12" md="4">
            <v-select
              outlined
              dense
              prepend-inner-icon="mdi-account-star"
              label="Membership Type"
            ></v-select
          ></v-col>
          <v-spacer></v-spacer>
          <v-col cols="12" sm="12" md="4">
            <v-card flat>
              <v-card-subtitle class="text-center">
                <v-avatar class="profile" color="grey" size="164" tile>
                  <v-img
                    src="https://www.pngitem.com/pimgs/m/4-47626_art-beard-no-male-avatar-clipart-hd-png.png"
                  ></v-img>
                </v-avatar>
              </v-card-subtitle>
              <v-card-subtitle class="text-center">
                <v-btn small rounded class="primary">
                  <v-icon left dark> mdi-camera </v-icon>
                  Choose your photo
                </v-btn>
              </v-card-subtitle>
            </v-card></v-col
          >
        </v-row>

        <v-card elevation="5" rounded="xl">
          <v-card-title class="ml-3 font-weight-medium">
            Personal Details
          </v-card-title>
          <v-divider></v-divider>
          <v-card-text class="mt-3 px-10">
            <v-row>
              <strong>Full Name (In Block Letters)</strong>
            </v-row>
            <v-row>
              <v-col cols="12" md="8">
                <v-text-field
                  outlined
                  clearable
                  prepend-inner-icon="mdi-format-text"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <strong>Date of Birth</strong>
            </v-row>
            <v-row>
              <v-col cols="12" md="4">
                <v-menu
                  ref="menu"
                  v-model="menu"
                  :close-on-content-click="false"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="date"
                      label="D.o.B (A.D.)"
                      prepend-inner-icon="mdi-calendar"
                      readonly
                      dense
                      outlined
                      v-bind="attrs"
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    v-model="date"
                    :active-picker.sync="activePicker"
                    :max="
                      new Date(
                        Date.now() - new Date().getTimezoneOffset() * 60000
                      )
                        .toISOString()
                        .substr(0, 10)
                    "
                    min="1950-01-01"
                    @change="save"
                  ></v-date-picker>
                </v-menu>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  readonly
                  label="D.o.B (B.S.)"
                  prepend-inner-icon="mdi-calendar"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" md="4">
                <v-select
                  outlined
                  dense
                  prepend-inner-icon="mdi-gender-male-female"
                  label="Gender"
                ></v-select>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Nationality"
                  prepend-inner-icon="mdi-earth"
                  dense
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Religion"
                  prepend-inner-icon="mdi-plus"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title">Contact Details:</strong>
            </v-row>
            <v-row>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Country Code"
                  prepend-inner-icon="mdi-earth"
                  dense
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Phone Number"
                  prepend-inner-icon="mdi-phone"
                  dense
                  type="number"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Email"
                  prepend-inner-icon="mdi-email"
                  dense
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Website"
                  prepend-inner-icon="mdi-web"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title">Address:</strong>
            </v-row>
            <v-row class="mt-5">
              <v-col cols="12" md="6">
                <v-card outlined elevation="3" class="px-5">
                  <v-card-title> Permanent Address </v-card-title>
                  <v-card-text class="mt-3">
                    <v-row>
                      <v-text-field
                        outlined
                        label="State"
                        prepend-inner-icon="mdi-map-legend"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="District"
                        prepend-inner-icon="mdi-map-marker-radius-outline"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Municipality"
                        prepend-inner-icon="mdi-home-city-outline"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Ward No."
                        prepend-inner-icon="mdi-fireplace-off"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Tole/Street"
                        prepend-inner-icon="mdi-road-variant"
                        dense
                      ></v-text-field>
                    </v-row>
                  </v-card-text>
                </v-card>
              </v-col>
              <v-col cols="12" md="6">
                <v-card outlined elevation="3" class="px-5">
                  <v-card-title> Temporary Address </v-card-title>
                  <v-card-text class="mt-3">
                    <v-row>
                      <v-text-field
                        outlined
                        label="State"
                        prepend-inner-icon="mdi-map-legend"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="District"
                        prepend-inner-icon="mdi-map-marker-radius-outline"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Municipality"
                        prepend-inner-icon="mdi-home-city-outline"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Ward No."
                        prepend-inner-icon="mdi-fireplace-off"
                        dense
                      ></v-text-field>
                    </v-row>
                    <v-row>
                      <v-text-field
                        outlined
                        label="Tole/Street"
                        prepend-inner-icon="mdi-road-variant"
                        dense
                      ></v-text-field>
                    </v-row>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title">Family Details:</strong>
            </v-row>
            <v-row>
              <v-col cols="12" md="8">
                <v-text-field
                  outlined
                  clearable
                  label="Father's Name"
                  prepend-inner-icon="mdi-format-text"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" md="6">
                <v-text-field
                  outlined
                  clearable
                  label="Father's Occupation"
                  prepend-inner-icon="mdi-briefcase"
                  dense
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  outlined
                  clearable
                  label="Contact No."
                  prepend-inner-icon="mdi-phone"
                  dense
                  type="number"
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" md="8">
                <v-text-field
                  outlined
                  clearable
                  label="Mother's Name"
                  prepend-inner-icon="mdi-format-text"
                  dense
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" md="6">
                <v-text-field
                  outlined
                  clearable
                  label="Mothers's Occupation"
                  prepend-inner-icon="mdi-briefcase"
                  dense
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <v-text-field
                  outlined
                  clearable
                  label="Contact No."
                  prepend-inner-icon="mdi-phone"
                  dense
                  type="number"
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title"
                >Working Experience:
                <v-btn class="mx-2" fab dark x-small color="indigo">
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-simple-table>
                  <thead>
                    <tr>
                      <th class="text-left sybtitle-2">S.N.</th>
                      <th class="text-left sybtitle-2">Organization Name</th>
                      <th class="text-left sybtitle-2">Designation</th>
                      <th class="text-left sybtitle-2">Years</th>
                      <th class="text-left sybtitle-2">Renmarks</th>
                    </tr>
                  </thead>
                </v-simple-table>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title"
                >Qualification Details:
                <v-btn class="mx-2" fab dark x-small color="indigo">
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-simple-table>
                  <thead>
                    <tr>
                      <th class="text-left sybtitle-2">S.N.</th>
                      <th class="text-left sybtitle-2">
                        University/Board Name
                      </th>
                      <th class="text-left sybtitle-2">Level</th>
                      <th class="text-left sybtitle-2">Degree Name</th>
                      <th class="text-left sybtitle-2">Grade/%</th>
                      <th class="text-left sybtitle-2">Completed Year</th>
                    </tr>
                  </thead>
                </v-simple-table>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title"
                >Special Trainings (If Any):
                <v-btn class="mx-2" fab dark x-small color="indigo">
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-simple-table>
                  <thead>
                    <tr>
                      <th class="text-left sybtitle-2">S.N.</th>
                      <th class="text-left sybtitle-2">
                        University/Board Name
                      </th>
                      <th class="text-left sybtitle-2">Level</th>
                      <th class="text-left sybtitle-2">Degree Name</th>
                      <th class="text-left sybtitle-2">Grade/%</th>
                      <th class="text-left sybtitle-2">Completed Year</th>
                    </tr>
                  </thead>
                </v-simple-table>
              </v-col>
            </v-row>
            <v-row class="mt-5">
              <strong>
                Achievements if any, in School/ College or Working Organizations
              </strong>
            </v-row>
            <v-row class="mt-5">
              <v-textarea
                solo
                name="input-7-4"
                label="Enter details if any......."
              ></v-textarea>
            </v-row>
            <v-row class="mt-5">
              <strong class="text-decoration-underline"> Declaration </strong>
            </v-row>
            <v-row>
              <v-checkbox v-model="checkbox">
                <template v-slot:label>
                  <div class="mt-4">
                    I declare that I have read all instruction provided by
                    SAARCMC and the information provided by me is true and
                    complete in every part. I understand, that is my
                    responsibility to provide all necessary documents to support
                    my application.
                  </div>
                </template>
              </v-checkbox>
            </v-row>
            <v-row>
              I acknowledge that the SAARC Medical Cooperation (SAARCMC)
              management reserve the right to verify or reserve any decision
              regarding my Membership. I have read and understood the SAARCMC
              rules and regulation and stated in the rules book and the
              condition there of and I promise to abide by the said rules and
              regulation.
            </v-row>
            <v-row class="mt-10">
              <v-col cols="12" md="4" class="text-center">
                <v-text-field outlined dense></v-text-field>

                <span>Applicant Signature</span>
              </v-col>
              <v-spacer></v-spacer>
              <v-col cols="12" md="4" class="text-center">
                <v-text-field outlined dense></v-text-field>

                <span>Date</span>
              </v-col>
            </v-row>
            <!-- <v-row class="mt-5">
              <v-col cols="12" md="4">
                <v-label class="text-center"> Applicant Signature </v-label>
              </v-col>
              <v-spacer></v-spacer>
              <v-col cols="12" md="4">
                <v-text-field outlined dense></v-text-field>
              </v-col>
            </v-row> -->
          </v-card-text>
        </v-card>
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      date: null,
      menu: false,
    };
  },
  watch: {
    menu(val) {
      val && setTimeout(() => (this.activePicker = "YEAR"));
    },
  },
  mounted() {
    console.log("User component mounted.");
  },
  methods: {
    save(date) {
      this.$refs.menu.save(date);
    },
  },
};
</script>
