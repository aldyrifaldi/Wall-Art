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
                                <input type="text" class="form-control" v-model="first_name" name="first_name" placeholder="Nama depan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Belakang</label>
                                <input type="text" class="form-control" v-model="last_name" name="last_name" placeholder="Nama belakang">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" v-model="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="">No Telp</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" name="phone_number" v-model="phone_number" class="form-control" placeholder="Masukkan nomor telepon">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" v-model="password" name="password" class="form-control" placeholder="Masukkan password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" class="form-control" v-model="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Daftar</button>
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
    </div>
</template>

<script>
import {mapActions} from "vuex";

export default {
    data() {
        return {
            first_name: null,
            last_name: null,
            email: null,
            phone_number: null,
            password: null,
            password_confirmation: null,
        }
    },
    methods: {
        ...mapActions({
            register: "auth/register",
        }),
        submit() {
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
        }
    }
}
</script>
