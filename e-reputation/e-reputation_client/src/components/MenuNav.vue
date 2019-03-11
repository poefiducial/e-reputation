<template>
    <div>
        <b-nav>
            <div id="container">
                <div class="head_container">
                    <p>Vos portails</p>
                </div>
                <!--<div id="btn_container">-->
                <button class="home_button" type="button">Home</button><br>
                <button class="social_network_button" type="button">Réseaux sociaux</button><br>
                <button class="e_commerce_button" type="button">E-Commerce</button><br>
                <button class="dashboard_button" type="button">Dashboard</button><br>
                <button class="settings_button" type="button">Configurations</button>
                <!--</div>-->
                <img class="fidulogo" src="../assets/fiducial2_reduced.png">
            </div>

        </b-nav>
    </div>
</template>

<script>
   // var height =window.innerHeight;
    export default {
        name: "MenuNav",

     //   data: {
     //       hauteur: height
     //   }
    }

</script>

<style scoped>
    #container{
        border: solid;
        border-width: 1px;
        border-color: black;
        background: linear-gradient(#E1DEDE, #6B6B6B);

        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .fidulogo{
        margin-top: 300px;
    }
</style>
