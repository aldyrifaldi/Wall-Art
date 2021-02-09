
import store from '../store';

// const beforeEach =

export default function(store) {
    return async (to,from,next) => {
        try {
            console.log(store.getters['auth/user']);
            await store.dispatch("auth/checkTokenExists");
            if (to.meta.guest) {
                next({name: 'dashboard'})
            } else {
                next()
            }
            return
        } catch(error) {
            console.log(error);
            if (to.meta.authenticated) {
                localStorage.setItem("intended",to.name)
                next({name:"login"})
                return
            } else {
                next()
            }

        }
    }
}
