var score = 0;

// called when the page loads to begin the timer
function startTimer() 
{
   window.setInterval( "updateTime()", 1000 );
} // end function startTimer

// called every 1000 ms to update the timer
function updateTime()
{
   ++score;                
   document.getElementById( "score" ).innerHTML = score;
} // end function updateTime

if (alert('GAME OVER \nPLAY AGAIN')) { 
    score= 0 ;
}


window.addEventListener( "load", startTimer, false );
