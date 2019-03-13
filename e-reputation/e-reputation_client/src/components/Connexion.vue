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
                            <input type="text" v-bind="email" class="form-control-plaintext" id="login" placeholder="Login">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="motDePasse" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" v-bind="password" class="form-control-plaintext" id="motDePasse" placeholder="********">
                        </div>
                    </div>

                    <button @click="verifMotDePasse" class="btn btn-primary">Connexion</button>

                </form>
            </b-col>
        </b-row>
    </div>

</template>

<script>

    import Header from './Header.vue'
    import Gauche from './Gauche'
    //import Home from './Home'

    export default {
        name: 'Connexion',
        components: {
            Header,
            Gauche,
            //Home
        },
        data() {
            return {
                email: '',
                password: '',
                authorisation: false
            }
        },

        methods: {
            //computed: {
                verifMotDePasse: function () {

                    var email1 = this.email;
                    var password1 = this.password;
                    var userJson = JSON.stringify({email: email1, password: password1})
                    //this.messageSymfony = (userJson);
                    //this.$http.get('http://127.0.0.1:8001/essai')

                    this.$http.post('http://127.0.0.1:8001/connexion', userJson, {
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(response => {
                        if(response.status==200){
                           // this.$session.start()
                           // this.$session.set('jwt', response.body.token)
                            this.$router.replace('/home');
                            }
                    });
                    return; //authorisation;
                }

            }
        }

</script>


<style scoped>

</style>
