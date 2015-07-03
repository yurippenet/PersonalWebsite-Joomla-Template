jQuery(document).ready(function(){

jQuery("#logo img").mouseenter(

function(){
	jQuery("#logo img").animate({ opacity: 0 }, 12, function () { jQuery("#logo img").attr("src", "/images/logoglow.png"); });
    jQuery("#logo img").animate({ opacity: 1 }, 13);
    
});

jQuery("#logo img").mouseleave(
function(){
	jQuery("#logo img").animate({ opacity: 0 }, 0, function () { jQuery("#logo img").attr("src", "/images/logo.png"); });
    jQuery("#logo img").animate({ opacity: 1 }, 0);
    
}

);

});
