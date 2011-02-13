var ARTICLR = (function(d){
  
  var data = {};
  
  var dom = {
    startForm : d.getElementById("startForm"),
    contentHolder : d.getElementById("contentHolder"),
    content : d.getElementById("content"),
    tweetTpl : d.getElementById("tweets-tpl"),
    flickrTpl : d.getElementById("flickr-tpl"),
  };
  
  var app = {
    init : function() {
      var self = this;
      
      this.waitforgeo = $.subscribe("/performSearch", function(){
        dom.content.innerHTML = "Waiting for GeoLocation"
      });

      this.getLocation();
      
      dom.startForm.addEventListener( "submit", function(e){
        data.keywords = dom.startForm.tags.value;
        
        clearTimeout(self.loopsiloo);
        
        (function loopsiloo(){
          console.log("loopsiloo")
          $.publish("/performSearch");
          self.loopsiloo = setTimeout(loopsiloo,5000);
        })();
        
        e.preventDefault();
      }, false);
    },
    
    getLocation : function() {
      
      var self = this;
      
      navigator.geolocation.getCurrentPosition(function(position){
        var coords = position.coords;
        
        data.latitude = coords.latitude;
        data.longitude = coords.longitude;
        
        console.log(data);
        
        $.unsubscribe(self.waitforgeo);
        $.subscribe("/performSearch", function(){
          console.log("ajax innit")
          self.ajax();
        });
        
      }, function(error){
        alert("we can't determine your position")
      });
    },
    
    ajax : function() {
      
      dom.startForm.className = "loading";
      
      /*$.ajax({
        type: 'GET', 
        url: 'http://articlr-backend.heroku.com/context', 
        data: data, 
        dataType: 'json', 
        success: function(body) {
          dom.startForm.className = "";
          dom.content.innerHTML = Mustache.to_html(dom.tweetTpl.innerHTML,body);
        }, 
        error: function(xhr, type) {
          console.log(xhr, type);
        } 
      })*/
      
      $.getJSON( 'http://articlr-backend.heroku.com/context', data, cbFunc );
      
      function cbFunc (body) {
        dom.startForm.className = "";
        dom.content.innerHTML = Mustache.to_html(dom.tweetTpl.innerHTML,body);
      }
      
      // Take the provided url, and add it to a YQL query. Make sure you encode it!
      //var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from flickr.photos.search where text="'+data.tags+'" limit 10 ') + '&format=json&callback=?';
      
      /*function cbFunc(data) {
        dom.content.innerHTML = Mustache.to_html(dom.flickrTpl.innerHTML,data);
      };*/
      
      // Request that YSQL string, and run a callback function.
      // Pass a defined function to prevent cache-busting.
      //$.getJSON( yql, cbFunc );
      
      /*
      yqlgeo.get('visitor',function(o){
        if(o.error){
          alert('No location found for user :(');
        } else {
          showphotos(o.place.woeid);
        }
      });
      function showphotos(woeid){
        var yql = 'select * from flickr.photos.search where woe_id=' + woeid;
        var cb = 'dispphotos';
        var src = 'http://query.yahooapis.com/v1/public/yql?q='+
                  encodeURIComponent(yql) + '&format=json&callback=' + cb + '&'+
                  'env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';
        var head = document.getElementsByTagName('head')[0];
        var s = document.createElement('script');
        s.setAttribute('id','yqlgeodata');
        s.setAttribute('src',src);
        head.appendChild(s);
      }
      function dispphotos(o){
        console.log(o);
      }*/
      
      
    },
    
    localStorage : function() {
      
    }
  };
  
  app.init();
  
  return {
    getLocation : app.getLocation
  };
  
})(document);
