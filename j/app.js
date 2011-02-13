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
      
      $.getJSON( '/context', data, cbFunc );
      
      function cbFunc (body) {
        dom.startForm.className = "";
        dom.content.innerHTML = Mustache.to_html(dom.tweetTpl.innerHTML,body);
      }
    },
    
    localStorage : function() {
      
    }
  };
  
  app.init();
  
  return {
    getLocation : app.getLocation
  };
  
})(document);
