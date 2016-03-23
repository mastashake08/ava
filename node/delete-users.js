var Twit = require('twit');
var follower_ids = [];
var following_ids = [];
var T = new Twit({
  consumer_key:         'rGM6fM7Bdam5hFV5S2SHKHwOl',
  consumer_secret:      'KWVn8GiCcV3hWnUN9e2wOIpYlfregBkJAOtaUGxrzYj5tIemfY',
  access_token:         '1077453194-zfsRCHEM5aiHq5R705o7xbLBKvOD7c1uohrOAzH',
  access_token_secret:  'ip0JMbK2GXZ541GJYvd338ujBl44n7fvBJaBMMj1RHJlw',
  timeout_ms:           60*1000,  // optional HTTP request timeout to apply to all requests.
});

 T.get('followers/ids', function (err, data, response) {
  // console.log(data);
  follower_ids = data.ids;
  //console.log('Follower ids: ');
  //console.log(follower_ids);
});

T.get('friends/ids', function (err, data, response) {
 // console.log(data);
 following_ids = data.ids;
 //console.log('Following ids: ');
 //console.log(following_ids);
 for(var i = 0; i < following_ids.length; ++i){
   //console.log(i);
   if(follower_ids.indexOf(following_ids[i]) == -1){
     T.post('friendships/destroy', {user_id: following_ids[i]});
     console.log('FRIENDSHIP DESTROYED: ' + following_ids[i]);
   }
 }
});
