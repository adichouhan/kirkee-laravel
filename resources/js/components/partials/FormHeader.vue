<template lang="html">
  <b-navbar class="fixed-top form-header" toggleable="md" type="dark" variant="info">
    <div class="navbar-brand-wrapper d-flex align-items-top">
        <div class="profile-item">
          <img
            class="header-profile-img"
            src="../../assets/images/account/account.png"
            alt="deflute"
          />
        </div>
        <div class="profile-name mt-1 ml-2 text-white">
          <h6 class="mb-0">Hedi</h6>
          <p class="">{{ $t("Account Details") }}</p>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center ml-auto ml-lg-0">
      
      <b-navbar-nav class="header-links d-none d-md-flex">
        <b-nav-item href="#"> {{ $t("Home") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("Product") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("About") }}</b-nav-item>
        <b-nav-item href="#"> {{ $t("Contact") }}</b-nav-item>
        <b-nav-item-dropdown
          id="my-nav-dropdown"
          text="language"
          toggle-class="nav-link-custom"
          right
        >
          
          <b-dropdown-item>One</b-dropdown-item>
          <b-dropdown-item>Two</b-dropdown-item>
          <b-dropdown-divider></b-dropdown-divider>
          <b-dropdown-item>Three</b-dropdown-item>
        </b-nav-item-dropdown>
        <i class="mdi mdi-chevron-down down-arrow"></i>
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
    name: 'form-header',
    methods: {
      collapedMobileSidebar: () => {
        document.querySelector('.sidebar').classList.toggle('active')
      }
    }
  }
</script>

<style scoped lang="scss">
  .form-header.navbar {
    background: #0278AE !important;
    padding: 20px 41px;
  }
  .form-header.navbar .navbar-menu-wrapper{
    width: calc(100% - 80px) !important;
  }
  .form-header .header-profile-img{
    width: 50px;
    height: 50px;
    border-radius: 25px;
  }
  .form-header.navbar .navbar-menu-wrapper .navbar-nav.header-links{
    padding-left: 20%;
  }
  @media (min-width: 767px) {
    .form-header .navbar-brand-wrapper{
      width: 200px;
    }
  }
 .down-arrow{
   margin-top: 15px;
   margin-left: -19px;
   font-size: 20px;
   color: #fff;
 }
 
</style>
