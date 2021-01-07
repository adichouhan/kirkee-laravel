<template lang="html">
  <div>
    <div class="row">
      <div class="col-sm-5">
        <div>
          <img
            src="../assets/images/auth/Frame.png"
            class="auth-leftview-image"
           alt=""/>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="auth-rightside-view">
          <div class="row">
            <button type="button" class="btn">
              <i class="mdi mdi-chevron-left"></i>
              <p class="back-title">Back</p>
            </button>
          </div>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <form class="auth-form" @submit.prevent="login" @keydown="form.onKeydown($event)">
                <p class="login-title">Login to your account</p>
                <p class="login-description">
                  Login to your account to manage all your information and
                  details
                </p>
                <div class="auth-bottom-border"></div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    v-model="form.email"
                    placeholder="Enter your email address"
                    class="form-control form-control-lg"
                  />
                </div>

                <div class="form-group">
                  <label>Password*</label>
                  <input
                    type="password"
                    v-model="form.password"
                    placeholder="Enter your password"
                    class="form-control form-control-lg"
                  />
                </div>

                <div class="form-group">
                  <label
                    ><router-link class="auth-link" to="/ForgetPassword/"
                      >Forget your password</router-link
                    ></label
                  >
                </div>
                <button type="submit" class="btn btn-block btn-lg btn-login">
                  Login
                </button>
              </form>
              <div class="row mt-5">
                <div class="col-sm-5">
                  <div class="auth-bottom-border"></div>
                </div>
                <div class="col-sm-2">
                  <div class="border-title">or</div>
                </div>
                <div class="col-sm-5">
                  <div class="auth-bottom-border"></div>
                </div>
              </div>
              <div class="card social-login-card">
                <div class="row card-body social-card-body">
                  <div class="col-sm-4 social-center-item">
                    <span class="mr-3" @click="SocialRegister('google')">
                      <img
                        alt=""
                        src="../assets/images/auth/google.png"
                        class="social-image"
                    /></span>
                    <span class="mr-3" @click="SocialRegister('facebook')">
                      <img
                        alt=""
                        src="../assets/images/auth/facebook.png"
                        class="social-image"
                    /></span>
                  </div>
                  <div class="col-sm-8 auth-social-section">
                    Login with social media
                  </div>
                </div>
              </div>
              <div class="card social-login-card go-to-register mt-5">
                <div class="card-body social-card-body auth-social-section">
                  No account? Create an account now
                </div>
              </div>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="js">
  import Form from 'vform'
export default{
  name: 'login',
  data () {
    return {
      // Create a new form instance
      form: new Form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    login() {
      this.form.post('/api/login')
              .then((response) => {
                console.log(response)
                // console.log(response.data)
                if(200 === response.data.status){
                  sessionStorage.setItem("user_session_key", response.data.access_token);
                  this.$router.push('/app')
                }
                else {
                  this.$store.commit('setErrors', {errors:  [response.data.error.message]});
                }
              }, (err) => {
                this.$store.commit('showErrors', err);
                // context.commit('setErrors', {errors: [strSystemErrorMessage]});
              });
    },

    SocialRegister(provider,response){

      axios.get('/auth/'+provider,response).then(response => {
        sessionStorage.setItem("user_session_key", response.data.access_token);
        this.$router.push('/app')

      }).catch(err => {
        this.$store.commit('setErrors', err);
      })
    },
  }

}
</script>
<style scoped>
.auth-leftview-image {
  width: 100%;
  height: 100%;
  max-height: 100%;
  margin: 0;
  padding: 0;
}
.auth-form {
  margin-top: 70px;
}
.login-title {
  font-family: inter;
  font-style: normal;
  font-weight: bold;
  font-size: 30px;
  line-height: 36px;
  color: #000000;
}
.login-description {
  font-family: Inter;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: 28px;
  letter-spacing: 0em;
  text-align: left;
  color: #8692a6;
}
.form-group label {
  font-family: Inter;
  font-size: 16px;
  font-style: normal;
  font-weight: 500;
  line-height: 19px;
  letter-spacing: 0em;
  text-align: left;
  color: #696f79;
}
.form-control.form-control-lg {
  height: 50px !important;
}
.btn.btn-login {
  background-color: #1b85b6;
  color: #ffffff;
}
.auth-bottom-border {
  border: 1px solid #f5f5f5;
  margin-bottom: 30px;
}
.border-title {
  margin-top: -12px;
  align-items: center;
  text-align: center;
}
.social-login-card {
  background: #ffffff;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08);
  border-radius: 6px;
}
.social-image {
  width: 30px;
  height: 30px;
}
.social-card-body {
  padding: 20px !important;
}
.social-title {
  text-align: center;
}
.back-title {
  font-family: Inter;
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  line-height: 19px;
  display: flex;
  align-items: center;
  color: #8692a6;
  padding-top: 2px;
}
.auth-rightside-view {
  margin: 70px;
}
.social-center-item {
  text-align: center;
}
.go-to-register {
  align-items: center;
}
.auth-social-section {
  font-family: Inter;
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
}
label .auth-link {
  color: #696f79 !important;
}
.auth-rightside-view i {
  color: #8692a6;
  font-size: 24px;
  margin-bottom: 14px;
}
.auth-rightside-view .btn{
display: inherit !important;
}
</style>
