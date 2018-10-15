import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Settings from './views/Settings.vue'
import Add from './views/Add.vue'
import Edit from './views/Edit.vue'
import NotFound from './views/NotFound.vue'

Vue.use(Router)

export default new Router({
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/add',
      name: 'add',
      component: Add
    },
    {
      path: '/edit/:id',
      name: 'edit',
      component: Edit
    },
    {
      path: '/sections/:slug',
      name: 'settings',
      component: Settings
    },
    {
     name: '404',
     path: '/404',
     component: NotFound
   },
   {
     name: '*',
     path: '*',
     redirect: '/404'
   }
  ]
})
