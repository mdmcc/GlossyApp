// $(document).ready(function () {
//     function ConvertFormToJSON(form){
//                     var array = $(form).serializeArray();
//                     var json = {};

//                     jQuery.each(array, function() {
//                         // don't send 'undefined'
//                         json[this.name] = this.value || '';
//                     });
//                     return json;
//             }
//         });

            /*$("#customerSubmit").click(function() {
                //console.log($("#lastName").val());
                var formData = ConvertFormToJSON("#customerForm");
                console.log("Customer data to send: ", formData);

                $.ajax({
                    url: "customerSubmit.php",
                    type: "POST",
                    dataType: "JSON",
                    data: formData,
                    success: function(data) {
                        console.log("Login data returned: ", data);

                        var status = data['status'];
                        // if(status == 'fail') {
                        //     $("#errorMsg").html(data['msg']);
                        //     $("#errorMsg").css("display", "block");
                        // } else {
                        //     // get user data
                        //     getUserProfileInfo();
                        //     $('#customerForm').trigger("reset");

                        // }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //console.log(jqXHR.statusText, textStatus, errorThrown);
                        console.log(jqXHR.statusText, textStatus);
                    }
                });*/

                // from: http://www.developerdrive.com/2013/04/turning-a-form-element-into-json-and-submiting-it-via-jquery/





  

