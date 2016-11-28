/**
* @Author: Julien SOBRITZ
* @Date:   2016-11-28T11:41:23+01:00
* @Email:  julien.s@codeur.online
* @Filename: getElementsByClassName.js
* @Last modified by:   Julien SOBRITZ
* @Last modified time: 2016-11-28T11:43:16+01:00
*/



function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|s)" + className + "(s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}
