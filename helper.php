<?php
/**
 * https://trangell.com mina fathi
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModScMsPoRt
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        return 'Hello, World!';
    
}
}
/////////////////////iran///////////////////////////////////////////////////////////////////////
$a = "http://football.ir/leagues/persian-gulf-league/";
$per = file_get_contents($a);
//////////////jadvale natayeje zende bazihaye iran///////////////////////////////////////////////
$Iran = $params->get('Iran-live-table');
function Iranlive($Iran,$per){

if($Iran == 1){
echo "<div id='titree-sps'>بازی های زنده لیگ ایران : <br><br><br></div>";
preg_match_all('/<th class="w30 date lt-status-label">(.*?)<\/th>/si', $per, $n1);
$z = count($n1[0]);
$i = 1;
echo "<table bordered='0' dir='rtl' cellpadding='10px' class='tdmsh'>";
        echo "<tbody>"; 
        echo "<tr>" . "<td>تاریخ</td>" . "<td>ساعت</td>" . "<td>تیم 1</td>" . "<td>نتیجه</td>" . "<td>تیم 2</td>";  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";
while($i <$z){
//season-matches-11517  match-container

  preg_match_all('/<th class="w30 date lt-status-label">(.*?)<\/th>/si', $per, $n1);
  preg_match_all('/<th class="w30 time match-minute lt-live-minute">(.*?)<\/th>/si', $per, $n2);
  preg_match_all('/<th class="w40 right-team lt-hl-team-A">(.*?)<\/th>/si', $per, $n3);
  preg_match_all('/<th class="w20 result lt-hl-score-A lt-hl-score-B">(.*?)<\/th>/si', $per, $n4);
  $n4[0][$i] = preg_replace("/<a(.*?)>/i", " ", $n4[0][$i]);
  preg_match_all('/<th class="w40 left-team lt-hl-team-B">(.*?)<\/th>/si', $per, $n6);

        echo '<table border="3px" cellpadding="10px" class="tdmsh">';
        echo '<tbody>';
        echo '<tr>';
        echo $n1[0][$i];
        echo $n2[0][$i];
        echo $n3[0][$i];
        echo $n4[0][$i];
        echo $n6[0][$i];
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
            $i++;
}
}
}
///////////////////////////jadvale lige iran//////////////////////////////////////
$LIran = $params->get('Iran-league_table');
function Iranleague($LIran,$per){

if($LIran == 1){

echo "</br><div id='titree-sps'>جدول لیگ ایران: <br><br><br></div>";
$i = 0;
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='tdmsh'>";
        echo "<tbody>"; 
        echo "<tr>" . "<td>تیم</td>" . "<td>بازی</td>" . "<td>تفاضل</td>" . "<td>امتیاز</td>";  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";
while ($i <= 10) {
  preg_match_all('/<td class="no-movement right-align">(.*?)<\/td>/si', $per, $n1);
  preg_match_all('/<td class="w30 table-played"[^>]*>(.*?)<\/td>/si', $per, $n2);
  preg_match_all('/<td class="w30 ltr"[^>]*>(.*?)<\/td>/si', $per, $n3);
  preg_match_all('/<td class="w30 table-points"[^>]*>(.*?)<\/td>/si', $per, $n4);

  echo '<table border="3px" cellpadding="10px" >';
        echo '<tbody>';
        echo '<tr>';
        echo $n1[0][$i];
        echo $n2[0][$i];
        echo $n3[0][$i];
        echo $n4[0][$i];
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
  $i++;
  
}
}
}
/////////////////////////////engelis//////////////////////////////////////////////
echo '<br><br><br>';
$b = "http://football.ir/leagues/english-premier-league/";
$eng = file_get_contents($b);
////////////jadvale nateye zende bazihaye engelis//////////////////////////////////
$England = $params->get('England-live-table');
function Englandlive($England,$eng){

if($England == 1){
  echo "</br>";
echo "<div id='titree-sps'>بازی های زنده لیگ انگلیس : <br><br><br></div>";
preg_match_all('/<th class="w30 date lt-status-label">(.*?)<\/th>/si', $eng, $n1);
$x = count($n1[0]);
$i = 0;
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='tdmsh'>";
        echo "<tbody>"; 
        echo "<tr>" . "<td>تاریخ</td>" . "<td>ساعت</td>" . "<td>تیم 1</td>" . "<td>نتیجه</td>" . "<td>تیم 2</td>";  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";
while($i <$x){
//season-matches-11517  match-container
  preg_match_all('/<th class="w30 date lt-status-label">(.*?)<\/th>/si', $eng, $n1);
  preg_match_all('/<th class="w30 time match-minute lt-live-minute">(.*?)<\/th>/si', $eng, $n2);
  preg_match_all('/<th class="w40 right-team lt-hl-team-A">(.*?)<\/th>/si', $eng, $n3);
  preg_match_all('/<th class="w20 result lt-hl-score-A lt-hl-score-B">(.*?)<\/th>/si', $eng, $n4);
  $n4[0][$i] = preg_replace("/<a(.*?)>/i", " ", $n4[0][$i]);
  preg_match_all('/<th class="w40 left-team lt-hl-team-B">(.*?)<\/th>/si', $eng, $n6);
        echo '<table border="3px" cellpadding="10px" >';
        echo '<tbody>';
        echo '<tr>';
        echo $n1[0][$i];
        echo $n2[0][$i];
        echo $n3[0][$i];
        echo $n4[0][$i];
        echo $n6[0][$i];
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';  
            $i++; 
}
}
}
/////////////jadvale lige engelis//////////////////////////////////////
$LEngland = $params->get('England-league_table');
function Englandleague($LEngland,$eng){

if($LEngland == 1){
echo "</br><div id='titree-sps'>جدول لیگ انگلیس: <br><br><br>";
$i = 0;
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='tdmsh'>";
        echo "<tbody>"; 
        echo "<tr>" . "<td>تیم</td>" . "<td>بازی</td>" . "<td>تفاضل</td>" . "<td>امتیاز</td>";  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";
while ($i <= 10) {
  preg_match_all('/<td class="no-movement right-align">(.*?)<\/td>/si', $eng, $n1);
  preg_match_all('/<td class="w30 table-played"[^>]*>(.*?)<\/td>/si', $eng, $n2);
  preg_match_all('/<td class="w30 ltr"[^>]*>(.*?)<\/td>/si', $eng, $n3);
  preg_match_all('/<td class="w30 table-points"[^>]*>(.*?)<\/td>/si', $eng, $n4);

  echo '<table border="10px" cellpadding="10px" >';
        echo '<tbody>';
        echo '<tr>';
        echo $n1[0][$i];
        echo $n2[0][$i];
        echo $n3[0][$i];
        echo $n4[0][$i];
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
  
  $i++;
}
}
}
$table1 = $params->get('tartib1');
$table2 = $params->get('tartib2');
$table3 = $params->get('tartib3');
$table4 = $params->get('tartib4');
/////////////////////////////table1////////////////////////
if($table1 == "بازی های زنده لیگ ایران"){
   Iranlive($Iran,$per);
}else if($table1 == "جدول لیگ ایران"){
   Iranleague($LIran,$per);
}else if($table1 == "بازی های زنده لیگ انگلیس"){
   Englandlive($England,$eng);
}else if($table1 == "جدول لیگ انگلیس"){
   Englandleague($LEngland,$eng);
}else{

}
////////////////////////table2//////////////////////////////
if($table2 == "بازی های زنده لیگ ایران"){
   Iranlive($Iran,$per);
}else if($table2 == "جدول لیگ ایران"){
   Iranleague($LIran,$per);
}else if($table2 == "بازی های زنده لیگ انگلیس"){
   Englandlive($England,$eng);
}else if($table2 == "جدول لیگ انگلیس"){
   Englandleague($LEngland,$eng);
}else{

}
////////////////////////table3//////////////////////////////
if($table3 == "بازی های زنده لیگ ایران"){
   Iranlive($Iran,$per);
}else if($table3 == "جدول لیگ ایران"){
   Iranleague($LIran,$per);
}else if($table3 == "بازی های زنده لیگ انگلیس"){
   Englandlive($England,$eng);
}else if($table3 == "جدول لیگ انگلیس"){
   Englandleague($LEngland,$eng);
}else{

}
////////////////////////table4//////////////////////////////
if($table4 == "بازی های زنده لیگ ایران"){
   Iranlive($Iran,$per);
}else if($table4 == "جدول لیگ ایران"){
   Iranleague($LIran,$per);
}else if($table4 == "بازی های زنده لیگ انگلیس"){
   Englandlive($England,$eng);
}else if($table4 == "جدول لیگ انگلیس"){
   Englandleague($LEngland,$eng);
}else{
  
}

?>