<template>
     <v-dialog
          v-model="dialog"
          fullscreen
          persistent
          scrollable
          hide-overlay
          transition="dialog-bottom-transition"
        >

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
             
              prepend-inner-icon="mdi-newspaper-variant-outline"
              v-model="form_fields.application_no"
              label="Application Number"
              type="number"
              readonly
              dense
            ></v-text-field
          ></v-col>
       

          <v-col cols="12" sm="12" md="4">
                  <v-autocomplete
                    :items="membershiptypeList"
                    item-value="id"
                    item-text="name"
                    v-model="form_fields.membership_type"
                    label="Membership Type"
                    dense
                    outlined
                    clearable
                    prepend-inner-icon="mdi-account-stare"
                  ></v-autocomplete>
          </v-col>
          <v-spacer></v-spacer>
          <v-col cols="12" sm="12" md="4">
            <upload-profile></upload-profile>
            </v-col
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
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    max: 20,
                    min: 2,
                    regex: /^[A-Za-z]+$/,
                    required: true,
                  }"
                  name="First name"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    :error-messages="errors"
                    :success="valid"
                    label="First Name"
                    v-model="form_fields.first_name_en"
                    outlined
                    prepend-inner-icon="mdi-format-text"
                    dense
                    v-on:keypress="
                      restrictOverValue($event, 20) | isLetter($event)
                    "
                    required
                  >
                  </v-text-field>
                </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    min: 2,
                    max: 20,
                    regex: /^[A-Za-z]+$/,
                  }"
                  name="Middle name"
                  v-slot="{ errors }"
                >
                  <v-text-field
                    :error-messages="errors"
                    label="Middle Name"
                    v-model="form_fields.middle_name_en"
                    outlined
                    prepend-inner-icon="mdi-format-text"
                    dense
                    v-on:keypress="
                      restrictOverValue($event, 20) | isLetter($event)
                    "
                  >
                  </v-text-field>
                </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    max: 20,
                    min: 2,
                    regex: /^[A-Za-z]+$/,
                    required: true,
                  }"
                  name="Last name"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    :error-messages="errors"
                    :success="valid"
                    label="Last Name"
                    dense
                    v-model="form_fields.last_name_en"
                    prepend-inner-icon="mdi-format-text"
                    required
                    outlined
                    v-on:keypress="
                      restrictOverValue($event, 20) | isLetter($event)
                    "
                  >
                  </v-text-field>
                </validation-provider>
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
                       v-model="form_fields.dob_ad"
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
                    v-model="form_fields.dob_ad"
                    :active-picker.sync="activePicker"
                    :max="
                      new Date(
                        Date.now() - new Date().getTimezoneOffset() * 60000
                      )
                        .toISOString()
                        .substr(0, 10)
                    "
                     @input="
                                  (menu = false),
                                    ConvertADtoBS(form_fields.dob_ad)
                                "
                    min="1950-01-01"
                    @change="save"
                  ></v-date-picker>
                </v-menu>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                 
                   v-model="form_fields.dob_bs"
                   ref=""
                  label="D.o.B (B.S.)"
                  prepend-inner-icon="mdi-calendar"
                  dense
                   @input="
                                (menu = false),
                                  ConvertBStoAD(form_fields.dob_bs)
                              "
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    required: true,
                  }"
                  name="Gender"
                  v-slot="{ errors, valid }"
                >
                  <v-autocomplete
                    :error-messages="errors"
                    :success="valid"
                    :items="genderItems"
                    item-value="id"
                    item-text="name"
                    v-model="form_fields.gender"
                    label="Gender"
                    dense
                    outlined
                    prepend-inner-icon="mdi-gender-male-female"
                  ></v-autocomplete>
                </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <v-autocomplete
                    outlined
                    :items="nationalityList"
                    item-value="id"
                    item-text="name"
                    label="Nationality"
                    prepend-inner-icon="mdi-earth"
                    dense
                    v-model="form_fields.nationality"
                  ></v-autocomplete>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Religion"
                  prepend-inner-icon="mdi-plus"
                  dense
                  v-model="form_fields.religion"
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
                 <validation-provider
                              :rules="{
                               required:true,
                              }"
                              name="Country code"
                              v-slot="{ errors, valid }"
                            >
                 <v-autocomplete
                      :error-messages="errors"
                      :success="valid"
                      :items="countryList"
                      label="Country Code"
                      item-text="country_code"
                      item-value="id"
                      v-model="form_fields.country_code"
                      outlined
                      dense
                      prepend-inner-icon="mdi-map-legend"
                    >
                      <template slot="selection" slot-scope="data">
                        {{ data.item.code }} {{ data.item.name }}
                      </template>
                      <template slot="item" slot-scope="data">
                        {{ data.item.code }} {{ data.item.name }}
                      </template>
                    </v-autocomplete>
                 </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    length: 10,
                    required: true,
                    regex: /^9(8|7)[0-9]{8}/,
                  }"
                  name="Mobile number"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    :error-messages="errors"
                    :success="valid"
                    dense
                    label="Mobile Number"
                    :counter="10"
                    v-model="form_fields.mobile"
                    v-on:keypress="
                      restrictOverValue($event, 10) | isNumber($event)
                    "
                    prepend-inner-icon="mdi-cellphone-basic"
                    required
                    outlined
                  >
                  </v-text-field>
                </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <validation-provider
                  :rules="{
                    required: true,
                    email: true,
                    max: 50,
                  }"
                  name="Email"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    label="Email"
                    v-model="form_fields.email"
                    prepend-inner-icon="mdi-email"
                    :error-messages="errors"
                    :success="valid"
                    counter="50"
                    outlined
                    dense
                  >
                  </v-text-field>
                </validation-provider>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  outlined
                  label="Website"
                  prepend-inner-icon="mdi-web"
                  dense
                  v-model="form_fields.website"
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
                       <v-col cols="6" sm="1" md="12">
                     <validation-provider
                            rules="required"
                            name="Country "
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="countryList"
                              label="Country"
                              item-text="name"
                              item-value="id"
                              v-model="form_fields.p_country"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-legend"
                            ></v-autocomplete>
                          </validation-provider>
                       </v-col>
                    </v-row>
                    <v-row>
                       <v-col cols="6" sm="1" md="12">
                     <validation-provider
                            rules="required"
                            name="State "
                            v-slot="{ errors, valid }"
                          >
                            <v-text-field
                              :error-messages="errors"
                              :success="valid"
                             
                              label="State/Province"
                              v-model="form_fields.p_state"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-legend"
                            ></v-text-field>
                          </validation-provider>
                       </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          rules="required"
                          name="District"
                          v-slot="{ errors, valid }"
                        >
                          <v-text-field
                            :error-messages="errors"
                            :success="valid"
                            label="District"
                            v-model="form_fields.p_district"
                            outlined
                            dense
                            prepend-inner-icon="mdi-map-marker-radius-outline"
                          ></v-text-field>
                        </validation-provider>
                      </v-col>
                    </v-row>
                    <v-row>
                       <v-col cols="6" sm="1" md="12">
                      <v-text-field
                        outlined
                        label="Municipality"
                        prepend-inner-icon="mdi-home-city-outline"
                        dense
                        v-model="form_fields.p_municipality"
                      ></v-text-field>
                       </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          :rules="{
                            min: 1,
                            max: 2,
                            regex: /^[0-9]+$/,
                          }"
                          name="Ward no."
                          v-slot="{ errors, valid }"
                        >
                          <v-text-field
                            :error-messages="errors"
                            :success="valid"
                            label="Ward No."
                            v-model="form_fields.p_ward_no"
                            prepend-inner-icon="mdi-fireplace-off"
                            required
                            dense
                            outlined
                            :rules="wardnoRules"
                            @keypress="restrictOverValue($event, 2)"
                          >
                          </v-text-field>
                        </validation-provider>
                      </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          :rules="{
                            required: true,
                            min: 5,
                            max: 50,
                          }"
                          name="Street address"
                          v-slot="{ errors, valid }"
                        >
                          
                            <v-text-field
                              :error-messages="errors"
                              :success="valid"
                              label="Tole/Street"
                              v-model="form_fields.p_village_name"
                              prepend-inner-icon="mdi-road-variant"
                              required
                              dense
                              counter="50"
                              v-on:keypress="restrictOverValue($event, 50)"
                              outlined
                            >
                            </v-text-field>
                          </validation-provider>
                       </v-col>
                    </v-row>
                  </v-card-text>
                </v-card>
              </v-col>

              <v-col cols="12" md="6">
                <v-card outlined elevation="3" class="px-5">
                  <v-card-title> Temporary Address </v-card-title>

                  <v-card-text class="mt-3">
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                     <validation-provider
                            rules="required"
                            name="Country "
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="countryList"
                              label="Country"
                              item-text="name"
                              item-value="id"
                              v-model="form_fields.t_country"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-legend"
                            ></v-autocomplete>
                          </validation-provider>
                       </v-col>
                    </v-row>
                    <v-row>
                       <v-col cols="6" sm="1" md="12">
                     <validation-provider
                            rules="required"
                            name="State "
                            v-slot="{ errors, valid }"
                          >
                            <v-text-field
                              :error-messages="errors"
                              :success="valid"
                             
                              label="State/Province"
                              v-model="form_fields.t_state"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-legend"
                            ></v-text-field>
                          </validation-provider>
                       </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          rules="required"
                          name="District"
                          v-slot="{ errors, valid }"
                        >
                          <v-text-field
                            :error-messages="errors"
                            :success="valid"
                            label="District"
                            v-model="form_fields.t_district"
                            outlined
                            dense
                            prepend-inner-icon="mdi-map-marker-radius-outline"
                          ></v-text-field>
                        </validation-provider>
                      </v-col>
                    </v-row>
                    <v-row>
                       <v-col cols="6" sm="1" md="12">
                      <v-text-field
                        outlined
                        label="Municipality"
                        prepend-inner-icon="mdi-home-city-outline"
                        dense
                        v-model="form_fields.t_municipality"
                      ></v-text-field>
                       </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          :rules="{
                            min: 1,
                            max: 2,
                            regex: /^[0-9]+$/,
                          }"
                          name="Ward no."
                          v-slot="{ errors, valid }"
                        >
                          <v-text-field
                            :error-messages="errors"
                            :success="valid"
                            label="Ward No."
                            v-model="form_fields.t_ward_no"
                            :rules="wardnoRules"
                            prepend-inner-icon="mdi-fireplace-off"
                            required
                            outlined
                            dense
                            type="number"
                            @keypress="restrictOverValue($event, 2)"
                          >
                          </v-text-field>
                        </validation-provider>
                      </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          :rules="{
                            required: false,
                            min: 5,
                            max: 50,
                          }"
                          name="Street address"
                          v-slot="{ errors, valid }"
                        >
                      
                            <v-text-field
                              :error-messages="errors"
                              :success="valid"
                              label="Tole/Street"
                              prepend-inner-icon="mdi-road-variant"
                              v-model="form_fields.t_village_name"
                              required
                              outlined
                              dense
                              counter="50"
                              v-on:keypress="restrictOverValue($event, 50)"
                             
                            >
                            </v-text-field>
                          </validation-provider>
                       </v-col>
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
                  v-model="form_fields.fathers_name"
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
                  v-model="form_fields.fathers_occupation"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <validation-provider
                  :rules="{
                    length: 10,
                    required: true,
                    regex: /^9(8|7)[0-9]{8}/,
                  }"
                  name="Mobile number"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    :error-messages="errors"
                    :success="valid"
                  outlined
                  clearable
                  label="Contact No."
                   v-model="form_fields.fathers_phone_no"
                  prepend-inner-icon="mdi-phone"
                  dense
                  
                   v-on:keypress="
                      restrictOverValue($event, 10) | isNumber($event)
                    "
                  ></v-text-field>
                </validation-provider>
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
                  v-model="form_fields.mothers_name"
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
                  v-model="form_fields.mothers_occupation"
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="6">
                <validation-provider
                  :rules="{
                    length: 10,
                    required: true,
                    regex: /^9(8|7)[0-9]{8}/,
                  }"
                  name="Mobile number"
                  v-slot="{ errors, valid }"
                >
                  <v-text-field
                    :error-messages="errors"
                    :success="valid"
                  outlined
                  clearable
                  label="Contact No."
                  prepend-inner-icon="mdi-phone"
                  dense
                   v-model="form_fields.mothers_phone_no"
                   v-on:keypress="
                      restrictOverValue($event, 10) | isNumber($event)
                    "
                  ></v-text-field>
                </validation-provider>
              </v-col>
            </v-row>
            <v-row>
              <v-divider></v-divider>
            </v-row>
            <v-row class="mt-5">
              <strong class="title"
                >Working Experience:
                <v-btn class="mx-2" fab dark x-small color="indigo"  @click="addwork_experience">
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
                      <th class="text-left sybtitle-2"></th>
                    </tr>
                    <tr v-for="(experience, index) in work_experience" :key="index">  
                  <td class="text-left sybtitle-2">
                        {{index+1}}
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="experience.organization_name"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="experience.designation"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="experience.years"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="experience.remarks"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-btn  class="mx-2" fab dark x-small color="error" @click="deletework_experience(experience,index)"><v-icon dark> mdi-minus </v-icon></v-btn>
                  </td>
                      
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
                <v-btn class="mx-2" fab dark x-small color="indigo" @click="addQualification">
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
                     <tr v-for="(qualification, index) in qualifications" 
                     :key="qualification.id">  
                  <td class="text-left sybtitle-2">
                        {{index+1}}
                  </td>
                  
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="qualification.univerisity_board"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="qualification.level"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="qualification.degree"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="qualification.grade"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="qualification.completed_year"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-btn  class="mx-2" fab dark x-small color="error" @click="deleteQualification(qualification,index)"><v-icon dark> mdi-minus </v-icon></v-btn>
                  </td>
                      
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
                <v-btn class="mx-2" fab dark x-small color="indigo" @click="addTraining">
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
                    <tr v-for="(training, index) in trainings" :key="index">  
                  <td class="text-left sybtitle-2">
                        {{index+1}}
                  </td>
                  
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="training.univerisity_board"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="training.level"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="training.degree"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="training.grade"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="training.completed_year"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-btn  class="mx-2" fab dark x-small color="error" @click="deleteTraining(training,index)"><v-icon dark> mdi-minus </v-icon></v-btn>
                  </td>
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
                v-model="form_fields.acheivements"
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
           
        <v-row align="center"
    justify="space-around">
        <v-divider></v-divider>
        
        <v-card-actions class="justify-end mt-3 ">
       
          <v-btn
           @click="update(form_fields.id)"
            color="primary"
            :loading="loading"
          >
            Apply
            <v-icon right>mdi-content-save</v-icon>
          </v-btn>
            <v-btn
      depressed
      color="error"
      @click="dialog=false"
    >
      Cancle
    </v-btn>
        </v-card-actions>
        </v-row>
          
          </v-card-text>
        </v-card>
      </v-card-text>
    </v-card>
    
  </div>

    </v-dialog>
