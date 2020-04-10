/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
var content = null;
var divs = null;
var prevSelected = 0;
function displayTextContent(index) {
	divs[prevSelected].style.display = "none";
	divs[index].style.display = "block";
	prevSelected = index;
}
function reset(index) {
	content = document.getElementById("content");
	divs = content.children;
	for(var i = 1; i < divs.length; i++) {
		divs[i].style.display = "none";
	}
}
window.addEventListener("load", reset);
