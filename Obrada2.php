<?php
$user_name = filter_input(INPUT_GET, 'user_name');
$user_surname = filter_input(INPUT_GET, 'user_surname');
$birth_date = filter_input(INPUT_GET, 'birth_date');
echo "Ime: " , $user_name;
"<br>";
echo "Prezime: " , $user_surname;
"<br>";
echo "Godina rodenja: " , $birth_date;
"<br>";
if ($_POST["skola"]=="strukovna") {
    echo "Idete u strukovnu skolu." . "<br>";
}
else {
    echo "Idete u gimanziju." . "<br>";
}
"<br>";
$adress = filter_input(INPUT_GET, 'adress');
"<br>";
echo "Adresa: " , $adress;
"<br>";
if ($_POST["spol"]=="Musko") {
    echo "Spol: Musko" . "<br>";
}
elseif ($_POST["spol"]=="Zensko") {
    echo "Spol: Zensko" . "<br>";
}
else {
    echo "Spol: Ostalo" . "<br>";
}
"<br>";
$grad = filter_input(INPUT_GET, 'grad');
echo "Grad: " , $grad;
"<br>";
foreach ($_POST["hobiji"] as $selectedOption) {
    echo "Hobiji: " , $selectedOption . "<br>";
}
"<br>";
$napomena = filter_input(INPUT_GET, 'comment');
echo "Napomena: " , $napomena;
"<br>";