import Vue from "vue";
import beforeEach from "./beforeEach";
import VueRouter from "vue-router";
import auth from "../app/auth/router";
import home from "../app/home/router";
import dashboard from "../app/dashboard/router";

const routes = [...auth,...home,...dashboard]

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes,
})



export default function(store) {
    router.beforeEach(beforeEach(store));
    return router   ;
}
