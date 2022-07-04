<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Code School</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<section class="py-5"  style="background-color: #e3e3e3;" >
    <div class="container px-5 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-4">Ajoute Candidat <i class="fa-solid fa-car"></i></h3>
                        
                        <!-- Formulaire pour enregistrer une vehicule -->
                        <form method="POST" action="validForm.php">

                            <!-- input et label pour numero de modele -->
                            <label for="candidats" class="req"></label>
                            <input name="nom_candidat" placeholder="Candidats" class="form-control" type="text" required><br>
        
                            
                            <button  type="submit" class="btn btn-primary" value="enregistrer" name="enregistrer"> Ajoute </button><br>


                        </form>
                    </div>
        <div>
                                
                            <select class="form-select"  name="nom_candidat" aria-label="Default select example" >

            <option value="" >List de Candidat</option>      
            <?php 

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $nomServ = 'localhost';
            $nomUtil = 'root';
            $mdp = '';
            $nomDb = 'bd_wcs';
            $conn = mysqli_connect($nomServ,$nomUtil,$mdp,$nomDb);


            $ajoutMarque = ("SELECT * from candidats");
            $resultado = $conn->query($ajoutMarque);
            while($row = $resultado->fetch_assoc()){
                
                $candidat = $row['nom_candidat'];
                ?>

            <option   value="<?php echo $candidat; ?>"><?php echo $candidat; ?> </option>
            <?php 
            }

            ?>

            </select>
        </div>

               
                    </div>
                </div>
             </div>
        </div>
    </div>
   
</section>

    
</body>
</html>






