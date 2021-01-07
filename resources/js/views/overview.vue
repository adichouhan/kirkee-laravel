<template lang="html">
  <section class="dashboard">
    <div class="row dashboard">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
        <p>Get summary of your weekly online transactions here.</p>
      </div>
      <div class="col-sm-6 icon-set">
        <div class="row">
          <div class="col-sm-3 icon-help">
            <i class="mdi mdi-help-circle"></i>
            <span class="help-text ml-2">Help</span>
          </div>
          <div class="col-sm-3 help-option-icon">
            <i class="icon-email mdi mdi-email"></i>
            <i class="icon-bell mdi mdi-bell ml-2"></i>
          </div>
          <div class="col-sm-6">
            <div class="profile-item"><i class="mdi mdi-account"></i></div>
            <span class="profile-name ml-2">
              <p class="mb-0">Hedi</p>
              <p class="">Account Details</p>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row order-history">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-3">
            <div class="quote order">
              <h2>Orders History</h2>
              <img src="../assets/images/dashboard/file.png" alt="image" />
              <p><a href="#" class="click-here">Click here</a></p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="service order">
              <h2>Notifications</h2>
              <img src="../assets/images/dashboard/bell.png" alt="image" />
              <p><a href="#" class="click-here">Click here</a></p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="shipping order">
              <h2>Account</h2>
              <img src="../assets/images/dashboard/profile.png" alt="image" />
              <p><a href="#" class="click-here">Click here</a></p>
            </div>
          </div>
           <div class="col-sm-3">
            <div class="shipping order">
              <h2>Order Form</h2>
              <img src="../assets/images/dashboard/add.png" alt="image" />
              <p><a href="#" class="click-here">Click here</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-1"></div>
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

.icon-set .icon-help {
  color: #0278ae;
  font-size: 28px;
}
.icon-set .help-text {
  font-weight: bold;
  font-size: 14px;
  line-height: 17px;
  color: #696f79;
}
.icon-set .help-option-icon {
  color: #a9a9a9;
  font-size: 28px;
}
.icon-set .profile-item {
  width: 40px;
  height: 40px;
  border-radius: 25px;
  background: #ffc145;
  color: #696f79;
  text-align: center;
  font-size: 27px;
  display: inline-block;
}
.icon-set .profile-name {
  display: inline-block;
}
.order-history {
  margin-top: 138px;
  .order {
    padding: 15px;
    margin: 15px;
    text-align: center;
     background: #ffffff;
    box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06),
      0px 2px 6px rgba(0, 0, 0, 0.04), 0px 0px 1px rgba(0, 0, 0, 0.04);
    border-radius: 20px;
    h2 {
      font-family: Arial;
      font-style: normal;
      font-weight: bold;
      font-size: 23.9789px;
      line-height: 28px;
      text-align: center;
      color: #696969;
    }
    img {
      height: 60px;
      width: 65px;
      margin-top: 18px;
    }
    p {
      padding: 30px 0px 20px 0px;
      a {
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 20.1118px;
        line-height: 23px;
        text-align: center;
        color: #404040;
      }
    }
  }
}
</style>
