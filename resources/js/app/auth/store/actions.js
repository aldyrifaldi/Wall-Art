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
