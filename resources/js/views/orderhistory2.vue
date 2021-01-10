<template lang="html">
  <section class="dashboard">
    <div class="row dashboard dashboard-header">
      <div class="col-sm-4">
        <h1>{{ $t("Orders History") }}</h1>
        <p>{{$t("Get a summary of your order history")}}</p>
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
          >{{$t("View in templates")}}</label
          >
        </div>
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
    <div class="order-history-view">
      <div class="row">
        <div class="col-sm-4">
          <h4>Order forms history</h4>
        </div>
        <div class="col-sm-4">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <i class="mdi mdi-magnify"></i>
              <select>
                <option selected="">Search by order No.</option>
                <option value="name">Search by Name</option>
                <option value="date">Search by Date</option>
              </select
              >
            </div>
            <input type="text" class="form-control" id="usr" name="username" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="col-sm-4">
              <button type="button" class="btn select-all-btn">
                <router-link class="nav-link select-all-link" to="/login/"
                >{{$t("Select all")}}</router-link
                >
              </button>
            </div>
            <div class="col-sm-4 delete-select">
              <i class="mdi mdi-minus-box"></i>
              <h6>(2)</h6>
              <i class="mdi mdi-chevron-down"></i>
            </div>
            <div class="col-sm-4">
              <h4 class="download-all">{{$t("Download All")}}</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="order-history-table">
        <table class="table">
          <thead>
          <tr>
            <th>Status</th>
            <th>Date</th>
            <th>Price</th>
            <th>Categories</th>
            <th></th>
            <th>something else</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              <button type="button" class="btn btn-warning">
                in progress
              </button>
            </td>
            <td>13 Dec 2020</td>
            <td>$75.67</td>
            <td></td>
            <td>
              <i class="mdi mdi-download"></i
              ><span class="download-text">{{$t("Download")}}</span>
            </td>
            <td class="order-checkbox-label">
              Chairs
              <input
                      type="checkbox"
                      id="defaultCheck1"
                      name="example2"
                      class="orderhistory-checkbox"
              />
              <label for="defaultCheck"></label>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-success">{{$t("Done")}}</button>
            </td>
            <td>13 Dec 2020</td>
            <td>$75.67</td>
            <td></td>
            <td>
              <i class="mdi mdi-download"></i
              ><span class="download-text">{{$t("Download")}}</span>
            </td>
            <td class="order-checkbox-label">
              Chairs
              <input
                      type="checkbox"
                      id="defaultCheck2"
                      name="example2"
                      class="orderhistory-checkbox"
              />
              <label for="defaultCheck"></label>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-info btn-waiting">
                waiting
              </button>
            </td>
            <td>13 Dec 2020</td>
            <td>$75.67</td>
            <td></td>
            <td>
              <i class="mdi mdi-download"></i
              ><span class="download-text">{{$t("Download")}}</span>
            </td>
            <td class="order-checkbox-label">
              Chairs
              <input
                      type="checkbox"
                      id="defaultCheck"
                      name="example2"
                      class="orderhistory-checkbox"
              />
              <label for="defaultCheck"></label>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-danger">{{$t("cancelled")}}</button>
            </td>
            <td>13 Dec 2020</td>
            <td>$75.67</td>
            <td></td>
            <td class="order-checkbox-label">
              <i class="mdi mdi-download"></i
              ><span class="download-text">{{$t("Download")}}</span>
            </td>
            <td class="order-checkbox-label">
              Chairs
              <input
                      type="checkbox"
                      id="defaultCheck4"
                      name="example2"
                      class="orderhistory-checkbox"
              />
              <label for="defaultCheck"></label>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-warning">
                in progress
              </button>
            </td>
            <td>13 Dec 2020</td>
            <td>$75.67</td>
            <td></td>
            <td>
              <i class="mdi mdi-download"></i
              ><span class="download-text">{{$t("Download")}}</span>
            </td>
            <td class="order-checkbox-label">
              Chairs
              <input
                      type="checkbox"
                      id="defaultCheck3"
                      name="example2"
                      class="orderhistory-checkbox"
              />
              <label for="defaultCheck"></label>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</template>

<script lang="js">
  export default {
    name: 'orderhistory2'
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
  .order-history-view {
    background: #ffffff;
    box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06), 0px 2px 6px rgba(0, 0, 0, 0.04),
    0px 0px 1px rgba(0, 0, 0, 0.04);
    padding: 30px;
    margin: 30px;
  }
  .btn.select-all-btn {
    background: #0074bd;
    border-radius: 5px;
    padding: 2px 10px;
  }
  .nav-link.select-all-link {
    font-weight: bold;
    font-size: 11px;
    line-height: 14px;
    color: #ffffff;
    text-transform: uppercase;
  }
  .delete-select {
    margin-top: -6px;
    display: inherit;
  }
  .delete-select i {
    color: #0074bd;
    font-size: 32px;
  }
  .delete-select h6 {
    color: #0074bd;
    margin-left: 10px;
    margin-top: 16px;
    font-size: 14px;
  }
  .download-all {
    font-size: 12px;
    line-height: 14px;
    color: #404040;
    margin-top: 10px;
  }
  .order-history-table {
    margin-top: 34px;
  }
  .order-history-table .table thead th {
    font-size: 18px;
    line-height: 21px;
    color: #000000;
    padding-left: 49px;
  }
  .order-history-table tbody td .btn {
    width: 100px;
    border-radius: 100px;
    padding: 5px 10px !important;
    font-size: 11px;
    line-height: 14px;
    text-align: center;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #ffffff;
  }
  .order-history-table tbody td {
    font-size: 16px;
    line-height: 18px;
    color: #000000;
    padding: 30px;
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
    border-color:#66CC66 !important;
    background-color: #66CC66 !important;
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
  .download-text {
    font-size: 14px;
    line-height: 16px;
    color: #404040;
  }
  .order-history-view .input-group-prepend i {
    background: #f5f5f5;
    padding: 2px;
    padding-top: 4px;
    font-size: 21px;
    color: rgba(0, 0, 0, 0.55);
  }
  .order-history-view .input-group-prepend select {
    border: none;
    background: #f5f5f5;
    color: rgba(0, 0, 0, 0.55);
  }
  .order-history-view .form-control {
    font-size: 16px;
  }
  .btn.btn-waiting {
    background: #6fa6f7;
    border-color: #6fa6f7;
  }
  .order-history-table .orderhistory-checkbox {
    margin-left: 50%;
    width: 22px;
    height: 22px;
  }
  .order-checkbox-label {
    padding-top: 24px !important;
  }
</style>
