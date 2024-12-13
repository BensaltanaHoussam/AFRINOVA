<?php  

require('./db_connection.php');

if (isset($_GET['id_city']) && isset($_GET['id_pays'])) {
    $id_pays = $_GET['id_pays'];
    $id = $_GET['id_city'];
    $sql = "DELETE FROM city WHERE id_city = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: cities.php?id_pays=$id_pays");
    } else {
        echo "Erreur : " . $conn->error;
    }
} else {
    echo "ID invalide.";
}

?>