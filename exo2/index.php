<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
    
<?php //l'ouverture d'un script php(slide58)

$serveurs = array(//un tableau assossiatve(slide64)

"api-01" => ["45","60",1,"47.5","ATTENTION"],
"api-02" => ["92","78",1,"15","CRITIQUE"],
"db-prod" => ["70","95",1,"17.5","CRITIQUE"],
"web-01" => ["30","40",1,"65","OK"],
"web-02" => ["55","65",0,"40","ATTENTION"],
"cache-01" => ["88","92",1,"10","CRITIQUE"]
);

function condition($k){//une function (slide71)
if($k==0){return 1;}//une if-else conditionelle(slide67)
elseif($k =="CRITIQUE"){return 2;}
elseif($k >= 50){return 3;}


}
function trans($k){//une function (slide71)
if($k==0){return "offline";}//une if-else conditionelle(slide67)
elseif($k==1){return "online";}
}
//fermeture d'un script php(slide58)
?> 
<table id="table1" border="1">
    <thead>
        <tr>
            <th>Serveurs</th>
            <th>CPU%</th>
            <th>RAM%</th>
            <th>Status</th>
            <th>Score</th>
            <th>Etat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter =0;//declarations des variables(slide60)
        $sum=0;
        $max=0;

        foreach ($serveurs as $name => $tab) {//une loop foreach(slide69)
            
            if (condition($tab[2])==1) {
                $bgColor = "RGB(200,200,200)"; 
            } elseif(condition($tab[4])==2) {
                $bgColor = "RGB(255,180,180)"; 
            } elseif(condition($tab[3])==3) {
                $bgColor = "RGB(180,255,180)"; 
            }else {
                $bgColor = "RGB(255,220,150)"; 
            }

            $holder=trans($tab[2]);

    
            echo "<tr class='row' style='background-color: $bgColor;'>";//utilisation des "echo"s (slide(61-25-26))pour cree un tableau html(slide 27)
            echo "<td class='serveur'>$name</td>";
            echo "<td class='cpu' >$tab[0]</td>";
            echo "<td class='ram'>$tab[1]</td>";
            echo "<td class='status' > $holder </td>";
            echo "<td class='score'>$tab[3]</td>";
            echo "<td class='etat' >$tab[4]</td>";
            echo "</tr>";
           
            if($tab[2]==1){
            $counter++;//operation d'incrementation(slide 66)
            }
            
            $sum=$sum+$tab[3];//operation arithmitique d'addition(slide66)
            
            if($max<$tab[3]){

            $max=$tab[3];
            $meilleur=$name;
            }
        }

        $average=$sum/6;//operation arithmitique de division(slide66)
        ?>
    </tbody>
</table>

<h3>Resume</h3>
<p id=total_online_servers> Serveurs online:<?php echo "$counter" ; //echo slide(61-25-26-27)
 ?></p>
<p id=moy_scores> Score moyene:<?php echo "$average"   ;//echo slide(61-25-26-27)
?></p>
<p id=best_serv> Meilleur serveur:<?php echo "$meilleur  ($max)";//echo slide(61-25-26-27)
?></p>






</body>
</html>