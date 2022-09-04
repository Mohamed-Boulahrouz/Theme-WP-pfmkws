console.log ("Fichier carousel chargé");
 


var sliderImages = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('.arrow-left'),
    arrowRight = document.querySelector('.arrow-right'),
    current = 0,
    dots = document.querySelectorAll('.dots'),
    dotCount = dots.length;
    sliderCount = sliderImages.length;
 // Reset Slide
function reset(){
   for(i=0; i< sliderCount; i++){
     sliderImages[i].style.display = "none";
     dots[i].style.color = "black";
   }
}
 // Show Start Slide   
   function startSlide(){
     reset();
     sliderImages[0].style.display = "block";
     dots[0].style.color = "red";
   }
 
// Show Left 
 function slideLeft(){
   reset();
   sliderImages[current - 1].style.display = "block";
   dots[current - 1].style.color = "red";
   current -- ;
 }
arrowLeft.addEventListener('click', function(){
  if(current === 0){
      current = sliderCount ;
  }
  slideLeft();
});
// Show Right 
function slideRight(){
  reset();
  sliderImages[current + 1].style.display = "block";
  dots[current + 1].style.color = "red";
  current ++;
}

arrowRight.addEventListener('click', function(){
  if(current === sliderCount - 1){
    current = -1 ;
  }
  slideRight();
});

 //Show Slide Auto 

 // setInterval(function(){
 //   if(current === sliderCount -1){
 //     current = -1 ;
 //   }
 //   slideRight();
 // }, 5000);

 // Event Click "dot" is Image Block .......????
// var dot0 = document.querySelector('.dot1');
// var dot1 = document.querySelector('.dot2');
// var dot2 = document.querySelector('.dot3');
// var dot3 = document.querySelector('.dot4');

// dot0.addEventListener('click',function(){
//   reset();
//   sliderImages[0].style.display = "block";
//   dots[0].style.color = "red";
// });
// dot1.addEventListener('click',function(){
//   reset();
//   sliderImages[1].style.display = "block";
//   dots[1].style.color = "red";
// });
// dot2.addEventListener('click',function(){
//   reset();
//   sliderImages[2].style.display = "block";
//   dots[2].style.color = "red";
// });
// dot3.addEventListener('click',function(){
//   reset();
//   sliderImages[3].style.display = "block";
//   dots[3].style.color = "red";
// });
 function currentSlide(n){
   reset();
   current = n ;
   sliderImages[current].style.display = "block";
   dots[current].style.color = "red";

 }


// Start Slide
startSlide();