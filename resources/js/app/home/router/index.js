import {Home,Theme} from "../components";

export default [
    {
        path: '/',
        component: Home,
        name: 'home',
        meta: {
            guest: true,
            authenticated: true,
        }
    },
    {
        path: '/theme',
        component: Theme,
        name: 'theme',
        meta: {
            guest: true,
            authenticated: true,
        }
    },
]
