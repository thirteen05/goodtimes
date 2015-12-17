

<div class="container-fluid" id="age-verify-wrapper">
  <div id="age-verify-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">

          <img id="age-verify-logo" width="300" src="<?php echo get_template_directory_uri(); ?>/images/Good-Times-Logo.svg" />
          
          <h5 class="font-yellow" style="margin: 15px 0;">This site is limited to persons of legal age to use tobacco where you reside.  You must be 18 years of age or older.</h5>
          <h3 class="font-white">Please Verify Your Age to Enter the Site.</h3>

        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">

            <div class="col-md-4">
              <select class="form-control" id="dm-age-month"></select>
            </div>
            <div class="col-md-4">
              <select class="form-control" id="dm-age-day"></select>
            </div>
            <div class="col-md-4">
              <select class="form-control" id="dm-age-year"></select>
            </div>

          </div>
        </div>
        </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <button class="btn btn-info btn-lg btn-block" id="check-age-button">Check Age</button>
          <div class="text-center">
            <div id="dm-verify-message" class="font-slab font-yellow"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>