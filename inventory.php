<?php
$TNTLINK = "http://www.trollandtoad.com/products/search.php?search_category=&search_words=";
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_ACC = "carddb";
$dbconnect = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_ACC);
if(mysqli_connect_errno()){echo 'Connection Error' .msqli_connect_error(); exit;



$name = "";
$cardnumber = "";
$rareity = "";
$buycost = "";
$mysellprice = "";
$notes = "";
$forsell = "";

$dbqur = "SELECT * FROM `yugioh` WHERE num = ";
if($row = mysqli_fetch_array($sqlqur)){
	
	$name = $row["name"];
	$cardnumber = $row["username"];
	$rareity = $row["rareity"];
	$buycost = $row["buycost"];
	$mysellprice = $row["mysellprice"];
	$notes = $row["notes"];
	$forsell = $row["forsell"];
	};


};
?>
<form action="add.php" method="post">
<table align="center" border="1" bordercolorlight="#666666">
<tr>
<td>Quanty</td>
<td>Name</td>
<td>Card Id Number</td>
<td>Rarity<a href="http://yugioh.wikia.com/wiki/Rarity">[#]</a></td>
<td>Condition</td>
<td>Edition<a href="http://yugioh.wikia.com/wiki/1st_Edition">[#]</a></td>
<td>Buy Cost</td>
<td>Sell Cost</td>
<td>Notes</td>
<td>For Sell?</td>
<td>SubmitNewCard/DBID</td>
<td>TNT Link</td>
</tr>
<tr><td colspan="12"><hr /></td></tr>
<tr>
<td>
<input type="text" name="quanty" value="1">
</td>
<td>
<input type="text" name="cardname" value="Enter Name" spellcheck="true">
</td><td>
<input type="text" name="cardnum" value="Card#">
</td><td>
<select name="rarity">
<option value="common">common</option>
<option value="shortprint">shortprint</option>
<option value="supershortprint">supershortprint</option>
<option value="rare">rare</option>
<option value="superrare">superrare</option>
<option value="holofoilrare">holofoil rare</option>
<option value="Ultrarare">Ultra Rare</option>
<option value="UltimateRare">Ultimate Rare</option>
<option value="SecretRare">Secret Rare</option>
<option value="UltraSecretRare">Ultra Secret Rare</option>
<option value="SecretUltraRare">Secret Ultra Rare</option>
<option value="Prismatic Secret Rare">Prismatic Secret Rare</option>
<option value="Holographic Rare">Holographic Rare</option>
<option value="Ghost Rare">Ghost Rare</option>
<option value="Parallel Rare">Parallel Rare</option>
<option value="Parallel Common">Parallel Common</option>
<option value="Super Parallel Rare">Super Parallel Rare (SPR)</option>
<option value="Ultra Parallel Rare">Ultra Parallel Rare (UPR)</option>
<option value="Gold Rare">Gold Rare (GUR)</option>
</select>
</td><td>
<select name="condition">
<option value="1">GemMint</option>
<option value="2">Mint</option>
<option value="3">NearMint</option>
<option value="4">Playwear</option>
<option value="5">Heavy Wear</option>
<option value="6">Horrable</option>
</select>
</td><td>
<select name="edition">
<option value="1">First</option>
<option value="1">Unlimited</option>
</select>
</td><td>
<input type="number" name="buy" value="0.00">
</td><td>
<input type="number" name="sell" value="0.01">
</td><td>
<input type="text" name="notes" value="This is a card">
</td><td>
<select name="ForSell">
  <option value="1">Yes</option>
  <option value="0">No</option>

</select>
</td><td>
<input type="submit">
</td>
<td></td>
<tr><td colspan="12"><hr /></td></tr>
<?PHP

$ahred= '<a href="';
$bhred= '">#</a>';


$sqlQ = "SELECT * FROM `yugioh`";
$data = mysqli_query($dbconnect,$sqlQ);
while($record = mysqli_fetch_array($data))
{
echo "<tr>";
echo "<td>";
echo $record['amt'];
echo "</td>";
echo "<td>";
echo $record['cardname'];
echo "</td>";
echo "<td>";
echo $record['cardnumber'];
echo "</td>";
echo "<td>";
echo $record['rareity'];
echo "</td>";
echo "<td>";
if($record['condition'] == 1){echo "Gem Mint";};
if($record['condition'] == 2){echo "Mint";};
if($record['condition'] == 3){echo "Near Mint";};
if($record['condition'] == 4){echo "Play Wear";};
if($record['condition'] == 5){echo "Heavy Wear";};
if($record['condition'] == 6){echo "Trash";};
echo "</td>";

echo "<td>";
if($record['edition'] == 1){echo "First";};
if($record['edition'] == 2){echo "Unlimited";};
echo "</td>";
echo "<td>";
echo $record['buycost'];
echo "</td>";
echo "<td>";
echo $record['mysellprice'];
echo "</td>";
echo "<td>";
echo $record['notes'];
echo "</td>";
echo "<td>";
if($record['forsell'] == 1){echo "Yes";};
if($record['forsell'] == 0){echo "No";};
echo "</td>";
echo "<td>";
echo $record['id'];
echo "</td>";
echo "<td>";
echo $ahred,$TNTLINK.$record['cardnumber'],$bhred;
echo "</td>";
echo "</tr>";}
?>



