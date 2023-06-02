$(window).on("load", function () {
    $("#loading").delay(0).fadeOut("fast"); //ローディング画面を0秒（0ms）待機してからフェードアウト
});
  
$(function (){
    $(".icon-open-menu-mobile").click(function (){
        $("header#header .mob #nav-header").addClass('open');
    })
    $(".icon-close-menu-mobile").click(function (){
        $("header#header .mob #nav-header").removeClass('open');
    })
    $(window).on( 'scroll' , function(){
        if($(window).scrollTop() > 500){
            $("#back-to-top").fadeIn(200);
        } else{
            $("#back-to-top").fadeOut(200);
        }
    });
    $(document).on("click",'#back-to-top a',function() {
        $('html, body').animate({ scrollTop:0 },'slow');
        return false;
    });

});

