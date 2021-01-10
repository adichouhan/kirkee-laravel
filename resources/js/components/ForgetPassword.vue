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
              <p class="back-title">{{ $t("Back") }}</p>
            </button>
          </div>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <form class="auth-form">
                <p class="login-title">{{ $t("Forgot your password?") }}</p>
                <p class="login-description">
                  {{ $t("Enter your email that you used to create your account and we will reset your password for you") }}
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

                <button
                        type="button"
                        class="btn btn-block btn-lg btn-login"
                        @click="getShowModal(showModal)"
                >
                  {{ $t("Request new password") }}
                </button>
                <div v-if="showModal">
                  <transition name="modal">
                    <div class="modal-mask forgetPassowrd-modal">
                      <div class="modal-wrapper">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title">
                                {{ $t("Change password") }}
                              </h1>
                              <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                              >
                                <span
                                        aria-hidden="true"
                                        @click="getShowModal(showModal)"
                                >&times;</span
                                >
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="error-view">
                                <div class="row">
                                  <div class="col-sm-2">
                                    <img
                                            src="../assets/images/auth/erroralert.png"
                                    />
                                  </div>
                                  <div class="col-sm-10">
                                    <h6 class="mt-2">{{ $t("Network error") }}</h6>
                                  </div>
                                </div>
                              </div>
                              <div class="forget-password-error">
                                <h6>
                                  {{ $t("Password must be at least 8 characters and include at least one:") }}
                                </h6>
                                <div class="row">
                                  <div class="col-6">
                                    <p>- {{ $t("Lowercase letter") }} </p>
                                    <p>- {{ $t("Uppercase letter") }}</p>
                                  </div>
                                  <div class="col-6">
                                    <p>- {{ $t("Number") }}</p>
                                    <p>- {{ $t("Special character") }}</p>
                                  </div>
                                </div>
                              </div>
                              <form class="change-password-form">
                                <div class="form-group">
                                  <label> {{ $t("Old password") }}</label>
                                  <input
                                          type="password"
                                          class="form-control form-control-lg"
                                  />
                                </div>

                                <div class="form-group">
                                  <label>{{ $t("New password") }}</label>
                                  <input
                                          type="password"
                                          class="form-control form-control-lg"
                                  />
                                </div>
                                <div class="form-group">
                                  <label>{{ $t("Confirm new password") }}</label>
                                  <input
                                          type="password"
                                          class="form-control form-control-lg"
                                  />
                                </div>
                                <button
                                        type="submit"
                                        class="btn btn-block btn-lg btn-login"
                                >
                                  {{ $t("Change password") }}
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </transition>
                </div>
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
    data: function () {
      return {
        showModal: false
      }
    },
    methods:{
      getShowModal(isShow){
        if(isShow == false){
          this.showModal = true;
        }
        else {
          this.showModal = false;
        }
      }
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
  .auth-form .form-group label {
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #696f79;
  }
  .auth-form .form-control.form-control-lg {
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
  .auth-rightside-view .btn {
    display: inherit !important;
  }
  .modal-mask {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: table;
    transition: opacity 0.3s ease;
  }

  .modal-wrapper {
    display: table-cell;
    vertical-align: middle;
  }
  .forgetPassowrd-modal .modal-header {
    border-bottom: none !important;
    padding-bottom: 0px;
  }
  .forgetPassowrd-modal .form-control {
    border-radius: 6px;
    height: 38px;
  }
  .forgetPassowrd-modal .modal-title {
    font-size: 28px;
    margin-top: 18px;
    padding-left: 11px;
  }
  .forgetPassowrd-modal .modal-dialog {
    max-width: 370px;
    margin: 30px auto;
  }
  .forget-password-error p {
    margin-bottom: 2px;
    font-weight: normal;
    font-size: 12px;
    line-height: 16px;
    color: rgba(0, 0, 0, 0.55);
  }
  .forget-password-error h6 {
    font-weight: normal;
    font-size: 12px;
    line-height: 16px;
    color: rgba(0, 0, 0, 0.85);
  }
  .forgetPassowrd-modal .modal-body {
    padding: 29px;
  }
  .change-password-form {
    margin-top: 20px;
  }
  .change-password-form .form-group label {
    font-size: 14px !important;
    line-height: 20px !important;
    color: #333333 !important;
  }
  .change-password-form .form-control.form-control-lg {
    height: 36px !important;
  }
  .error-view {
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-sizing: border-box;
    border-radius: 6px;
    padding: 15px;
    width: 308px;
    margin-bottom: 30px;
  }
</style>