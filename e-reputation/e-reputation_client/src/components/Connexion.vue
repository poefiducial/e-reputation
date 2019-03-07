<template>

    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col>
                <Gauche></Gauche>
            </b-col>
            <b-col>
                <form method="POST">
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="login" placeholder="Login">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="motDePasse" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control-plaintext" id="motDePasse" placeholder="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </b-col>
        </b-row>
    </div>

</template>

<script>

    import Header from './Header.vue'
    import Gauche from './Gauche'

    export default {
        name: 'Connexion',
        components: {Header,
                     Gauche}
    }
</script>

<style scoped>

</style>
