<template>
    <div class="bg-light">
        <TopBar navClass="d-xl-none bg-dark navbar-dark fixed-top"/>
        <div class="container-fluid home-section-one" style="background-color: #fff3e6;">
            <div class="row">
                <div class="col-xl-7 d-flex full-height align-self-center">
                    <div class="align-self-start home-top-bar justify-content-between px-4 mt-3 d-flex position-absolute">

                        <div class="d-xl-flex d-none">
                            <router-link :to="{name: 'home'}" class="mt-2 h1 home-text-size-responsive  home-text-color-responsive font-weight-bolder">DHunt</router-link>
                            <div class="align-self-center ml-3 d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-around d-none">
                                <router-link :to="{name:'home'}" class="nav-link home-text-color-responsive active">Home <span class="sr-only">(current)</span></router-link>
                                <router-link :to="{name:'theme'}" class="nav-link home-text-color-responsive">Theme</router-link>
                                <router-link :to="{name:'testimonials'}" class="nav-link home-text-color-responsive">Testimonials</router-link>
                                <router-link :to="{name:'about'}" class="nav-link home-text-color-responsive">About</router-link>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group d-xl-block d-none mt-3 btn-group-md" v-if="!user.authenticated">
                                <router-link :to="{name:'login'}" class="btn btn-dark rounded-0">Login</router-link>
                                <router-link :to="{name:'register'}" class="btn rounded-0 btn-light">Register</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="container align-self-center justify-content-center p-lg-5">
                        <h1 class="display-4 home-text-align-responsive home-title home-text-size-responsive home-text-color-responsive">Turn your photos into affordable, stunning wall art</h1>
                        <div class="mt-4 home-text-align-responsive">
                            <button class="btn btn-lg btn-dark" style="border-radius:0px">Order Now!</button>
                            <router-link :to="{name:'theme'}" class="btn btn-lg home-btn-color-responsive" style="border-radius:0px">Next Page</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 bg-dark d-none d-xl-flex justify-content-around align-items-center">
                    <img src="img/uploads/image1.jpg" class="img-fluid" width="480" height="500" alt="">
                    <img src="images/frames/frame1.png" class="img-fluid position-absolute" style="" alt="">
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import {mapActions,mapGetters} from "vuex";

import TopBar from "../../../components/TopBar";
export default {
    data: () => {
        return {
        }
    },
    components: {
        TopBar
    },
    computed: {
        ...mapGetters({
            user: 'auth/user'
        })
    }
}
</script>
