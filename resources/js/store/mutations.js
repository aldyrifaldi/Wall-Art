export const setFlashMessage = (state,messages) => {
    state.flash_message.title = messages.title
    state.flash_message.text = messages.text
}
