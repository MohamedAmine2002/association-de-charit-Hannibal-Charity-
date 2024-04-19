<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "traitementdenousrejoindre";

$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifiez la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'] ?? "";
    $prenom = $_POST['prenom'] ?? "";
    $cin = $_POST['cin'] ?? "";
    $tel = $_POST['tel'] ?? "";
    $dateNaissance = $_POST['date'] ?? "";
    $email = $_POST['email'] ?? "";
    $genre = $_POST['genre'] ?? "";
    $pourquoi = $_POST['pourquoi'] ?? "";
    
    $sql = "INSERT INTO xx (nom, prenom, cin, tel, dateNaissance, email, genre, pourquoi) VALUES ('$nom', '$prenom', '$cin', '$tel', '$dateNaissance', '$email', '$genre', '$pourquoi')";
    if (mysqli_query($conn, $sql)) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur lors de l'enregistrement des données: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
