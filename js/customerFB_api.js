 var info = [];
  window.fbAsyncInit = function() {
    FB.init({
      appId      : keys.facebook_appId,
      xfbml      : true,
      version    : 'v2.5'
    });
   
    var fbButLogin = document.getElementById("fbLoginBut");

     fbButLogin.onclick = function(evt){
                      FB.login(function(resp){
                        console.log(resp);
                       if(resp.status == "unknown"){
                            //alert("Go away");
                        }
                        if(resp.status == "connected"){
                           

         FB.getLoginStatus(function(response1){
          console.log(response1);
          
              FB.api('/me?fields=first_name,last_name,email,id', function(response2){
        
                  console.log(response2);
                    info.push(response2);
                    console.log(info);
                 
                var inFname = info[0].first_name;
                    //console.log(info[0].name);
                   // inFname.value = info[0].first_name;
                  
                var inLname = info[0].last_name;
                    //inLname.value = info[0].last_name;
                  
                var Email = info[0].email;
                    //Email.value = info[0].email; 
                  
                var fb_id = info[0].id;
                  //    console.log(fb_id);
                  
                  $.ajax({
					url:"./php/signup_cust.php",
					type:"post",
					dataType:"html",
					data: {
						//mode:1, // because we want the FB registration
						email: Email,
						firstname: inFname,
                        lastname: inLname,
						fb_id:fb_id,
                        password:"password"
					},
					success:function(response3){
						location.href = "customer_appointment.html"
                        console.log(response3);
					}
				});
              })
            })
             ,{
                          scope:"user_about_me,email"
                      };
                  
                  //console.log(FB); 
        }
     })
    }};

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    