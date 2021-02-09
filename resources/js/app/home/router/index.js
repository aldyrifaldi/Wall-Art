import {Home,Theme} from "../components";

export default [
    {
        path: '/',
        component: Home,
        name: 'home',
        meta: {
            guest: false,
            authenticated: false,
        }
    },
    {
        path: '/theme',
        component: Theme,
        name: 'theme',
        meta: {
            guest: false,
            authenticated: false,
        }
    },
]
