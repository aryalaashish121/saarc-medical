<template>
  <div>
    <div v-if="progessBar">
      <div>
        <v-progress-linear
          v-model="progress"
          color="light-blue"
          height="25"
          reactive
        >
          <strong>{{ progress }} %</strong>
        </v-progress-linear>
      </div>
    </div>
    <v-row>
      <v-file-input
        v-model="file"
        show-size
        label="Profile Image"
        @change="selectFile"
        prepend-icon=""
        prepend-inner-icon="mdi-camera"
        outlined
        class="mb-2"
      ></v-file-input>

      <v-col v-if="fileContent">
        <v-img
          :src="fileContent"
          v-if="fileContent"
          max-height="250"
          max-width="250"
        ></v-img>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import UploadService from "../utils/UploadFileService";

export default {
  name: "upload-files",
  data() {
    return {
      currentFile: undefined,
      progress: 0,
      message: "",
      fileInfos: [],
      file: null,
      progessBar: undefined,
      filename: null,
      fileContent: null,
    };
  },
  mounted() {
    UploadService.getFiles().then((response) => {
      this.fileInfos = response.data;
    });
  },

  methods: {
    selectFile(file) {
      this.invalid = undefined;
      this.progress = 0;
      this.currentFile = file;

      const reader = new FileReader();
      reader.addEventListener("load", (e) => {
        this.fileContent = e.target.result;
      });

      reader.readAsDataURL(this.currentFile);
      this.upload();
    },
    upload() {
      this.invalid = true;
      this.progessBar = true;
      if (!this.currentFile) {
        this.message = "Please select a file!";
      }

      this.message = "";

      UploadService.upload(this.currentFile, (event) => {
        this.progress = Math.round((100 * event.loaded) / event.total);
      })
        .then((response) => {
          this.$store.commit("showSnackbar", {
            message: response.data.message,
            color: response.data.success,
          });
          this.progessBar = undefined;
          this.$eventBus.$emit("updateFileDetail", response.data);
          this.filename = response.data.file_name;
          return getFiles();
        })
        .then((files) => {
          this.fileInfos = files.data;
          this.progessBar = undefined;
        })
        .catch((err) => {
          let response = err.response;
          for (let index in response.data.errors.file) {
            this.$store.commit("showSnackbar", {
              message: response.data.errors.file[index],
              color: response.data.success,
            });
          }
          this.progress = 0;
          this.progessBar = undefined;
        });
    },
  },
};
</script>
<style>
body {
  background-color: #e2e2e2;
}

#app {
  padding: 20px;
}

#preview {
  display: flex;
  justify-content: center;
  align-items: center;
}

#preview img {
  max-width: 100%;
  max-height: 500px;
}
</style>
