<template>
    <div>
        <div class="main-home kirkee-top-navbar">
            <div>
                <b-navbar class="fixed-top" toggleable="md" type="dark" variant="info">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div
                                    class="col-sm-4 text-center d-flex align-items-top justify-content-center nav-login-register-btn"
                            >
                                <button type="button" class="btn login-btn">
                                    <router-link class="nav-link login-link" to="/login/"
                                    >Login</router-link
                                    >
                                </button>

                                <button type="button" class="btn register-btn">
                                    <router-link class="nav-link register-link" to="/register/"
                                    >Register</router-link
                                    >
                                </button>
                            </div>
                            <div
                                    class="col-sm-6 navbar-menu-wrapper d-flex align-items-center ml-auto ml-lg-0"
                            >
                                <b-navbar-nav class="header-links d-none d-md-flex">
                                    <b-nav-item href="#">Home</b-nav-item>
                                    <b-nav-item href="#">Product</b-nav-item>
                                    <b-nav-item href="#">About</b-nav-item>
                                    <b-nav-item href="#">Contact</b-nav-item>
                                </b-navbar-nav>
                            </div>
                            <div
                                    class="col-sm-2 text-right d-flex align-items-top justify-content-center"
                            >
                                <!--<a class="navbar-brand brand-logo" href="/demo/star-admin-vue/"-->
                                <!--&gt;<img src="./../assets/images/home/logowhite.png" alt="logo"-->
                                <!--/></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </b-navbar>
            </div>
        </div>
    </div>

</template>

<script>
export default {
  name: 'preview'
}
</script>

<style scoped>

</style>
