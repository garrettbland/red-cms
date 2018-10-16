<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <!--<HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <h1>Add Section</h1>

    do the steps for adding settings here
    <p>ADDED?: {{added}}</p>
    <hr>

    <input v-model="title" placeholder="edit me">
    <p>TITLE: {{title}}</p>
    <p class="help is-danger" v-if="error.title">Title cannot be empty</p>


    <button v-on:click="validate()">Add</button>

  </div>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue
import Api from '../services/api'
// import SearchPosts from '@/services/api/PostsApi'
export default {
  name: 'Add',
  components: {
    //HelloWorld
  },
  data () {
    return {
      title:'',
      sections:[],
      error:{
        title:false,
      },
      errors:[],
      added:false,
      loading:true
    }
  },
  // watch: {
  //     keywords(after, before) {
  //         this.fetch();
  //     }
  // },
  methods: {
    validate(){
      //start loading animation
      this.loading = true;
      //reset error states
      //this.error.title = this.error.section = false;
      this.error.title = false;
      //reset errors
      this.errors = [];
      //check inputs and add to error array if needed
      if(!this.title){this.errors.push("title");}
      //if(!this.setting.section){this.errors.push("section");}
      //Check for any errors
      if(!this.errors.length){
        //No error, run update method
        this.addSection();
      }else{
        //set loading to false
        this.loading = false;
        //Errors present. Loop through an set error state
        for(var value in this.errors){
          var input = this.errors[value];
          this.error[input] = true;
        }
      }
    },
    addSection() {
      Api.AddSection(this.title)
        .then(response => {
          this.results = response
          console.log(response);
          this.added = true;
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    }
  },
  mounted(){

  }
}
</script>
