<template>
  <div id="app">
    <Inscription titre="Inscription"/>
  </div>

</template>

<script>
import Inscription from './components/Inscription.vue'
import Header from './components/Header.vue'
import VueGauche from './components/Gauche'

export default {
  name: 'app',
  components: {
    Inscription,
      Header,
      VueGauche,
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
