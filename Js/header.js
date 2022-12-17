// document.getElementsByClassName ("fa-solid")[3].addEventListener("click",function(){
//     document.getElementsByClassName("links")[0].classList.toggle("showmylinks");
// });


//  $(document).ready(function(){
//     $(".fa-solid").click (function(){
//          $(".links").toggleClass("showmylinks");
//     });
//  });
//navbar scroll
$(document).ready(function(){
    $(window).scroll (function(){
        var x=$(window).scrollTop();
        if(x>100){
            $(".header").css("backgroundColor","rgb(241, 224, 224)");
            // $(".search form").css("color","pink");
        }
        else{
            $(".header").css("backgroundColor","#ffffff00");
        }
    });
    $(".fa-bars").click (function(){
        $(".links").toggleClass("showmylinks");
   });
 });
