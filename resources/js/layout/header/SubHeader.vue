<template>
  <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Info-->
      <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Heading-->
        <div class="d-flex flex-column">
          <!--begin::Title-->
          <h2 class="text-white font-weight-bold my-2 mr-5">{{ $route.name }}</h2>
          <!--end::Title-->
          <!--begin::Breadcrumb-->
          <div class="d-flex align-items-center font-weight-bold my-2">
            <!--begin::Item-->
            <BLink :to="{ name: 'Home' }" class="opacity-75 hover-opacity-100">
              <i class="flaticon2-shelter text-white icon-1x"></i>
            </BLink>
            <!--end::Item-->
            <!--begin::Item-->
            <div v-for="route in $route.matched" :key="route.name">
              <template v-if="route.meta.breadcrumb">
                <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                <BLink
                  :to="{ name: route.name }"
                  class="text-white text-hover-white opacity-75 hover-opacity-100"
                  exact-path
                  exact-active-class="active"
                >
                  {{ route.meta.breadcrumb }}
                </BLink>
              </template>
            </div>
            <!--end::Item-->
          </div>
          <!--end::Breadcrumb-->
        </div>
        <!--end::Heading-->
      </div>
      <!--end::Info-->
    </div>
  </div>
</template>

<script>
export default {
  created() {
    console.log(this.$route.matched);
  }
};
</script>

