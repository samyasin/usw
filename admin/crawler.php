<?php
include 'SimpleXLSX.php';
ini_set('max_execution_time', 0); /*Ø§Ù„Ø³Ø·Ø± Ù‡Ø§Ø¯ Ø¹Ø´Ø§Ù† ÙŠØ·Ø¨Ø¹ Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø§Ø³Ù…Ø§Ø¡*/
$mysqli = new mysqli('localhost','root','','upskills');

echo '<pre>';
if ( $xlsx = SimpleXLSX::parse('upload_data/khreej.xlsx') ) {
    $row = $xlsx->rows();
    //print_r($row);die;
//$query = "insert into academy ()
      //      values(name,mobile,university,major,address,interested_courses");
    //print_r( $xlsx->rows() );
}
$i = 0;
foreach ($row as $value){
    echo $i++;
    echo '<pre>';
    mysqli_set_charset($mysqli,"utf8");
    $query = "insert into student_data(name,mobile,university,college,major,address)
            values('$value[0]','$value[5]','hshimite university','$value[1]','$value[2]','$value[4]')";
    //echo $query;die;
    mysqli_query($mysqli, $query);
    
}