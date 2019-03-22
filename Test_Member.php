<?php


include 'Library/Users/Member.php';

//include Library\Users\Librarian . php;
//include Library\Users\Library_Manager . php;
use Library\Users\Guest;
use Library\Users\Member;

$array = [
    "ABC" => "Honey Bell",
    "The Love I Lost" => "Rosie Bloom",
    "Code Breakers" => "Sarah Smith",
    'John Field' => 'Mini Beasts',
    'Sarah Smith' => 'Code Breakers',
    'Jane Wild' => 'I See You',
    'Agatha Christie' => 'Murder On The Orient Express',
    'Stephen Hawking' => 'Brief Answers To The Big Questions',
    'Jheni Osman' => 'The Worlds Great Wonders',
    'Stephen Farthing' => 'Art. The Whole Story',
    'Randall Munroe' => 'What If?'];

$Member = new Member("3333", "C00k5", "Mary", "Magoo");
//      Setting a property/object 

$Member->BookList = [
    "ABC" => "Honey Bell",
    "The Love I Lost" => "Rosie Bloom",
    "Code Breakers" => "Sarah Smith",
    'John Field' => 'Mini Beasts',
    'Sarah Smith' => 'Code Breakers',
    'Jane Wild' => 'I See You',
    'Agatha Christie' => 'Murder On The Orient Express',
    'Stephen Hawking' => 'Brief Answers To The Big Questions',
    'Jheni Osman' => 'The Worlds Great Wonders',
    'Stephen Farthing' => 'Art. The Whole Story',
    'Randall Munroe' => 'What If?'];


//      Echoing the data from functions

echo $Member->Full_Name()."\n"; //get_full_name

echo $Member->Forgot_user_id()."\n\n"; //get_user_id

echo $Member->Forgot_password()."\n\n";

$due_date = "21-04-2019";
$days = 5;
echo $Member->Update_Due_Date($due_date, $days);






