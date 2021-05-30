<template>
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <LayoutHeader />
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Subheader-->
          <SubHeader />
          <!--end::Subheader-->
          <!--begin::Entry-->
          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <transition name="fade" mode="out-in">
                <router-view />
              </transition>
            </div>
            <!--end::Container-->
          </div>
          <!--end::Entry-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <!-- @include('layouts.metronic.footer') -->
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Main-->
</template>

<script>
import { mapState, mapActions } from 'vuex';

import LayoutHeader from './header/Header';
import SubHeader from './header/SubHeader';

export default {
  components: {
    LayoutHeader,
    SubHeader
  },
  computed: {
    ...mapState('auth', ['authUser'])
  },
  created() {
    this.getAuthUser();
  },
  methods: {
    ...mapActions('auth', ['getAuthUser'])
  }
};
</script>