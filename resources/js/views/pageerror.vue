<template lang="html">
  <div class="page-error">
    <div class="row content-unavailable-error mt-5">
      <div class="col-2">
        <img src="../assets/images/auth/yellowalert.png" />
      </div>

      <div class="col-9">
        <h6>
          {{ $t("Content currently unavailable.") }}
        </h6>
        <p class="mb-0"> {{ $t("We’re sorry; please try again later.") }}</p>
      </div>
      <div class="col-1">
          <i class="mdi mdi-close"></i>
      </div>
    </div>
    <div class="row content-unavailable-error mt-5">
      <div class="col-2">
        <img src="../assets/images/auth/erroralert.png" />
      </div>

      <div class="col-9">
        <h6>
          {{ $t("Functionality currently unavailable.") }}
        </h6>
        <p class="mb-0">{{ $t("Sorry for the inconvenience.") }}</p>
      </div>
      <div class="col-1">
          <i class="mdi mdi-close"></i>
      </div>
    </div>
  </div>
</template>

<script lang="js">
export default {
  name: 'pageerror',
}
</script>

<style scoped lang="scss">
.page-error{
    margin-top: 50px;
    padding: 50px;
}
.content-unavailable-error {
  background: #f5f5f5;
  border-radius: 6px;
  width: 380px;
  padding: 20px;
}

@media (max-width: 767px){
.content-unavailable-error {
  background: #f5f5f5;
  border-radius: 6px;
  width: 300px !important;
  padding: 10px !important;
}
}
</style>
