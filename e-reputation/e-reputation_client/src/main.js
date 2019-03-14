import App from './App.vue'
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


Vue.use(BootstrapVue)
Vue.use(VueResource)
Vue.use(VueRouter)
//Vue.config.productionTip = false
import Inscription from './components/Inscription.vue'
import Home from './components/Home.vue'
import Connexion from './components/Connexion.vue'
import Twitter from "./components/Twitter";
import Veoprint from "./components/Veoprint.vue";

const router = new VueRouter({

  mode: 'history',
  routes: [
    {
      path: '/',
      component:  Inscription,
    },
    {
      path:'/connexion',
      name : "connexion",
      component: Connexion
    },

    {
      path:'/twitter',
      component: Twitter
    },
    {
      path:'/home/:i',
      component: Home
    },
    {
      path:'/veoprint',
      component: Veoprint
    },
    {
      path: '*',
      redirect: '/'
    }
  ],
});


new Vue({
  data : {
    messageSymfony:'',
    jetonSession:'authorized'
    /* nom:'',
      prenom:'',
      email:'',
      password:''
   */ },
  router,
  render: h => h(App)
}).$mount('#app')
