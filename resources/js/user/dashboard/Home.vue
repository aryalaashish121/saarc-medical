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
                <v-text-field
                  outlined
                  label="Nationality"
                  prepend-inner-icon="mdi-earth"
                  dense
                  v-model="form_fields.nationality"
                ></v-text-field>
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
                <v-text-field
                 :error-messages="errors"
                 :success="valid"
                  outlined
                  label="Country Code"
                  prepend-inner-icon="mdi-earth"
                  dense
                  v-model="form_fields.country_code"
                ></v-text-field>
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
                            name="State "
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="provinceListItems"
                              label="State/Province"
                              item-text="name"
                              item-value="id"
                              v-model="form_fields.p_state_id"
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
                            name="District"
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="districtListItems"
                              label="District"
                              item-value="id"
                              item-text="name"
                              v-model="form_fields.p_district_id"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-marker-radius-outline"
                            ></v-autocomplete>
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
                            rules=""
                            name="Temporary provinance"
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="provinceListItems"
                              label="State/Province"
                              v-model="form_fields.t_state_id"
                              item-value="id"
                              item-text="name"
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
                            rules=""
                            name="Current district"
                            v-slot="{ errors, valid }"
                          >
                            <v-autocomplete
                              :error-messages="errors"
                              :success="valid"
                              :items="districtListItems"
                              label="District"
                              item-text="name"
                              item-value="id"
                              v-model="form_fields.t_district_id"
                              outlined
                              dense
                              prepend-inner-icon="mdi-map-marker-radius-outline"
                             
                            ></v-autocomplete>
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
                    <tr v-for="count in row_count" :key="count">  
                  <td class="text-left sybtitle-2">
                        {{count}}
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="organization_name[count-1]"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="designation[count-1]"></v-text-field>
                  </td>
                   <td class="text-left sybtitle-2">
                        <v-text-field v-model="years[count-1]"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-text-field v-model="remarks[count-1]"></v-text-field>
                  </td>
                  <td class="text-left sybtitle-2">
                        <v-btn  class="mx-2" fab dark x-small color="error" @click="deletework_experience(count-1)"><v-icon dark> mdi-minus </v-icon></v-btn>
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
        <v-row align="center"
    justify="space-around">
        <v-divider></v-divider>
        
        <v-card-actions class="justify-end mt-3 ">
       
          <v-btn
           @click="save"
            color="primary"
            :loading="loading"
          >
            Apply
            <v-icon right>mdi-content-save</v-icon>
          </v-btn>
            <v-btn
      depressed
      color="error"
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
    
</template>

<script>
import _ from "lodash";
import axios from "axios";
import Conversions from "../../utils/conversions";
export default {
  data() {
    return {
      activePicker:"",
      checkbox:false,
      date: null,
      menu: false,
      name:"",
     
      provinceListItems:[],
      districtListItems:[],
      membershiptypeList:[],
      work_experience:[],
      qualifications:[],
      training:[],
       row_count: 0,
       organization_name:[],
        designation:[],
        years:[],
        remarks:[],

      form_fields:{
        is_aproved:false,
        first_name_en:"",
        last_name_en:"",
        last_name_en:"",
        dob_bs:"",
        dob_ad:"",
        gender:"",
        religion:"",
        nationality:"",
        country_code:"",
        mobile:"",
        aux_mobile:"",
        email:"",
        website:"",
        image:"",
        p_state_id:"",
        p_district_id:"",
        p_municipality:"",
        p_ward_no:"",
        p_village_name:"",
        t_state_id:"",
        t_district_id:"",
        t_municipality:"",
        t_ward_no:"",
        t_village_name:"",
        is_same_address:false,
        fathers_name:"",
        fathers_phone_no:"",
        fathers_occupation:"",
        fathers_designation:"",
        mothers_name:"",
        mothers_phone_no:"",
        mothers_occupation:"",
        mothers_designation:"",
        acheivements:"",
      },
      members_qualifications:{
        univerisity_board:"",
        level:"",
        degree:"",
        grade:"",
        completed_year:"",
        is_training:""
      },
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
      loading:false,
   genderItems: ["Male", "Female", "Others"],
    }
  },
  watch: {
    menu(val) {
      val && setTimeout(() => (this.activePicker = "YEAR"));
    },
  },
  created(){
const self = this;
    self.loadProvinces();
    self.loadDistrict();
    self.loadMembershipType();
  },
  mounted() {
    
    console.log("User component mounted.");
  },
  methods: {
    save(date) {
      this.$refs.menu.save(date);
    },
    checkLoader(){
      const self = this;
       self.$store.commit("showSnackbar", {
        message: "Please select the classroom...",
        color: false,
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


      addwork_experience() {
      const self = this;
        if (self.row_count < 5) {
          self.row_count = self.row_count + 1;
        } else {
          alert("No more can be added")
        }
    },
     deletework_experience(index) {
      const self = this;
       self.organization_name.splice(index, 1);
       self.designation.splice(index, 1);
       self.years.splice(index, 1);
       self.remarks.splice(index, 1);
       self.row_count = self.row_count - 1;
    },

    async save(){
      const self = this;
      const work_experience = [];
      work_experience['organization_name']=self.organization_name;
      work_experience['designation']=self.designation;
      work_experience['years']=self.years;
      work_experience['remarks']=self.remarks;

      self.url = "/members/apply";
      let membership = {
          work_experiences:work_experience,
          member_details:self.form_fields
      };
       let response = await axios.post(`${self.url}`, membership);
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
