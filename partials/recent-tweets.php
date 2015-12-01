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
                       
                        <?php $tweet_number = 0; ?>
                       
                        <?php if(!empty($twitterData)): foreach($twitterData as $tweet):
                                $tweet_number++;
                                $latestTweet = $tweet->text;
                                $latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="http://$1" target="_blank">http://$1</a>', $latestTweet);
                                $latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="http://$1" target="_blank">https://$1</a>', $latestTweet);
                                $latestTweet = preg_replace('/@([a-z0-9_]+)/i', '<a class="tweet-author" href="http://twitter.com/$1" target="_blank">@$1</a>', $latestTweet);
                                $tweetTime = date("l, F j",strtotime($tweet->created_at));
                        ?>
                       
                        <div class="tweet-wrapper col-md-3" id="twitter-column-<?php echo $tweet_number; ?>">
                            <div class="tweet-thumb">
                              <span class="had-thumb"><a href="<?php echo $tweet->user->url; ?>" title="<?php echo $tweet->user->name; ?>"><img alt="" src="<?php echo $tweet->user->profile_image_url; ?>"></a></span>
                              <h5 class="font-white tweeter-name"><?php echo $tweet->user->name; ?></h5>
                            </div>
                            <div class="tweet-content">
                                <h4 class="title font-white" title="<?php echo $tweet->text; ?>"><?php echo $latestTweet; ?></h4>
                            </div>
                          <div class="tweet-meta">
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