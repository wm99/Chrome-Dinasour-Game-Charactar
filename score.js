var score = 0;
var highest=0;

// called when the page loads to begin the timer
function startTimer() 
{
   window.setInterval( "updateTime()", 1000 );
} // end function startTimer

// called every 1000 ms to update the timer
function updateTime()
{
   ++score;                
     highestScore= score;          
   document.getElementById( "score" ).innerHTML = score;
  document.getElementById( "highestScore" ).innerHTML = highestScore;
} // end function updateTime
/*function hightScore(score)
{
   var hightScore= Math.max.apply(srore,highScore);
   document.getElementById( "highScore" ).innerHTML = highScore;
}*/


if (alert('GAME OVER \nPLAY AGAIN'+ ' highest score is ' + highestScore) { 
    highestScore= score; 
    score= 0 ;
}


window.addEventListener( "load", startTimer, false );
