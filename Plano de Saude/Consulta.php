<?php
include_once "configUM.php";
$consult = $conn->query("SELECT * FROM Users;");
echo "ID / NAME / AGE / DPAGE1 / DPAGE2 / DPAGE3 / PLAN / CREATED_AT<br/><br/>";

while ($line = $consult->fetch(PDO::FETCH_ASSOC)) {
    echo " {$line['Id']} / {$line['Name']} / {$line['Age']} / {$line['DPAge1']} / {$line['DPAge2']} /  {$line['DPAge3']} /  {$line['Plan']} /  {$line['Created_at']} <br/><br/>";
}
?>
