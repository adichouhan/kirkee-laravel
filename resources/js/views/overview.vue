<template lang="html">
  <section class="dashboard">
    <div class="row dashboard dashboard-header">
      <div class="col-sm-7">
        <h1>{{ $t("Dashboard") }}</h1>
        <p>{{ $t("Get summary of your weekly online transactions here.") }}</p>
      </div>
      <div class="col-sm-5 icon-set">
        <div class="row">
          <div class="col-sm-3 icon-help">
            <i class="mdi mdi-help-circle"></i>
            <p class="help-text ml-2">{{ $t("Help") }}</p>
          </div>
          <div class="col-sm-3 help-option-icon d-inline-flex">
            <i class="icon-email mdi mdi-email"></i>
            <i
                    class="icon-bell mdi mdi-bell ml-2"
                    @click="getShowModal(showModal)"
            ></i>
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
    <div class="row order-history">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-3 mb-5">
            <div class="quote order">
              <h2>{{ $t("Orders History") }}</h2>
              <img src="../assets/images/dashboard/file.png" alt="image" />
              <p>
                <a href="#" class="click-here">{{ $t("Click here") }}</a>
              </p>
            </div>
          </div>
          <div class="col-sm-3 mb-5">
            <div class="service order">
              <h2>{{ $t("Notifications") }}</h2>
              <img src="../assets/images/dashboard/bell.png" alt="image" />
              <p>
                <a href="#" class="click-here">{{ $t("Click here") }}</a>
              </p>
            </div>
          </div>
          <div class="col-sm-3 mb-5">
            <div class="shipping order">
              <h2>{{ $t("Account") }}</h2>
              <img src="../assets/images/dashboard/profile.png" alt="image" />
              <p>
                <a href="#" class="click-here">{{ $t("Click here") }}</a>
              </p>
            </div>
          </div>
          <div class="col-sm-3 mb-5">
            <div class="shipping order">
              <h2>{{ $t("Order Form") }}</h2>
              <img src="../assets/images/dashboard/add.png" alt="image" />
              <p>
                <a href="#" class="click-here">{{ $t("Click here") }}</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-1"></div>
      <div v-if="showModal">
        <transition name="modal">
          <div class="modal-mask modal-notification">
            <div class="modal-wrapper">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="notification-border">
                      <h3>{{ $t("Notifications") }}</h3>
                      <p class="mb-0">2 {{ $t("days ago") }}</p>
                    </div>
                    <div class="row notification-border ml-0 mr-0">
                      <div class="col-8 notification-text pl-0">
                        <p class="mb-0 mt-2">{{ $t("You have") }} 3 {{ $t("new notifications") }}</p>
                      </div>
                      <div class="col-4">
                        <button
                                type="button"
                                class="btn"
                                data-dismiss="modal"
                                aria-label="Close"
                        >
                          <p class="mb-0 dismiss-btn"
                             aria-hidden="true"
                             @click="getShowModal(showModal)"
                          > {{ $t("Dismiss") }}</p
                          >
                        </button>
                      </div>
                    </div>
                    <div class="notification-view-all"><i class="mdi  mdi-arrow-right"></i><span>{{ $t("View All") }}</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </transition>
      </div>
    </div>
  </section>
</template>

<script lang="js">
  export default {
    name: 'orderhistory',
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

<style scoped lang="scss">
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
    margin-top: 50px;
    .order {
      padding: 15px;
      text-align: center;
      background: #ffffff;
      box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06),
      0px 2px 6px rgba(0, 0, 0, 0.04), 0px 0px 1px rgba(0, 0, 0, 0.04);
      border-radius: 20px;
      margin: 20px;
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
  .header-profile-img {
    width: 40px;
    height: 40px;
    border-radius: 25px;
  }
  .modal-notification .modal-dialog{
    max-width: 350px;
  }
  .modal-notification .notification-border{
    border-bottom: 1px solid #DFE0EB;
    padding: 20px;
  }
  .modal-notification .dismiss-btn{
    color: #F12B2C;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 11px;
  }
  .notification-text p{
    font-size: 14px;
    line-height: 20px;
    color: #252733 !important;
  }
  .notification-view-all{
    background: #F2FAFF;
    padding: 20px;
    text-align: center;
    font-size: 22px;
  }
</style>
