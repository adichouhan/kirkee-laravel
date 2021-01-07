<template lang="html">
  <b-navbar class="fixed-top dashboard-header" toggleable="md" type="dark" variant="info">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <!--<a class="navbar-brand brand-logo" href="/demo/star-admin-vue/"><img src="../../assets/images/logo.svg" alt="logo"/></a>-->
      <!--<a class="navbar-brand brand-logo-mini" href="/demo/star-admin-vue/"><img src="../../assets/images/logo-mini.svg" alt="logo"/></a>-->
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center ml-auto ml-lg-0">
      <b-navbar-nav class="header-links d-none d-md-flex">
        <b-nav-item href="#"> {{ $t("home") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("product") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("about") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("contact") }}</b-nav-item>
      </b-navbar-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
          <img src="../../assets/images/dashboard/logowhite.png" alt="image"/> <span class="online-status online"></span>
      </b-navbar-nav>
      <button class="navbar-toggler navbar-toggler-right align-self-center" type="button" @click="collapedMobileSidebar()">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </b-navbar>
</template>

<script lang="js">
export default {
  name: 'app-header',
  methods: {
    collapedMobileSidebar: () => {
      document.querySelector('.sidebar').classList.toggle('active')
    }
  }
}
</script>

<style scoped lang="scss">
.dashboard-header.navbar {
  background: #0278AE !important;
  padding: 20px;
}
.dashboard-header.navbar .navbar-menu-wrapper{
  width: calc(100% - 80px) !important;
}
</style>
