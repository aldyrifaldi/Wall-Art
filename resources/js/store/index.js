import Vue from "vue";
import Vuex from "vuex";
import auth from "../app/auth/store";
import store_layout from "./store_layout";

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        auth: auth,
        store_layout: store_layout,
    }
})
