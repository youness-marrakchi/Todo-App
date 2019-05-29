
//  AUTHOR::YOUNESS.M  
//  GITHUB:: https://github.com/youness-marrakchi/ 

//console.log("hello world");

// getting the modal "popup"
let pop = document.getElementById("popup");
// getting the button that opens the modal
let opener = document.getElementById("button");
// this button will close the popup
let clsbtn = document.getElementById("canceller");

// openning the popup when the user clicks on the button
opener.onclick = function() {
	pop.style.display = "flex";
}
clsbtn.onclick = function() {
	pop.style.display = "none";
}

// if the user clicks anywhere outside the modal section, the popup will close
/* 
window.onclick = function() {
	if (event(target) == pop) {
		pop.style.display = "none";
	}
}
*/