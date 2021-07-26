<template>
  <div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header py-3">
      <div class="card-title align-items-start flex-column">
        <h3 class="card-label font-weight-bolder text-dark">Account Information</h3>
        <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
      </div>
      <div class="card-toolbar">
        <button type="reset" class="btn btn-success mr-2">Save Changes</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
      </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="form">
      <div class="card-body">
        <!--begin::Heading-->
        <div class="row">
          <label class="col-xl-3"></label>
          <div class="col-lg-9 col-xl-6">
            <h5 class="font-weight-bold mb-6">Account:</h5>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
          <div class="col-lg-9 col-xl-6">
            <div class="spinner spinner-sm spinner-success spinner-right">
              <input class="form-control form-control-lg form-control-solid" type="text" value="nick84" />
            </div>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
          <div class="col-lg-9 col-xl-6">
            <div class="input-group input-group-lg input-group-solid">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="la la-at"></i>
                </span>
              </div>
              <input type="text" class="form-control form-control-lg form-control-solid" value="nick.watson@loop.com" placeholder="Email" />
            </div>
            <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
          <div class="col-lg-9 col-xl-6">
            <select class="form-control form-control-lg form-control-solid">
              <option>Select Language...</option>
              <option value="en" selected="selected">English</option>
              <option value="en-gb">English UK - British English</option>
              <option value="es">Español - Spanish</option>
            </select>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
          <div class="col-lg-9 col-xl-6">
            <select class="form-control form-control-lg form-control-solid">
              <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
              <option data-offset="0" value="UTC">(GMT) UTC</option>
            </select>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row align-items-center">
          <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
          <div class="col-lg-9 col-xl-6">
            <div class="checkbox-inline">
              <label class="checkbox"> <input type="checkbox" checked="checked" />Email <span></span></label>
              <label class="checkbox"> <input type="checkbox" checked="checked" />SMS <span></span></label>
              <label class="checkbox"> <input type="checkbox" />Phone <span></span></label>
            </div>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="separator separator-dashed my-5"></div>
        <!--begin::Form Group-->
        <div class="row">
          <label class="col-xl-3"></label>
          <div class="col-lg-9 col-xl-6">
            <h5 class="font-weight-bold mb-6">Security:</h5>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
          <div class="col-lg-9 col-xl-6">
            <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
            <p class="form-text text-muted pt-2">
              After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
              <a href="#" class="font-weight-bold">Learn more</a>.
            </p>
          </div>
        </div>
        <!--begin::Form Group-->
        <div class="form-group row">
          <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
          <div class="col-lg-9 col-xl-6">
            <div class="checkbox-single">
              <label class="checkbox m-0"> <input type="checkbox" />Require personal information to reset your password. <span></span></label>
            </div>
            <p class="form-text text-muted py-2">
              For extra security, this requires you to confirm your email or phone number when you reset your password.
              <a href="#" class="font-weight-boldk">Learn more</a>.
            </p>
            <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
          </div>
        </div>
      </div>
    </form>
    <!--end::Form-->
  </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
  computed: {
    ...mapState('auth', ['authUser'])
  }
};
</script>