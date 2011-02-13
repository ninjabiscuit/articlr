$(document).ready(function(){
    $(".column25 .body").hide();

    $('.openclose').click(function() {
        $(this).next("div.body").slideToggle('fast');
    });

    $("#myLocation a, #peopleNearby .primary, #relatedArticles a, .colorbox").colorbox({width:"990px", height:"80%", iframe:true});
    $("a[rel='picture']").colorbox();
});