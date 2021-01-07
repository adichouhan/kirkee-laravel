<template lang="html">
  <section class="dashboard">
    <div class="row dashboard dashboard-header">
      <div class="col-sm-4">
        <h1>Order History</h1>
        <p>Get a summary of your order history</p>
      </div>
      <div class="col-sm-3 mt-2">
        <div class="custom-control custom-switch">
          <input
                  type="checkbox"
                  class="custom-control-input"
                  id="switch1"
                  name="example"
          />
          <label class="custom-control-label" for="switch1"
          >View in templates</label
          >
        </div>
      </div>
      <div class="col-sm-5 icon-set">
        <div class="row">
          <div class="col-sm-3 icon-help">
            <i class="mdi mdi-help-circle"></i>
            <p class="help-text ml-2">Help</p>
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
              <p class="">Account Details</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row orderhistory-download-view">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-info btn-waiting">
                waiting
              </button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-success">done</button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-warning">
                in progress
              </button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-success">done</button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-danger">cancelled</button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="Download-card-view">
              <button type="button" class="btn btn-danger">cancelled</button>
              <div class="download-image">
                <img
                        src="../assets/images/dashboard/download.png"
                        alt="image"
                />
              </div>
            </div>
            <div class="download-btn">
              <i class="mdi mdi-download"></i
              ><span class="download-text">Download</span>
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
    name: 'orderhistory3'
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
  .header-profile-img{
    width: 40px;
    height: 40px;
    border-radius: 25px;
  }
  .custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 51px !important;
    height: 31px !important;
    pointer-events: all;
    border-radius: 50px !important;
    background: #e2e7ed;
    border: #e2e7ed solid 1px;
  }
  .custom-switch .custom-control-label::after {
    width: 28px;
    height: 28px;
    background-color: #ffffff;
    border-radius: 25px;
  }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #66cc66 !important;
    background-color: #66cc66 !important;
  }
  .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    -webkit-transform: translateX(1.2rem) !important;
    transform: translateX(1.2rem) !important;
  }
  .dashboard .custom-control-label {
    padding-left: 30px;
    padding-top: 12px;
    font-size: 16.0564px;
    line-height: 18px;
    color: #aeaeae;
  }
  .Download-card-view {
    background: #ffffff;
    box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06), 0px 2px 6px rgba(0, 0, 0, 0.04),
    0px 0px 1px rgba(0, 0, 0, 0.04);
    border-radius: 20px;
    margin: 20px;
    padding: 30px;
  }
  .Download-card-view .btn {
    width: 100px;
    border-radius: 100px;
    padding: 5px 10px !important;
    font-size: 11px;
    line-height: 14px;
    text-align: center;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #ffffff;
    margin-bottom: 26px;
  }
  .Download-card-view .download-image {
    text-align: center;
    margin-bottom: 52px;
  }
  .download-btn {
    text-align: center;
    font-size: 24px;
    color: #404040;
  }
  .btn.btn-waiting {
    background: #6fa6f7;
    border-color: #6fa6f7;
  }
  .orderhistory-download-view {
    margin-top: 55px;
  }
  .download-image img{
    width: 100%;
  }
  @media (max-width: 767px) {
    .orderhistory-download-view {
      margin-top: 0px !important;
    }
  }
</style>
