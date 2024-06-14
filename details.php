<?php
include 'header.php';
// Récupérer l'email soumis dans le formulaire
$email = $_POST['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seic_projet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Requête pour récupérer les informations du groupe avec cet email
$sql = "SELECT * FROM users WHERE email = '$email'";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
    // Afficher les informations du groupe
    while($row = $resultat->fetch_assoc()) {
       ?>
        <div class="container animate">
          <h2 class="nom-groupe"><?= $row["nom_groupe"]?></h2>
          <img src="uploads/<?= $row["logo"]?>" alt="Logo du groupe" class="logo">
          <p class="membres"><?= $row["nom_part"]?></p>
        </div>
        <?php
    }
} else {
    echo "Aucun groupe trouvé avec cet email.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    
</body>
</html>