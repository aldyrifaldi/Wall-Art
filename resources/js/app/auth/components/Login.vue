<template>
    <div class="full-height auth-screen d-flex justify-content-center">
        <div class="card align-self-center p-3" style="width:70vh" >
            <div class="card-body">
                <h4 class="text-center h1 font-weight-bold">DHunt</h4>
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" v-model="email" name="email" :class="{'is-invalid':validation_error.email}" class="form-control" placeholder="Masukkan email">
                        <small class="text-danger" v-if="validation_error.email">{{validation_error.email[0]}}</small>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input v-model="password" name="password" :class="{'is-invalid':validation_error.password}" type="password" class="form-control" placeholder="Masukkan password">
                        <small class="text-danger" v-if="validation_error.password">{{validation_error.password[0]}}</small>
                    </div>
                    <div class="form-group">
                        <button ref="submitButton" class="btn btn-block btn-primary">Masuk</button>
                        <p class="m-2 text-center">Belum punya akun? <router-link :to="{name:'register'}">Daftar</router-link></p>
                        <p class="text-center">Atau login dengan:</p>
                        <div class="text-center d-flex justify-content-center">
                            <a href="/redirect" class="text-center rounded mx-3"><img width="30" src="images/google.svg" alt=""></a>
                            <a href="/redirect" class="text-center rounded mx-3"><img width="30" src="images/facebook.svg" alt=""></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <FlashMessage/>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
import FlashMessage from "../../../components/FlashMessage";

export default {
    data() {
        return {
            email: null,
            password: null,
            validation_error: []
        }
    },
    components: {
        FlashMessage
    },
    methods: {
        ...mapActions({
            login: "auth/login",
            messages: 'store_layout/flashMessage'
        }),
        submit() {
            this.$refs.submitButton.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
            this.login({
                payload: {
                    email: this.email,
                    password: this.password,
                }
            })
            .then((res) => {
                // belum ngeset state untuk authentikasi
                this.$refs.submitButton.innerHTML = '<i class="fas fa-check"></i> Success'
                this.$refs.submitButton.classList = 'btn btn-block btn-success'
                this.validation_error = []
                this.$router.replace({name: 'home'})
            })
            .catch((err) => {
                this.$refs.submitButton.innerHTML = 'Masuk'
                this.$refs.submitButton.classList = 'btn btn-block btn-primary font-weight-bold'
                switch (err.status) {
                    case 422:
                        this.validation_error = err.data.data
                        break;
                    case 401:
                        this.messages({
                            payload: {
                                title: 'Login Failed!',
                                text: err.data.message
                            }
                        })
                        break;

                    default:
                        this.messages({
                            payload: {
                                title: 'Oops, Something Went Wrong!',
                                text: err.data.message
                            }
                        })
                    break;
                }
            })
        }
    }
}
</script>
