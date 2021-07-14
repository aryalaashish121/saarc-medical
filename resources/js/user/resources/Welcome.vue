<template>
  <div>
    <v-carousel
      cycle
      height="650"
      hide-delimiter-background
      show-arrows-on-hover
    >
      <v-carousel-item
        v-for="(country, i) in countries"
        :key="i"
        :src="country.image"
      >
        <v-row class="fill-height" align="center" justify="center">
          <div class="text-h6 white--text">{{ country.name }}</div>
        </v-row>
      </v-carousel-item>
    </v-carousel>
    <v-container class="mt-10">
      <div>
        <h1 class="text-center" style="font-family: Roboto">Our Vision</h1>
        <div class="row mt-4">
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" class="mt-5" tile>
                  <v-img src="/images/life-insurance.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold">
                <h3>Improved Quality of Life</h3>
              </v-card-subtitle>
              <v-card-text>
                To accelerate cultural development to provide all individuals to
                live in dignity and to realize their full potentials.
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" tile class="mt-5">
                  <v-img src="/images/economic.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold title">
                <h3>Economic Growth</h3>
              </v-card-subtitle>
              <v-card-text>
                To accelerate economic growth to provide all individuals the
                opportunity to live in dignity and to realize their full
                potentials.
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" class="mt-5">
                  <v-img src="/images/mandala.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold title">
                <h3>Cultural Development</h3>
              </v-card-subtitle>
              <v-card-text>
                To accelerate cultural development to provide all individuals to
                live in dignity and to realize their full potentials.
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
        </div>
      </div>
      <div class="mt-16">
        <h1 class="text-center" style="font-family: Roboto">Our Services</h1>
        <div class="row mt-4">
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" tile class="mt-5">
                  <v-img src="/images/health.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold">
                <h3>Quality Health</h3>
              </v-card-subtitle>
              <v-card-text>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste
                fugiat dolor illo quod exercitationem minus provident ipsum
                cumque totam aliquid, delectus illum deserunt repellat
                perferendis minima accusantium harum at autem!
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" tile class="mt-5">
                  <v-img src="/images/presentation.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold title">
                <h3>Quality Education</h3>
              </v-card-subtitle>
              <v-card-text>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste
                fugiat dolor illo quod exercitationem minus provident ipsum
                cumque totam aliquid, delectus illum deserunt repellat
                perferendis minima accusantium harum at autem!
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
          <v-col md="4">
            <v-card rounded="xl" elevation="5" flat>
              <v-card-title class="justify-center">
                <v-avatar size="104" tile class="mt-5">
                  <v-img src="/images/robot.svg"> </v-img>
                </v-avatar>
              </v-card-title>
              <v-card-subtitle class="text-center mt-3 font-weight-bold title">
                <h3>Technological Education</h3>
              </v-card-subtitle>
              <v-card-text>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste
                fugiat dolor illo quod exercitationem minus provident ipsum
                cumque totam aliquid, delectus illum deserunt repellat
                perferendis minima accusantium harum at autem!
              </v-card-text>
              <v-card-text class="text-right">
                <v-btn
                  small
                  class="ma-3"
                  elevation="5"
                  rounded
                  dark
                  color="primary"
                >
                  Read More
                </v-btn>
              </v-card-text>
            </v-card>
          </v-col>
        </div>
      </div>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {
      countries: [
        {
          name: "Afghanistan",
          image: "/images/afghanistan.jpg",
        },
        {
          name: "Bangladesh",
          image: "/images/bangladesh.jpg",
        },
        {
          name: "Bhutan",
          image: "/images/bhutan.jpg",
        },
        {
          name: "India",
          image: "/images/india.jpg",
        },
        {
          name: "Maldives",
          image: "/images/maldives.jpg",
        },
        {
          name: "Nepal",
          image: "/images/nepal-kathmandu.jpg",
        },
        {
          name: "Pakistan",
          image: "/images/pakistan.jpg",
        },
        {
          name: "Sri Lanka",
          image: "/images/srilanka.jpg",
        },
      ],
    };
  },
};
</script>