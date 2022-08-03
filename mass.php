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
  
  $to_value = convert_mass($from_value, $from_unit, $to_unit);
}

$mass_options = array(
  "ounces",
  "pounds",
  "stones",
  "long tons",
  "short tons",
  "milligrams",
  "grams",
  "kilograms",
  "metric tonnes"
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Mass</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
  </head>
  <body>

    <div id="main-content">

     <div id="pTitle"> <h1>Convert Mass</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input required type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <?php
            foreach($mass_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($from_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input required type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <?php
            foreach($mass_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($to_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
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
