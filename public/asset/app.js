//js des service
var slideIndex = 1;
function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("count");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}

newFunction();
function newFunction() {
    showDivs(slideIndex);
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}
//js d'inscription d'etudiant
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
$(document).ready(function() {
    $('.chosen-select').chosen();
});



