<template lang="html">
  <section class="dashboard">
    <div class="row dashboard dashboard-header">
      <div class="col-sm-7">
        <h1>{{ $t("Orders Types") }}</h1>
        <p>{{ $t("Select the type you want to get orders history") }}</p>
      </div>
      <div class="col-sm-5 icon-set">
        <div class="row">
          <div class="col-sm-3 icon-help">
            <i class="mdi mdi-help-circle"></i>
            <p class="help-text ml-2">{{ $t("Help") }}</p>
          </div>
          <div class="col-sm-3 help-option-icon d-inline-flex">
            <i class="icon-email mdi mdi-email"></i>
            <i class="icon-bell mdi mdi-bell ml-2"></i>
          </div>
          <div class="col-sm-6 d-inline-flex">
            <div class="profile-item">
              <img
                      class="header-profile-img"
                      src="../assets/images/account/account.png"
                      alt="deflute"
              />
            </div>
            <div class="profile-name ml-2 mt-1">
              <h6 class="mb-0">Hedi</h6>
              <p class="">{{ $t("Account Details") }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row order-history">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-4 mb-5">
            <div class="quote order">
              <h2>{{ $t("Quote Orders") }}</h2>
              <img src="../assets/images/dashboard/doc.png" alt="image" />
              <p><a href="#" class="click-here">{{ $t("Click here") }}</a></p>
            </div>
          </div>
          <div class="col-sm-4 mb-5">
            <div class="service order">
              <h2>{{ $t("Service Order") }}</h2>
              <img src="../assets/images/dashboard/user.png" alt="image" />
              <p><a href="#" class="click-here">{{ $t("Click here") }}</a></p>
            </div>
          </div>
          <div class="col-sm-4 mb-5">
            <div class="shipping order">
              <h2>{{ $t("Shipping Order") }}</h2>
              <img src="../assets/images/dashboard/car.png" alt="image" />
              <p><a href="#" class="click-here">{{ $t("Click here") }}</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-2"></div>
    </div>
  </section>
</template>

<script lang="js">
  export default {
    name: 'orderhistory'
  }
</script>

<style scoped lang="scss">
  .dashboard div h1 {
    font-family: Arial;
    font-style: normal;
    font-weight: bold;
    font-size: 43.3726px;
    line-height: 50px;
    color: #404040;
  }
  .dashboard div p {
    font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 16.0564px;
    line-height: 18px;
    color: #aeaeae;
  }
  .dashboard-header {
    padding: 50px 30px;
  }
  .icon-set .icon-help {
    color: #0278ae;
    font-size: 28px;
    display: inline-flex;
  }
  .icon-set .help-text {
    font-weight: bold;
    font-size: 14px;
    line-height: 17px;
    color: #696f79;
    margin-top: 12px;
  }
  .icon-set .help-option-icon {
    color: #a9a9a9;
    font-size: 28px;
  }
  .icon-set .profile-name {
    display: inline-block;
  }
  .order-history {
    margin-top: 138px;
    .order {
      padding: 15px;
      text-align: center;
      background: #ffffff;
      box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06),
      0px 2px 6px rgba(0, 0, 0, 0.04), 0px 0px 1px rgba(0, 0, 0, 0.04);
      border-radius: 20px;
      h2 {
        font-family: Arial;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 28px;
        text-align: center;
        color: #696969;
      }
      img {
        height: 50px;
        width: 50px;
        margin-top: 18px;
      }
      p {
        padding: 30px 0px 20px 0px;
        a {
          font-family: Arial;
          font-style: normal;
          font-weight: normal;
          font-size: 16px;
          line-height: 23px;
          text-align: center;
          color: #404040;
        }
      }
    }
  }
  .header-profile-img{
    width: 40px;
    height: 40px;
    border-radius: 25px;
  }
  @media (max-width: 767px) {
    .order-history {
      margin-top: 0px !important;
    }
  }
</style>
