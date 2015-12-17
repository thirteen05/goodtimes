      <?php use MetzWeb\Instagram\Instagram; ?>
      
      <?php 
      
        $instagram = new Instagram('853f60394cc240a1832b1618cbeeea10');
        $user = $instagram->searchUser('GoodTimesUSA');
        $id = $user->data[0]->id;
        
        $pictures = $instagram->getUserMedia($id, 4);
      
      ?>
      <?php $insta_number = 0; ?>
      <?php foreach($pictures->data as $picture): ?>
      <?php $insta_number++; ?>
      <div class="col-md-3 col-sm-6">
      
        <a href="<?php echo $picture->link ;?>" target="_blank">
          <div class="instagram-pic-wrapper" id="insta-column-<?php echo $insta_number; ?>" style="background-image: url(<?php  echo $picture->images->standard_resolution->url; ?>);">
            <div class="instagram-overlay">
              <div class="instagram-center-wrapper">
                <i class="fa fa-instagram fa-2x"></i>
                <p>
                  View On Instagram
                </p>
              </div>
            </div>
          </div>
        </a>
      
      </div>

      
      <?php endforeach; ?>