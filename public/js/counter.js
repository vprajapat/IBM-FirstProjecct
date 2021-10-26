
$(document).ready(function() { 
   function setCounterValue() {
   var random = Math.floor(Math.random() * (5000 - 1000 + 1)) + 1000;
   $("div#counter").html("visitor "+random);
   setTimeout(function(){ setCounterValue(); }, 3000);
}
setCounterValue();
setTimeout(function(){ setCounterValue(); }, 3000);      
});    
