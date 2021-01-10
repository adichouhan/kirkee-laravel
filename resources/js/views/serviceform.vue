<template lang="html">
  <div class="">
    <FormHeader></FormHeader>
    <div class="bg-page purchase-view">
      <div class="form-panel">
        <div class="content-wrapper">
          <h5 class="company-info-title">{{ $t("Company Info") }}</h5>
          <form method="" action="">
            <div class="form-row">
              <div class="form-group col-md-12">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Company name"
                  name="company"
                  value=""
                />
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Country"
                  name="country"
                  value=""
                />
              </div>
              
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Contact person"
                  name="contact"
                  value=""
                />
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="City"
                  name="city"
                  value=""
                />
              </div>
              
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Province"
                  name="province"
                  value=""
                />
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Post Code"
                  name="post"
                  value=""
                />
              </div>
              
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Dist & street"
                  name="dist"
                  value=""
                />
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Phone number"
                  name="phone"
                  value=""
                />
              </div>
              
              <div class="form-group col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  name="email"
                  value=""
                />
              </div>
            </div>
            
            <div @dragover.prevent @drop.prevent>
              <div class="bg-white drag-drop-view" @drop="handleFileDrop">
                <div class="file-wrapper d-block py-5 px-3">
                  <input
                    type="file"
                    name="file-input"
                    multiple="True"
                    @change="handleFileInput"
                  />
                  <img src="../assets/images/purchase/clip.png" /><span
                  class="add-logo"
                >
                    {{ $t("Add logo") }}
                  </span>
                  {{ $t("or drop it right here") }}
                </div>
                <ul>
                  <li v-for="file in files">
                    {{ file.name }} ({{ file.size }} b)
                  </li>
                </ul>
              </div>
            </div>
            
            <h5 class="company-info-title mt-4">{{ $t("Service Details") }}</h5>
            
            <div class="row form-top-spacing">
              <div class="form-group col-md-12">
                <textarea
                  type="text"
                  class="form-control"
                  rows="10"
                  placeholder="Description"
                  name="Description"
                ></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-6">
                    <button class="btn btn-reset">{{ $t("Reset") }}</button>
                  </div>
                  <div class="col-sm-6">
                    <button class="btn btn-save">{{ $t("Save & Continue") }}</button>
                  </div>
                </div>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </form>
        </div>
        <!-- content wrapper ends -->
      </div>
    </div>
  </div>
</template>

<script lang="js">
  import FormHeader from "../components/partials/FormHeader";
  export default {
    name: 'shippingform',
    components: {FormHeader},
    data() {
      return {
        files: [],
        counter:0,
        applicants:[
          {
            previous: '',
            expiration:''
          }
        ]
      }
    },
    methods: {
      handleFileDrop(e) {
        let droppedFiles = e.dataTransfer.files;
        if(!droppedFiles) return;
        ([...droppedFiles]).forEach(f => {
          this.files.push(f);
        });
      },
      handleFileInput(e) {
        let files = e.target.files
        if(!files) return;
        ([...files]).forEach(f => {
          this.files.push(f);
        });
      },
      
      addVisa(){
        this.counter++
        this.applicants.push({
          previous:'',
          expiration: ''
        })
      },
      deleteVisa(){
        let counter = this.counter--
        this.applicants.splice(counter,1);
      }
    }
  }
</script>

<style scoped lang="scss">
  .form-panel {
    min-height: calc(100vh - 58px);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  
  .content-wrapper {
    background: #f2f2f2;
    padding: 55px;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    margin-top: 28px;
  }
  
  hr {
    border-top: 3px solid #8c8b8b;
  }
  
  .file-wrapper {
    text-align: center;
  }
  
  .bg-page {
    background: #f2f2f2;
  }
  
  .file-wrapper input {
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
    font-size: 300px;
    height: 200px;
  }
  .company-info-title {
    border-bottom: 3px solid #1580e3;
    text-align: end;
    margin: 0px 20px;
    font-size: 24px;
    padding: 12px;
  }
  .purchase-view {
    padding-top: 9%;
  }
  .purchase-view input.form-control {
    height: 60px;
  }
  .purchase-view form {
    margin-top: 30px;
  }
  .drag-drop-view {
    border: 2px solid #c8c8c8;
    box-sizing: border-box;
    border-radius: 16px;
    margin-top: 14px;
    font-size: 24px;
  }
  .add-logo {
    color: #047bae;
  }
  .form-top-spacing {
    margin-top: 30px;
  }
  .other-info-title {
    text-align: end;
    margin: 0px 20px;
    font-size: 24px;
    padding: 12px;
  }
  .purchase-view .form-control {
    border-radius: 16px;
    text-align: end;
    font-size: 24px;
    padding: 25px;
    line-height: 27px;
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
 
</style>
