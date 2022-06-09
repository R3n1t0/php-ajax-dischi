const app = new Vue({
  el: "#app",

  data:{
    apiUrl: "http://localhost/php-ajax-dischi/api.php",
    genresList: [],
    genreChosed: "",
  },

  mounted(){
    this.getApi()
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(res =>{
        this.genresList = res.data
      })
    }
  }

})