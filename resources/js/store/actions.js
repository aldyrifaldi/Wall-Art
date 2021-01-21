export const flashMessage = ({commit},{payload}) => {
    commit('setFlashMessage',payload)
}
