<?php  
$var_name=127.55;  
if (is_double($var_name))  
echo 'This is a double value.<br>';  
else  
echo 'This is not a double value.<br>';  
echo '<br>';  
var_dump(is_double(85));  
echo '<br>';  
var_dump(is_double(1e8));  
echo '<br>';  
var_dump(is_double(true));  
echo '<br>';  
var_dump(is_double(array(23.3, 56, 6)));  
?>  

<br>
<br>

<?php  
$var_name=false;  
if (is_bool($var_name))  
echo 'This is a boolean.';  
else  
echo 'This is not a boolean.';  
?>  

<br>
<br>

<?php  
function get_subjects($obj_name)  
{  
if(!is_object($obj_name))  
{  
return(false);  
}  
return($obj_name->subjects);  
}  
$obj_name = new stdClass;  
$obj_name->subjects = Array('Physics', 'Chemistry', 'Mathematics');  
var_dump(get_subjects(NULL));  
var_dump(get_subjects($obj_name));  
?>  

