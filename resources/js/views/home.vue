<template lang="html">
  <div>
    <div class="main-home kirkee-top-navbar">
      <div>
        <b-navbar class="fixed-top" toggleable="md" type="dark" variant="info">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="row">
              <div
                class="col-sm-4 text-center d-flex align-items-top justify-content-center nav-login-register-btn"
              >
                <button type="button" class="btn login-btn">
                  <router-link class="nav-link login-link" to="/login/"
                    >Login</router-link
                  >
                </button>

                <button type="button" class="btn register-btn">
                  <router-link class="nav-link register-link" to="/register/"
                    >Register</router-link
                  >
                </button>
              </div>
              <div
                class="col-sm-6 navbar-menu-wrapper d-flex align-items-center ml-auto ml-lg-0"
              >
                <b-navbar-nav class="header-links d-none d-md-flex">
                  <b-nav-item href="#">Home</b-nav-item>
                  <b-nav-item href="#">Product</b-nav-item>
                  <b-nav-item href="#">About</b-nav-item>
                  <b-nav-item href="#">Contact</b-nav-item>
                </b-navbar-nav>
              </div>
              <div
                class="col-sm-2 text-right d-flex align-items-top justify-content-center"
              >
                <a class="navbar-brand brand-logo" href="/demo/star-admin-vue/"
                  ><img src="./../assets/images/home/logowhite.png" alt="logo"
                /></a>
              </div>
            </div>
          </div>
          <div class="col-sm-1"></div>
        </b-navbar>
      </div>

      <div class="kirkee-home-section">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-section">
            <h1 class="about-section-heading">
              Lorem ipsum dolor sit amet, consectetur
            </h1>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 about-description">
            <p class="about-section-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut
            </p>
          </div>
          <div class="col-sm-4"></div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-sm-12 center-align-item">
            <button type="button" class="btn try-forfree-btn">
              <router-link class="nav-link link login-link" to="/login/"
                >Try for Free!</router-link
              >
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 center-align-item">
            <button type="button" class="btn catelogs-btn">
              <router-link class="nav-link link register-link" to="/register/"
                >Catelogs</router-link
              >
            </button>
          </div>
        </div>
      </div>

      <div class="gradient-image">
        <img class="image" src="./../assets/images/home/Gradient.png" alt="" />
      </div>
      <div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-section">
            <h1 class="services-section-heading">
              Our Services
            </h1>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 about-description">
            <p class="services-section-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor inaute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu
            </p>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="row our-services-section">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-4">
                <div class="our-services-block">
                  <i class="mdi mdi-checkbox-blank-outline"></i>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="our-services-block">
                  <i class="mdi mdi-account-check"></i>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="our-services-block">
                  <i class="mdi mdi-alert-circle-outline"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-section">
            <h1 class="services-section-heading">
              Gallery
            </h1>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 about-description">
            <p class="services-section-description">
              We focus on ergonomics and meeting you where you work. It's only a
              keystroke away.
            </p>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="row our-services-section">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="row gallery-images-section">
              <div class="col-sm-3 center-align-item">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle1.jpg"
                  alt=""
                />
              </div>

              <div class="col-sm-3 center-align-item">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle2.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-3 center-align-item">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle3.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-3 center-align-item">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle4.jpg"
                  alt=""
                />
              </div>
            </div>
            <div class="row gallery-images-section">
              <div class="col-sm-5">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle5.jpg"
                  alt=""
                />
              </div>

              <div class="col-sm-2 center-align-item">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle6.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-5">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Rectangle7.jpg"
                  alt=""
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 center-align-item">
                <button type="button" class="btn catelogs-btn">
                  <router-link
                    class="nav-link link register-link"
                    to="/register/"
                    >See more</router-link
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-section">
            <h1 class="services-section-heading">
              Our partners
            </h1>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-description">
            <p class="services-section-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magnauptate velit
              esse cillum dolore eu
            </p>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row our-partner-images">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector5.png"
                  alt=""
                />
              </div>
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector5.png"
                  alt=""
                />
              </div>
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector5.png"
                  alt=""
                />
              </div>
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector5.png"
                  alt=""
                />
              </div>
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector5.png"
                  alt=""
                />
              </div>
              <div class="col-sm-2">
                <img
                  class="gallery-image"
                  src="./../assets/images/home/Vector6.png"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-12 center-align-item">
            <button type="button" class="btn catelogs-btn">
              <router-link class="nav-link link register-link" to="/register/"
                >All Partners</router-link
              >
            </button>
          </div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 about-section">
            <h1 class="services-section-heading">
              What clients say
            </h1>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row our-partner-images">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-6">
                <div class="client-block">
                  <div class="row">
                    <div class="col-sm-3">
                      <img
                        class="client-image"
                        src="./../assets/images/home/Ellipse1.png"
                        alt=""
                      />
                    </div>
                    <div class="col-sm-9 pt-4">
                      <p class="client-name">Claire Bell</p>
                      <p class="client-name">Designer</p>
                    </div>
                  </div>
                  <div class="row">
                    <div>
                      <p class="client-description">
                        Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididun t utamet, consectetur adipiscing elit, sed do
                        eiusmod temporincididunt utLorem ipsum dolor sit amet,
                        conse ctetur adipiscing elit, s
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="client-block">
                  <div class="row">
                    <div class="col-sm-3">
                      <img
                        class="client-image"
                        src="./../assets/images/home/Ellipse2.png"
                        alt=""
                      />
                    </div>
                    <div class="col-sm-9 pt-4">
                      <p class="client-name">Francisco Lane</p>
                      <p class="client-name">Designer</p>
                    </div>
                  </div>
                  <div class="row">
                    <div>
                      <p class="client-description">
                        Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididun t utamet, consectetur adipiscing elit, sed do
                        eiusmod temporincididunt utLorem ipsum dolor sit amet,
                        conse ctetur adipiscing elit, sLorem ipsum dolor dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididun t ut
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="client-block">
                  <div class="row">
                    <div class="col-sm-3">
                      <img
                        class="client-image"
                        src="./../assets/images/home/Ellipse3.png"
                        alt=""
                      />
                    </div>
                    <div class="col-sm-9 pt-4">
                      <p class="client-name">Ralph Fisher</p>
                      <p class="client-name">Designer</p>
                    </div>
                  </div>
                  <div class="row">
                    <div>
                      <p class="client-description">
                        Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididun t utamet, consectetur adipiscing elit, sed do
                        eiusmod temporincididunt utLorem ipsum dolor sit amet,
                        conse ctetur adipiscing elit, s
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="client-block">
                  <div class="row">
                    <div class="col-sm-3">
                      <img
                        class="client-image"
                        src="./../assets/images/home/Ellipse4.png"
                        alt=""
                      />
                    </div>
                    <div class="col-sm-9 pt-4">
                      <p class="client-name">Jorge Murphy</p>
                      <p class="client-name">Designer</p>
                    </div>
                  </div>
                  <div class="row">
                    <div>
                      <p class="client-description">
                        Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididun t utamet, consectetur adipiscing elit, sed do
                        eiusmod temporincididunt utLorem ipsum dolor sit amet,
                        conse ctetur adipiscing elit, s
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
      <div class="try-for-free-sction">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="row have-tried-section">
              <div class="col-sm-6 pl-0">
                <img
                  class="have-tried-image"
                  src="./../assets/images/home/Line-Chart.png"
                  alt=""
                />
              </div>
              <div class="col-sm-6 center-align-item have-tried-view">
                <h1 class="services-section-heading">
                  Have you tried our Container Offer?
                </h1>
                <button type="button" class="btn try-forfree-btn">
                  <router-link class="nav-link link login-link" to="/login/"
                    >Try for Free</router-link
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
      <div class="row footer-main-view">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-3">
              <div>
                <span class="footer-icon"
                  ><i class="mdi mdi-map-marker-outline"></i
                ></span>
                <span class="address-title">Guangzhou, China</span>
              </div>
              <div class="mt-1">
                <span class="footer-icon"
                  ><i class="mdi mdi-cellphone-android"></i
                ></span>
                <span class="address-title">1888393939</span>
              </div>
              <div>
                <span class="footer-icon"
                  ><i class="mdi mdi-twitter"></i>
                </span>
                <span class="footer-icon ml-2"
                  ><i class="mdi mdi-facebook-box"></i
                ></span>
                <span class="footer-icon ml-2"
                  ><i class="mdi mdi-linkedin-box"></i
                ></span>
              </div>
            </div>
            <div class="col-sm-6 footer-section">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="footer-title">Main</h6>
                  <nav class="navbar bg-light justify-content-center">
                    <!-- Links -->
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="col-sm-6">
                  <h6 class="footer-title">Resources</h6>
                  <nav class="navbar bg-light justify-content-center">
                    <!-- Links -->
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Free Catalog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Request</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Updates</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-sm-3 text-right">
              <a class="" href="#"
                ><img src="./../assets/images/home/logowhite.png" alt="logo"
              /></a>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
      <div class="row Footer-last-section">
        <div class="col-sm-12 center-align-item">
          <h6 class="copyright-title">copyright Keerki 2020</h6>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="js">
