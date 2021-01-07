<template lang="html">
  <div>
    <div class="row">
      <div class="col-sm-5">
        <div>
          <img
            src="../assets/images/auth/Frame.png"
            class="auth-leftview-image"
          />
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
              <form class="auth-form">
                <p class="login-title">Forogot your password?</p>
                <p class="login-description">
                  Enter your email that you used to create your account and we
                  will reset your password for you
                </p>
                <div class="auth-bottom-border"></div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    placeholder="Enter your email address"
                    class="form-control form-control-lg"
                  />
                </div>

                <button type="submit" class="btn btn-block btn-lg btn-login">
                  Request new password
                </button>
              </form>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="js">

export default{
  name: 'ForgetPassword',
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
.auth-rightside-view i {
  color: #8692a6;
  font-size: 24px;
  margin-bottom: 14px;
}
.auth-rightside-view .btn{
display: inherit !important;
}
</style>
