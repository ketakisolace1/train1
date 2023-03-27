<?php

include(PROJECT_ROOT.'library/helper.php') ;
include(PROJECT_ROOT.'library/auth.php') ;
include(PROJECT_ROOT.'library/main.php') ;
include(PROJECT_ROOT.'library/apt.php') ;
include(PROJECT_ROOT.'library/note.php') ;
include(PROJECT_ROOT.'library/chairperson.php') ;

$auth = new Auth();
$main= new User();
$apt= new Apt();
$note= new Note();
$chair= new Chairperson();
?>
