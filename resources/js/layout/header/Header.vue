<template>
  <div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
      <!--begin::Left-->
      <div class="d-flex align-items-stretch mr-3">
        <!--begin::Header Logo-->
        <div class="header-logo">
          <BLink :to="{ name: 'Home' }">
            <img
              alt="Logo"
              src="assets/media/logos/logo-letter-9.png"
              class="logo-default max-h-40px"
            />
          </BLink>
        </div>
        <!--end::Header Logo-->
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
          <!--begin::Header Menu-->
          <div
            id="kt_header_menu"
            class="header-menu header-menu-left header-menu-mobile header-menu-layout-default"
          >
            <!--begin::Header Navar-->
            <LayoutMenu />
            <!--end::Header Nav-->
          </div>
          <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
      </div>
      <!--end::Left-->
      <!--begin::Topbar-->
      <div class="topbar">
        <!--begin::Search-->
        <div class="dropdown">
          <!--begin::Toggle buscar-->
          <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
              <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1"
                >
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                      d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                      fill="#000000"
                      fill-rule="nonzero"
                      opacity="0.3"
                    />
                    <path
                      d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                      fill="#000000"
                      fill-rule="nonzero"
                    />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span>
            </div>
          </div>
          <!--end::Toggle-->
        </div>
        <!--end::Search-->

        <!--begin::My Cart-->
        <div class="dropdown">
          <!--begin::Toggle-->
          <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
              <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1"
                >
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                      d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                      fill="#000000"
                      fill-rule="nonzero"
                      opacity="0.3"
                    />
                    <path
                      d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                      fill="#000000"
                    />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span>
            </div>
          </div>
          <!--end::Toggle-->
          <!--begin::Dropdown-->
          <div
            class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up"
          >
            <form>
              <!--begin::Header-->
              <div
                class="d-flex align-items-center py-10 px-8 bgi-size-cover bgi-no-repeat rounded-top"
                style="background-image: url(assets/media/misc/bg-1.jpg)"
              >
                <span class="btn btn-md btn-icon bg-white-o-15 mr-4">
                  <i class="flaticon2-shopping-cart-1 text-success"></i>
                </span>
                <h4 class="text-white m-0 flex-grow-1 mr-3">My Cart</h4>
                <button type="button" class="btn btn-success btn-sm">2 Items</button>
              </div>
              <!--end::Header-->
              <!--begin::Scroll-->
              <div
                class="scroll scroll-push"
                data-scroll="true"
                data-height="250"
                data-mobile-height="200"
              >
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between p-8">
                  <div class="d-flex flex-column mr-2">
                    <a
                      href="#"
                      class="font-weight-bold text-dark-75 font-size-lg text-hover-primary"
                      >iBlender</a
                    >
                    <span class="text-muted">Best kichen gadget in 2020</span>
                    <div class="d-flex align-items-center mt-2">
                      <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                      <span class="text-muted mr-1">for</span>
                      <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                      </a>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                      </a>
                    </div>
                  </div>
                  <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
                  </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between p-8">
                  <div class="d-flex flex-column mr-2">
                    <a
                      href="#"
                      class="font-weight-bold text-dark-75 font-size-lg text-hover-primary"
                      >SmartCleaner</a
                    >
                    <span class="text-muted">Smart tool for cooking</span>
                    <div class="d-flex align-items-center mt-2">
                      <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                      <span class="text-muted mr-1">for</span>
                      <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                      </a>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                      </a>
                    </div>
                  </div>
                  <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
                  </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between p-8">
                  <div class="d-flex flex-column mr-2">
                    <a
                      href="#"
                      class="font-weight-bold text-dark-75 font-size-lg text-hover-primary"
                      >CameraMax</a
                    >
                    <span class="text-muted">Professional camera for edge cutting shots</span>
                    <div class="d-flex align-items-center mt-2">
                      <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                      <span class="text-muted mr-1">for</span>
                      <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                      </a>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                      </a>
                    </div>
                  </div>
                  <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
                  </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between p-8">
                  <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark text-hover-primary">4DPrinter</a>
                    <span class="text-muted">Manufactoring unique objects</span>
                    <div class="d-flex align-items-center mt-2">
                      <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                      <span class="text-muted mr-1">for</span>
                      <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                      </a>
                      <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                      </a>
                    </div>
                  </div>
                  <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
                  </a>
                </div>
                <!--end::Item-->
              </div>
              <!--end::Scroll-->
              <!--begin::Summary-->
              <div class="p-8">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                  <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-7">
                  <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                  <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                </div>
                <div class="text-right">
                  <button type="button" class="btn btn-primary text-weight-bold">
                    Place Order
                  </button>
                </div>
              </div>
              <!--end::Summary-->
            </form>
          </div>
          <!--end::Dropdown-->
        </div>
        <!--end::My Cart-->

        <!--begin::Dropdown-->

        <div
          class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg"
        >
          <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
            <!--begin:Form-->
            <form method="get" class="quick-search-form">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <span class="svg-icon svg-icon-lg">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1"
                      >
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path
                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                            fill="#000000"
                            fill-rule="nonzero"
                            opacity="0.3"
                          />
                          <path
                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                            fill="#000000"
                            fill-rule="nonzero"
                          />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search..." />
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                  </span>
                </div>
              </div>
            </form>
            <!--end::Form-->
            <!--begin::Scroll-->
            <div
              class="quick-search-wrapper scroll"
              data-scroll="true"
              data-height="325"
              data-mobile-height="200"
            ></div>
            <!--end::Scroll-->
          </div>
        </div>
        <!--end::Dropdown-->

        <!--begin::User-->
        <b-dropdown
          id="dropdown-1"
          no-caret
          menu-class="p-0 m-0  dropdown-menu-anim-up dropdown-menu-lg p-0"
          variant="transparent"
          right
        >
          <template #button-content>
            <!--begin::Toggle-->
            <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
              <div
                class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto"
              >
                <span
                  class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1"
                >
                  Hola,
                </span>
                <span
                  class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"
                >
                  {{ authUser.name }}
                </span>
                <span class="symbol symbol-35">
                  <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">
                    S
                  </span>
                </span>
              </div>
            </div>
            <!--end::Toggle-->
          </template>
          <!--begin::Header-->
          <div class="d-flex align-items-center p-8 rounded-top">
            <!--begin::Symbol-->
            <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
              <img src="assets/media/users/300_21.jpg" alt="" />
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">Sean Stone</div>
            <span class="label label-light-success label-lg font-weight-bold label-inline"
              >3 messages</span
            >
            <!--end::Text-->
          </div>
          <div class="separator separator-solid"></div>
          <!--end::Header-->
          <!--begin::Nav-->
          <div class="navi navi-spacer-x-0 pt-5">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item px-8">
              <div class="navi-link">
                <div class="navi-icon mr-2">
                  <i class="flaticon2-calendar-3 text-success"></i>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold">My Profile</div>
                  <div class="text-muted">
                    Account settings and more
                    <span class="label label-light-danger label-inline font-weight-bold"
                      >update</span
                    >
                  </div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item px-8">
              <div class="navi-link">
                <div class="navi-icon mr-2">
                  <i class="flaticon2-mail text-warning"></i>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold">My Messages</div>
                  <div class="text-muted">Inbox and tasks</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-2.html" class="navi-item px-8">
              <div class="navi-link">
                <div class="navi-icon mr-2">
                  <i class="flaticon2-rocket-1 text-danger"></i>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold">My Activities</div>
                  <div class="text-muted">Logs and notifications</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Item-->
            <a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
              <div class="navi-link">
                <div class="navi-icon mr-2">
                  <i class="flaticon2-hourglass text-primary"></i>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold">My Tasks</div>
                  <div class="text-muted">latest tasks and projects</div>
                </div>
              </div>
            </a>
            <!--end::Item-->
            <!--begin::Footer-->
            <div class="navi-separator mt-3"></div>
            <div class="navi-footer px-8 py-5">
              <a target="_blank" class="btn btn-light-primary font-weight-bold" @click="logOut">
                Sign Out
              </a>
              <a
                href="custom/user/login-v2.html"
                target="_blank"
                class="btn btn-clean font-weight-bold"
              >
                Upgrade Plan
              </a>
            </div>
            <!--end::Footer-->
          </div>
          <!--end::Nav-->
        </b-dropdown>
        <!--end::User-->
      </div>
      <!--end::Topbar-->
    </div>
    <!--end::Container-->
  </div>
</template>

<script>
import { mapState } from 'vuex';

import LayoutMenu from './Menu';

export default {
  components: {
    LayoutMenu
  },
  computed: {
    ...mapState('auth', ['authUser'])
  },
  methods: {
    logOut() {
      axios
        .post('logout')
        .then(() => {
          window.location.href = '/login';
        })
        .catch((error) => {
          console.log(error);
        });
    }
  }
};
</script>

<style lang="scss">
.dropdown-toggle-no-caret::after {
  display: none !important;
}
.dropdown-menu {
  outline: none;
}
</style>