<template>
    <div>
        <router-view>
        </router-view>
    </div>
</template>

<script>
import {setupInterceptor} from "../helpers";
import FlashMessage from "./FlashMessage";

export default {
    created: function() {
        setupInterceptor(() => {
            this.$store.commit("auth/setAuthenticated",false)
            localStorage.removeItem('access_token')
            this.$router.replace({name: 'login'})
        })
    },
    components: {
        FlashMessage
    },

}
</script>
