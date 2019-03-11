<template>
    <div>
        <Header></Header>
        <hr>

        <b-row>
            <b-col>
                <Gauche></Gauche>
            </b-col>
            <b-col>

                <div class="container">

                    <h2>{{ titre }}</h2>
                    <h3>Merci de compléter le formulaire pour vous inscrire</h3>

                    <form method="POST">
                        <b-container fluid>
                            <b-row class="my-1" v-for="type2 in types" :key="type2">
                                <b-col sm="3">
                                    <label :for="`type2-${type2}`">{{ type2 }}:</label>
                                </b-col>
                                <b-col sm="9">
                                    <b-form-input :id="`type2-${type2}`" :type2="type2" />
                                </b-col>
                            </b-row>
                            <b-button type="submit" >Enregistrer</b-button>
                        </b-container>
                    </form>
                </div>
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
        data() {
            return {
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
