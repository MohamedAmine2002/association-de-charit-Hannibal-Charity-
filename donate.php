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
    $nom1 = $_POST['nom1'] ?? "";
    $prenom1 = $_POST['prenom1'] ?? "";
    $cin1 = $_POST['cin1'] ?? "";
    $tel1 = $_POST['tel1'] ?? "";
    $dateNaissance1 = $_POST['dateNaissance1'] ?? "";
    $email1 = $_POST['email1'] ?? "";
    $genre1 = $_POST['genre1'] ?? "";
    $membre1 = $_POST['membre1'] ?? "";
    $pourquoi1 = $_POST['pourquoi1'] ?? "";
    $dateDisponibilite = $_POST['dateDisponibilite'] ?? "";
    
    $sql = "INSERT INTO tt (nom1, prenom1, cin1, tel1, dateNaissance1, email1, genre1, membre1, pourquoi1, dateDisponibilite) VALUES ('$nom1', '$prenom1', '$cin1', '$tel1', '$dateNaissance1', '$email1', '$genre1', '$membre1', '$pourquoi1', '$dateDisponibilite')";

    if (mysqli_query($conn, $sql)) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur lors de l'enregistrement des données: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
