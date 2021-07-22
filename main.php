<?php
include 'functions.php';

$db = new PDO('sqlite:students.db');
/* this function is basically creating or opening a different file where the information given will be stored and processed to the second part. */
createNewStudentDBFile($db);
/* this function is creating the box or table of content in which your information that has been inserted will go.  */
createStudentsTable($db);
/* This function is inserting something into the information you have put in and giving it a value. */
insertNewStudentData($db);

/* this function is getting the info and printing in the new file welcome "firstname lastname" for the most recent one inserted.*/
printMostRecent($db);
/*  this function is saying to get all the information answered and putting it in the table of context where your information will lye. */
printAllData($db);







 