import { isEmpty, reject } from "lodash"
import { setHttpToken } from "../../../helpers"

export const login = ({dispatch,commit},{payload}) => {
    return new Promise((resolve,reject) => {
        axios.post('/api/auth/login',payload)
            .then((res) => {

                dispatch('setAuthenticated',res.data.data)

                resolve(res.data)
            })
            .catch((err) => {
                reject(err.response)
            })
    })
}

export const register = ({dispatch,commit},{payload}) => {
    return new Promise((resolve,reject) => {
        axios.post('/api/auth/register',payload)
        .then((res) => {
            resolve(res.data)
        })
        .catch((err) => {
            reject(err.response)
        })
    })
}

export const authenticated = ({dispatch,commit},data) => {
    commit('setAuthenticated',true)
}

export const fetchUser = ({commit}) => {
    return axios.get('api/auth/me')
        .then((res) => {
            commit('setAuthenticated',true)
            commit('setUserData',res.data)
        })
        .catch((err) => {

        })
}


export const checkTokenExists = () => {
    const token = localStorage.getItem('access_token')
    if (isEmpty(token)) {
        return Promise.reject("NO_STORAGE_FOUND")
    }
    return Promise.resolve(token)
}

export const logout = ({dispatch}) => {
    return axios.post("api/auth/logout")
    .then((res) => {
        dispatch('removeToken')
    })
    .catch((err) => {

    })
}



export const setToken = ({commit,dispatch},token) => {
    if (isEmpty(token)) {
        return dispatch('checkTokenExists').then((res) => {
            setHttpToken(token)
        })
    }
    commit('setToken',token)
    setHttpToken(token)
}

export const removeToken = ({commit}) => {
    commit('setAuthenticated',false)
    commit('setUserData',null)
    commit('setToken',null)
    setHttpToken(null)
}
