<?php
/**/

function rFile($filePath, $content){
  $myFile = "students/personal.doc";   //the file path
  $openFile = fopen($myFile, 'a');     // to open the file with the action(append)
  $fileWrite = fwrite($openFile,$content);  //to write on the opened file

  // echo $fileWrite;

  fclose($openFile);  //closed the file
};


/*
  file -> peronal.doc
  folder -> students

  first name
  last name
  email
  phone no
  address
*/


 

 

