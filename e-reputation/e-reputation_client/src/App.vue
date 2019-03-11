<template>
    <div id="app">
        <p>{{messageSymfony}}</p>
    </div>
</template>

<script>



    export default {
        name: 'app',
        data(){
            return{
                messageSymfony:"probleme : serveur symfony non joignable"
            }
        },
        components: {
         },
        mounted() {
            this.$http.get('http://127.0.0.1:8000/essai')
                .then((response)=>{
                    this.messageSymfony=response.body;
                })
        }
    }
</script>

<style>

    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 10px;
    }


</style>
