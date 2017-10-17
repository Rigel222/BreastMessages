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

function addModelImg(){
	var a=document.getElementById('modelImgUpload');
	var b=document.getElementById('file');
	var c=b.files.length;
	a.innerText=c+' files selected';
	var x=0;
	if (b.files && b.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#newModelImgImg')
				.attr('src', e.target.result);
		};
		reader.readAsDataURL(b.files[0]);
	}	
}
function modelSelect(selection){
	var a=document.getElementById('modelSelect');
	var b=selection.innerText;
	a.innerText=b;
}
function modelAvailability(e){
	var a=event.target;
	var b=a.parentElement;
	var c=b.className;
	var d=getComputedStyle(b).getPropertyValue('background-color');
	var e=b.style.backgroundColor;
	if(d=='rgb(31, 70, 95)'){
		b.classList.remove('event2');
		b.style.backgroundColor='transparent';
	}else{
		c+=" event2";
		b.style.backgroundColor='rgb(31, 70, 95)';
		var x=0;
	}
}

function readURL() {
	var loadFile = function(event) {
		var reader = new FileReader();
		reader.onload = function(){
			var output = document.getElementById('output');
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
	};
}