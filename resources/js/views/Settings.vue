<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <!--<HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <h1>Edit whatever section this is</h1>
    <ul>
        <li v-for="setting in settings">
          TITLE:{{setting.title}} <br>
          TYPE: {{setting.type}} <br>
          KEY: <code>{{setting.key}}</code> <br>
          VALUE: {{setting.value}}
          SECTION: {{setting.section_id}}
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
      let slug = this.$route.params.slug
      Api.GetAllSectionSetting(slug)
        .then(response => {
          this.settings = response.data
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    },
  },
  mounted(){
    this.fetch()
  }
}
</script>