export default {
  name: 'home'
}
</script>

<style scoped lang="scss">
.main-home {
  display: flex;
  flex-direction: column;
  padding: 0px;
  position: static;
  left: 0px;
  top: 0px;
  background: #0278ae;
}
.kirkee-top-navbar .navbar {
  background: #0278ae !important;
}
img {
  width: 100% !important;
  height: 100% !important;
}
.btn.login-btn {
  height: 52px !important;
  width: 135px !important;
  background: #eab939;
  border: 1px solid #ffffff;
  box-sizing: border-box;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 0px;
  margin-right: 20px;
}
.btn.register-btn {
  height: 52px !important;
  width: 135px !important;
  border: 1px solid #ffffff;
  box-sizing: border-box;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 0px;
}
.nav-login-register-btn {
  padding: 22px;
}
.nav-link.login-link {
  font-style: normal;
  font-weight: 500;
  font-size: 17px;
  letter-spacing: 0.2px;
  color: #112d57;
}
.nav-link.register-link {
  font-style: normal;
  font-weight: 500;
  font-size: 17px;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.navbar .navbar-menu-wrapper .navbar-nav.header-links {
  margin-top: 35px;
}
.navbar-brand.brand-logo {
  margin-top: 5px;
}
.kirkee-home-section {
  margin-top: 100px;
}
.about-section {
  text-align: center;
  margin-top: 6%;
}
.about-section-heading {
  font-weight: 500;
  font-size: 80px;
  line-height: 88px;
  text-align: center;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.about-section-description {
  font-size: 20px;
  line-height: 30px;
  text-align: center;
  letter-spacing: 0.2px;
  color: #ffffff;
  margin-bottom: 96px;
}
.about-description {
  margin-top: 20px;
}
.center-align-item {
  text-align: center;
}
.btn.try-forfree-btn {
  width: 172px;
  height: 65px;
  background: #eab939;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 0;
  margin-bottom: 38px;
}
.btn.catelogs-btn {
  width: 172px;
  height: 65px;
  border: 1px solid #ffffff;
  box-sizing: border-box;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 0px;
}
.nav-link.link {
  padding: 0px !important;
}
.gradient-image {
  text-align: center;
}
.services-section-heading {
  font-size: 52px;
  line-height: 62px;
  color: #ffffff;
  text-align: center;
}
.services-section-description {
  font-size: 20px;
  line-height: 30px;
  color: #ffffff;
  text-align: center;
}
.our-services-section {
  margin-top: 162px;
  margin-bottom: 140px;
}
.our-services-block {
  border: 1px solid #ffffff;
  box-sizing: border-box;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 0px;
  padding: 79px;
  margin: 10px;
  text-align: center;
  color: #ffda91;
  font-size: 32px;
}
.gallery-image {
  border-radius: 10px;
}
.gallery-images-section {
  margin-bottom: 44px;
}
.our-partner-images {
  margin-top: 40px;
  margin-bottom: 44px;
}
.client-block {
  background: #07689f;
  border: 1px solid #eab939;
  box-sizing: border-box;
  border-radius: 10px;
  padding: 50px;
  margin: 20px;
}
.client-name {
  font-size: 16px;
  line-height: 24px;
  letter-spacing: 0.2px;
  color: #ffffff;
  margin-bottom: 0px;
}
.client-description {
  margin-top: 30px;
  font-size: 16px;
  line-height: 30px;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.have-tried-section {
  background: #07689f;
  box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);
  border-radius: 33px;
}
.have-tried-view {
  margin-top: 80px;
}
.try-for-free-sction {
  margin-bottom: 50px;
}
.have-tried-image {
  border-top-left-radius: 33px;
  border-bottom-left-radius: 33px;
}
.footer-section .nav-item .nav-link {
  font-size: 16px;
  line-height: 24px;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.footer-title {
  font-size: 20px;
  line-height: 30px;
  letter-spacing: 0.1px;
  color: #ffffff;
  text-align: center;
}
.Footer-last-section {
  margin-top: 80px;
  margin-bottom: 80px;
}
.copyright-title {
  font-size: 16px;
  line-height: 24px;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.try-for-free-sction {
  margin-top: 165px;
  margin-bottom: 165px;
}
.footer-main-view {
  margin-top: 118px;
}
.address-title {
  font-size: 16px;
  line-height: 24px;
  letter-spacing: 0.2px;
  color: #ffffff;
}
.footer-icon {
  font-size: 32px;
  color: #ffffff;
}
</style>
