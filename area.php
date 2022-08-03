<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_area($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
  </head>
  <body>

    <div id="main-content">

     <div id="pTitle"> <h1>Convert Area</h1>
  
      <form action="" method="post" name="myForm" onsubmit="return validate()">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" required value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="square_inches"<?php if($from_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
            <option value="square_feet"<?php if($from_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
            <option value="square_yards"<?php if($from_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
            <option value="square_miles"<?php if($from_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
            <option value="square_millimeters"<?php if($from_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
            <option value="square_centimeters"<?php if($from_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
            <option value="square_meters"<?php if($from_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
            <option value="square_kilometers"<?php if($from_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if($from_unit == 'acres') { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if($from_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" required value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
            <option value="square_feet"<?php if($to_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
            <option value="square_yards"<?php if($to_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
            <option value="square_miles"<?php if($to_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
            <option value="square_millimeters"<?php if($to_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
            <option value="square_centimeters"<?php if($to_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
            <option value="square_meters"<?php if($to_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
            <option value="square_kilometers"<?php if($to_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if($to_unit == 'acres') { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if($to_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <div style="width:200px;height:30px;text-align:center;box-shadow:3px 5px 4px 6px #1F3F4F;"><a style="text-decoration:none;" href="index.php">Return to menu</a></div>
      </div>
    </div>
  </body>
</html>
