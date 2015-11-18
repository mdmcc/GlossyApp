 var info = [];
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '525265574303594',
      xfbml      : true,
      version    : 'v2.5'
    });
   
    var fbButLogin = document.getElementById("fbLoginBut");
      FB.getLoginStatus(function(response1){
          console.log(response1);
          if(response1.status == "connected"){
              FB.api('/me?fields=first_name,last_name,gender,about,age_range,email', function(response2){
        
                  console.log(response2);
                    info.push(response2);
                    console.log(info);
                  
                var inFname = document.getElementById("firstname");
                    //console.log(info[0].name);
                    inFname.value = info[0].first_name;
                  
                var inLname = document.getElementById("lastname");
                    inLname.value = info[0].last_name;
              })
          }
      })

     fbButLogin.onclick = function(evt){
                      FB.login(function(resp){
                        console.log(resp);
                        if(resp.status == "unknown"){
                            //alert("Go away");
                        }
                        if(resp.status == "connected"){
                           // alert("yayyy");
                            location.reload();
                            
                        }
                    },{
                          scope:"user_about_me,email"
                      });
                  }
                  //console.log(FB); 
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    