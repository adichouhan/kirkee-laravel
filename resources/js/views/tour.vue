<template lang="html">
  <section class="modals">
    <div class="row">
      <div class="grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <b-btn v-b-modal.modallg variant="primary"
              >Click for demo <i class="mdi mdi-play-circle ml-1"></i
              ></b-btn>
            </div>
            <div class="-align-center align-items-center model">
              <b-modal id="modallg" title="" size="lg">
                <div v-if="this.tourCount == 1" id="toue-1">
                  <h2 class="mb-3 tour-model-title">{{ $t("tour-title-1") }}</h2>
                  <p class="my-1 tour-model-desc">{{ $t("tour-desc-1") }}
                  </p>
                  <div class="row tour-model-image">
                    <div class="col-12">
                      <img src="../assets/images/tour/tour1.jpg" />
                    </div>
                  </div>
                </div>
                <div v-if="this.tourCount == 2" id="toue-2">
                  <h2 class="my-4 tour-model-title">{{ $t("tour-title-2") }}
                  </h2>
                  <p class="my-4 tour-model-desc">{{ $t("tour-desc-2") }}

                  </p>
                  <div class="row tour-model-image">
                    <div class="col-sm-12">
                      <img src="../assets/images/tour/tour2.png" />
                    </div>
                  </div>
                </div>
                <div v-if="this.tourCount == 3" id="toue-3">
                  <h2 class="my-4 tour-model-title">{{ $t("tour-title-3") }}

                  </h2>
                  <p class="my-4 tour-model-desc">{{ $t("tour-desc-3") }}
                  </p>
                  <div class="row tour-model-image">
                    <div class="col-sm-12">
                      <img src="../assets/images/tour/tour3.png" />
                    </div>
                  </div>
                </div>
                <div v-if="this.tourCount == 4" id="toue-4">
                  <h2 class="my-4 tour-model-title">{{ $t("tour-title-4") }}
                  </h2>
                  <p class="my-4 tour-model-desc">{{ $t("tour-desc-4") }}

                  </p>
                  <div class="row tour-model-image">
                    <div class="col-sm-12">
                      <img src="../assets/images/tour/tour4.png" />
                    </div>
                  </div>
                </div>
                <div v-if="this.tourCount == 5" id="toue-5">
                  <h2 class="my-4 tour-model-title">{{ $t("tour-title-5") }}
                  </h2>
                  <p class="my-4 tour-model-desc">{{ $t("tour-desc-5") }}
                  </p>
                </div>
                <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4 tour-step mb-4">
                    <span
                    ><i
                            :class="
                          tourCount == 1
                            ? 'mdi mdi-checkbox-blank-circle'
                            : 'mdi mdi-checkbox-blank-circle-outline'
                        "
                    ></i
                    ></span>
                    <span
                    ><i
                            :class="
                          tourCount == 2
                            ? 'mdi mdi-checkbox-blank-circle'
                            : 'mdi mdi-checkbox-blank-circle-outline'
                        "
                    ></i
                    ></span>
                    <span
                    ><i
                            :class="
                          tourCount == 3
                            ? 'mdi mdi-checkbox-blank-circle'
                            : 'mdi mdi-checkbox-blank-circle-outline'
                        "
                    ></i
                    ></span>
                    <span
                    ><i
                            :class="
                          tourCount == 4
                            ? 'mdi mdi-checkbox-blank-circle'
                            : 'mdi mdi-checkbox-blank-circle-outline'
                        "
                    ></i
                    ></span>
                    <span
                    ><i
                            :class="
                          tourCount == 5
                            ? 'mdi mdi-checkbox-blank-circle'
                            : 'mdi mdi-checkbox-blank-circle-outline'
                        "
                    ></i
                    ></span>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-6">
                        <div v-if="this.tourCount != 1">
                          <button
                                  type="button"
                                  class="btn tour-btn"
                                  @click="getPrevious(tourCount)"
                          >{{ $t("Previous") }}

                          </button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div v-if="this.tourCount != 5">
                          <button
                                  type="button"
                                  class="btn tour-btn ml-4"
                                  @click="getNext(tourCount)"
                          >{{ $t("Next") }}

                          </button>
                        </div>
                        <div v-if="this.tourCount == 5">
                          <button type="button" class="btn tour-btn ml-4">{{ $t("Done") }}

                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </b-modal>
            </div>
            <!-- Modal Ends -->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: 'tour',

    data: function () {
      return {
        tourCount: 1
      }
    },
    methods: {
      getNext (count) {
        count = count + 1
        this.tourCount = count
      },
      getPrevious (count) {
        count = count - 1
        this.tourCount = count
      }
    }
  }
</script>

<style lang="scss">
  .modals {
    width: 600px;
  }
  .tour-model {
    width: 400px;
  }
  .modal-footer {
    display: none;
  }
  .tour-model-title {
    font-family: Lato;
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 48px;
    padding: 0px 38px 0px 38px;
    display: flex;
    align-items: center;
    color: #007bc7;
  }
  .tour-model-desc {
    font-family: Lato;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
    line-height: 28px;
    padding: 0px 38px 0px 38px;
    color: #747474;
  }
  .tour-model-image {
    text-align: center;
    margin: 86px 0px;
  }
  .tour-model-image img{
    width: 100%;
  }
  .tour-step {
    text-align: center;
  }
  .tour-step i {
    color: #03a9f3;
    font-size: 12px;
  }
  .modal-header {
    border: none !important;
  }
  .modal-content {
    padding: 10px;
  }
  @media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
      max-width: 730px !important;
    }
  }
  .tour-btn,
  .tour-btn:hover {
    background: #0074bd;
    border-radius: 6px;
    color: #ffffff;
  }
</style>
