$(document).ready(function() {
  
  // (function(d, s, id) {
  //   var js, fjs = d.getElementsByTagName(s)[0];
  //   if (d.getElementById(id)) return;
  //   js = d.createElement(s); js.id = id;
  //   js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  //   fjs.parentNode.insertBefore(js, fjs);
  // }(document, 'script', 'facebook-jssdk'));


// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));


  $('.showlogin').parent().hide()

  $('.scrollBox').infinitescroll({
    navSelector  : "div.navigation",            
    nextSelector : "div.navigation a:first",    
    itemSelector : ".scrollBox div.post" ,
      loading: {
          finishedMsg: "",
          msgText: 'Loading more posts...'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        var $newElems = $( newElements ).css({ opacity: 1 });
      }
    );   

  // TWITTER
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

});