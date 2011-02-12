var ARTICLR = (function(){
  
  var app = {
    init : function() {
      
    },
    getLocation : function() {
      navigator.geolocation.getCurrentPosition(function(position){
        var coords = position.coords;
        console.log(coords.latitude, coords.longitude);
      }, function(error){
        var errorTypes = {
          1: 'permission denied',
          2: 'position is not available',
          3: 'Request timeout'
        };
        
        log(errorTypes[error.code] + ":means we can't determine your position")
      });
    }
  };
  
  return {
    getLocation : app.getLocation
  };
  
})(window.jQuery,document);

ARTICLR.getLocation()