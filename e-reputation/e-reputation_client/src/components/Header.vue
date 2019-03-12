<template>

        <div>
            <b-nav>
                <router-link to="/Home" class=""><img src="../assets/fiducial3.png"></router-link>
                <h2>Portail E-reputation by Fiducial</h2>
            </b-nav>
        </div>


</template>

<script>

    export default {
        name: 'Header'
    }
</script>

<style scoped>
    h2 {
        margin: 0 auto;
    }

img {
    margin: 10px;
    width: 180px;
    height: 27px;
}
</style>
