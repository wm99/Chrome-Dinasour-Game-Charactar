# Chrome-Dinasour-Game-Charactar
The Dinosaur Game is a browser game developed by Google and built into the Google Chrome web browser. The player guides a pixelated across a side-scrolling landscape, avoiding obstacles to achieve a higher score. The game was created by members of the Chrome UX team in 2014. 
In this project, we implement the famous game "Chrome Dinosaur game" with Crash game characters to make it more enjoyable for players and allow players to register and log in. Also, we build a server-side to our game with a database to store the player information and count each player's scores to make it more competitive. We used JavaScript, HTML, CSS, and PHP programming languages to build the Crash game. 

## 1. Flow Chart  
 
Figure 1. Crash game flowchart


## 2. Look & Feel  
The game is friendly to the players, and we consider the Crash game theme in our CSS style. We use CSS to make the registration form in the center of the game. Also, we consider the design of the login and sign-up by usual form to users.  

## 3. Dynamic Components 
We implement three classes for dynamic components: Crash.js, Box.js, and draw.js. The first component is to show the Crash character by specific size in the game and make it able to jump when the player presses the key, and if Crash hits the Box, the player loses. 
The second component shows Boxes by specific size and randomly appears in the game that the Crash character should jump to win. 
The third component is to define the functions that let the player jump and stop the jumping when he hits the Box. Also, to count player scores which is the number of player jumps, see Figure 2.

## 4. Business Logic 
Our game is connected with a database that allows players to register, log in, and show the highest player scores to make it more competitive. The database contains five columns listed in a table called "users." The table includes the information that we need for each user. The first column is the user ID, the second is the user's name, the third is the password, the fourth is the registration date, and finally, the player's score. In the implementation step of PHP, we used several queries:
1-	INSERT * INTO users: a SQL query to store the player's username, password, and scores.
2-	SELECT * FROM users: used to display the scores for all players in increasing order.
3- SELECT MAX (score) as max, MIN (score) as min FROM users: used to print highest and lowest score for all players.
4- SELECT* FROM users WHERE user_name = '$user_name' limit 1: used to that the user can log in to match their data entered to store in the database.

We allowed the player to compare their score with the score of all players and showed the lowest and highest score. Players can track their scores in each game using GET and POST methods. GET is used to bring the data from the database, whereas POST is used to send the data entered by the user to the database.
## References

1.	 Simple signup and login system with PHP and Mysql database | Full Tutorial | How to & source code
2.	 https://www.tutorialspoint.com/phpmyadmin/phpmyadmin_sql.htm
