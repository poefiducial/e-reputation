<template>
  <div id="app">
    <!--<Connexion titre="Connexion"/>-->
    <!--<MenuNav titre="MenuNav"/>-->
    <!--<Veoprint titre="Veoprint"/>
    <Twitter titre="Twitter"/>-->
    <p>{{messageSymfony}}</p>
    <inscription></inscription>
  </div>

</template>

<script>
  import Inscription from './components/Inscription.vue'
 /* import Header from './components/Header.vue'
  import VueGauche from './components/Gauche'
  import Connexion from "./components/Connexion";
  import MenuNav from "./components/MenuNav";
  import Veoprint from "./components/Veoprint";
  import Twitter from"./components/Twitter"
  */

  export default {
    name: 'app',
     data(){

            return{
                messageSymfony:"probleme : serveur symfony non joignable"
            }
        },
    components: {
     // MenuNav,
     // Connexion,
      Inscription,
     // Header,
     // VueGauche,
     // Veoprint,
     // Twitter,
    },
    mounted() {
  //          this.$http.get('http://127.0.0.1:8000/essai')
  //              .then((response)=>{
  //                  this.messageSymfony=response.body;

  //              })
    }

  }
  
</script>

<style>
  #app {
    font-family: "Segoe UI", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #43425D;
    margin-top: 10px;
  }

</style>
