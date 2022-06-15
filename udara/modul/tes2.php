<?php 

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST)) { 

    // echo the values from the select facet page 

    echo "You have selected " . $_POST['selectedfaucet']; 

} 

?>
<!doctype html>  
<html>  
<head>  
<meta charset="utf-8">  
<title>Untitled Document</title>  
</head>  
  
<body>  
<form  method="post" name="form1" id="form1">  
    <p>  
        <input type="radio" name="selectedfaucet" id="radio" value="outdoor">  
        <label for="radio">Outdoor</label>  
    </p>  
    <p>  
        <input type="radio" name="selectedfaucet" id="" value="indoors">  
        <label for="radio2">Indoors</label>  
    </p>  
</form>  
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>  
<script>

$(document).ready(function() {  // wait until the document has loaded

  $('input[name=selectedfaucet]').change(function(){  // monitor the input element with a name of selectedfaucet

        $('form').submit(); // if there is a change of value then submit the form

  }); // end input change function

  }); // end document loaded function

</script> 
</body>  
</html>