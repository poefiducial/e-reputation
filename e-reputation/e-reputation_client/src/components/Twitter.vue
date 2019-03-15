<template>
    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col  cols="3" id="nav_container2">
                <NavBarBoot></NavBarBoot>
            </b-col>

            <b-col cols="9" id="main_page">
                <div id="main_container">
                    <b-badge pill variant="primary">Twitter</b-badge>
                    <div>
                        <b-form-textarea method="Post"
                                         id="textarea"
                                         v-model="text"
                                         placeholder="Envoyer un tweet"
                                         rows="1"
                                         max-rows="6"

                        />
                        <pre class="mt-3 mb-0">{{ text }}</pre>
                        <b-button href="#" variant="outline-secondary">Envoyer</b-button>

                    </div>
                    <br>
                    <div id="components_container">
                        <div class="followers_container">
                            <h3>Followers</h3> <!-- Followers en dur, à modifier -->
                            <p>@micheleobama</p>
                            <p>@macronemmanuel</p>
                            <p>@vpoutine</p>
                            <p>@potus</p>
                            <p>@pontifex</p>
                        </div>
                        <div class="api_container">
                            Ici sera mise l'API Twitter permettant de consulter les derniers tweets et de poster

                        </div>
                        <div class="trends_container">
                            <h3>Tendances</h3> <!-- Followers en dur, à modifier -->
                            <p>#GiletsJaunes</p>
                            <p>#ChampionnatDuMondeDeCurling</p>
                            <p>#LaSoupeAuxChoux</p>
                            <p>#Symfony4</p>
                            <p>#VueJS</p>
                        </div>
                    </div>
                </div>
            </b-col>
        </b-row>
    </div>

</template>

<script>
    import Header from './Header'
    //import MenuNav from './MenuNav'
    import NavBarBoot from './NavBarBoot'
    //import SideBar from './SideBar'

    export default {
        name: "Twitter",
        components: {
            NavBarBoot,
            Header,
            //SideBar
            //MenuNav
        },
        data() {
            return {
                text: ''
            }
        }
    }
</script>

<style scoped>
    p{
        font-weight: bold;
        color: deepskyblue;
    }
    #main_page{
        display:flex;
        flex-direction: row;
        justify-content: center;
        border:solid;
        border-width: 1px;
        margin-left: 0px;
    }
    #nav_container2{
        max-width: 100%;
    }

    #components_container{
        min-width: 100%;
        /*border:solid;
        border-width: 1px; a enlevé car créé un double cadre
        */
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .followers_container, .api_container, .trends_container{
        border:solid;
        border-width: 1px;
    }
    .followers_container,.api_container, .trends_container{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    /*.api_container{  INUTILISE
       height: 0px;
   }*/

</style>
