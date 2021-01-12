<template>
    <section class="dashboard">
        <form @submit.prevent="addUser">
        <div class="row dashboard">
            <div class="col-sm-6">
                <h1>Account</h1>
                <p>Crate Account</p>
            </div>
            <div class="col-sm-6 icon-set">
                <div class="row">
                    <div class="col-sm-3 icon-help">
                        <i class="mdi mdi-help-circle"></i>
                        <span class="help-text ml-2">Help</span>
                    </div>
                    <div class="col-sm-3 help-option-icon">
                        <i class="icon-email mdi mdi-email"></i>
                        <i class="icon-bell mdi mdi-bell ml-2"></i>
                    </div>
                    <div class="col-sm-6">
                        <div class="profile-item"><i class="mdi mdi-account"></i></div>
                        <span class="profile-name ml-2">
                            <p class="mb-0">Hedi</p>
                            <p class="">Account Details</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-main">
            <div class="edit-photo">
                <img
                        class="edit-profile-image"
                        v-if="this.form.image"
                        :src="this.form.image"
                        alt="default"
                />
                <img
                        class="edit-profile-image"
                        v-else
                        src="../../assets/images/account/account.png"
                        alt="default"
                />
                <p class="mt-3"><a href="#"><b-form-file id="inpu8" type="file" v-model="form.image" @change="selectFile" name="image"
                                                         placeholder="Set new photo..."></b-form-file>Set new photo</a></p>
            </div>
            <div class="account-details">
                <div class="row account-detail-section">
                    <div class="col-sm-10 account-section-spacing">
                        <p>NAME :</p>
                        <label>
                            <input type="text" class="border-0" v-model="form.name"  placeholder="Full Name">
                        </label>
                    </div>
                    <div class="col-sm-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-detail-section">
                    <div class="col-sm-10 account-section-spacing">
                        <p>EMAIL :</p>
                        <input type="email" class="border-0" v-model="form.email"  placeholder="Email">
                    </div>
                    <div class="col-sm-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-detail-section">
                    <div class="col-sm-10 account-section-spacing">
                        <p>PHONE :</p>
                        <input type="tel" class="border-0" v-model="form.phone_number"  placeholder="Phone number">
                    </div>
                    <div class="col-sm-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
                <div class="row account-password" v-if="mode != 'editMode'">
                    <div class="col-sm-10 account-section-spacing">
                        <p>PASSWORD :</p>
                        <input type="password" class="border-0" v-model="form.password"  placeholder="Password">
                    </div>
                    <div class="col-sm-2 account-edit-icon">
                        <i class="mdi mdi-pencil-box-outline"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="company-info">
                    <h2>Add your company info</h2>
                    <div class="row">
                        <div class="col-sm-9 company-image">
                            <img src="../../assets/images/dashboard/home.png" alt="image" />
                        </div>
                        <div class="col-sm-3">
                            <button type="button"  class="add-company-icon" data-toggle="modal" data-target="#myModal" ><i class="mdi mdi-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7"></div>
        </div>


            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" @click="getShowModal(showModal)">&times;</span>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                                <b-form-group  label-for="input5">
                                    <b-form-input type="text" id="input5" v-model="form.company_name" placeholder="Company Name"></b-form-input>
                                </b-form-group>
                                <b-form-group  label-for="input7">
                                    <b-form-input type="text" id="input7" v-model="form.company_address"placeholder="Address"></b-form-input>
                                </b-form-group>
                                <b-form-group   label-for="input9">
                                    <b-form-input type="text" id="input9" v-model="form.company_phone" placeholder="Phone"></b-form-input>
                                </b-form-group>
                                <b-form-group   label-for="input9">
                                    <b-form-input type="text" id="input9" v-model="form.company_person" placeholder="Person in Charge"></b-form-input>
                                </b-form-group>
                                <b-form-group   label-for="input9">
                                    <b-form-input type="text" id="input9" v-model="form.company_country" placeholder="Country"></b-form-input>
                                </b-form-group>
                                <b-button class="btn btn-sm cancel-btn" >Cancel</b-button>
                                <b-button type="submit" class="btn btn-sm btn-warning save-btn">Save</b-button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </section>

</template>

<script>
    import Form from 'vform'
    export default {
        name: "create",
        data(){
            return {
                disabled:true,
                showModal:false,
                user:{},
                mode:'',
                userId:'',
                form: new Form({
                    name:'',
                    email: '',
                    password: '',
                    phone_number: '',
                    confirm_password: '',
                    remember: false,
                    company_name:'',
                    company_address:'',
                    company_phone:'',
                    company_country:'',
                    company_person:'',
                    image:''

                })
            }
        },
        created(){
            let userId = this.$route.params.id;
            if(userId){
                this.userId=userId;
                this.mode = 'editMode'
               axios.get('/api/users/getUser/'+userId).then((response)=>{
                   console.log(response);
                        this.user = response.data;
                        this.form.name = this.user.name
                        this.form.email = this.user.email
                        this.form.phone_number = this.user.phone_number
                        this.form.image = this.user.image
               })
           }
        },
        methods:{
            getShowModal(){
                this.showModal = true
            },
            selectFile(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },

            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.form.image = e.target.result;
                };
                reader.readAsDataURL(file)
            },

            addUser() {
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                let url ='/api/register';
                if(this.userId){
                    url = '/api/user/update/'+this.userId;
                }
                axios.post(url, this.form)
                    .then(response => {
                        console.log(response)
                        $('#myModal').modal('toggle');
                    }).catch(error => {
                    console.log(error)
                    $('#myModal').modal('toggle');
                })
            },

        }
    }
</script>

<style scoped>
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
    .icon-set .icon-help {
        color: #0278ae;
        font-size: 28px;
    }
    .icon-set .help-text {
        font-weight: bold;
        font-size: 14px;
        line-height: 17px;
        color: #696f79;
    }
    .icon-set .help-option-icon {
        color: #a9a9a9;
        font-size: 28px;
    }
    .icon-set .profile-item {
        width: 40px;
        height: 40px;
        border-radius: 25px;
        background: #ffc145;
        color: #696f79;
        text-align: center;
        font-size: 27px;
        display: inline-block;
    }
    .icon-set .profile-name {
        display: inline-block;
    }
    .account-main {
        margin-top: 80px;
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
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 16.0564px;
        line-height: 18px;
        color: #aeaeae;
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
        margin-top: 50px;
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
    .modal-footer {
        display: none;
    }
</style>