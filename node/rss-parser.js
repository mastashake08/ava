
var FeedParser = require('feedparser')
  , Twit = require('twit')
  , request = require('request')
  , options = {timeout: 10000, pool: false}
  , items = []
  , sleep = require('sleep');

var T = new Twit({
    consumer_key:         'rGM6fM7Bdam5hFV5S2SHKHwOl',
    consumer_secret:      'KWVn8GiCcV3hWnUN9e2wOIpYlfregBkJAOtaUGxrzYj5tIemfY',
    access_token:         '1077453194-bHc1n82WoGZs37gUohhptePig1qGYjLT25l7C7W',
    access_token_secret:  'HpfuhBxLaV3Y72ayIaxwYMv4vHCdJniI8BJUXyXJxmVF7',
    timeout_ms:           60*1000,  // optional HTTP request timeout to apply to all requests.
    });

var req = request('http://www.huffingtonpost.com/feeds/verticals/healthy-living/index.xml')
  , req2 = request('http://www.huffingtonpost.com/feeds/verticals/technology/index.xml')
  , req3 = request('http://www.huffingtonpost.com/feeds/verticals/health-news/index.xml')
  , req4 = request('http://www.huffingtonpost.com/feeds/verticals/entertainment/index.xml')
  , req5 = request('http://www.huffingtonpost.com/feeds/index.xml')
  , feedparser = new FeedParser([options]);

req.on('error', function (error) {
  // handle any request errors
});
req.on('response', function (res) {
  var stream = this;

  if (res.statusCode != 200) return this.emit('error', new Error('Bad status code'));

  stream.pipe(feedparser);
});

req2.on('error', function(error){

});

req2.on('response', function (res) {
  var stream = this;

  if (res.statusCode != 200) return this.emit('error', new Error('Bad status code'));

  stream.pipe(feedparser);
});
req3.on('error', function (error) {
  // handle any request errors
});
req3.on('response', function (res) {
  var stream = this;

  if (res.statusCode != 200) return this.emit('error', new Error('Bad status code'));

  stream.pipe(feedparser);
});
req4.on('error', function (error) {
  // handle any request errors
});
req4.on('response', function (res) {
  var stream = this;

  if (res.statusCode != 200) return this.emit('error', new Error('Bad status code'));

  stream.pipe(feedparser);
});
req5.on('error', function (error) {
  // handle any request errors
});
req5.on('response', function (res) {
  var stream = this;

  if (res.statusCode != 200) return this.emit('error', new Error('Bad status code'));

  stream.pipe(feedparser);
});


feedparser.on('error', function(error) {
  // always handle errors
});
feedparser.on('readable', function() {
  // This is where the action is!
  var stream = this
    , meta = this.meta // **NOTE** the "meta" is always available in the context of the feedparser instance
    , item, counter = 1;

  while (item = stream.read()) {

    items.push(item);
    /*
    console.log(item.title);
    console.log(item.author);
    console.log(item.link);*/
  }
  //console.log(items.length);
});

feedparser.on('end', function(){/*
  setTimeout(function(){
    console.log(items.length)
    T.post('statuses/update',{status: items[0].title + ' ' + items[0].link },function (err, data, response) {
        console.log(data);
      });
      items.shift();
      console.log(items);
  }, 5000);*/

});

//var stream = T.stream('statuses/sample');
setTimeout(function () {
  console.log('boo')
}, 1000)
var end = Date.now() + 5000
while (Date.now() < end) ;
console.log('imma let you finish but blocking the event loop is the best bug of all TIME')

/*
while(true){
  setTimeout(function(){
    console.log(items.length)
    T.post('statuses/update',{status: items[0].title + '' + item[0].link },function (err, data, response) {
        console.log(data);
      });
      items.shift();

  }, 15 * 60000);

  setTimeout(function(){
    console.log(items.length)
    T.post('statuses/update',{status: items[0].title + '' + item[0].link },function (err, data, response) {
        console.log(data);
      });
      items.shift();

  }, 15 * 60000);
}
*/