</template>

<script>
import _ from "lodash";
import UploadFiles from "../../components/UploadFiles.vue";
import axios from "axios";
import Conversions from "../../utils/conversions";
import UploadProfile from '../../components/uploadProfile.vue';

export default {
  components:{
   
    UploadProfile,
    },
  data() {
    
    return {
      activePicker:"",
      checkbox:false,
      date: null,
      menu: false,
      name:"",
      dialog:false,
      provinceListItems:[],
      districtListItems:[],
      membershiptypeList:[],
      countryList:[],
      training:[],
      form_fields:[],
       row_count: 0,
       deleted_qualifications:[],
       deleted_experiences:[],
       
        designation:[],
        years:[],
        remarks:[],
        work_experience:[{
            organization_name:"",designation:"",years:"",remarks:""
        }],
        qualifications:[{ univerisity_board:"",level:"", degree:"",grade:"",completed_year:"",is_training:false
        }],
        trainings:[{ univerisity_board:"",level:"", degree:"",grade:"",completed_year:"",is_training:true
        }],
        
         row_count:0,
           qualification_count:0,
           training_count : 0,
           experience_count: 0,

      // form_fields:{
      //   application_no:"",
      //   membership_type:"",
      //   is_aproved:false,
      //   first_name_en:"",
      //   last_name_en:"",
      //   last_name_en:"",
      //   dob_bs:"",
      //   dob_ad:"",
      //   gender:"",
      //   religion:"",
      //   nationality:"",
      //   country_code:"",
      //   mobile:"",
      //   aux_mobile:"",
      //   email:"",
      //   website:"",
      //   image:"",
      //   p_state_id:"",
      //   p_district_id:"",
      //   p_municipality:"",
      //   p_ward_no:"",
      //   p_village_name:"",
      //   t_state_id:"",
      //   t_district_id:"",
      //   t_municipality:"",
      //   t_ward_no:"",
      //   t_village_name:"",
      //   is_same_address:false,
      //   fathers_name:"",
      //   fathers_phone_no:"",
      //   fathers_occupation:"",
      //   fathers_designation:"",
      //   mothers_name:"",
      //   mothers_phone_no:"",
      //   mothers_occupation:"",
      //   mothers_designation:"",
      //   acheivements:"",
      //   experiences:{},
      //   qualifications:{},
      // },
     
      // members_work_experience:{
      //   organization_name:"",
      //   designation:"",
      //   years:"",
      //   remark:"",
      // },
      

      wardnoRules: [
        (v) => (v && v >= 1) || "Ward no. cannot be 0",
        (v) => (v && v <= 100) || "Max should not be above 100",
      ],
      loading: false,
      genderItems: ["Male", "Female", "Others"],
    };
  },
  watch: {
    menu(val) {
      val && setTimeout(() => (this.activePicker = "YEAR"));
    },
  },
  
  async created(){
    const self = this;
    await self.loadProvinces();
    await self.loadDistrict();
    await self.loadMembershipType();
    await self.loadCountry();
  },
  mounted() {
    // self.$eventBus.$on("updateFileDetail", (data) => {
    //   self.form_fields.file_name = data.file_name;
    // });
    console.log("User component mounted.");
  
  },
  methods: {
    edit(_id){
    const self = this;
    self.deleted_qualifications=[];
    self.deleted_experiences=[];
    self.url = '/members'
    self.dialog = true;

    axios.get(`${self.url}/${_id}/edit`).then((res)=>{
        self.form_fields = res.data.data;
        self.work_experience = res.data.data.experiences;
       
        self.qualifications = res.data.data.qualifications;
        self.row_count = self.qualifications.length;
         self.trainings = res.data.data.trainings;
        console.log(self.form_fields);
    }).catch((err)=>{
        console.log(err);
    });
    console.log(_id);
  },
    save(date) {
      this.$refs.menu.save(date);
    },
    loadCountry() {
      const self = this;
      axios
        .get("get-country-data")
        .then(function (response) {
          self.countryList = response.data;
          console.log(self.countryList);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    checkLoader() {
      const self = this;
      console.log("Testing phase");
      self.$store.commit("showSnackbar", {
        message: "Please select the classroom...",
      });
    },

    loadProvinces() {
      const self = this;
      axios
        .get("get-state-data")
        .then(function (response) {
          self.provinceListItems = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    loadDistrict() {
      const self = this;
      axios
        .get("get-district-data")
        .then(function (response) {
          self.districtListItems = response.data;
          console.log(self.districtListItems);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
     loadMembershipType() {
      const self = this;
      axios
        .get("get-membership-type-data")
        .then(function (response) {
          self.membershiptypeList = response.data;
          console.log(self.membershiptypeList);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    checkloader(){
      //   this.$store.commit("showSnackbar", {
      //   message: "loading",   
      //  });
      console.log("Testing");
    },

    addwork_experience() {
      const self = this;
        self.work_experience.push({ organization_name:"",designation:"",years:"",remarks:"" });
        console.log(self.work_experience);
    },
     deletework_experience(deleted_experience,index) {
      const self = this;
      self.work_experience.splice(index, 1);
       if (deleted_experience.id) {
        self.deleted_experiences.push(deleted_experience.id);
      }
      
    },
    
     addQualification() {
      const self = this;
        self.qualification_count = self.row_count+1;
        self.qualifications.push({ univerisity_board:"",level:"", degree:"",grade:"",completed_year:"",is_training:false });
        console.log(self.qualifications[self.row_count]);
    
      
    },
     deleteQualification(deleted_qualification,index) {
      const self = this;
      self.row_count = self.row_count - 1;
      if(deleted_qualification.id){
        self.deleted_qualifications.push(deleted_qualification.id);
      }
      self.qualifications.splice(index, 1);
      
    },

    addTraining() {
      const self = this;
        self.trainings.push({ univerisity_board:"",level:"", degree:"",grade:"",completed_year:"",is_training:true });
        console.log(self.trainings);
    },
     deleteTraining(deleted_training,index) {
      const self = this;
      self.trainings.splice(index, 1);
      
         if(deleted_training.id){
        self.deleted_qualifications.push(deleted_training.id);
      }
         console.log("after deleted value");
        console.log(self.trainings);
    },
    

    async update(_id){
      const self = this;
      
      self.url = "/members/edit";
      self.form_fields['work_experiences'] = self.work_experience;
      self.form_fields['final_qualifications'] = [...self.qualifications,...self.trainings];
      self.form_fields['deleted_qualifications'] = self.deleted_qualifications;
      self.form_fields['deleted_experiences'] = self.deleted_experiences;
      let membership = {
          member_details:self.form_fields,
          work_experiences:self.work_experience,
          final_qualifications:[...self.qualifications,...self.trainings],

          deleted_qualifications:self.deleted_qualifications,
         deleted_experiences:self.deleted_experiences,

      };
      console.log(self.form_fields);
       await axios.put(`${self.url}/${_id}`, self.form_fields)
       .then((response)=>{
         console.log(response)
         alert(response.data.message);
       }).catch((err)=>{
         console.log(err);
       })
       console.log("membership application data..");
       console.log(membership);  
    },

     restrictOverValue(e, data) {
      if (e.target.value.length >= data) e.preventDefault();
    },
    isNumber: function (evt) {
      return new Conversions().isNumber(evt);
    },
    isName(e) {
      return new Conversions().isName(e);
    },
    isLetter(e) {
      return new Conversions().isLetter(e);
    },
    ConvertADtoBS(date) {
      this.form_fields.dob_bs = new Conversions().ConvertADtoBS(date);
    },
    ConvertBStoAD(date) {
      this.form_fields.dob_ad = new Conversions().ConvertBStoAD(date);
    },
  },
};
</script>
