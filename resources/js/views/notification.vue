<template lang="html">
  <section class="dashboard">
    <div class="row dashboard">
      <div class="col-sm-6">
        <h1>Notification</h1>
        <p>Select the type you want to get orders history</p>
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
    <div class="notification-detail-section">
      <div class="row notification-main-heading">
        <div class="col-sm-6">
          <h4>All Notifications</h4>
          <p class="mb-0">New Orders</p>
        </div>
        <div class="col-sm-6 notification-main-btn">
          <button type="button" class="btn unread-btn mr-1">
            <router-link class="nav-link unread-link" to="/login/"
              >unread</router-link
            >
          </button>
          <button type="button" class="btn read-btn">
            <router-link class="nav-link read-link" to="/login/"
              >read</router-link
            >
          </button>
        </div>
      </div>
      <div class="row notification-option-view left-border ml-0 mr-0">
        <div class="col-sm-6 pl-0">
          <h4>Order Shipped</h4>
          <div>
            <span class="notification-time-text">1 minute ago</span
            ><span class="ml-5"><a href="#">View</a></span>
          </div>
        </div>
        <div class="col-sm-6 notification-main-btn pr-0">
          <button type="button" class="btn dismiss-btn">
            <router-link class="nav-link dismiss-link" to="/login/"
              >Dismiss</router-link
            >
          </button>
        </div>
      </div>
      <div class="row notification-option-view left-border ml-0 mr-0">
        <div class="col-sm-6 pl-0">
          <h4>New Message from Hedi</h4>
          <div>
            <span class="notification-time-text">1 minute ago</span
            ><span class="ml-5"><a href="#">View</a></span>
          </div>
        </div>
        <div class="col-sm-6 notification-main-btn pr-0">
          <button type="button" class="btn dismiss-btn">
            <router-link class="nav-link dismiss-link" to="/login/"
              >Dismiss</router-link
            >
          </button>
        </div>
      </div>
      <div class="row notification-option-view left-border ml-0 mr-0">
        <div class="col-sm-6 pl-0">
          <h4>Order Delivered</h4>
          <div>
            <span class="notification-time-text">1 minute ago</span
            ><span class="ml-5"><a href="#">View</a></span>
          </div>
        </div>
        <div class="col-sm-6 notification-main-btn pr-0">
          <button type="button" class="btn dismiss-btn">
            <router-link class="nav-link dismiss-link" to="/login/"
              >Dismiss</router-link
            >
          </button>
        </div>
      </div>
      <div class="row notification-option-view ml-0 mr-0">
        <div class="col-sm-6 pl-0">
          <h4></h4>
          <div>
            <span class="notification-time-text"></span
            ><span class="ml-5"><a href="#"></a></span>
          </div>
        </div>
        <div class="col-sm-6 notification-main-btn pr-0">
          <!-- <button type="button" class="btn dismiss-btn">
            <router-link class="nav-link dismiss-link" to="/login/"
              ></router-link
            >
          </button> -->
        </div>
      </div>
    </div>
    <div class="row help-footer-view">
      <div class="col-sm-10"></div>
      <div class="col-sm-2 icon-help">
        <i class="mdi mdi-help-circle"></i>
        <span class="help-text ml-2">Help</span>
      </div>
    </div>
  </section>
</template>

<script lang="js">
export default {
  name: 'notification'
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
.icon-help {
  color: #0278ae;
  font-size: 28px;
}
.help-text {
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
.notification-detail-section {
  border: 1px solid #dfe0eb;
  box-sizing: border-box;
  border-radius: 8px;
  margin-top: 36px;
}
.btn.unread-btn {
  width: 124px;
  height: 38px;
  background: #0278ae;
  border: 1px solid #0278ae;
  box-sizing: border-box;
  border-radius: 5px;
}
.nav-link.unread-link {
  font-weight: bold;
  font-size: 11px;
  line-height: 14px;
  display: flex;
  align-items: center;
  text-align: center;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  color: #fefefe;
  line-height: 5px;
}
.nav-link.read-link {
  font-weight: bold;
  font-size: 11px;
  line-height: 14px;
  display: flex;
  align-items: center;
  text-align: center;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  color: #242424;
  line-height: 5px;
}
.btn.read-btn {
  width: 124px;
  height: 38px;
  background: #ffffff;
  border: 1px solid#242424;
  box-sizing: border-box;
  border-radius: 5px;
}
.nav-link.read-link {
  color: #242424;
}
.notification-main-heading {
  padding: 30px;
  padding-bottom: 15px;
}
.notification-main-heading h4 {
  font-weight: bold;
  font-size: 24px;
  line-height: 30px;
  letter-spacing: 0.4px;
  color: #252733;
}
.notification-main-heading p {
  font-size: 18px;
  line-height: 16px;
  letter-spacing: 0.1px;
  color: #9fa2b4;
}
.notification-main-btn {
  text-align: end;
}
.notification-option-view {
  border-top: 1px solid #dfe0eb;
  padding: 30px;
  padding-bottom: 15px;
}
.btn.dismiss-btn {
  background: #f12b2c;
  border-radius: 8px;
  padding: 0px 15px;
}
.nav-link.dismiss-link {
  font-weight: bold;
  font-size: 11px;
  line-height: 14px;
  color: #ffffff;
  text-transform: uppercase;
}
.notification-time-text {
  font-size: 14px;
  line-height: 16px;
  letter-spacing: 0.1px;
  color: #9fa2b4;
}
.notification-option-view h4 {
  font-weight: 600;
  font-size: 18px;
  line-height: 20px;
  letter-spacing: 0.2px;
  color: #252733;
}
.notification-option-view a {
  color: #007aff;
  font-weight: 600;
  font-size: 14px;
  font-style: normal;
}
.notification-option-view.left-border {
  border-left: 6px solid #245aab;
}
.help-footer-view{
  margin-top: 10%;
}
</style>
