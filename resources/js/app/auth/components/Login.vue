<template>
    <div class="full-height auth-screen d-flex justify-content-center">
        <div class="card align-self-center p-3" >
            <div class="card-body">
                <h4 class="text-center font-weight-bold">GALLERY PHOTO</h4>
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Masuk</button>
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
    </div>
</template>

<script>
export default {

}
</script>
