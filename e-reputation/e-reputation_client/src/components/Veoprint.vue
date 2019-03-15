<template>
    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col cols="3" id="nav_container2">
                <NavBarBoot></NavBarBoot>
            </b-col>

            <b-col cols="9" id="main_page">
                <div id="main_container">
                    <div class="logo_container">
                        <img class="veoprint_logo" src="../assets/veoprint_reduced.png">
                    </div> <br>
                    <div id="btn_container">
                        <div class="ongoing_orders_container">
                            <p class="text">Commandes en cours</p>
                        </div>
                        <div class="placed_orders_container">
                            <p class="text">Nombre de commandes passées</p>
                        </div>
                        <div class="expenses_container">
                            <p class="text">Dépenses</p>
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
    import NavBarBoot from "./NavBarBoot";
    //import SideBar from './SideBar'
    export default {
        name: "Veoprint",
        components: {
            NavBarBoot,
            Header,
            // SideBar
            //MenuNav
        }
    }
</script>

<style scoped>
    #main_page{
        display:flex;
        flex-direction: column;
        justify-content: center;
    }

    #nav_container2{
        max-width: 100%;
    }

    #main_container{
        max-height: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-items: center;
    }
    .logo_container{
        border:solid;
        border-width: 1px;
        border-radius: 25px;
    }
    .veoprint_logo{
        margin: 10px;
    }
    #btn_container{
        border: solid;
        border-width: 1px;
        width: 40%;
        height: 75%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .ongoing_orders_container, .placed_orders_container, .expenses_container{
        border: solid;
        border-width: 1px;
        margin: 10px;
        height: 25%;
        align-items: center;
    }

</style>
