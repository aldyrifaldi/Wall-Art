<template>
    <nav :class="'navbar navbar-expand-sm '+ navClass" :style="navStyle">
        <router-link :to="{name: 'home'}" :class="'navbar-brand font-weight-bold h1 mt-3 '+ navBrandClass" :style="navBrandStyle" href="#">DHunt</router-link>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <router-link class="nav-link" :to="{name: 'home'}">Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'theme'}" class="nav-link" href="#">Themes</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'about'}" class="nav-link" href="#">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'testimonials'}" class="nav-link" href="#">Testimonials</router-link>
                </li>
                <li class="nav-item" v-if="!user.authenticated">
                    <router-link :to="{name:'login'}" class="nav-link">Login</router-link>
                </li>
                <li class="nav-item" v-if="!user.authenticated">
                    <router-link :to="{name:'register'}" class="nav-link">Register</router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
    props: ['navClass','navStyle','navBrandClass','navBrandStyle'],
    data: () => {
        return {
        }
    },
    computed: {
        ...mapGetters({
            user: 'auth/user'
        })
    }
}
</script>
