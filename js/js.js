$(".mini").click(function() {
    let attra = $('.nav').attr('style');
    if ( attra == undefined ) {
        $(".nav").css("left", 0);
    } else {
        $(".nav").removeAttr("style");
    }

    if ( attra == undefined) {
        $(".mini1").css({
            "transform":"rotate(45deg)",
            "top":"10px"
        });
        $(".mini3").css({
            "transform":"rotate(-45deg)",
            "top":"10px"
        });
        $(".mini2").css({
            "display":"none"
        });
    } else {
        $('.mini1').removeAttr('style');
        $('.mini2').removeAttr('style');
        $('.mini3').removeAttr('style');
    }

    return false;
});

$('.button').click(function(){
    location.href = "pages/tours.php"
});

$('.button2').click(function(){
    location.href = "pages/contacts.php"
});

var userFio = $('[name="fio"]');
var userEmail = $('[name="email"]');
var userNumber = $('[name="number"]');
var userText = $('[name="textletter"]');

$('form').submit(function (event) {
    
    if (userFio.val() === '') {
        userFio.css('border', '2px solid red');
    } else {
        userFio.css('border', '');
    }
    
    if (userEmail.val() === '') {
        userEmail.css('border', '2px solid red');
    } else {
        userEmail.css('border', '');
    }

    if (!/^\d+$/.test(userNumber.val())) {
        userNumber.css('border', '2px solid red');
    } else {
        userNumber.css('border', '');
    }

    if (userText.val() === '') {
        userText.css('border', '2px solid red');
    } else {
        userText.css('border', '');
    }

    if (userFio.val() === '' || userEmail.val() === '' || !/^\d+$/.test(userNumber.val()) || userText.val() === '' ) {
        return false
    }
});

userFio.keyup(function (event) {
    if (userFio.val() === '') {
        userFio.css('border', '2px solid red');
    } else {
        userFio.css('border', '');
    }
});

userEmail.keyup(function (event) {
    if (userEmail.val() === '') {
        userEmail.css('border', '2px solid red');
    } else {
        userEmail.css('border', '');
    }
});

userNumber.keyup(function (event) {
    if (userNumber.val() === '') {
        userNumber.css('border', '2px solid red');
    } else {
        userNumber.css('border', '');
    }
});

userText.keyup(function (event) {
    if (userText.val() === '') {
        userText.css('border', '2px solid red');
    } else {
        userText.css('border', '');
    }
});

// ресайз картинок в турах

$(window).resize(function(){
    let winWidth = $(window).innerWidth();
    if (winWidth <= 1016) {
        $('.orders').css('order', '1');
    } 
});

// слайдер

let sliderEl = $('.slider');
let sliderLentaEl = sliderEl.find('.slider-l');
let sliderItemEl = sliderLentaEl.find('.sli');
let counter = 0;

sliderLentaEl.css('width', sliderItemEl.length * 100 + '%');
sliderEl.find('.sl').click(function(){

    if (counter > 0) {
        counter--;
    } else  {
        counter = sliderItemEl.length - 1;
    }
    sliderLentaEl.animate ({
        left: -100 * counter + '%'
    }, 500);
    
});

sliderEl.find('.sr').click(function(){
    
    if (counter < sliderItemEl.length - 1 ) {
        counter++;
    } else {
        counter = 0;
    }
    sliderLentaEl.animate ({
        left: -100 * counter + '%'
    }, 500);
});

setInterval(function(){
    $('.sr').click();
}, 2000);


$('.reserve').click(function() {
    $('.popup').css('display', 'flex');
});

$('.x').click(function() {
    $('.popup').css('display', 'none');
});

var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {

    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
 
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {

  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);