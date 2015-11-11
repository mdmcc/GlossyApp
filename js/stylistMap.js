//map for stylist 
$(document).ready(function(){
        window.onclick = function(event){
            console.log(event);
        }
   });
        console.log(event);
                function loadMyMap(){
                    console.log(google);
                    var map = new google.maps.Map(
                        document.getElementById("gogmap"),
                        {
                            center:{
                                lat:49,
                                lng:-123
                            },
                            zoom:10
                        }

                    )};