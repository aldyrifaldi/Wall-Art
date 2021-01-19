<template>
    <div>
        <FlashMessage/>
        <router-view></router-view>
    </div>
</template>

<script>

import FlashMessage from "./FlashMessage";

export default {
    data() {
        FlashMessage
    }
}
</script>
