export default {
    //To authenticate user Details
    getAuthenticateUserRegister(context, payload) {
        payload.form.post('/api/register')
            .then((response) => {
                console.log(response)
                // console.log(response.data)
                if(200 === response.data.status){
                    payload.router.push('/login')
                }
                else {
                    context.commit('setErrors', {errors:  [response.data.error.message]});
                }
            }, (err) => {
                context.dispatch('showErrors', response);
                // context.commit('setErrors', {errors: [strSystemErrorMessage]});
            });
    },


    addNewUser({commit}, payload) {

    },



}


