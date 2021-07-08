<template>
  <v-card flat>
    <v-card-subtitle class="text-center">
      <v-avatar class="profile" color="grey" size="164" tile>
        <v-img :src="preview_image_default"></v-img>
      </v-avatar>
    </v-card-subtitle>
    <v-card-subtitle class="text-center">
      <v-file-input
        ref="uploadImage"
        v-model="image_name"
        show-size
        label="Profile Image"
        @change="handleOnChange($event)"
        prepend-icon=""
        prepend-inner-icon="mdi-camera"
        outlined
        class="mb-2"
      ></v-file-input>

      <v-btn small rounded class="primary">
                  <v-icon left dark> mdi-camera </v-icon>
                  Choose your photo
                </v-btn>
    </v-card-subtitle>
  </v-card>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      image_name: "",
      preview_image_default:
        "https://www.pngitem.com/pimgs/m/4-47626_art-beard-no-male-avatar-clipart-hd-png.png",
    };
  },
  methods: {
    handleOnChange(event) {
      this.image_name = event.target.files[0];
      this.upload();
    },
    upload(e) {
      e.preventDefault();
      let formData = new FormData();
      formData.set("image", this.image_name);

      axios.post("/uploadImage", formData).then((res) => {
        console.log(res);
      });
    },
  },
};
</script>