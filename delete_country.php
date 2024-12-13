<?php  

require('./db_connection.php');

if (isset($_GET['id_pays'])) {
    $id = $_GET['id_pays'];
    $sql = "DELETE FROM pays WHERE id_pays = $id";
    if ($conn->query($sql) === TRUE) {
        echo "pays supprimée avec succès.";
        header("Location: index.php");
    } else {
        echo "Erreur : " . $conn->error;
    }
} else {
    echo "ID invalide.";
}

?>