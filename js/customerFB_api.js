
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '525265574303594',
      xfbml      : true,
      version    : 'v2.5'
    });
   
      var loginBut = document.getElementById("fb-login-button");
      FB.getLoginStatus(function(response1){
          console.log(response1);
          if(response1.status == "connected"){
              FB.api("/me/", function(response2){
                  console.log(response2);
              })
          }
      })
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
