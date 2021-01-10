<template lang="html">
  <div>
    <FormHeader></FormHeader>
    <div class="row form-preview">
      <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <div class="form-preview-pdf">
            <div class="form-preview-image">
              <img
                class=""
                src="../assets/images/dashboard/download.png"
                alt="deflute"
              />
            </div>
          </div>
          <div class="row form-preview-edit mt-5">
            <div class="col-6 text-center">
              <div class="d-inline-flex">
                <i class="mdi mdi-pencil-box-outline"></i>
                <p>{{ $t("Edit") }}</p>
              </div>
            </div>
            <div class="col-6 text-center">
              <div class="d-inline-flex">
                <i class="mdi mdi-eye"></i>
                <p>{{ $t("View") }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <button class="btn btn-reset">{{ $t("Cancel") }}</button>
                </div>
                <div class="col-sm-6">
                  <button class="btn btn-save">{{ $t("Send") }}</button>
                </div>
              </div>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
</template>

<script lang="js">
  import FormHeader from "../components/partials/FormHeader";
export default {
  name: 'formpreview',
    components: {FormHeader},

}
</script>

<style scoped lang="scss">
.form-preview{
  padding: 60px;
  background: #f2f2f2;
  position: static;
  left: 0px;
  top: 0px;
}
.form-preview-pdf {
background: #FFFFFF;
box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06), 0px 2px 6px rgba(0, 0, 0, 0.04), 0px 0px 1px rgba(0, 0, 0, 0.04);
border-radius: 20px;
  margin-top: 130px;
}
.form-preview-edit{
  margin-bottom: 50px;
}
  .form-preview-edit i{
    font-size: 28px;
  }
.form-preview-edit p{
  font-size: 28px;
  margin-left: 5px;
  margin-top: 2px;
}
.form-preview-image{
    padding: 100px;
  text-align: center;
  }
  .form-preview-image img{
    width: 100%;
    height: 100%;
  }
.btn.btn-reset {
  background: #ffffff;
  border: 2px solid #eab939;
  box-sizing: border-box;
  border-radius: 16px;
  padding: 30px;
  margin: 10px;
  width: 100%;
}
.btn.btn-save {
  background: #eab939;
  border: 2px solid #eab939;
  box-sizing: border-box;
  border-radius: 16px;
  padding: 30px;
  margin: 10px;
  width: 100%;
}
@media (max-width: 767px) {
  .form-preview-image{
    padding: 50px !important;
    text-align: center;
  }
}
</style>
