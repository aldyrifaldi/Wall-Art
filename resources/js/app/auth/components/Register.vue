<template>
    <div class="full-height auth-screen d-flex justify-content-center">
        <div class="card align-self-center p-3" >
            <div class="card-body">
                <h3 class="text-center font-weight-bold">GALLERY PHOTO</h3>
                <form class="mt-3" @submit.prevent="submit">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Depan</label>
                                <input type="text" :class="{'is-invalid':validation_error.first_name}" class="form-control" v-model="first_name" name="first_name" placeholder="Nama depan">
                                <small class="text-danger" v-if="validation_error.first_name">{{validation_error.first_name[0]}}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Belakang</label>
                                <input :class="{'is-invalid':validation_error.last_name}" type="text" class="form-control" v-model="last_name" name="last_name" placeholder="Nama belakang">
                                <small class="text-danger" v-if="validation_error.last_name">{{validation_error.last_name[0]}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input :class="{'is-invalid':validation_error.email}" type="email" class="form-control" name="email" v-model="email" placeholder="Masukkan email">
                        <small class="text-danger" v-if="validation_error.email">{{validation_error.email[0]}}</small>
                    </div>
                    <div class="form-group">
                        <label for="">No Telp</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" :class="{'is-invalid':validation_error.phone_number}" name="phone_number" v-model="phone_number" class="form-control" placeholder="Masukkan nomor telepon">
                        </div>
                        <small class="text-danger" v-if="validation_error.phone_number">{{validation_error.phone_number[0]}}</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input :class="{'is-invalid':validation_error.password}" type="password" v-model="password" name="password" class="form-control" placeholder="Masukkan password">
                                <small class="text-danger" v-if="validation_error.password">{{validation_error.password[0]}}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input :class="{'is-invalid':validation_error.password}" type="password" class="form-control" v-model="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button ref="submitButton" class="btn btn-block btn-primary">Daftar</button>
                        <p class="m-2 text-center">Telah memiliki akun? <router-link :to="{name:'login'}">Masuk</router-link></p>
                    </div>
                </form>
                <p class="text-center">Atau login dengan:</p>
                <div class="text-center d-flex justify-content-center">
                    <a href="/redirect" class="text-center rounded mx-3"><img width="30" src="images/google.svg" alt=""></a>
                    <a href="/redirect" class="text-center rounded mx-3"><img width="30" src="images/facebook.svg" alt=""></a>
                </div>
            </div>
        </div>
        <FlashMessage/>
    </div>
</template>

<script>
import {mapActions,mapGetters, mapState} from "vuex";
import FlashMessage from "../../../components/FlashMessage";

export default {
    data() {
        return {
            first_name: null,
            last_name: null,
            email: null,
            phone_number: null,
            password: null,
            password_confirmation: null,
            validation_error: []
        }
    },
    components: {
        FlashMessage
    },
    methods: {
        ...mapActions({
            register: "auth/register",
            messages: "store_layout/flashMessage",
        }),
        submit() {
            this.$refs.submitButton.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
            this.register({
                payload: {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    phone_number: this.phone_number,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                }
            })
            .then((res) => {
                this.$refs.submitButton.innerHTML = '<i class="fas fa-check"></i> Success'
                this.$refs.submitButton.classList = 'btn btn-block btn-success'
                this.validation_error = []
                this.$router.replace({name: 'login'})
            })
            .catch((err) => {
                this.$refs.submitButton.innerHTML = 'Register'
                this.$refs.submitButton.classList = 'btn btn-block btn-primary font-weight-bold'
                switch (err.status) {
                    case 422:
                        this.validation_error = err.data.data
                        break;
                    case 401:
                        this.messages({
                            payload: {
                                title: 'Register Failed!',
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
