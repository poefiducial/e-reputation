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
                <form>
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                            <input type="text" v-model="email" class="form-control-plaintext" id="login" placeholder="Login">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="motDePasse" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" v-model="password" class="form-control-plaintext" id="motDePasse" placeholder="********">
                        </div>
                    </div>

                    <b-button @click="verifMotDePasse" >Connexion</b-button><br>
                    {{messageSymfony}}
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
                authorisation: false,
                messageSymfony:''
            }
        },

        methods: {
            //computed: {
            verifMotDePasse: function () {

                var email1 = this.email;
                var password1 = this.password;
                var userJson = JSON.stringify({email: email1, password: password1});
                this.messageSymfony = (userJson);
                this.$http.post('http://127.0.0.1:8001/connexion', userJson).then(response => {
                    if (response.status === 200) {
                        this.messageSymfony =response.body;
                        this.$router.replace('/home');
                    } else {
                        this.messageSymfony =response.body;
                    }
                });

            }

        }
    }

</script>


<style scoped>

</style>
