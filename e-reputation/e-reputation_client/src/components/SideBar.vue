<template>
    <b-row>
        <b-col>
            <div class="sideNav">
                <b-nav cols="2" vertical>
                    <b-nav-item>Acceuil</b-nav-item>
                    <b-nav-item>Réseaux sociaux</b-nav-item>
                    <b-nav-item>E-Commerce</b-nav-item>
                    <b-nav-item>Configurations</b-nav-item>
                    <img src="../assets/fiducial2.png"/>

                </b-nav>
            </div>
        </b-col>
    </b-row>
</template>

<script>
    import Header from "./Header";
    export default {
        name: "SideBar",
        components: {Header}
    }
</script>

<style scoped>

    .sideNav {
        background: linear-gradient(#E1DEDE, #6B6B6B);
    }
</style>
