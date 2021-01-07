<template>
  <div>
    <div
      aria-labelledby="add-account"
      class="modal fade"
      data-keyboard="false"
      id="add-account"
      role="dialog"
      tabindex="-1"
    >
      <button
        aria-label="Close"
        class="close"
        data-dismiss="modal"
        title="Close"
        type="button"
      >
        <span aria-hidden="true"><i class="btr bt-times"></i></span>
      </button>

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <div class="col-sm-12 col-xs-12 new-collection">
                <h1>
                  Account
                </h1>
              </div>
            </div>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {}
</script>

<style scoped>
.modal-dialog.create-collection-dialog {
  max-width: 600px;
}
.create-collection-dialog .modal-header h1 {
  font-size: 38px !important;
  font-weight: 100 !important;
  line-height: 1.1;
  margin-top: 24px;
  margin-bottom: 12px;
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}
</style>
