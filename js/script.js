window.onload = function(){ 

        var signback = document.getElementById("signback");
        if(signback != null){
            signback.onclick = function(){
              location.href = "./index.html";
            };
        }
            


       var logobut = document.getElementById("logoutbut");
        if(logobut != null){
             logobut.onclick = function(){
                
                location.href = "./php/logout.php";
            };
        }
           
 };