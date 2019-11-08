<?php
echo $_POST["ime"] . "<br>";
echo $_POST["prezime"] . "<br>";
if ($_POST["skola"]=="da") {
    echo "Idete u skolu." . "<br>";
}
else {
    echo "Ne idete u skolu." . "<br>";
}
"<br>";
echo "Vas OIB je: " . $_POST["oib"] . "<br>";
echo "Najdrazi predmet/i su vam: ";
foreach ($_POST["predmet"] as $selectedOption) {
    echo $selectedOption . "<br>";
}
echo "Najdraza boja vam je: " . $_POST["boja"] . "<br>";
?>