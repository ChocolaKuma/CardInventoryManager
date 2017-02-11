<?php
$UPDATE = 0;
#string strtoupper ( string $string ) makes abc upcase
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_ACC = "carddb";
$dbconnect = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_ACC);
$conn=$dbconnect;

$sql = "INSERT INTO `yugioh` (`id`, `cardname`, `cardnumber`, `rareity`, `condition`, `edition`, `buycost`, `mysellprice`, `notes`, `forsell`) VALUES (NULL, 'Nitro Warrior', 'DP08-EN013', 'Rare', '1', '1', '0', '0.50', 'none', '1');";

$sql1 = "INSERT INTO `yugioh` (`id`, `cardname`, `cardnumber`, `rareity`, `condition`, `edition`, `buycost`, `mysellprice`, `notes`, `forsell`) VALUES ";



$name = "Nitro Warrior'";
$cardnumber = "DP08-EN013";
$rarity = "Rare";
$condition = "1";
$edition = "1";
$buycost = "0";
$mysellprice = "0.50";
$notes = "NULL";
$forsell = "1";
#############################
$quanty = $_POST["quanty"];
$name = $_POST["cardname"];
$cardnumber = strtoupper($_POST["cardnum"]);
$rarity = $_POST["rarity"];
$condition = $_POST["condition"];
$edition = $_POST["edition"];
$buycost = $_POST["buy"];
$mysellprice = $_POST["sell"];
$notes = $_POST["notes"];
$forsell = $_POST["ForSell"];




$sql2 = $sql1."(NULL,"."'".$name."',"."'".$cardnumber."',"."'".$rarity."',"."'".$condition."',"."'".$edition."',"."'".$buycost."',"."'".$mysellprice."',"."'".$notes."',"."'".$forsell."');";
echo $sql2;
echo "<br>";
echo $sql;
//(NULL, 'Nitro Warrior', 'DP08-EN013', 'Rare', '1', '1', '0', '0.50', 'none', '1');";


if($UPDATE ==1){
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}





