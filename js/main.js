// smooth scrol
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//increase views on click

let count=0;
//let countdiv = document.querySelectorAll('.value');
let countdiv = document.querySelector('#value');

 function countUpdate() {
  count++;
  console.log(count);
 //countdiv[0].textContent = `${count}`;
 countdiv.textContent = `${count}`;

 }
