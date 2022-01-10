var media = window.matchMedia("(min-width: 993px)");
var targetEle = document.getElementById("searchBox").nextElementSibling;
if(targetEle.className == 'livPersTrig') {
    targetEle = targetEle.nextElementSibling;
}
var marginTop  = targetEle.style.marginTop;


(function() {
    var req = new XMLHttpRequest();
    req.onload = function () {
        if (req.status >= 200 && req.status < 300) {
            var data = JSON.parse(req.responseText);
            // Make sure event is still active
            if (data.active == "yes") {
                var navContainer = document.getElementsByClassName("hp-cta-bar")[0];
                displayAlertHTML(data, navContainer);
                // Adjust margin-top of target element
                resetMargin(media);
                media.addListener(resetMargin); 
                document.getElementById("alert-close").addEventListener("click", resetMargin);
            }   
        } else {
            //console.log('Failure!');
        }
        
    };
   
   req.open('GET', '/emergency-alert/alert-json-data.json', true);
   req.send();

})();

function displayAlertHTML(data, container) {
    return $(container).prepend(generateAlertHTML(data));
}

function generateAlertHTML(data) {
  return "\n    <div class=\"alert ".concat(data.color, " fade in\" id=\"msgAlert\">\n        <a href=\"#\" id=\"alert-close\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>\n        <p class=\"alertContent\">\n        <span class=\"alert-heading\">").concat(data.headline, ":</span>\n        ").concat(data.summary, "\n        </p>\n    </div>    \n    ");
}

function resetMargin(media) {
    var alert = document.getElementsByClassName("alert")[0];

    if(alert && media.matches) {
        targetEle.style.marginTop = "220px";
    } else {
        targetEle.style.marginTop = marginTop;
    }
}

