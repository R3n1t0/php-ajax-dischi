const app = new Vue({
  el: "#app",

  data:{
    apiUrl: "http://localhost/php-ajax-dischi/api/api.php",
    albums: [],
    genres: [],
    genreChosed: "all"
  },

  mounted(){
    this.getApi()
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl,{
        params:{
          genre: this.genreChosed
        }
      })
      .then(response => {
        this.albums = response.data.albums
        this.genres = response.data.genres
      })
    }
  },

})