var Twit = require('twit')
var dm = "American National Consumer Health Management. Care management strategies to increase positive patient outcomes. Follow/Like to learn more", LineByLineReader = require('line-by-line'), lr = new LineByLineReader('node/Keywords.csv'), tracks = [];
lr.on('error', function (err) {
	// 'err' contains error object
  console.log('ERROR!! ' + err);
});

lr.on('line', function (line) {
	// 'line' contains the current line without the trailing newline character.
  if(line != null && line != ''){
    tracks.push(line);
  }
  console.log('Line read!');
});

lr.on('end', function () {
	// All lines are read, file is closed now.
  console.log('Tracks loaded!');
  //console.log(tracks);

});
//Las Vegas bounding box SW/NE Long/Lat pair
var locations = ['-115.414625','36.129623','-115.062072','36.380623'];
var user_ids = [];
var stream;
var T = new Twit({
  consumer_key:         'rGM6fM7Bdam5hFV5S2SHKHwOl',
  consumer_secret:      'KWVn8GiCcV3hWnUN9e2wOIpYlfregBkJAOtaUGxrzYj5tIemfY',
  access_token:         '1077453194-zfsRCHEM5aiHq5R705o7xbLBKvOD7c1uohrOAzH',
  access_token_secret:  'ip0JMbK2GXZ541GJYvd338ujBl44n7fvBJaBMMj1RHJlw',
  timeout_ms:           60*1000,  // optional HTTP request timeout to apply to all requests.
});



//tracks = message.data;
  stream = T.stream('statuses/filter', { track: tracks, locations: locations })

  stream.on('tweet', function (tweet) {
    //...
    T.post('friendships/create',{user_id: tweet.user.id});
    console.log(tweet.text);

  });
//Listen to user stream for followers
var userStream = T.stream('user');
userStream.on('follow', function(event){
  console.log('You were followed');
  T.post('direct_messages/new',{user_id: event.target.id, text: dm });
});
