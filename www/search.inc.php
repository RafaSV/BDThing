<?php
include 'dbh.inc.php';
$output = '';

if(isset($_GET['keywords'])) {
    $keywords = $_GET['keywords'];
    $searchQ = preg_replace("#[^0-9a-z]#i", "", $searchQ);

    $query = mysql_query("SELECT * FROM bills WHERE tag LIKE '%$searchQ% OR description LIKE '%$searchQ%'") or die("You're unlucky!");
    $count = mysqli_num_rows($query);
    if($count == 0) {
        $output =  'No such results!';

    }
    else {
        while($row = mysql_fetch_array($query)) {
            $tag = $row['tag'];
            $description = $row['description'];

            $output .= '<div> '.$tag.' '.$description.' <div>';
            
        }
    }
}