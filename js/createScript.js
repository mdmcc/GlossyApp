createScript("js/moment.min.js");
createScript("js/jquery.min.js");
createScript("js/jquery-ui.custom.min.js");
createScript("js/fullcalendar.js");
createScript("js/fullcalendar.min.js");
createScript("js/bootstrap.js");
createScript("js/npm.js");
createScript("js/customerMap.js");
createScript("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js");
createScript("js/script.js");
createScript("https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js");

function createScript(src){
    var script1 = document.createElement("script");
    document.head.appendChild(script1);
    script1.src = src;

}

