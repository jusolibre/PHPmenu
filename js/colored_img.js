/**
* @Author: Julien SOBRITZ
* @Date:   2016-11-28T11:09:36+01:00
* @Email:  julien.s@codeur.online
* @Filename: extended_box.js
* @Last modified by:   Julien SOBRITZ
* @Last modified time: 2016-11-28T14:41:09+01:00
*/

var img = [ ["img/notedge.jpg", "img/edge.jpg"], ["img/notchrome.jpg", "img/chrome.jpg"], ["img/notfirefox.jpg", "img/firefox.jpg"], ["img/notopera.jpg", "img/opera.jpg"]];
var state = [0, 0, 0, 0];

function change_img(index) {
  var elem = document.getElementById("img" + index);
  var i = 0;
  var tmp = "";

  elem.src = img[index][(state[index] + 1) % 2];
  state[index] = (state[index] + 1) % 2;
}
