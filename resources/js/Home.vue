<template lang="html">
  <div id="app">
     <router-view name="main"></router-view>
  </div>
</template>

<script lang="js">
import AppHeader from './components/partials/AppHeader'
import AppSidebar from './components/partials/AppSidebar'
import AppFooter from  './components/partials/AppFooter'
export default{
  name: 'home',
  components: {
    AppHeader,
    AppSidebar,
    AppFooter
  }
}
</script>

<style>
  @import "../../node_modules/mdi/css/materialdesignicons.min.css";
  @import "../../node_modules/flag-icon-css/css/flag-icon.min.css";
  @import "../../node_modules/font-awesome/css/font-awesome.min.css";
</style>

<style lang="scss">
@import "./assets/scss/style";
</style>
