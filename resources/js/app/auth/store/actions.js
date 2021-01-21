export const login = ({dispatch,commit},{payload}) => {
    console.log(payload);
    return axios.post('/api/auth/login',payload)
    .then((res) => {
        console.log(res.data);
    })
    .catch((err) => {
        console.log(err.response.data);
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
