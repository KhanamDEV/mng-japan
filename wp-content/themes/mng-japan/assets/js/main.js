$(window).on("load", function () {
    $("#loading").delay(0).fadeOut("fast"); //ローディング画面を0秒（0ms）待機してからフェードアウト
});
  
$(function (){
    $(document).on("click",'#back-to-top a',function() {
        $('html, body').animate({ scrollTop:0 },'slow');
        return false;
    });

});

