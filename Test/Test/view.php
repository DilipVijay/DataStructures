<?php
include_once("configs.php");
view();
function view()
{
    $con = new Config();
    $con = $con->configs();
    $result = mysqli_query($con, "SELECT * FROM emp");

    echo "<table border='0' width='30%' align='center'>
<tr bgcolor='grey'>
<th>Firstname</th>
<th>Age</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
}
?>