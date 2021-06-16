<?php
$fptr = fopen("cse.txt", "w"); 

fwrite($fptr, "open, read, write, and close a file on the server\n"); 


$fptr = fopen("cse.txt", "a");

fwrite($fptr, "PHP is a widely-used, free, and efficient programming language.\n");

echo "the file has ".count_comma()." commas";

function count_comma()
{
$c= 0; 
$fptr = fopen("cse.txt", "r");   
while($a=fgetc($fptr)){
    if($a==',')
     {
        $c=$c+1; 
     }
     }
return $c;
}
fclose($fptr);
?>