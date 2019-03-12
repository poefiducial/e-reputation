<template>

    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col>
                <Gauche></Gauche>
            </b-col>
            <b-col>
                <h2>Accedez à vos portails:</h2>
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
                            <input type="password" class="form-control-plaintext" id="motDePasse" placeholder="********">
                        </div>
                    </div>

                    <button href="/Home/" class="btn btn-primary">Connexion</button>
                </form>
            </b-col>
        </b-row>
    </div>

</template>

<script>

    import Header from './Header.vue'
    import Gauche from './Gauche'
    import Home from './Home'

    export default {
        name: 'Connexion',
        components: {
            Header,
            Gauche,
            Home
        }
    }
</script>


<style scoped>

</style>
