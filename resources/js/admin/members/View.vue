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
      <v-card> 
        <v-toolbar color="primary" dark>
          <v-btn icon dark><v-icon>mdi-account-outline</v-icon></v-btn>
          <v-toolbar-title> Student Details </v-toolbar-title>
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
                              <v-icon small class="pb-1">
                                mdi-abugida-devanagari
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                नाम
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
                              @click="manageMemberRequest(form_fields.id,true)">
                                Approve</v-btn>
                                 <v-btn
                                 color="error"
                              @click="manageMemberRequest(form_fields.id,false)">
                                Reject</v-btn>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1"> mdi-counter </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Roll No
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.roll_no }}
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
                                mdi-blood-bag
                              </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Blood Group
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.blood_group }}
                              </span>
                            </v-col>
                          </v-row>
                          <v-row>
                            <v-col sm="6" md="3">
                              <v-icon small class="pb-1"> mdi-calendar </v-icon>
                              <strong class="ml-2 studentDetailHeader">
                                Academic Year
                              </strong>
                            </v-col>

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.academic_year }}
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

                            <v-col sm="6" md="9">
                              <span class="studentDetail">
                                : {{ form_fields.temporary_province }}, &nbsp;{{
                                  form_fields.temporary_city
                                }}, &nbsp;{{
                                  form_fields.temporary_street_address
                                }}
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
                                : {{ form_fields.permanent_province }}, &nbsp;{{
                                  form_fields.permanent_city
                                }}, &nbsp;{{
                                  form_fields.permanent_street_address
                                }}
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
                            size="154"
                            tile
                          >
                            <v-img
                              :src="`/storage/students/` + form_fields.image"
                              alt="student_image"
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
                                  Student
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
                            <v-col sm="12" md="4">
                              <v-card outlined rounded="xl" elevation="3">
                                <v-card-title
                                  class="primary--text font-weight-bold"
                                  style="font-size: 16px"
                                >
                                  <v-icon class="mr-2" color="pink">
                                    mdi-ambulance
                                  </v-icon>
                                  Emergency Contact
                                </v-card-title>
                                <v-card-text>
                                  <h2 style="font-size: 16px">
                                    <v-icon small left class="pb-1">
                                      mdi-account
                                    </v-icon>
                                    <strong>
                                      {{ form_fields.emergency_contact_name }}
                                    </strong>
                                  </h2>
                                  <br />
                                  <h2 style="font-size: 16px">
                                    <v-icon small left class="pb-1">
                                      mdi-phone-classic
                                    </v-icon>
                                    <strong>
                                      {{
                                        form_fields.emergency_contact_phone_no
                                      }}
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
                        Previous School Details
                      </v-tab>
                      <v-tab>
                        <v-icon left>mdi-ambulance</v-icon>
                        Emergency Contact Details
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
                                        Designation
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.fathers_designation }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-home-circle
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Address
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.fathers_address }}
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
                                        Designation
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.mothers_designation }}
                                      </span>
                                    </v-col>
                                  </v-row>
                                  <v-row>
                                    <v-col sm="6" md="6">
                                      <v-icon small class="pb-1">
                                        mdi-home-circle
                                      </v-icon>
                                      <strong class="ml-2 studentDetailHeader">
                                        Address
                                      </strong>
                                    </v-col>

                                    <v-col sm="6" md="6">
                                      <span class="studentDetail">
                                        : {{ form_fields.mothers_address }}
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
                            <v-col cols="12" md="6" sm="12">
                              <v-card-text>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-domain
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Name
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      : {{ form_fields.past_school }}
                                    </span>
                                  </v-col>
                                </v-row>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-map-marker
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Address
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      : {{ form_fields.past_school_address }}
                                    </span>
                                  </v-col>
                                </v-row>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-shield-star
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Grade
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      : {{ form_fields.past_grade }}
                                    </span>
                                  </v-col>
                                </v-row>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-percent
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Percenatage
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      : {{ form_fields.past_percentage }}
                                    </span>
                                  </v-col>
                                </v-row>
                              </v-card-text>
                            </v-col>
                          </v-row>
                        </v-card>
                      </v-tab-item>
                      <v-tab-item>
                        <v-card rounded="lg" outlined>
                          <v-row>
                            <v-col cols="12" md="6" sm="12">
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
                                      : {{ form_fields.emergency_contact_name }}
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
                                      :
                                      {{
                                        form_fields.emergency_contact_occupation
                                      }}
                                    </span>
                                  </v-col>
                                </v-row>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-account-tie
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Designation
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      :
                                      {{
                                        form_fields.emergency_contact_designation
                                      }}
                                    </span>
                                  </v-col>
                                </v-row>
                                <v-row>
                                  <v-col sm="6" md="6">
                                    <v-icon small class="pb-1">
                                      mdi-home-circle
                                    </v-icon>
                                    <strong class="ml-2 studentDetailHeader">
                                      Address
                                    </strong>
                                  </v-col>

                                  <v-col sm="6" md="6">
                                    <span class="studentDetail">
                                      :
                                      {{
                                        form_fields.emergency_contact_address
                                      }}
                                    </span>
                                  </v-col>
                                </v-row>
                              </v-card-text>
                            </v-col>
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
      </v-card> -->
    </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      form_fields: [],
    
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
      self.radios = response.data.radios;

       console.log(_id);
      self.dialog = true;
    },

   async manageMemberRequest(_id,data){
      const self = this;
      self.url = "/members/manage";
      console.log(data);
       let params = {
        status: data,
        id: _id,
      };
      try {
        let response = await axios.post(`${self.url}`, params);
        console.log(response);
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
