/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openStep(stepNum, evt) {
    var i, x, tablinks;
    var x = document.getElementsByClassName("purchaseStep");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activeStep", "");
    }
    document.getElementById(stepNum).style.display = "block";
    evt.currentTarget.className += " activeStep";
}
function step(btnNum){
	var a=document.getElementById(btnNum);
	a.className+=" activeStep";
	a.click();
}
