<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <!--<HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <h1>Edit Settings </h1>

    Edit the setting value (aka edit its title, type, ect.) This will be the
    same thing as 'add' except the values will be filled in

  </div>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue
// import PostsApi from '@/services/api/PostsApi'
// import SearchPosts from '@/services/api/PostsApi'
export default {
  name: 'Edit',
  components: {
    //HelloWorld
  },
  data () {
    return {
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
      PostsApi.SearchPosts(this.keywords)
        .then(response => {
          this.results = response
        })
        .catch(error => console.log(error))
        .finally(() => {

        })
    },
    read(){
      PostsApi.ShowHomePagePosts()
        .then(posts => {
          this.posts = posts
        })
        .catch(error => console.log(error))
        .finally(() => {
          this.categoryFilter('local')
          this.categoryFilter('state')
          this.categoryFilter('sports')
          // wether error or not, remove loading
          this.loading = false

        })
    },
    categoryFilter(category){
        this[category] = this.posts.filter(function(post){
          return post.category_slug === category
        })
    }
  },
  mounted(){

  }
}
</script>
