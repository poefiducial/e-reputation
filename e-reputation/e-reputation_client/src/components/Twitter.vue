<template>
    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col id="nav_container">
                <MenuNav></MenuNav>
            </b-col>
            <b-col id="main_page">
                <h2>Twitter</h2>
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
                        <p>#Symfony3</p>
                        <p>#VueJS</p>
                    </div>
                </div>
            </b-col>
        </b-row>
    </div>

</template>

<script>
    import Header from './Header'
    import MenuNav from './MenuNav'

    export default {
        name: "Twitter",
        components: {
            Header,
            MenuNav
        }
    }
</script>

<style scoped>
    p{
        font-weight: bold;
        color: deepskyblue;
    }
    #main_page{
        border:solid;
        border-width: 1px;
        margin-left: 0px;
    }
    #nav_container{
        max-width: 17%;
    }
    #components_container{
        border:solid;
        border-width: 1px;

        display: flex;
        justify-content: space-around;
    }
    .followers_container, .api_container, .trends_container{
        border:solid;
        border-width: 1px;
    }
    .followers_container, .trends_container{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .api_container{
        height: px;
    }

</style>