<template>
    <b-col id="nav_container">
        <b-row class="head_container">
            <h4>Vos portails</h4>
        </b-row>
        <b-row class="btn_container">
            <button class="home_button" type="button">Home</button>
            <button class="social_network_button" type="button">Réseaux sociaux</button>
            <button class="e_commerce_button" type="button">E-Commerce</button>
            <button class="dashboard_button" type="button">Dashboard</button>
            <button class="settings_button" type="button">Configurations</button>
        </b-row>
        <b-row class="logo_container">
            <img class="fidulogo" src="../assets/fiducial2_reduced.png">
        </b-row>
    </b-col>
</template>

<script>
    export default {
        name: "NavBarBoot"
    }
    var hauteur = window.innerHeight;
</script>

<style scoped>
    html{
        margin:0;
        height: 700px
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
        width: 20%;
        border: solid;
        border-width: 1px;
        background: linear-gradient(#E1DEDE, #6B6B6B);
        height: 100vh;
    }
    .head_container, .btn_container, .logo_container{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>
