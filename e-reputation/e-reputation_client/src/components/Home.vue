<template>
    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col>
                <NavBarBoot></NavBarBoot>
                <!--<SideBar></SideBar>-->
            </b-col>
            <b-col  cols="8">
                <h2>Bienvenue "prénom nom"</h2>
                <b-col>
                    <b-row>
                        <img class="logo twitter" src="../assets/twitter.png" alt="logo twitter"/>
                        <h3>Réseaux sociaux</h3>

                        <router-link to="/twitter" class="">Accédez à votre compte</router-link>
                    </b-row>

                    <!--TWITTER-->
                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row class="resume">
                            <b-col align-self="start">
                                <div class="text-center">
                                    <b-button variant="primary">Likes <b-badge variant="light"> 58 </b-badge></b-button>
                                </div>
                            </b-col>
                            <b-col align-self="center">
                                <div class="text-center">
                                    <b-button variant="primary">Tweets <b-badge variant="light">234</b-badge></b-button>
                                </div>
                            </b-col>
                            <b-col align-self="end">
                                <div class="text-center">
                                    <b-button variant="primary">Followers <b-badge variant="light">1 298</b-badge></b-button>
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>
                    <b-row>
                        <div class="trends">
                            #trends #VueJS #Symfony4 #LaSoupeAuxChoux #GiletsJaunes #ChampionnatDuMondeDeCurling
                        </div>
                    </b-row>
                    <hr>
                    <b-row>
                        <img class="logo veo" src="../assets/veoprint.jpg" alt="logo veoprint"/>
                        <h3>E-Commerces</h3>
                        <router-link to="/veoprint" class="">Accédez à votre compte</router-link>
                    </b-row>
                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row class="resume">
                            <b-col align-self="start">
                                <div class="text-center">
                                    <b-button variant="success">Commandes en cours <b-badge variant="light"> 35 </b-badge></b-button>
                                </div>
                            </b-col>
                            <b-col align-self="center">
                                <div class="text-center">
                                    <b-button variant="success">Dépenses du mois <b-badge variant="light">2 349</b-badge></b-button>
                                </div>
                            </b-col>
                            <b-col align-self="end">
                                <div class="text-center">
                                    <b-button variant="success">Commandes passées <b-badge variant="light">198</b-badge></b-button>
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>

                </b-col>
            </b-col>
        </b-row>
    </div>

</template>

<script>
    import Header from "./Header";
    //import SideBar from "./SideBar";
    import NavBarBoot from "./NavBarBoot";

    export default {
        name: "Home",
        components: {
            NavBarBoot,
            Header,
            //SideBar
        }
    }
</script>

<style scoped>
    hr {
        color: #43425D;

    }
    h2 {
        font-size: 1.5rem;

        margin-bottom: 10px;
    }
    h3 {
        font-size: 1rem;
        margin: 0 auto;
        text-align: center;
    }
    .twitter {
        width: 5%;
        height: 5%;
    }
    .resume {
        margin: 0 auto;
    }
    .veo {
        width: 10%;
        height: 10%;
    }
    .logo {
        margin-right: 15px;
    }

    .trends {
        margin-top: 10px;
        text-align: center;
        color: deepskyblue;
    }
</style>
