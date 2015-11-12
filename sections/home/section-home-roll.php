<section id="section-home-roll" class="scrollify-section" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row" style="margin-top: 90px;">
      
      <h3 class="font-yellow text-shadow">Recent Tweets</h3>
        
      <?php
        
        use Abraham\TwitterOAuth\TwitterOAuth;

        //Configuration
        $twitterID = "GoodTimesUSA";
        $tweetNum = 4;
        $consumerKey = "XX7K2qyCz6puNq5TqWEwDAEix";
        $consumerSecret = "CynFTPmTLgpWHp14shoL9iJKYb7sbjIpTqgq2GkeH2wHj3J3nQ";
        $accessToken = "56342932-DB8xVejO4yr3VgdLicvmvVyWdiOgKCqRyQmBvlnj9";
        $accessTokenSecret = "qu8T9oVzPbUZ72VdG2Lb6q64vDxZMlAvg3cqBTqEUSrh1"; 
        if($twitterID && $consumerKey && $consumerSecret && $accessToken && $accessTokenSecret) {
              //Authentication with twitter
              $twitterConnection = new TwitterOAuth(
                  $consumerKey,
                  $consumerSecret,
                  $accessToken,
                  $accessTokenSecret
              );
              //Get user timeline feeds
              $twitterData = $twitterConnection->get(
                  'statuses/user_timeline',
                  array(
                      'screen_name'     => $twitterID,
                      'count'           => $tweetNum,
                      'exclude_replies' => true,
                      
                  )
              );
        ?>        
                     <div class="tweet-list">
                       
                        <?php if(!empty($twitterData)): foreach($twitterData as $tweet):
                                $latestTweet = $tweet->text;
                                $latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="http://$1" target="_blank">http://$1</a>', $latestTweet);
                                $latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="http://$1" target="_blank">https://$1</a>', $latestTweet);
                                $latestTweet = preg_replace('/@([a-z0-9_]+)/i', '<a class="tweet-author" href="http://twitter.com/$1" target="_blank">@$1</a>', $latestTweet);
                                $tweetTime = date("D M d H:i:s",strtotime($tweet->created_at));
                        ?>
                       
                        <div class="tweet-wrapper col-md-3">
                            <div class="tweet-thumb">
                              <span class="had-thumb"><a href="<?php echo $tweet->user->url; ?>" title="<?php echo $tweet->user->name; ?>"><img alt="" src="<?php echo $tweet->user->profile_image_url; ?>"></a></span>
                              <h5 class="font-white tweeter-name"><?php echo $tweet->user->name; ?></h5>
                            </div>
                            <div class="tweet-content">
                                <h4 class="title font-white" title="<?php echo $tweet->text; ?>"><?php echo $latestTweet; ?></h4>
                              <p class="meta font-white"><?php echo $tweetTime; ?></p>
                            </div>
                        </div>
                       
                        <?php endforeach; else: ?>
                        <li class="tweet-wrapper">Tweets not found for the given username.</li>
                        <?php endif; ?>
                       
                     </div>
        <?php
        }else{
            echo 'Authentication failed, please try again.';
        }
      
      ?>
        
    </div>
    <div class="row">
      
      <h3 class="font-yellow text-shadow">Recent Instagrams</h3>
      
      <?php use MetzWeb\Instagram\Instagram; ?>
      
      <?php 
      
        $instagram = new Instagram('853f60394cc240a1832b1618cbeeea10');
        $user = $instagram->searchUser('GoodTimesUSA');
        $id = $user->data[0]->id;
        
        $pictures = $instagram->getUserMedia($id, 4);
      
      ?>
      
      <?php foreach($pictures->data as $picture): ?>
      
      <div class="col-md-3">
      
        <div class="instagram-pic-wrapper" style="background-image: url(<?php  echo $picture->images->standard_resolution->url; ?>); min-height: 262.5px; background-size: cover;">
        
        </div>
      
      </div>
      
      <?php endforeach; ?>
      
      
    </div>
  </div>
</section>