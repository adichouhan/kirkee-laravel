<template lang="html">
  <section class="dashboard">
    <div class="row message-chat-header ml-0">
      <div class="col-8  message-left-header">
        <div class="row mt-2">
          <div class="col-sm-3 d-inline-flex">
            <img
              class=""
              src="../assets/images/dashboard/msg-profile.png"
              alt="deflute"
            />
            <p>David - Customer Support</p>
          </div>
          <div class="col-sm-6 d-inline-flex">
            <p>#</p>
            <p>Order: KER18798471313</p>
          </div>
          <div class="col-sm-3">
            <img
              class="msg-header-img"
              src="../assets/images/dashboard/Path.png"
              alt="deflute"
            />
            <img
              class="msg-header-img"
              src="../assets/images/dashboard/pin.png"
              alt="deflute"
            />
            <img
              class="msg-header-img"
              src="../assets/images/dashboard/qus.png"
              alt="deflute"
            />
          </div>
        </div>
      </div>
      <div class="col-4 right-message-view text-center">
        <div class="d-md-inline-flex d-block">
          <button type="button" class="btn btn-msg-all">All</button>
          <button type="button" class="btn btn-msg">File name</button>
          <button type="button" class="btn btn-msg">Images</button>
        </div>
      </div>
    </div>
    <div class="row ml-0">
      <div class="col-8 pl-0 pr-0">
        <div class="chatbox-chat-section">
          chatbox

          <button
            type="button"
            class="btn btn-primary"
            @click="getShowModal(showModal)"
          >
            Rate Experience
          </button>
        </div>
        <div class="chatbox-view">
          <div class="row chatbox-header ml-0 mr-0">
            <div class="col-10">
              <i class="mdi  mdi-plus-circle mr-4"></i>
              <i class="mdi  mdi-emoticon-happy mr-4"></i>
              <i class="mdi  mdi-at mr-4"></i>
              <i class="mdi  mdi-image-area mr-4"></i>
            </div>
            <div class="col-2 text-right">
              <i class="mdi mdi-folder-multiple"></i>
            </div>
          </div>
          <div class="form-group mb-0">
            <textarea
              class="form-control"
              rows="5"
              id="comment1"
              placeholder="Message"
            ></textarea>
          </div>
        </div>
      </div>
      <div class="col-4 right-search-view pl-0">
        <div class="msg-search input-group md-form form-sm form-2 pl-0">
          <input
            class="form-control my-0 py-1 red-border"
            type="text"
            placeholder="Search"
            aria-label="Search"
          />
          <div class="input-group-append">
            <span class="input-group-text red lighten-3" id="basic-text1"
              ><i class="mdi mdi-magnify text-grey" aria-hidden="true"></i
            ></span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8 text-right">
        <button type="button" class="btn send-btn">SEND</button>
      </div>
      <div class="col-4"></div>
    </div>
    <div v-if="showModal">
      <transition name="modal">
        <div class="modal-mask rate-experience-modal">
          <div class="modal-wrapper">
            <div class="modal-dialog" role="document">
              <div class="modal-content text-center">
                <div class="modal-header">
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true" @click="getShowModal(showModal)"
                      >&times;</span
                    >
                  </button>
                </div>
                <div class="modal-body">
                  <h1>Rate Your Chat Experience</h1>
                  <div class="rate-star-img">
                    <img src="../assets/images/dashboard/star-yellow.png" />
                    <img src="../assets/images/dashboard/star.png" />
                    <img src="../assets/images/dashboard/star.png" />
                    <img src="../assets/images/dashboard/star.png" />
                    <img src="../assets/images/dashboard/star.png" />
                  </div>
                  <div class="tell-something-view">
                    <p>Please tell us what we can improve</p>
                    <div class="tell-something-box">
                      <textarea class="form-control" rows="5" id="comment">
                      </textarea>
                      <button type="button" class="btn">
                        Send
                      </button>
                    </div>
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
  name: 'messagechat',
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

<style scoped lang="scss">
.message-chat-header {
  border-bottom: 1px solid #e3e5e8;
  margin-top: 20px;
}
.message-chat-header img {
  width: 20px;
  height: 20px;
}
.message-chat-header p {
  margin-left: 10px;
  font-size: 14px;
  line-height: 20px;
  font-weight: bold;
  color: #060607;
}
.msg-header-img {
  margin-right: 10px;
}
.right-message-view {
  border-left: 1px solid #e3e5e8;
  padding: 20px;
}
.btn.btn-msg-all {
  background: #267cb2;
  border-radius: 4px;
  color: #ffffff;
  font-size: 12px;
  margin: 5px;
}
.btn.btn-msg {
  background: #ffffff;
  border: 1px solid #dedede;
  box-sizing: border-box;
  border-radius: 4px;
  color: #0074bd;
  font-size: 12px;
  margin: 5px;
}
.msg-search.input-group {
  height: 46px;
}
.msg-search.input-group input {
  background: #e3e5e8;
  border: none !important;
  height: 46px;
}
.msg-search.input-group .input-group-append {
  background: #e3e5e8;
  border: none !important;
}
.msg-search.input-group .input-group-append span {
  padding: 5px;
  font-size: 21px;
  border: none;
}
.chatbox-header {
  background: #f1f4f5;
  padding: 10px;
}
.chatbox-view i {
  font-size: 24px;
  color: #4f5660;
}
.chatbox-chat-section {
  height: 600px;
  padding: 20px;
}
.right-message-view .message-chat-header {
  padding: 11px 27px !important;
}
.message-chat-header .btn {
  padding: 10px;
  width: 82px;
}
.btn.send-btn {
  font-weight: bold;
  font-size: 24px;
  line-height: 29px;
  color: #197bbd;
}
.message-left-header {
  padding: 20px;
}
.right-search-view {
  border-left: 1px solid #e3e5e8;
}
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.modal-header {
  border-bottom: none !important;
}
.rate-experience-modal .modal-dialog {
  max-width: 700px !important;
}
.rate-experience-modal .modal-body img {
  margin-right: 20px;
}
.rate-experience-modal .modal-body .rate-star-img {
  margin-top: 60px;
  margin-bottom: 70px;
}
.tell-something-box {
  background: #eceaea;
  border: 1px solid #000000;
  box-sizing: border-box;
  border-radius: 20px;
  text-align: left;
  padding: 10px;
  margin: 30px;
}
.tell-something-box .form-control {
  background: #eceaea !important;
  border: none !important;
  border-radius: 20px;
}
.tell-something-box .btn {
  width: 148px;
  height: 45px;
  color: #ffffff;
  background: #197bbd;
  border-radius: 1000px;
  font-size: 24px;
}
.tell-something-view p {
  font-size: 36px;
  line-height: 44px;
  text-align: center;
  color: #777777;
}
</style>
