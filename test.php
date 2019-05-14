<body>
 <?php   echo "<b>Today's Date:</b>".$Currentdate=date("d F Y");//current date
$user_date = date("d F Y",strtotime("2019-05-13"));//date you get from database
if($Currentdate<=$user_date){
echo '<br><b>First Date :</b>'.$first_date = date("d F Y",strtotime('+2 month',strtotime($user_date)));//only if current date is less than user's date
}
else{
echo '<br><b>Second Date :</b>'.$second_date = date("d F Y",strtotime ( '+4 month' , strtotime ( $user_date ) )) ;//only if current date is more than user's date
}?>
</body>