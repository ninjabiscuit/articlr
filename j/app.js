var ARTICLR = (function(d){
  
  var data = {
    loclat : null,
    loclong : null,
    tags : ""
  };
  
  var dom = {
    startForm : d.getElementById("startForm"),
    contentHolder : d.getElementById("contentHolder"),
    content : d.getElementById("content")
  };
  
  var app = {
    init : function() {
      var self = this;
      this.getLocation();
      
      dom.startForm.addEventListener( "submit", function(e){
        data.tags = dom.startForm.tags.value;
        self.ajax();
        
        e.preventDefault();
      }, false);
    },
    getLocation : function() {
      navigator.geolocation.getCurrentPosition(function(position){
        var coords = position.coords;
        
        data.loclat = coords.latitude;
        data.loclong = coords.longitude;
        
      }, function(error){
        alert("we can't determine your position")
      });
    },
    ajax : function() {
      
      dom.startForm.className = "loading";
      
      $.ajax({
        type: 'GET', // defaults to 'GET'
        url: '/foo', // defaults to window.location
        data: data, // can be a string or object (objects are automatically serialized to JSON)
        dataType: 'json', // what response type you accept from the server ('json', 'xml', 'html', or 'text')
        success: function(body) {
          dom.startForm.style.display = "none";
          dom.startForm.className = "";
          dom.contentHolder.style.display = "block";
          dom.content.innerHTML = body;
        }, // body is a string (or if dataType is 'json', a parsed JSON object)
        error: function(xhr, type) {
          alert("something went wrong");
        } // type is a string ('error' for HTTP errors, 'parsererror' for invalid JSON)
      })
      
    }
    
  };
  
  app.init();
  
  //return {
  //  getLocation : app.getLocation
  //};
  
})(document);
