$(".sect").hover(
    function() {
        $(this).css("transform", "scale(1.05)").css("transition", "0.4s");
    }, 
    function() {
        $(this).css("transform", "scale(1)"); 
    }
);