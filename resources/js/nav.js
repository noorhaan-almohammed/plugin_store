
var element = document.getElementById("myDIV");
var btns = element.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("animat_focus");
    current[0].className = current[0].className.replace(" animat_focus", "");
    this.className += " animat_focus";
    if (this.classList.contains("not_serv")) {
      console.log("true");
      var drop_menu = document.getElementsByClassName("drop-menu")[0];
      var serv = document.getElementsByClassName("serv")[0];
      var li_hide = document.getElementsByClassName("li_hide");
      var ch1 = document.getElementsByClassName("ch1")[0];
      var ch2 = document.getElementsByClassName("ch2")[0];
      var ch3 = document.getElementsByClassName("ch3")[0];
      var ch4 = document.getElementsByClassName("ch4")[0];
      if (drop_menu.classList.contains("show_drop")) {
        drop_menu.className = drop_menu.className.replace("show_drop", " ");
        li_hide[0].className = li_hide[0].className.replace("show_li", " ");
        li_hide[1].className = li_hide[1].className.replace("show_li", " ");
        li_hide[2].className = li_hide[2].className.replace("show_li", " ");
        li_hide[3].className = li_hide[3].className.replace("show_li", " ");

        ch1.className = ch1.className.replace("child1", " ");
        ch2.className = ch2.className.replace("child2", " ");
        ch3.className = ch3.className.replace("child3", " ");
        ch4.className = ch4.className.replace("child4", " ");
      }
      else {

      }
    }
  });
}


$('.li_btn').on('click', function () {
  $('.drop-menu').toggleClass('show_drop');
  $('.li_hide').toggleClass('show_li');
  $('.ch1').toggleClass('child1');
  $('.ch2').toggleClass('child2');
  $('.ch3').toggleClass('child3');
  $('.ch4').toggleClass('child4');
});

/*login */

var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}