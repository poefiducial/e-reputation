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
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" v-model = "nom" class="form-control-plaintext" id="nom" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                            <input type="text" v-model="prenom" class="form-control-plaintext" id="prenom" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                            <input type="text" v-model= "login" class="form-control-plaintext" id="login" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">e mail</label>
                        <div class="col-sm-10">
                            <input type="email" v-model= "email" class="form-control-plaintext" id="email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" v-model="password" class="form-control-plaintext" id="password" placeholder="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="confirm" class="col-sm-2 col-form-label">Confirmation Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" v-model=" confirm " class="form-control-plaintext" id="confirm" placeholder="">
                        </div>
                    </div>

                    <button type="submit" @click ="envoieInput" class="btn btn-primary">Se connecter{{test}}</button>
                </form>
            </b-col>
        </b-row>
    </div>

</template>

<script>

    import Header from './Header.vue'
    import Gauche from './Gauche';


    export default {
        name: 'Inscription',

        components: {Header,
                     Gauche
                     },

        props: {
            titre: String,
            type2: String

        },
        methods: {
            envoieInput: function () {
               this.test="appel fonction envoieInput ";
             //   var nom1= this.nom;
             //   var prenom1= this.prenom;
             //   var email1= this.email;
             //   var password1= this.password;
            //    var userJson = JSON.parse({"lastname":nom1,"firstname":prenom1,"email":email1,"password":password1})
                this.$http.get('http://127.0.0.1:8000/essai')
                   .then((response)=>{
                        this.messageSymfony=response.body;

                })
                return
            }
        },
        data() {
            return {
                test:'',
                nom:'',
                prenom:'',
                email:'',
                password:'',
                types: [
                    'Nom',
                    'Prénom',
                    'Login',
                    'email',
                    'confirmez l\'email',
                    'Mot de passe'

                ]
            }
        }

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    hr {
        color: #43425D;
    }
    h3 {
        margin: 30px 0 30px 0;
        font-size: 1rem;
    }

    a {
        color: #43425D;
        margin-left: 30px;
        font-size: 0.95rem;


    }

    form {
        text-align: left;
        margin-bottom: 50px;
    }


</style>
