<?php
$servername = "db:3306";
$username = "root";
$password = "admin";
$dbname = "sakila";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
$actors = mysqli_query($conn, "SELECT * FROM actor");

echo "<table border='1' style='width: 100%'>
<tr>
<th>Id</th>
<th>Nome</th>
<th>Sobrenome</th>
</tr>";

while ($row = mysqli_fetch_assoc($actors)) {
  echo "<tr>";
  echo "<td style='text-align: center'>" . $row['actor_id'] . "</td>";
  echo "<td style='text-align: center'>" . $row['first_name'] . "</td>";
  echo "<td style='text-align: center'>" . $row['last_name'] . "</td>";
  echo "</tr>";
}

echo "</table>";
