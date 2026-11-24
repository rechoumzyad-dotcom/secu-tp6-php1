<?php
// Début d'un script PHP avec la balise <?php (vu dans le slide 58)
// Le script PHP est placé tout en haut du fichier, avant le HTML (slides 27 et 58)

// Déclaration du tableau associatif "etudiantsNote" : clé = nom, valeur = moyenne (vu dans le slide 64)
$etudiantsNote = [
    "JOHN" => 9,
    "BOB" => 15.5,
    "RAYANE" => 7,
    "ROSIE" => 13
]; // Chaque instruction PHP se termine par un point-virgule (vu dans le slide 59)

// Déclaration d'une fonction avec paramètre et retour (vu dans le slide 71)
// La fonction estAdmissible vérifie si la note est >= 10
function estAdmissible($note) {

    // Condition if / else (vu dans le slide 67)
    // Opérateur relationnel >= (vu dans le slide 66)
    if ($note >= 10) {
        return true;   // Retour d'une valeur booléenne par return (vu dans le slide 71)
    } else {
        return false;  // Retour d'une valeur booléenne par return (vu dans le slide 71)
    }
}
?>
<!DOCTYPE html>
<!-- Fin du bloc PHP avec ?> (slide 58). Début du HTML : PHP et HTML sont mélangés (slide 27) -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Etudiants-Note</title>
</head>
<body>


<table id="table1" border="1">
    <thead>
        <tr>
            <th>Etudiant</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Nouveau bloc PHP inséré dans le HTML (slides 27 et 58)

        // Boucle foreach sur un tableau associatif : $etudiant = clé, $note = valeur (vu dans le slide 69)
        // $etudiantsNote est une variable globale, accessible ici hors fonction (vu dans le slide 75)
        foreach ($etudiantsNote as $etudiant => $note) {

            // Appel de la fonction estAdmissible (vu dans le slide 71)
            // Condition if / else (vu dans le slide 67)
            if (estAdmissible($note)) {
                // Affectation d'une valeur à une variable (vu dans les slides 59 et 60)
                $bgColor = "RGB(136,248,136)"; // vert si admissible
            } else {
                $bgColor = "RGB(251,173,173)"; // rouge sinon
            }

            // echo avec guillemets doubles : les variables ($bgColor, $etudiant, $note)
            // sont remplacées par leur valeur (vu dans les slides 60 et 61)
            // Le HTML est généré dynamiquement par PHP, une ligne <tr> par étudiant (slides 26, 27 et 28)
            echo "<tr class='row'>";
            echo "<td class='etud'>$etudiant</td>";
            echo "<td class='note' style='background-color: $bgColor;>$note</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>