<template lang="html">
    <section class="dashboard">
        <div class="row dashboard dashboard-header">
            <div class="col-sm-7">
                <h1>{{$t("Account")}}</h1>
                <p>{{$t("Change your Account details")}}</p>
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
        <div class="account-main">
            <div class="edit-photo">
                <img
                        class="edit-profile-image"
                        src="../assets/images/account/account.png"
                        alt="deflute"
                />
                <p class="mt-3"><a href="#">{{ $t("Set new photo") }}</a></p>
            </div>
            <div class="account-details">
                <div class="row account-detail-section">
                    <div class="col-10 account-section-spacing">
                        <p>NAME :</p>
                        <p>HEDI</p>
                    </div>
                    <div class="col-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-detail-section">
                    <div class="col-10 account-section-spacing">
                        <p>EMAIL :</p>
                        <p>HEDI@EMAIL.COM</p>
                    </div>
                    <div class="col-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-detail-section">
                    <div class="col-10 account-section-spacing">
                        <p>PHONE :</p>
                        <p>9876543219</p>
                    </div>
                    <div class="col-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-password">
                    <div class="col-10 account-section-spacing">
                        <p>PASSWORD :</p>
                        <p>***********</p>
                    </div>
                    <div class="col-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row add-company-view">
            <div class="col-sm-5">
                <div class="company-info">
                    <h2>{{ $t("Add your company info") }}</h2>
                    <div class="row">
                        <div class="col-9 company-image">
                            <img src="../assets/images/dashboard/home.png" alt="image" />
                        </div>
                        <div class="col-3">
                            <button type="button" class="add-company-icon" @click="getShowModal(showModal)"><i class="mdi mdi-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7"></div>
        </div>
        <div v-if="showModal">
            <transition name="modal">
                <div class="modal-mask add-company-modal">
                    <div class="modal-wrapper">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" @click="getShowModal(showModal)">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample">
                                        <b-form-group  label-for="input5">
                                            <b-form-input type="text" id="input5" placeholder="Company Name"></b-form-input>
                                        </b-form-group>
                                        <b-form-group  label-for="input7">
                                            <b-form-input type="text" id="input7" placeholder="Address"></b-form-input>
                                        </b-form-group>
                                        <b-form-group   label-for="input9">
                                            <b-form-input type="text" id="input9" placeholder="Phone"></b-form-input>
                                        </b-form-group>
                                        <b-form-group   label-for="input9">
                                            <b-form-input type="text" id="input9" placeholder="Person in Charge"></b-form-input>
                                        </b-form-group>
                                        <b-form-group   label-for="input9">
                                            <b-form-input type="text" id="input9" placeholder="Country"></b-form-input>
                                        </b-form-group>
                                    </form>
                                    <div class="add-company-btn">
                                        <b-button class="btn btn-sm cancel-btn" >{{ $t("Cancel") }}</b-button>
                                        <b-button type="submit" class="btn btn-sm btn-warning save-btn">{{ $t("Save") }}</b-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </section>

</template>

<script lang="js">
    export default {
        name: 'account',
        data: function () {
            return {
                showModal: false
            }
        },
        methods:{
            getShowModal(isShow){
                if(isShow == false){
                    this.showModal = true;
                }
                else {
                    this.showModal = false;
                }
            }
        }
    }
</script>

<style  lang="scss">
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }
    .cancel-btn{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 5px 0px;

        position: absolute;
        width: 76px;
        height: 26px;
        right: 122px;
        bottom: 16px;

        background: #C7C9CA;
        border-radius: 40px;
    }
    .save-btn{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 5px 0px;

        position: absolute;
        width: 76px;
        height: 26px;
        right: 40px;
        bottom: 16px;

        background: #FFC145;
        border-radius: 40px;
    }
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
    .account-main {
        margin-top: 80px;
        padding: 30px;
    }
    .edit-profile-image {
        width: 110px;
    }
    .edit-photo p a {
        font-weight: bold;
        font-size: 16.0564px;
        line-height: 18px;
        color: #aeaeae;
        text-decoration: none;
        margin-top: 20px;
    }
    .account-details p {
        display: inline-block;
        margin-bottom: 0px;
    }
    .account-detail-section {
        border-bottom: 0.5px solid #a9a9a9;
        margin-left: 1px;
    }
    .account-section-spacing {
        padding: 20px 0px !important;
    }
    .account-edit-icon {
        font-size: 28px;
        color: #696f79;
        padding-top: 10px;
    }
    .company-info {
        padding: 30px;
        margin: 15px;
        text-align: center;
        background: #ffffff;
        box-shadow: 0px 16px 24px rgba(0, 0, 0, 0.06), 0px 2px 6px rgba(0, 0, 0, 0.04),
        0px 0px 1px rgba(0, 0, 0, 0.04);
        border-radius: 20px;
    }
    .company-info h2 {
        font-weight: bold;
        font-size: 24px;
        line-height: 28px;
        color: #404040;
        margin-bottom: 40px;
        text-align: start;
    }
    .add-company-icon {
        width: 40px;
        height: 40px;
        border-radius: 25px;
        background: #ffc145;
        text-align: center;
        font-size: 28px;
        margin-top: 30px;
        border: 0px;
    }
    .company-image {
        text-align: left;
    }
    .company-image img {
        margin-left: 30px;
    }
    .account-password {
        margin-left: 1px;
    }
    .add-company-view{
        padding: 20px;
    }
    @media (max-width: 767px) {
        .account-main {
            margin-top: 0px !important;
        }
    }
    .add-company-modal .modal-header{
        border-bottom: none !important;
    }
    .add-company-modal .form-control{
        border:none !important;
        border-bottom: 1px solid #ced4da !important;
        padding: 15px 0px !important;
        outline: none !important;
        font-size: 14px !important;
    }
    .add-company-modal .modal-body{
        padding: 30px !important;
        padding-top: 5px !important;
    }
    .add-company-btn{
        margin-top: 50px;
    }
    .add-company-btn .cancel-btn{
        color: #676767 !important;
        font-size: 12px !important;
        padding-top: 7px !important;
    }
    .add-company-btn .save-btn{
        color: #000000 !important;
        font-size: 12px !important;
        padding-top: 7px !important;
    }
    .add-company-modal .modal-content{
        border-radius: 20px !important;
    }
</style>
