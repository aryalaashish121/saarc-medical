<template>
  <div class="pa-5 mt-3">
     <notification-bar></notification-bar>
     <validation-observer ref="observer">
    <v-card class="mt-3" rounded="lg" flat>
      <v-row class="d-flex">
        <v-col sm="4" md="4" class="mt-5">
          <v-img
            lazy-src="/saarc_logo.jpg"
            max-height="150"
            max-width="250"
            contain
            src="/saarc_logo.jpg"
          ></v-img>
        </v-col>
        <v-col md="3" lg="4" sm="1"> </v-col>
        <v-col sm="7" md="5" lg="4">
          <v-card flat>
            <v-card-text class="px-5">
              <p>
                <v-icon left> mdi-map-marker </v-icon> Tinkune-32, Kathmandu
                (Raja Janak Marg Road)
              </p>

              <p>
                <v-icon left> mdi-phone </v-icon>Phone:
                <a href="tel: 01-4279626" style="text-decoration: none"
                  >01-4279626</a
                >
              </p>

              <p>
                <v-icon left> mdi-email </v-icon>Email:
                <a
                  href="mailto: info.saarcmacoop@gmail.com"
                  style="text-decoration: none"
                  >info.saarcmacoop@gmail.com</a
                >
              </p>

              <p>
                <v-icon left> mdi-web </v-icon> Web:
                <a href="www.saarcmc.org" style="text-decoration: none"
                  >www.saarcmc.org</a
                >
              </p>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>

      <v-divider></v-divider>
      <v-card-title class="justify-center title">
        <v-icon left> mdi-form-select </v-icon>
        Membership Sheet
      </v-card-title>
      <v-card-text class="mt-3 px-16">
        <v-card flat outlined rounded="lg" class="mt-3 py-10 px-15">
          <v-card-text>
            <v-row>
              
              <v-col cols="12" sm="12" md="4">
                <validation-provider
                :rules="{
                  required:true,
                }"
                name="Membership Type"
                  v-slot="{ errors, valid }">
                <v-autocomplete
                :error-messages="errors"
                :success="valid"
                  :items="membershiptypeList"
                  item-value="id"
                  item-text="name"
                  v-model="form_fields.membership_type"
                  label="Membership Type"
                  dense
                  outlined
                  clearable
                  prepend-inner-icon="mdi-account-star"
                ></v-autocomplete>
                </validation-provider>
              </v-col>
              <v-spacer></v-spacer>
              <v-col cols="12" sm="12" md="3">
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
          </v-card-text>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-account-circle</v-icon>
                Personal Details:</strong
              >
            </v-card-title>

            <v-card-text class="px-5">
              <strong>Full Name (In Block Letters)</strong>
              <v-row class="mt-3">
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
              <strong>Date of Birth</strong>
              <v-row class="mt-3">
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
                      @input="(menu = false), ConvertADtoBS(form_fields.dob_ad)"
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
                    @input="(menu = false), ConvertBStoAD(form_fields.dob_bs)"
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
                   <validation-provider
                    :rules="{
                      required: true,
                    }"
                    name="Nationality"
                    v-slot="{ errors, valid }"
                  >
                  <v-autocomplete
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    :items="nationalityList"
                    item-text="name"
                    item-value="id"
                    label="Nationality"
                    prepend-inner-icon="mdi-earth"
                    dense
                    v-model="form_fields.nationality"
                  ></v-autocomplete>
                   </validation-provider>
                </v-col>
                <v-col cols="12" md="4">
                   <validation-provider
                    :rules="{
                      required: true,
                    }"
                    name="Religion"
                    v-slot="{ errors, valid }"
                  >
                  <v-text-field
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    label="Religion"
                    prepend-inner-icon="mdi-plus"
                    dense
                    v-model="form_fields.religion"
                  ></v-text-field>
                   </validation-provider>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-phone</v-icon>
                Contact Details:</strong
              >
            </v-card-title>

            <v-card-text class="px-5">
              <v-row>
                <v-col cols="12" md="4">
                  <validation-provider
                    :rules="{
                      required: true,
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
                    name="Mobile"
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
                    name="Your email"
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
                    <validation-provider
                    :rules="{
                      required: false,
                    
                      max: 50,
                    }"
                    name="Your website details"
                    v-slot="{ errors, valid }"
                  >
                  <v-text-field
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    label="Website"
                    prepend-inner-icon="mdi-web"
                    dense
                    v-model="form_fields.website"
                  ></v-text-field>
                    </validation-provider>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title ml-2">
                <v-icon color="primary" class="ma-2">mdi-home-circle</v-icon>
                Address:</strong
              >
            </v-card-title>
            <v-card-text class="px-5">
              <v-row>
                <v-col cols="12" md="6">
                  <v-card outlined rounded="xl" flat class="px-5">
                    <v-card-title> Permanent Address </v-card-title>

                    <v-card-text class="mt-3">
                        <v-row>
                      <v-col cols="6" sm="1" md="12">
                       <validation-provider
                    :rules="{
                      required: true,
                    }"
                    name="Current Country"
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
                             :rules="{
                      required: true,
                    }"
                            name="Current State "
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
                           :rules="{
                      required: true,
                    }"
                          name="Current district"
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
                        <v-col cols="6" sm="12" md="12">
                          <validation-provider
                           :rules="{
                      required: true,
                    }"
                          name="Current municipality"
                          v-slot="{ errors, valid }"
                        >
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            outlined
                            label="Municipality"
                            prepend-inner-icon="mdi-home-city-outline"
                            dense
                            v-model="form_fields.p_municipality"
                          ></v-text-field>
                          </validation-provider>
                        </v-col>
                      </v-row>
                      <v-row>
                        <v-col cols="6" sm="12" md="12">
                          <validation-provider
                            :rules="{
                              required:true,
                              min: 1,
                              max: 2,
                              regex: /^[0-9]+$/,
                            }"
                            name="Current Ward no."
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
                        <v-col cols="6" sm="12" md="12">
                          <validation-provider
                            :rules="{
                              required: true,
                              min: 5,
                              max: 50,
                            }"
                            name="Current Street address"
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
                <v-card outlined rounded="xl" flat class="px-5">
                  <v-card-title> Temporary Address </v-card-title>

                  <v-card-text class="mt-3">
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                     <validation-provider
                            :rules="{
                              required: false}"
                            name="Permanent country "
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
                            :rules="{
                              required: false}"
                            name="Permanent state "
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
                         :rules="{
                              required: false}"
                          name="Permanent district"
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
                          <validation-provider
                         :rules="{
                              required: false}"
                          name="Permanent municipality"
                          v-slot="{ errors, valid }"
                        >
                      <v-text-field
                      :success="valid"
                      :error-messages="errors"
                        outlined
                        label="Municipality"
                        prepend-inner-icon="mdi-home-city-outline"
                        dense
                        v-model="form_fields.t_municipality"
                      ></v-text-field>
                          </validation-provider>
                       </v-col>
                    </v-row>
                    <v-row>
                      <v-col cols="6" sm="1" md="12">
                        <validation-provider
                          :rules="{
                            required:false,
                            min: 1,
                            max: 2,
                            regex: /^[0-9]+$/,
                          }"
                          name="Permanent Ward no."
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
                          name="Permanent street address"
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
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-family-tree</v-icon>
                Family Details:</strong
              >
            </v-card-title>
            <v-card-text class="px-5">
              <v-row>
                <v-col cols="12" md="8">
                   <validation-provider
                          :rules="{
                            required: false,
                           
                          }"
                          name="Father's Name"
                          v-slot="{ errors, valid }"
                        >
                  <v-text-field
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    clearable
                    label="Father's Name"
                    prepend-inner-icon="mdi-format-text"
                    v-model="form_fields.fathers_name"
                    dense
                     v-on:keypress="
                                isName($event)
                   "
                  ></v-text-field>
                   </validation-provider>
                </v-col>
              </v-row>
              <v-row>
                <v-col cols="12" md="6">
                   <validation-provider
                          :rules="{
                            required: false,
                           
                          }"
                          name="Father's Occupation"
                          v-slot="{ errors, valid }"
                        >
                  <v-text-field
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    clearable
                    label="Father's Occupation"
                    prepend-inner-icon="mdi-briefcase"
                    dense
                    v-model="form_fields.fathers_occupation"
                  ></v-text-field>
                   </validation-provider>
                </v-col>
                <v-col cols="12" md="6">
                  <validation-provider
                    :rules="{
                      length: 10,
                      required: true,
                      regex: /^9(8|7)[0-9]{8}/,
                    }"
                    name="Father's mobile number"
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
                   <validation-provider
                          :rules="{
                            required: false,
                           
                          }"
                          name="Mother's Name"
                          v-slot="{ errors, valid }"
                        >
                  <v-text-field
                  :error-messages="errors"
                  :success="valid"
                    outlined
                    clearable
                    label="Mother's Name"
                    prepend-inner-icon="mdi-format-text"
                    dense
                    v-model="form_fields.mothers_name"
                     v-on:keypress="
                                isName($event)
                   "
                  ></v-text-field>
                   </validation-provider>
                </v-col>
              </v-row>
              <v-row>
                <v-col cols="12" md="6">
                   <validation-provider
                    :rules="{
                      length: 10,
                      required: false,
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
                    label="Mothers's Occupation"
                    prepend-inner-icon="mdi-briefcase"
                    dense
                    v-model="form_fields.mothers_occupation"
                  ></v-text-field>
                   </validation-provider>
                </v-col>
                <v-col cols="12" md="6">
                  <validation-provider
                    :rules="{
                      length: 10,
                      required: false,
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
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-account-clock</v-icon>
                Working Experience:
                <v-btn
                  class="mx-2"
                  fab
                  dark
                  x-small
                  color="indigo"
                  @click="addwork_experience"
                >
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-card-title>
            <v-card-text>
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
                      <tr
                        v-for="(experience, index) in work_experience"
                        :key="index"
                      >
                        <td class="text-left sybtitle-2">
                          {{ index + 1 }}
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                    :rules="{
                  
                      required: false,
                      
                    }"
                    name="Organization name"
                    v-slot="{ errors, valid }"
                  >
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="experience.organization_name"
                             v-on:keypress="
                             isLetter($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                           <validation-provider
                    :rules="{
                  
                      required: false,
                      
                    }"
                    name="Designation"
                    v-slot="{ errors, valid }"
                  >
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="experience.designation"
                            v-on:keypress="
                             isLetter($event)
                               "
                          ></v-text-field>
                           </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                           :error-messages="errors"
                          :success="valid"
                            v-model="experience.years"
                            v-on:keypress="isNumber($event)"

                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <v-text-field
                            v-model="experience.remarks"
                          ></v-text-field>
                        </td>
                        <td class="text-left sybtitle-2">
                          <v-btn
                            class="mx-2"
                            fab
                            dark
                            x-small
                            color="error"
                            @click="deletework_experience(index)"
                            ><v-icon dark> mdi-minus </v-icon></v-btn
                          >
                        </td>
                      </tr>
                    </thead>
                  </v-simple-table>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-school</v-icon>
                Qualification Details:
                <v-btn
                  class="mx-2"
                  fab
                  dark
                  x-small
                  color="indigo"
                  @click="addQualification"
                >
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-card-title>
            <v-card-text>
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
                        <th class="text-left sybtitle-2">Grade/%( only numberic value)</th>
                        <th class="text-left sybtitle-2">Completed Year</th>
                      </tr>
                      <tr
                        v-for="(qualification, index) in qualifications"
                        :key="index"
                      >
                        <td class="text-left sybtitle-2">
                          {{ index + 1 }}
                        </td>

                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="qualification.univerisity_board"
                            v-on:keypress="
                             isLetter($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="qualification.level"
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="qualification.degree"
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="qualification.grade"
                             v-on:keypress="
                             isNumber($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                          v-model="qualification.completed_year"
                          v-on:keypress="
                             isNumber($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <v-btn
                            class="mx-2"
                            fab
                            dark
                            x-small
                            color="error"
                            @click="deleteQualification(index)"
                            ><v-icon dark> mdi-minus </v-icon></v-btn
                          >
                        </td>
                      </tr>
                    </thead>
                  </v-simple-table>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <v-card flat outlined rounded="lg" elevation="3" class="mt-5">
            <v-card-title>
              <strong class="title">
                <v-icon color="primary" class="ma-2">mdi-bullseye-arrow</v-icon>
                Special Trainings (If Any):
                <v-btn
                  class="mx-2"
                  fab
                  dark
                  x-small
                  color="indigo"
                  @click="addTraining"
                >
                  <v-icon dark> mdi-plus </v-icon>
                </v-btn></strong
              >
            </v-card-title>
            <v-card-text>
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
                          {{ index + 1 }}
                        </td>

                       <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="training.univerisity_board"
                            v-on:keypress="
                             isLetter($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="training.level"
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="training.degree"
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                            v-model="training.grade"
                             v-on:keypress="
                             isNumber($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <validation-provider
                          :rules="{
                            required:false,
                            
                          }"
                           v-slot="{ errors, valid }">
                          <v-text-field
                          :error-messages="errors"
                          :success="valid"
                          v-model="training.completed_year"
                          v-on:keypress="
                             isNumber($event)
                               "
                          ></v-text-field>
                          </validation-provider>
                        </td>
                        <td class="text-left sybtitle-2">
                          <v-btn
                            class="mx-2"
                            fab
                            dark
                            x-small
                            color="error"
                            @click="deleteTraining(index)"
                            ><v-icon dark> mdi-minus </v-icon></v-btn
                          >
                        </td>
                      </tr>
                    </thead>
                  </v-simple-table>
                </v-col>
              </v-row>

              <v-card-text>
                <strong>
                  Achievements if any, in School/ College or Working
                  Organizations
                </strong>
                <v-textarea
                  solo
                  class="mt-3"
                  name="input-7-4"
                  label="Enter details if any......."
                  v-model="form_fields.acheivements"
                ></v-textarea>
              </v-card-text>
            </v-card-text>
          </v-card>

          <v-card-text>
            <strong class="text-decoration-underline"> Declaration </strong>

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
          </v-card-text>

          <v-card-actions class="justify-end mt-3">
            <v-btn @click="apply" color="primary" :loading="loading" :disabled="!checkbox">
              Apply
              <v-icon right>mdi-content-save</v-icon>
            </v-btn>
            <v-btn depressed color="error" link exact :to="{ name: 'user.dashboard' }" >
              Cancel
              <v-icon right>mdi-close-circle-outline</v-icon>
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-card-text>
    </v-card>
     </validation-observer>
  </div>
</template>

<script>
import _ from "lodash";
import axios from "axios";
import snackBar from "../../components/snackbar.vue";
import Conversions from "../../utils/conversions";
import Vue from 'vue';
export default {
  components:{
    'notification-bar':snackBar,
  },
  data() {
    return {
      notify: true,
      notify_message: "notify now",
      activePicker: "",
      checkbox: false,
      date: null,
      menu: false,
      name: "",
      countryList: [],
      provinceListItems: [],
      districtListItems: [],
      membershiptypeList: [],
      training: [],
      row_count: 0,
      nationalityList:['Nepalese','Indian','Sri Lankan','Bhutanese','Bangladeshis','Pakistani ','Afganiese'],
      designation: [],
      years: [],
      remarks: [],
      form_fields:{},
      work_experience: [
        {
          organization_name: "",
          designation: "",
          years: "",
          remarks: "",
        },
      ],
      qualifications: [
        {
          univerisity_board: "",
          level: "",
          degree: "",
          grade: "",
          completed_year: "",
          is_training: false,
        },
      ],
      trainings: [
        {
          univerisity_board: "",
          level: "",
          degree: "",
          grade: "",
          completed_year: "",
          is_training: true,
        },
      ],

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
  created() {
    const self = this;
    self.loadProvinces();
    self.loadDistrict();
    self.loadMembershipType();
    self.loadCountry();
  },
  mounted() {
    console.log("User component mounted.");
    Vue.$toast.info('Fillup the application form with your vaild details!');
  },
  methods: {
    save(date) {
      this.$refs.menu.save(date);
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
      self.work_experience.push({
        organization_name: "",
        designation: "",
        years: "",
        remarks: "",
      });
      console.log(self.work_experience);
    },
    deletework_experience(index) {
      const self = this;
      self.work_experience.splice(index, 1);
      if (index === 0) self.work_experience();
    },

    addQualification() {
      const self = this;
      self.qualifications.push({
        univerisity_board: "",
        level: "",
        degree: "",
        grade: "",
        completed_year: "",
        is_training: false,
      });
      console.log(self.qualifications);
    },
    deleteQualification(index) {
      const self = this;
      self.qualifications.splice(index, 1);
      if (index === 0) self.qualifications();
    },

    addTraining() {
      const self = this;
      self.trainings.push({
        univerisity_board: "",
        level: "",
        degree: "",
        grade: "",
        completed_year: "",
        is_training: true,
      });
      console.log(self.trainings);
    },
    deleteTraining(index) {
      const self = this;
      self.trainings.splice(index, 1);
      if (index === 0) self.trainings();
    },

    async apply() {
      const self = this;

      self.url = "/members/apply";
      self.form_fields['work_experiences'] = self.work_experience;
      self.form_fields['qualifications'] = self.qualifications;
      self.form_fields['trainings'] = self.trainings;
     
      console.log("Getting data..........");
      console.log(self.form_fields);
       self.$refs.observer.validate().then(async (result) => {
         if(result===false){
         Vue.$toast.error("Please enter all the required fields..");
         }
        await axios.post(`${self.url}`,self.form_fields).then((response)=>{
          console.log("responsing from serve..")
          console.log(response);
          if(response.data.status===true){
          this.$router.push("/");
            Vue.$toast.success(response.data.message, {
                 position: 'top'
           })
          }
          if(response.data.status===false){
             Vue.$toast.error(response.data.message, {
                 position: 'top'
           })
          }
         
        }).catch((err)=>{
          console.log(err);
        })
      console.log("membership application data..");
       });
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
