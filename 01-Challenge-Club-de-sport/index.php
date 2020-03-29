<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>O'clock United</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="part1">
            <h1>O'clock United Football Club</h1>
            <h2>Section enfants (de 6 à 14 ans)</h2>
            
            <?php 
            if (isset($_POST['age'])) {
                $age = $_POST['age'];
                echo "Age de l'enfant : " . $age . "\n";
            } 
            else {
                echo "<p class=\"directive\">Veuillez indiquer l'âge de votre enfant.</p>";
                echo "<br>";
            }
            

            if (isset($age)) {
                if($age < 6){
                    $caterogie = "Trop jeune";
                }
                elseif($age <= 7 ) {
                    $caterogie = "Poussin";
                }
                elseif ($age <= 9) {
                    $caterogie = "Pupille";
                }
                elseif ($age <= 11) {
                    $caterogie = "Minime";
                }
                elseif ($age > 12 && $age < 15) {
                    $caterogie = "Cadet";
                }else {
                    $caterogie = "Trop âgé";
                }
            } 
            
            if (isset($caterogie)) {
                echo "<h3> Catégorie : " . $caterogie . "</h3>";
            }
            
            ?>
            <form action="index.php" method="POST">
                <label for="age">Quel est l'age de votre enfant ?</label>
                <input class="young" type="number" name="age">
                <input type="submit" value="Calculer">
            </form>
        </div>
        <img src="images/bart.png" alt="bart">
        
        <!--1.1
        Ajouter un formulaire HTML avec un INPUT "age" permettant d'entrer un entier, et un bouton de type "submit"

        1.2
        Récupérer la valeur de l'âge envoyé grâce au formulaire

        1.3
        écrire le script qui indique la catégorie selon $age:
        "Trop jeune" si moins de 6 ans
        "Poussin" de 6 à 7 ans
        "Pupille" de 8 à 9 ans
        "Minime" de 10 à 11 ans
        "Cadet" après 12 ans
        "Trop âgé" à partir de 15 ans
        -->
        
    </body>
</html>
