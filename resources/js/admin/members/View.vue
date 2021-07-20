<template>
  <div>
    <v-dialog
      v-model="dialog"
      persistent
      fullscreen
      scrollable
      hide-overlay
      transition="dialog-bottom-transition"
    >
      <v-snackbar v-model="snackbar" top :timeout="5000">
        {{ snackbar_text }}

        <template v-slot:action="{ attrs }">
          <v-btn color="blue" text v-bind="attrs" @click="snackbar = false">
            Close
          </v-btn>
        </template>
      </v-snackbar>
      <v-card>
        <v-toolbar color="primary" dark>
          <v-btn icon dark><v-icon>mdi-account-outline</v-icon></v-btn>
          <v-toolbar-title> Membership Details </v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items>
            <v-btn dark icon @click="dialog = false"
              ><v-icon>mdi-close</v-icon></v-btn
            >
          </v-toolbar-items>
        </v-toolbar>
        <v-card-text style="height: 900px" class="mt-4">
          <v-card flat>
            <v-row>
              <v-col cols="12" sm="12" md="12">
                <v-card
                  class="mt-2 px-10 py-5"
                  outlined
                  elevation="5"
                  rounded="xl"
                >
                  <v-row class="px-5 py-3">
                    <v-col cols="12" sm="8" md="9">
                      <v-card-title class="primary--text font-weight-bold">
                        <v-icon class="mr-2" color="pink">
                          mdi-clipboard-account-outline
                        </v-icon>
                        General Information
                      </v-card-title>
                      <v-divider></v-divider>
                      <v-card-text>
                        <div class="studentBasics">
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1"> mdi-account </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Applicant Name:
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.first_name_en }}&nbsp;{{
                                  form_fields.middle_name_en
                                }}&nbsp;{{ form_fields.last_name_en }}
                              </span>

                              <v-btn
                                color="primary"
                                @click="
                                  manageMemberRequest(form_fields.id, true)
                                "
                              >
                                Approve</v-btn
                              >
                              <v-btn
                                color="error"
                                @click="
                                  manageMemberRequest(form_fields.id, false)
                                "
                              >
                                Reject</v-btn
                              >
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1"> mdi-counter </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Application no.
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.application_no }}
                              </span>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1">
                                mdi-gender-male-female
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Gender
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.gender }}
                              </span>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1">
                                mdi-cake-variant
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Date of Birth
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.dob_ad }} A.D. &
                                {{ form_fields.dob_bs }} B.S.
                              </span>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1"> mdi-earth </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Nationality
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.nationality }}
                              </span>
                            </v-col>
                          </v-row>

                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1">
                                mdi-home-circle
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Current Address
                              </strong>
                            </v-col>

                            <v-col
                              sm="6"
                              md="9"
                              v-if="form_fields.t_village_name"
                            >
                              <span class="studentDetail">
                                : {{ form_fields.t_state }}, &nbsp;{{
                                  form_fields.t_district
                                }}, &nbsp;{{ form_fields.t_village_name }}
                              </span>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1">
                                mdi-home-circle
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Permanent Address
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.p_state }}, &nbsp;{{
                                  form_fields.p_district
                                }}, &nbsp;{{ form_fields.p_village_name }}
                              </span>
                            </v-col>
                          </v-row>
                        </div>
                      </v-card-text>
                    </v-col>
                    <v-col cols="12" sm="4" md="3">
                      <v-card elevation="3" flat rounded="xl">
                        <v-card-text class="text-center">
                          <v-avatar
                            class="mb-2 profile"
                            color="grey"
                            size="250"
                            tile
                          >
                            <v-img
                              :src="`${form_fields.image}`"
                              alt="Members image"
                            />
                          </v-avatar>
                          <br />
                          <span
                            class="primary--text font-weight-bold mt-3"
                            style="font-size: 18px"
                          >
                            {{ form_fields.full_name_en }}
                          </span>
                          <br />
                          <span class="font-weight-medium">
                            {{ form_fields.faculty_name }},
                            {{ form_fields.class_name }}
                            {{ form_fields.section_name }}
                          </span>
                        </v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                  <v-row class="px-5 py-3">
                    <v-col cols="12">
                      <v-card outlined rounded="lg">
                        <v-card-title class="primary--text font-weight-bold">
                          <v-icon class="mr-2" color="pink">
                            mdi-phone-log
                          </v-icon>
                          Contact Information
                        </v-card-title>
                        <v-divider></v-divider>
                        <v-card-text>
                          <v-row>
                            <v-col sm="12" md="4">
                              <v-card outlined rounded="xl" elevation="3">
                                <v-card-title
                                  class="primary--text font-weight-bold"
                                  style="font-size: 16px"
                                >
                                  <v-icon class="mr-2" color="pink">
                                    mdi-school
                                  </v-icon>
                                  Personal
                                </v-card-title>
                                <v-card-text>
                                  <h2 style="font-size: 16px">
                                    <v-icon small left class="pb-1">
                                      mdi-phone
                                    </v-icon>
                                    <strong> {{ form_fields.mobile }} </strong>
                                  </h2>
                                  <br />
                                  <h2 style="font-size: 16px">
                                    <v-icon small left class="pb-1">
                                      mdi-email
                                    </v-icon>
                                    <strong> {{ form_fields.email }} </strong>
                                  </h2>
                                </v-card-text>
                              </v-card>
                            </v-col>
                            <v-col sm="12" md="4">
                              <v-card outlined rounded="xl" elevation="3">
                                <v-card-title
                                  class="primary--text font-weight-bold"
                                  style="font-size: 16px"
                                >
                                  <v-icon class="mr-2" color="pink">
                                    mdi-human-male-girl
                                  </v-icon>
                                  Parents
                                </v-card-title>
                                <v-card-text>
                                  <h2 style="font-size: 16px" class="text-wrap">
                                    <v-icon small left class="pb-1">
                                      mdi-phone-classic
                                    </v-icon>
                                    <strong>
                                      {{ form_fields.fathers_name }},
                                      {{ form_fields.fathers_phone_no }}
                                    </strong>
                                  </h2>
                                  <br />
                                  <h2 style="font-size: 16px">
                                    <v-icon small left class="pb-1">
                                      mdi-phone-classic
                                    </v-icon>
                                    <strong>
                                      {{ form_fields.mothers_name }},
                                      {{ form_fields.mothers_phone_no }}
                                    </strong>
                                  </h2>
                                </v-card-text>
                              </v-card>
                            </v-col>
                          </v-row>
                        </v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                  <v-row class="px-5 py-3" v-if="form_fields">
                    <v-col cols="12">
                      <v-card outlined rounded="lg">
                        <v-card-title class="primary--text font-weight-bold">
                          <v-icon class="mr-2" color="pink">
                            mdi-phone-log
                          </v-icon>
                          Payment Information
                        </v-card-title>
                        <v-divider></v-divider>
                        <v-card-text>
                          <v-card outlined rounded="xl" elevation="3">
                            <v-card-text>
                              <h2 style="font-size: 16px" class="text-wrap">
                                <strong> Bank Name: </strong>
                                {{ form_fields.bank_name }}
                              </h2>
                              <br />
                              <h2 style="font-size: 16px">
                                <strong> Branch Name: </strong>
                                {{ form_fields.bank_branch }}
                              </h2>
                              <h2 style="font-size: 16px">
                                <strong> Account no.: </strong>
                                {{ form_fields.bank_account_no }}
                              </h2>
                            </v-card-text>
                            <v-card-subtitle class="">
                              <strong>Payment Slip</strong>
                                <v-img
                                  max-height="121"
                                  max-width="250"
                                  :src="`${form_fields.payment_slip}`"
                                > </v-img>
                            
                            </v-card-subtitle>
                          </v-card>
                        </v-card-text>
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-card elevation="5" class="rounded-xl" color="">
                  <v-card-title>
                    <v-tabs
                      v-model="tabs"
                      color="primary"
                      slider-size="4"
                      background-color=""
                    >
                      <v-tab>
                        <v-icon left>mdi-human-female-girl</v-icon>
                        Parents Details
                      </v-tab>
                      <v-tab>
                        <v-icon left>mdi-school </v-icon>
                        Qualifications
                      </v-tab>
                      <v-tab>
                        <v-icon left>mdi-model_training</v-icon>
                        Special Training
                      </v-tab>
                      <v-tab>
                        <v-icon left>mdi-engineering</v-icon>
                        Work Experience
                      </v-tab>
                    </v-tabs>
                  </v-card-title>
                  <v-card-text>
                    <v-tabs-items v-model="tabs">
                      <v-tab-item>
                        <v-card flat>
                          <v-row>
                            <v-col cols="12" sm="12" md="6">
                              <v-card outlined rounded="lg">
                                <v-card-title class="headline">
                                  <v-icon left>mdi-human-male-girl </v-icon>
                                  <span style="font-size: 18px">Father</span>
                                </v-card-title>
                                <v-card-text>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-account
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Name
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.fathers_name }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-briefcase
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Occupation
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.fathers_occupation }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-account-tie
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Contact no.
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.fathers_phone_no }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                </v-card-text>
                              </v-card>
                            </v-col>
                            <v-col cols="12" sm="12" md="6">
                              <v-card rounded="lg" outlined>
                                <v-card-title class="headline">
                                  <v-icon left>mdi-human-female-boy </v-icon>
                                  <span style="font-size: 18px">Mother</span>
                                </v-card-title>
                                <v-card-text>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-face-woman
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Name
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.mothers_name }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-briefcase
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Occupation
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.mothers_occupation }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-account-tie
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Contact no.
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.mothers_phone_no }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                </v-card-text>
                              </v-card>
                            </v-col>
                          </v-row>
                        </v-card>
                      </v-tab-item>
                      <v-tab-item>
                        <v-card outlined rounded="lg">
                          <v-row>
                            <v-card-text>
                              <v-simple-table>
                                <thead>
                                  <tr>
                                    <th class="text-left sybtitle-2">S.N.</th>
                                    <th class="text-left sybtitle-2">
                                      University/Board Name
                                    </th>
                                    <th class="text-left sybtitle-2">Level</th>
                                    <th class="text-left sybtitle-2">
                                      Degree Name
                                    </th>
                                    <th class="text-left sybtitle-2">
                                      Grade/%
                                    </th>
                                    <th class="text-left sybtitle-2">
                                      Completed Year
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    v-for="(
                                      qualification, index
                                    ) in qualificationList"
                                    :key="index"
                                  >
                                    <td class="text-left sybtitle-2">
                                      {{ index + 1 }}
                                    </td>
                                    <td>
                                      {{ qualification.univerisity_board }}
                                    </td>
                                    <td>{{ qualification.level }}</td>
                                    <td>{{ qualification.degree }}</td>
                                    <td>{{ qualification.grade }}</td>
                                    <td>
                                      {{ qualification.completed_year }}
                                    </td>
                                  </tr>
                                </tbody>
                              </v-simple-table>
                            </v-card-text>
                          </v-row>
                        </v-card>
                      </v-tab-item>
                      <v-tab-item>
                        <v-card rounded="lg" outlined>
                          <v-row>
                            <v-card-text>
                              <v-simple-table>
                                <thead>
                                  <tr>
                                    <th class="text-left sybtitle-2">S.N.</th>
                                    <th class="text-left sybtitle-2">
                                      University/Board Name
                                    </th>
                                    <th class="text-left sybtitle-2">Level</th>
                                    <th class="text-left sybtitle-2">
                                      Degree Name
                                    </th>
                                    <th class="text-left sybtitle-2">
                                      Grade/%
                                    </th>
                                    <th class="text-left sybtitle-2">
                                      Completed Year
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    v-for="(training, index) in traningList"
                                    :key="index"
                                  >
                                    <td class="text-left sybtitle-2">
                                      {{ index + 1 }}
                                    </td>
                                    <td>
                                      {{ training.univerisity_board }}
                                    </td>
                                    <td>{{ training.level }}</td>
                                    <td>{{ training.degree }}</td>
                                    <td>{{ training.grade }}</td>
                                    <td>{{ training.completed_year }}</td>
                                  </tr>
                                </tbody>
                              </v-simple-table>
                            </v-card-text>
                          </v-row>
                        </v-card>
                      </v-tab-item>
                      <v-tab-item>
                        <v-card rounded="lg" outlined>
                          <v-row>
                            <v-card-text>
                              <v-simple-table>
                                <thead>
                                  <tr></tr>
                                  <tr>
                                    <th class="text-left sybtitle-2">S.N.</th>
                                    <th class="text-left sybtitle-2">
                                      Organization Name
                                    </th>
                                    <th class="text-left sybtitle-2">
                                      Designation
                                    </th>
                                    <th class="text-left sybtitle-2">Years</th>
                                    <th class="text-left sybtitle-2">
                                      Renmarks
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    v-for="(
                                      experience, index
                                    ) in experienceList"
                                    :key="index"
                                  >
                                    <td class="text-left sybtitle-2">
                                      {{ index + 1 }}
                                    </td>
                                    <td>
                                      {{ experience.organization_name }}
                                    </td>
                                    <td>{{ experience.designation }}</td>
                                    <td>{{ experience.years }}</td>
                                    <td>{{ experience.remarks }}</td>
                                  </tr>
                                </tbody>
                              </v-simple-table>
                            </v-card-text>
                          </v-row>
                        </v-card>
                      </v-tab-item>
                    </v-tabs-items>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
          </v-card>
        </v-card-text>
      </v-card>
      -->
    </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      snackbar_text: "",
      snackbar: false,
      dialog: false,
      form_fields: [],
      experienceList: [],
      qualificationList: [],
      traningList: [],

      tabs: "",
    };
  },

  created() {
    const self = this;
    self.url = "/members";
  },
  methods: {
    async view(_id) {
      const self = this;
      self.form_fields = [];
      let response = await axios.get(`${"/members"}/${_id}`);

      //  let response = await self.show(_id);
      self.form_fields = response.data;
      self.experienceList = response.data.work_experiences;
      self.traningList = response.data.trainings;
      self.qualificationList = response.data.qualification;
      self.radios = response.data.radios;

      console.log(_id);
      self.dialog = true;
    },

    async manageMemberRequest(_id, data) {
      const self = this;
      self.url = "/members/manage";
      console.log(data);
      let params = {
        status: data,
        id: _id,
      };
      try {
        await axios
          .post(`${self.url}`, params)
          .then((response) => {
            if (response.data.status) {
              self.snackbar_text = response.data.message;
              self.snackbar = true;
            }
            self.snackbar_text = response.data.message;
            self.snackbar = true;
          })
          .catch((err) => {
            console.log(err);
          });
      } catch (err) {
        console.log(err);
      }
    },
  },
};
</script>

<style>
.nep-text input {
  font-family: "Preeti" !important;
  font-size: 22px;
}

.subtitle {
  font-family: "Quicksand" !important;
  font-size: 1.1rem;
}
.name {
  font-family: "Quicksand" !important;
  font-size: 0.9rem;
}
.studentBasics {
  font-size: 16px;
}
.studentDetailHeader {
  font-size: 16px;
  font-weight: bold;
  color: grey;
}
.studentDetail {
  font-size: 16px;
  color: grey;
  font-weight: 400;
}
</style>
