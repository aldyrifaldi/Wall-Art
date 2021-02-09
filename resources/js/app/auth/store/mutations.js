import { isEmpty } from "lodash"

export const setAuthenticated = (state,trueOrFalse) => {
    state.user.authenticated = trueOrFalse
}

export const setUserData = (state,data) => {
    state.user.data = data
}

export const setToken = (state,token) => {
    console.log('bambang');
    if (isEmpty(token)) {
        localStorage.removeItem('access_token')
        return
    }
    localStorage.setItem('access_token',token)
}
