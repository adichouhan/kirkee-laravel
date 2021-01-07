<template lang="html">
    <div class="">
        <AppHeader></AppHeader>
        <div class="mt-5 bg-page px-2">
            <div class="form-panel">
                <div class="content-wrapper">
                    <h5 class="">Company Info</h5>
                    <hr />
                    <form method="" action="">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Company name" name="company" value="">
                        </div>
                    </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Country" name="country" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Contact person" name="contact" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="City" name="city" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Province" name="province" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Post Code" name="post" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Dist & street" name="dist" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Phone number" name="phone" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Email" name="email" value="">
                            </div>
                        </div>

                        <div @dragover.prevent @drop.prevent>
                            <div class="bg-white" @drop="handleFileDrop">
                                <div class="file-wrapper d-block py-5 ">

                                    <input type="file" name="file-input"
                                           multiple="True" @change="handleFileInput">
                                   <img src="../assets/images/purchase/clip.png"><span class=""> Add logo </span> or drop it right here

                                </div>
                                <ul>
                                    <li v-for="file in files">
                                        {{ file.name }} ({{ file.size }} b)
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h5 class="">Shipping Info</h5>
                        <hr />

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Port" name="port" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Country" name="country" value="">
                            </div>
                        </div>

                        <h5 class="">Shipping Info</h5>
                        <hr />
                        <div class="row">

                                <div class="col-md-3 px-0 mx-0">
                                    <button type="button" class="btn btn-secondary  w-100" data-toggle="tab"><input type="radio" />SAR</button>
                                </div>
                                <div class="col-md-3 px-0 mx-0 border">
                                    <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />AED</button>
                                </div>
                                <div class="col-md-3 px-0 mx-0">
                                    <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />USD</button>
                                </div>
                                <div class="col-md-3 px-0 mx-0">
                                    <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />Euro</button>
                                </div>

                        </div>

                        <h5 class="">About  Products</h5>
                        <hr />
                        <div v-for="(applicant, counter) in applicants">
                        <div class="row" >
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Unit Price" name="unit" value="">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Quantity" name="quantity" value="">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Item" name="item" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea type="text" class="form-control" placeholder="Description" name="product_description"></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <button class="rounded-circle btn-primary" @click.prevent="deleteVisa"><i class="fa fa-minus"></i></button>
                            <button class="rounded-circle btn-primary" @click.prevent="addVisa"><i class="fa fa-plus"></i></button>
                        </div>

                        <h5 class="">Remarks</h5>
                        <hr />
                        <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Other" name="other" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Trading term</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        </div>

                        <h5 class="">Payment Term</h5>
                        <div class="row">

                            <div class="col-md-6 px-0 mx-0">
                                <button type="button" class="btn btn-secondary  w-100" data-toggle="tab"><input type="radio" />LC</button>
                            </div>
                            <div class="col-md-6 px-0 mx-0 border">
                                <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />TT</button>
                            </div>

                        </div>

                        <h5 class="">Shipping Method</h5>
                        <div class="row">

                            <div class="col-md-6 px-0 mx-0">
                                <button type="button" class="btn btn-secondary  w-100" data-toggle="tab"><input type="radio" />BY AIR</button>
                            </div>
                            <div class="col-md-6 px-0 mx-0 border">
                                <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />BY SEA</button>
                            </div>

                        </div>

                        <h5 class="">Delivery time</h5>
                        <div class="row form-group">
                            <div class="col-md-4 px-0 mx-0">
                                <button type="button" class="btn btn-secondary  w-100" data-toggle="tab"><input type="radio" />30 DAYS</button>
                            </div>
                            <div class="col-md-4 px-0 mx-0 border">
                                <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />20 DAYS</button>
                            </div>

                            <div class="col-md-4 px-0 mx-0 border">
                                <button type="button" class="btn btn-secondary w-100" data-toggle="tab"> <input type="radio" />10 DAYS</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea type="text" class="form-control" placeholder="Others" name="others"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                                <button class="btn-lg btn-outline-warning">Reset</button>
                                <button class="btn-lg">Save & Continue</button>
                            <div class="col-md-4"></div>
                        </div>
                    </form>

                </div>
                <!-- content wrapper ends -->
            </div>
        </div>

    </div>
</template>

<script lang="js">
import AppHeader from "../components/partials/AppHeader";
export default {
  name: 'dashboard',
    components: {AppHeader},
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
    .form-panel{
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
        padding: 1.5rem 1.7rem;
        width: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        margin-top: 56px;
    }

    hr{
        border-top: 3px solid #8c8b8b;
    }

    .file-wrapper {
        text-align: center;
    }

    .bg-page{
    background: #f2f2f2;
    }

    .file-wrapper input {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
        opacity: 0.0;
        filter: alpha(opacity=0);
        font-size: 300px;
        height: 200px;
    }
</style>
