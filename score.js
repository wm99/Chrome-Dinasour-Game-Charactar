var seconds = 0;

// called when the page loads to begin the timer
function startTimer() 
{
   window.setInterval( "updateTime()", 1000 );
} // end function startTimer

// called every 1000 ms to update the timer
function updateTime()
{
   ++seconds;                
   document.getElementById( "score" ).innerHTML = seconds;
} // end function updateTime

if (alert('game over')) { 
    seconds= 0 ;
}


window.addEventListener( "load", startTimer, false );

