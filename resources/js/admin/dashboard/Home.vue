<template>
  <div>
    <Navbar />
    <h1>This is Home</h1>
  </div>
</template>
<script>
import axios from "axios";

import Navbar from "../nav/Nav.vue";
export default {
  components: {
    Navbar,
  },
};
</script>