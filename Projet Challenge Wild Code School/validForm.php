<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$nomServ = 'localhost';
$nomUtil = 'root';
$mdp = '';
$nomDb = 'bd_wcs';
$conn = mysqli_connect($nomServ,$nomUtil,$mdp,$nomDb);

if (mysqli_connect_errno()) {
    echo "Impossible de se connecter a MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['nom_candidat'])  ) {
    $candidat = htmlspecialchars($_POST['nom_candidat']);
    
    if(isset($_POST['enregistrer'])){
    
        $ajoutDb = "INSERT INTO candidats(nom_candidat)
        VALUES ('$candidat')";
        $resultat_ajout = mysqli_query($conn, $ajoutDb);  
       header ("location: viewValidForm.php");
    }
}
?>