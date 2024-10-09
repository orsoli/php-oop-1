import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
  data() {
    return {
      moviesList: [], // Store movies
    };
  },
  methods: {
    // Define a function to get api
    getMoviesList() {
      axios
        .get("http://localhost:8888/php-oop-1/index.php")
        .then((response) => {
          // handle success
          this.moviesList = response.data; // Save movies list get from api
          console.log(response.data);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .finally(function () {
          // always executed
          console.log("Completed");
        });
    },
  },

  created() {
    this.getMoviesList();
  },
}).mount("#app");
