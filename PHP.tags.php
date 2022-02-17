
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
   <h1>PHP Variables</h1>

   <p>
      <ul>
         <li>Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensiive.</li>
         <li>A valid variable name starts with a letter or undersccore, followed by any number of letter, numbers, or underscores. As a regular expression, it would be expressed thus:
         ^[a=zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$)</li>
            
      </ul>
   </p>

<?php
   $x= "Hello PHP";
   echo $x;
   echo "<br>";
?>
</body>
</html>