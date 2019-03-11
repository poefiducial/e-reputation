<template>
  <div id="app">
    <!--<Connexion titre="Connexion"/>-->
    <!--<MenuNav titre="MenuNav"/>-->
    <Veoprint titre="Veoprint"/>
    <Twitter titre="Twitter"/>
  </div>

</template>

<script>
  import Inscription from './components/Inscription.vue'
  import Header from './components/Header.vue'
  import VueGauche from './components/Gauche'
  import Connexion from "./components/Connexion";
  import MenuNav from "./components/MenuNav";
  import Veoprint from "./components/Veoprint";
  import Twitter from"./components/Twitter"

  export default {
    name: 'app',
    components: {
      MenuNav,
      Connexion,
      Inscription,
      Header,
      VueGauche,
      Veoprint,
      Twitter,
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
