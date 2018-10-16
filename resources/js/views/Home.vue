<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <!--<HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <h1>Sections</h1>

    <router-link to="/add">Add Setting</router-link>

<ul>
    <li v-for="section in sections">
      <router-link :to="{ name: 'settings', params: { id: section.id }}">{{ section.title }}</router-link>
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
  name: 'Home',
  components: {
    //HelloWorld
  },
  data () {
    return {
      sections:[],
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
      Api.GetAllSections()
        .then(response => {
          this.sections = response.data
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    }
  },
  mounted(){
    this.fetch()
  }
}
</script>
