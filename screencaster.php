<html>
<head>
	<title>PHP Recap</title>
</head>
<body>
<form id="number.frm" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	

<!-- Label -->
<span class="lbl">Number :</span>
<!-- Input -->
<input type="number" id="number" name="number" required/>

<!-- Button -->
<button name='product' value='yes'> </button>
</form>
<!-- lets add our javascript-->
<script type="text/javascript">
	//lets select the age input field
    document.getElementById('').onchange = function(){
    
    }
</script>

</body>
</html>

<?php
function getProduct($num1, $num2){

if( $num1 <= "0" && $num2 <= "0" ); {
    echo "good";
     } 

 }

//function number_to_words($to_words);


