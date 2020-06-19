<?php         
function sorter($a, $b) {return $b['w']-$a['w'];}

function standings($gender) {
$host="localhost";
$port=3306;
$socket="/var/lib/mysql/mysql.sock";
$user="id13788808_pat";
$password="Cp\g)U7s!+0Y4~FP";
$dbname="id13788808_polo";
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
$sql_games = 'SELECT home_team, home_score, away_team, away_score FROM '.$gender.'_games WHERE home_score IS NOT NULL';

$sql_teams = 'select names, conference FROM teams ORDER BY conference, names';

$g = mysqli_query($con, $sql_games);

 if($g != false) {
    $games = mysqli_fetch_all($g, MYSQLI_ASSOC);}
    else {$games = array();}
    
    $t = mysqli_query($con, $sql_teams);

 if($t != false) {
    $teams = mysqli_fetch_all($t, MYSQLI_ASSOC);}
    else {$teams = array();}
    
mysqli_close($con);
$temp = array('w' => 0, 'l'=> 0 , 't' => 0 );
$new=array();
foreach ($teams as $key => &$value) { 
            $new[trim($value['names'])] = array_merge($value, $temp);
}
 
 
 
 foreach($games as $k => $v) {
    if($v['home_score'] > $v['away_score']) {
        $new[trim($v['home_team'])]['w']++;
        $new[trim($v['away_team'])]['l']++;
        }
    else if ($v['home_score'] < $v['away_score']) {
        $new[trim($v['home_team'])]['l']++;
        $new[trim($v['away_team'])]['w']++;
        }
    else   {
        $new[trim($v['home_team'])]['t']++;
        $new[trim($v['away_team'])]['t']++;
        }
    }
    
  foreach ($new as $k => $v) {
    if ($v['conference'] === '' || $v['conference'] === null) {
        unset($new[$k]);}
        }
    

$last_conference="";
echo '<table style = "text-align:left; "> ';
 $var=array();
 foreach($new as $key =>$value) { 
     $conference = $value['conference'];
     if ($conference != $last_conference ) {         
     
        if (empty($var)) {   
         } 
         
         else {  
               usort($var, 'sorter');
        //echo '<pre>'; print_r($var); echo '<pre>'; 
            echo '<tr><th style= "text-align: center; colspan=\'4\'">'.htmlspecialchars($last_conference).'</th> </tr>'
                 . '<tr><th>TEAM</th><th>W</th><th>L</th><th>T</th></tr>';
                foreach ($var as $k => $v) {
                    echo '<tr><td>'.htmlspecialchars($v['names']).'</td>';
                    echo '<td>'.htmlspecialchars($v['w']).'</td>';
                    echo '<td>'.htmlspecialchars($v['l']).'</td>';
                    echo '<td>'.htmlspecialchars($v['t']).'</td> </tr>'; }
         unset($var);
         }
         }
     
     $var[$key]=$value; 
     $last_conference = $conference;
}

 
 usort($var, 'sorter');
        //echo '<pre>'; print_r($var); echo '<pre>'; 
            echo '<tr><th style= "text-align: center; colspan=\'4\'">'.htmlspecialchars($last_conference).'</th> </tr>'
                 . '<tr><th>TEAM</th><th>W</th><th>L</th><th>T</th></tr>';
                foreach ($var as $k => $v) {
                    echo '<tr><td>'.htmlspecialchars($v['names']).'</td>';
                    echo '<td>'.htmlspecialchars($v['w']).'</td>';
                    echo '<td>'.htmlspecialchars($v['l']).'</td>';
                    echo '<td>'.htmlspecialchars($v['t']).'</td> </tr>'; }
         unset($var);
         

echo '</table>';
 foreach(get_defined_vars() as $k => $v){
    unset($$k);
unset($k, $v);
}
 }   
    
