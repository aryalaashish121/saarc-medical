require("../bootstrap");

window.Vue = require("vue");

import { ValidationProvider, ValidationObserver, extend } from "vee-validate";
import { email, max, min, length, regex } from "vee-validate/dist/rules";

import functions from './functions';
import ScaleLoader from 'vue-spinner/src/ScaleLoader.vue';
import AppDateChip from '../components/AppDateChip.vue';
import cruds from "./cruds";

Vue.component("validation-provider", ValidationProvider);
Vue.component("validation-observer", ValidationObserver);
Vue.component("scale-loader", ScaleLoader);
Vue.component("app-date-chip", AppDateChip);


extend('required', {
    validate(value) {
        return {
            required: true,
            valid: ['', null, undefined].indexOf(value) === -1
        }
    },
    computesRequired: true,
    message: '{_field_} is required'
})

extend("max", {
    ...max,
    message: "This field must be {length} characters or less"
});

extend("min", {
    ...min,
    message: "This field must be {length} characters or more"
});

extend("email", {
    ...email,
    message: "Please input vaild email address"
});

extend("length", {
    ...length,
    message: "This field must be {length} characters"
});

extend("regex", {
    ...regex,
    message: 'This field is invalid'
})

Dropzone.autoDiscover = false;
Vue.mixin(functions);
Vue.mixin(cruds);

Vue.filter('formatDate', function (value) {
    if (!value) return '';
    return window.moment(value).format('MMM DD, YYYY hh:mm a');
})
