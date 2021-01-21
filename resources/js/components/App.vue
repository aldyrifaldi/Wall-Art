<template>
    <div>
        <router-view>
        </router-view>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';

import FlashMessage from "./FlashMessage";

export default {
    components: {
        FlashMessage
    },

}
</script>
