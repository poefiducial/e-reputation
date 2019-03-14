<template>
    <b-col id="nav_container">
        <b-row class="head_container">
            <h4>Vos portails</h4>
        </b-row>
        <b-row class="btn_container">

            <button class="home_button" @click="goHome" type="button">Home</button>
            <button class="social_network_button" @click="goTwitter" type="button">Réseaux sociaux</button>
            <button class="e_commerce_button" @click="goVeoprint" type="button">E-Commerce</button>
            <button class="dashboard_button" @click="goDashboard" type="button">Dashboard</button>

            <button class="settings_button" type="button">Configurations</button>
            <button class="disconnect_button" @click="disconnect" type="button">Se déconnecter</button>
        </b-row>
        <b-row class="logo_container">
            <img class="fidulogo" src="../assets/fiducial2_reduced.png">
        </b-row>
    </b-col>
</template>

<script>
    export default {
        name: "NavBarBoot",

        methods: {
            goHome: function (){
                this.$router.replace('/home');
            },
            goTwitter: function(){
                this.$router.replace('/twitter')
            },
            goVeoprint: function(){
                this.$router.replace('/veoprint')
            },
            goDashboard: function(){
                this.$router.replace('/');
            },
            disconnect: function(){
                this.$router.replace('/logout');

            }
        }
    }
    //var hauteur = window.innerHeight;
</script>

<style scoped>
    html{
        margin:0;
    }
    head, body, template{
        margin:0;
        height:100%;
    }
    button, img{
        width: 100%;
    }
    img{
        height: 75%;
        width: 75%;
        margin: auto;
    }
    #nav_container{
        border: solid;
        border-width: 1px;
        background: linear-gradient(#E1DEDE, #6B6B6B);
        height: 100vh;
        width: 20%;
    }
    .head_container, .btn_container, .logo_container{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>
