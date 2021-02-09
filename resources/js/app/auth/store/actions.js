import { isEmpty } from "lodash"
import { setHttpToken } from "../../../helpers"

export const login = ({dispatch,commit},{payload}) => {
    return axios.post('/api/auth/login',payload)
        .then((res) => {
            dispatch('setToken',res.data.data.token)
            .then(() => {
                dispatch('fetchUser')
            })
            return Promise.resolve()
        })
        .catch((err) => {
            return Promise.reject()
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

export const fetchUser = ({commit,dispatch}) => {
    axios.get('api/auth/me')
    .then((res) => {
        commit('setAuthenticated',true)
        commit('setUserData',res.data.data.item)
    })
    .catch((err) => {
        dispatch('removeToken')
    })
}


export const checkTokenExists = () => {
    const token = localStorage.getItem('access_token')
    if (isEmpty(token)) {
        return Promise.reject("NO_STORAGE_FOUND")
    } else {
        return Promise.resolve(token)
    }
}

export const logout = ({dispatch}) => {
    return axios.post("api/auth/logout")
    .then((res) => {
        dispatch('removeToken')
    })
    .catch((err) => {

    })
}

export const setAuthenticated = ({commit,dispatch},data) => {
    commit('setAuthenticated',true)
    commit('setUserData',data)
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
