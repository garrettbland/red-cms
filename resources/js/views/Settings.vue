<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <!--<HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <h1>Edit section: {{section}}</h1>
    UPDATED: {{updated}}
    <ul>
        <li v-for="setting in settings">
          <div style="background:#f0f0f0;margin-bottom:10px;">
          TITLE:{{setting.title}} <br>
          TYPE: {{setting.type}} <br>
          KEY: <code>{{setting.key}}</code> <br>
          VALUE: <input v-model="setting.value" ></input>
          SECTION: {{setting.section_id}}
          ID: {{setting.id}}
          <button v-on:click="edit(setting)">Save</button>
        </div>
        </li>
      </ul>
  </div>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue
import Api from '../services/api'
// import SearchPosts from '@/services/api/PostsApi'
export default {
  name: 'Settings',
  components: {
    //HelloWorld
  },
  data () {
    return {
      settings:[],
      section:'',
      updated:false,
      loading:true
    }
  },
  // watch: {
  //     keywords(after, before) {
  //         this.fetch();
  //     }
  // },
  methods: {
    fetch() {
      let id = this.$route.params.id
      Api.GetAllSectionSetting(id)
        .then(response => {
          this.settings = response.data
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    },
    edit(setting){
      Api.UpdateSetting(setting)
        .then(response => {
          this.results = response
          console.log(response);
          this.updated = true;
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    },
    getTitle(){
      let id = this.$route.params.id
      Api.GetSectionTitle(id)
      .then(response => {
        this.section = response.data.title
      })
      .catch(error => console.log(error))
      .finally(() => {

      })
    }
  },
  mounted(){
    this.fetch()
    this.getTitle()
  }
}
</script>
