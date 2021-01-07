<template lang="html">
  <section class="app-sidebar">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <div class="profile-image">
              <img src="../../assets/images/dashboard/logo.png" alt="image" />
              <span class="online-status online">Keerki</span>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/overview"
            ><i class="mdi mdi-chart-line" alt="chart icon" /><span
              class="menu-title"
              >Overview</span
            ></router-link
          >
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/orderhistory"
            ><i class="mdi mdi-menu" alt="chart icon" /><span class="menu-title"
              >Order History</span
            ></router-link
          >
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/account"
            ><i class="mdi mdi-chart-line" alt="chart icon" /><span
              class="menu-title"
              >Account</span
            ></router-link
          >
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/notification"
            ><i class="mdi mdi-chart-line" alt="chart icon" /><span
              class="menu-title"
              >Notifications</span
            ></router-link
          >
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/messages"
            ><i class="mdi mdi-chart-line" alt="chart icon" /><span
              class="menu-title"
              >Messages</span
            ></router-link
          >
        </li>
        <li class="nav-item">
          <router-link class="nav-link logout-link" to="/settings"
            ><i class="mdi mdi-chart-line" alt="chart icon" /><span
              class="menu-title"
              >Settings</span
            ></router-link
          >
        </li>
          <li class="nav-item">
              <router-link class="nav-link logout-link" to="/tour"
              ><i class="mdi mdi-chart-line" alt="chart icon" /><span
                      class="menu-title"
              >Tour Model</span
              ></router-link
              >
          </li>
          <li class="nav-item">
              <router-link class="nav-link logout-link" to="/orderhistory2"
              ><i class="mdi mdi-chart-line" alt="chart icon" /><span
                      class="menu-title"
              >Order History2</span
              ></router-link
              >
          </li>
           <li class="nav-item">
              <router-link class="nav-link logout-link" to="/orderhistory3"
              ><i class="mdi mdi-chart-line" alt="chart icon" /><span
                      class="menu-title"
              >Order History3</span
              ></router-link
              >
          </li>
          <li class="nav-item">
              <router-link class="nav-link logout-link" to="/orderform"
              ><i class="mdi mdi-chart-line" alt="chart icon" /><span
                      class="menu-title"
              >Order Form</span
              ></router-link
              >
          </li>

      </ul>
    </nav>
    <div class="dashboard-logout-btn">
      <router-link class="nav-link logout-link" to="/logout"
        ><span class="logout-title mr-2">Logout</span
        ><i class="mdi mdi-logout" alt="chart icon"
      /></router-link>
    </div>
  </section>
</template>

<script lang="js">
export default {
  name: 'app-sidebar'
}
</script>

<style scoped lang="scss">
.app-sidebar {
  border-right: 1px solid #f8f8f8;
}
.app-sidebar .sidebar .nav {
  padding-top: 132px !important;
}
.sidebar .nav .nav-item.nav-profile .profile-image {
  margin: 0px !important;
}
.app-sidebar .nav-item {
  margin: 0px 33px !important;
}
.sidebar .nav .nav-item .nav-link:hover {
  color: #197bbd !important;
}
.sidebar .nav .nav-item .nav-link i:hover {
  color: #197bbd !important;
}
.sidebar .nav .nav-item .nav-link i {
  font-size: 24px;
  margin-right: 24px;
}
.dashboard-logout-btn {
  border: 1px solid #ffc145;
  box-sizing: border-box;
  border-radius: 13.617px;
  margin: 50px;
}
.logout-link {
  font-size: 14px;
  line-height: 14px;
  text-align: center;
  color: #404040;
}
</style>
