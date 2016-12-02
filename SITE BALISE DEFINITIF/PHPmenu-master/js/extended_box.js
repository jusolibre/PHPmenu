/**
* @Author: Julien SOBRITZ
* @Date:   2016-11-28T11:09:36+01:00
* @Email:  julien.s@codeur.online
* @Filename: extended_box.js
* @Last modified by:   Julien SOBRITZ
* @Last modified time: 2016-11-28T12:00:15+01:00
*/

function change_img(index) {
  var elem = document.getElementById("img" + index);
  var tmp = "";

  tmp = elem.src;
  console.log(elem.src);
}

var el = document.getElementById("checkimg0");

console.log(el);
el.addEventListener("click", change_img(0), false);
