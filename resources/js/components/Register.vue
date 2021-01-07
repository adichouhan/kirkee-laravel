<template lang="html">
  <div>
    <div class="row">
      <div class="col-sm-5">
        <div>
          <img
            src="../assets/images/auth/Frame.png"
            class="auth-leftview-image"
           alt="logo.png"/>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="auth-rightside-view">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <form class="auth-form" @submit.prevent="register" @keydown="form.onKeydown($event)">
                <p class="login-title">Register Your Account!</p>
                <p class="login-description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                </p>
                <div class="auth-bottom-border"></div>
                <div class="form-group">
                  <label>Your fullname*</label>
                  <input
                    type="text"
                    v-model="form.name"
                    :class="{ 'is-invalid': form.errors.has('name') }"
                    placeholder="Full Name"
                    class="form-control form-control-lg"
                  />
                </div>

                <div class="form-group">
                  <label>Email address*</label>
                  <input  v-model="form.email"
                          :class="{ 'is-invalid': form.errors.has('email') }"
                          type="email"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          placeholder="Enter email address"
                          class="form-control form-control-lg"
                  />
                </div>

                <div class="form-group">
                  <label>Phone Number*</label>
                  <input
                    type="number"
                    v-model="form.phone_number"
                    :class="{ 'is-invalid': form.errors.has('phone_number') }"
                    placeholder="Phone Number"
                    class="form-control form-control-lg"
                  />
                </div>
                <div class="form-group">
                  <label>Create password*</label>
                  <input
                    type="password"
                    v-model="form.password"
                    :class="{ 'is-invalid': form.errors.has('password') }"
                    placeholder="Enter your password"
                    class="form-control form-control-lg"
                  />
                </div>
                <div class="form-group">
                  <label>Confirm Password*</label>
                  <input
                    type="password"
                    v-model="form.confirm_password"
                    :class="{ 'is-invalid': form.errors.has('confirm_password') }"
                    placeholder="confirm password"
                    class="form-control form-control-lg"
                  />
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    v-model="form.terms"
                    :class="{ 'is-invalid': form.errors.has('terms') }"
                    class="custom-control-input"
                    id="defaultCheck"
                    name="checkbox"
                  />
                  <label class="custom-control-label" for="defaultCheck"
                    >I agree to terms & conditions</label
                  >
                </div>
                <button :disabled="form.busy" type="submit" class="btn btn-block btn-lg btn-login mt-4">
                  Register account
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
                <div @click="SocialRegister('google')" class="row card-body social-card-body">
                  <div class="col-sm-2 social-center-item">
                    <img
                      src="../assets/images/auth/google.png"
                      class="social-image"
                     alt="google"/>
                  </div>
                  <div class="col-sm-8 social-center-item auth-social-section">
                    Register with Google
                  </div>
                  <div class="col-sm-2"></div>
                </div>
              </div>
              <div class="card social-login-card mt-5">
                <div @click="SocialRegister('facebook')" class="row card-body social-card-body">
                  <div class="col-sm-2 social-center-item">
                    <img src="../assets/images/auth/facebook.png"
                    class="social-image"  alt="facebook"/>
                  </div>
                  <div class="col-sm-8 social-center-item auth-social-section">
                    Register with Facebook
                  </div>
                  <div class="col-sm-2"></div>
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
  name: 'app',
  data () {
    return {
      // Create a new form instance
      form: new Form({
        name:'',
        email: '',
        password: '',
        phone_number: '',
        confirm_password: '',
        remember: false
      })
    }
  },

  methods: {
    register() {
      this.$store.dispatch('getAuthenticateUserRegister', {
        email: this.email,
        phone_number: this.phone_number,
        confirm_password: this.confirm_password,
        password: this.password,
        router: this.$router,
        form : this.form
      });
    },

    AuthProvider(provider) {

      var self = this

      this.$auth.authenticate(provider).then(response =>{

        self.SocialLogin(provider,response)

      }).catch(err => {
        console.log({err:err})
      })

    },

    SocialRegister(provider,response){

      axios.get('/auth/'+provider,response).then(response => {
        sessionStorage.setItem("user_session_key", response.data.access_token);
        this.$router.push('/app')

      }).catch(err => {
        this.$store.commit('showErrors', err);
      })
    },

  },

  components: {

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
  align-items: center;
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
}
.auth-rightside-view {
  margin: 70px;
}
.form-group .custom-control-label {
  padding-top: 2px;
}
.social-center-item {
  text-align: center;
}
.auth-social-section {
  font-family: Inter;
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
}
</style>
