<?php
function schedule($startdate, $enddate, $gender){
$host="localhost";
$port=3306;
$socket="/var/lib/mysql/mysql.sock";
$user="id13788808_pat";
$password="Cp\g)U7s!+0Y4~FP";
$dbname="id13788808_polo";
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
$sql = 'SELECT home_team, away_team, game_date,game_time, tournament, home_score, away_score FROM '.$gender.'_games WHERE '
        . "game_date between '".$startdate."' AND '".$enddate."' ORDER BY game_date, tournament, game_time" ;
$results = mysqli_fetch_all(mysqli_query($con, $sql),MYSQLI_ASSOC); mysqli_close($con); 
    $lastdate = '';$lasttournament = ''; $i=0;$k=0;
    foreach($results as $value) {
        if( $value['game_date'] != $lastdate) { 
             if($i===0) {
             echo "$('#".$gender.$i."').append( ' ";
                echo '<h4 style="margin-bottom:0px">'.htmlspecialchars(date_format(date_create($value['game_date']), 'D, M d')).'</h4>' ;
            $lastdate = $value['game_date']; $i++; $k=0;
        }
        else {echo "'); $('#".$gender.$i."').append( ' ";
                echo '<h4 style="margin-bottom:0px">'.htmlspecialchars(date_format(date_create($value['game_date']), 'D, M d')).'</h4>' ;
            $lastdate = $value['game_date']; $i++; $k=0;
        }}
            
            if( $value['tournament'] != $lasttournament) {
                if($k===0) { echo '<h5 style="margin-bottom:0px">'.htmlspecialchars($value['tournament']).'</h5>' ;
                    $lasttournament = $value['tournament']; $k=0;}
                else{echo '</div><h5 style="margin-bottom:0px">'.htmlspecialchars($value['tournament']).'</h5>' ;
                    $lasttournament = $value['tournament']; $k=0;} }
           
           if ($k === 0 ) {echo '<div class="w3-display-container w3-container" style="height:70px"><div class="match w3-display-topleft">';}
           elseif ($k%2 ===0) {echo '</div><div class="w3-display-container w3-container" style="height:70px"><div class="match w3-display-topleft">';}
           else { echo '<div class="match w3-display-topright">';}
           
           
           if ($value['home_score'] === NULL) {
                    echo '<p style= "font-size:14px" class="w3-white">'.htmlspecialchars($value['game_time']).'</p><p class="w3-light-blue">'.htmlspecialchars($value['away_team']).'</p><p class="w3-light-blue">@'.htmlspecialchars($value['home_team'])."</p></div>"; }
 
                else {
                    echo '<p style= "font-size:14px" class="w3-white">'.htmlspecialchars($value['game_time']).'</p><p class="w3-light-blue">'.htmlspecialchars($value['away_team']).'<a class="w3-right">'.htmlspecialchars($value['away_score']).'</a> </p><p class="w3-light-blue">'.htmlspecialchars($value['home_team']).'<a class="w3-right">'.htmlspecialchars($value['home_score'])."</a></p></div>";   
} $k++;
}  echo "</div>');" ;}


?>
