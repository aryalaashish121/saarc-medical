const UploadFileService = {
  upload(file, onUploadProgress) {
    let formData = new FormData();

    formData.append("file", file);

    return axios.post("/media", formData, {
      headers: {
        "Content-Type": "multipart/form-data"
      },
      onUploadProgress
    });
  },
  getFiles() {
    return axios.get("/getmedia");
  }
}

export default UploadFileService;
