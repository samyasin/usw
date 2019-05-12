<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("select").change(function(){
  	var x = $("select").val();
    
    //alert("The text has been changed.");
    if($("select").val() == "C"){
    	//alert(111);
    	$("input").show();
    }
  });
});
</script>
</head>
<body>
<select>
	<option>A</option>
    <option>B</option>
    <option>C</option>
</select>
<input type="text" style="display:none">

<p>Write something in the input field, and then press enter or click outside the field.</p>

</body>
</html>