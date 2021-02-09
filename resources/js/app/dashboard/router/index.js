import {Dashboard} from "../components";

export default [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            authenticated: true,
            guest: false
        }
    }
]
