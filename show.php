<?php 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
    $tableName='users';
    $columns=['user_name','score',];
    $query = "SELECT * FROM users";
       $result = mysqli_query($con, $query);
    ?>
<?php 

       
        $mysqli = mysqli_connect('localhost', 'root', '', 'project',0);

        // For extra protection these are the columns of which the user can sort by (in your database table).
        $columns = array('score','user_name');
        
        // Only get the column if it exists in the above columns array, if it doesn't exist the database table will be sorted by the first item in the columns array.
        $column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
        
        // Get the sort order for the column, ascending or descending, default is ascending.
        $sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';
        
        // Get the result...
        if ($result = $mysqli->query('SELECT * FROM users ORDER BY ' .  $column . ' ' . $sort_order)) {
            // Some variables we need for the table.
            $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
            $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
            $add_class = ' class="highlight"';
            ?>
 ?>
</tr>
<br>

</table>

<!DOCTYPE html>
<html>
<head>
	<title>scores</title>
</head>
<body>
<style type="text/css">
    table, th, td {

border: 1px solid gray;

border-collapse: collapse;
}

th, td {

padding: 10px;

}
th {

background-color: lightblue;

}
td {

background-color: white;

}
colgroup {

width: 250px;

}
body 
    {
       
        background-image: url(backg.jpg);
        background-position: center;
        background-size: cover;}
#box{

        background-color: rgba(249, 242, 242, 0.717);
        margin: auto;
        width: 300px;
       padding: 20px;
}
a{
    text-decoration:none;
}
a:hover{
    color:white;
}
	</style>
<body>
<div id="box" ALIGN="center">
			<table>
				<tr>
					<th><a <?php echo $asc_or_desc; ?>">Players<i <?php echo $column == 'user_name' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a <?php echo $asc_or_desc; ?>">Scores<i<?php echo $column == 'score' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
					<td<?php echo $column == 'user_name' ? $add_class : ''; ?>><?php echo $row['user_name']; ?></td>
					<td<?php echo $column == 'score' ? $add_class : ''; ?>><?php echo $row['score']; ?></td>
					
				</tr>
				<?php endwhile; ?>
			</table>
		</body>
        <br>
        
        <?php
      
$result =mysqli_query($mysqli, "SELECT  MAX( score) as max , MIN(score) as min FROM users");
      while($res = mysqli_fetch_array($result)) { 
        $min=$res['min'].'<br>'; 
        echo 'Lowest score :'.$min; 
           $max = $res['max']; 
           echo 'Highest score :'.$max.'<br>'; 
}

?> 

        
        <a href="index.php">Click to return to the game! </a>
        </div>
	</html>
	<?php
	$result->free();
}
?>
