<?php
include 'header.php';

include 'connexion_db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail_user = $_POST['mail_user'];
    $password_user = $_POST['password_user'];

    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE mail_user = ?");
    $stmt->bind_param("s", $mail_user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $utilisateur = $result->fetch_assoc();

        if (password_verify($password_user, $utilisateur['password_user'])) {
            // Stocker toutes les informations de l'utilisateur dans la session
            $_SESSION['utilisateur'] = $utilisateur;

            // Rediriger vers la page d'accueil après la connexion réussie
            header("Location: index.php");
            exit();
        } else {
            $error = "Mot de passe incorrect.";
        }
    } else {
        $error = "Adresse e-mail non trouvée.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>
    <h1>Se connecter</h1>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="mail_user">Email:</label>
        <input type="email" id="mail_user" name="mail_user" required><br><br>
        
        <label for="password_user">Mot de passe:</label>
        <input type="password" id="password_user" name="password_user" required><br><br>
        
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
