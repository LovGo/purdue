<?php include "../../include/config.php"; ?>
<?php include "../../include/header.php"; ?>
<p>Hello Administrator. Below is the list of departments:<p>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Head</th>
	</tr>
	<?php

		$result = oci_parse($con, "SELECT * FROM Departments ORDER BY Name");
		oci_execute($result);

		while($row = oci_fetch_array($result))
		{
			echo "<tr>\n";
			echo "<td>" . $row['Name'] . "</td>\n";
			echo "<td>" . $row['HeadName'] . "</td>\n";
			echo "</tr>\n";
		}

	?>
</table>
<br />
<div class="home">
	<a href="<?=$RootDirectory?>admin">Click here to return to the menu</a>
</div>
<?php include "../../include/footer.php"; ?>