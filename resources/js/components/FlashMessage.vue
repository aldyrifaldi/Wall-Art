<template>
    <div v-if="messages.title" style="position: fixed!important;right:0;" class="mt-2 mr-2 d-flex text-left justify-content-end">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong class="text-capitalize">{{messages.title}}</strong>
          <p>{{messages.text}}</p>
        </div>
    </div>
</template>


<script>
import {mapGetters, mapState} from "vuex";

export default {
    computed: {
        ...mapState({
            messages: (state) => {
                return state.store_layout.flash_message
            }
        }),
    },
    methods: {

    }
}

</script>
