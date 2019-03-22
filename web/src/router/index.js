import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/home/Home'
import Diagnose from '@/pages/diagnose/Diagnose'
import Search from '@/pages/search/Search'
import User from '@/pages/user/User'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/diagnose',
      name: 'Diagnose',
      component: Diagnose
    },
    {
      path: '/search',
      name: 'Search',
      component: Search
    },
    {
      path: '/user',
      name: 'User',
      component: User
    }
  ]
})
