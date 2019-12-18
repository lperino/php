<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>

        <h1>Introduction à PHP</h1>
        
        <!-- VARIABLE -->
        <?php require "variables.php"; ?>
        <!-- CONDITION -->
        
        <?php require "condition.php"; ?>
        <!-- BOUCLE -->
        <section class="loop">

            <a href="https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html" target="_blank"><h2>PHP - Les boucles</h2></a>

            <h4>Exercice 1</h4>
            <!-- Créer une variable et l'initialiser à 0. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrémenter -->
                <?php 
                    $test0 = 0;

                    for ($i=0;$i<10;$i++){
                        $test0++;
                        echo $test0."</br>";
                    }
                
                
                
                
                
                ?>

        

            <h4>Exercice 2</h4>
            <!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas supérieur à 20 : -->

                <!-- multiplier la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- incrémenter la première variable -->

                 <?php 
                    $test = 0;
                    $test2 = random_int(1, 100);

                    while($test<20){

                        $test = $test*$test2;
                        echo $test."</br>";
                        $test++;
                    
                    }
                       
                
                
                
                
                
                ?> 


          

            <h4>Exercice 3</h4>
            <!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas inférieur ou égale à 10 : -->

                <!-- diviser la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- décrémenter la première variable -->


                <?php 
                    $testex3 = 100;
                    $test2ex3 = random_int(1, 100);

                    while($testex3>10){

                        $testex3 = $testex3/$test2ex3;
                        echo $testex3."</br>";
                        $testex3--;
                    
                    }
                       
                
                
                
                
                
                ?>  

            
          

            <h4>Exercice 4</h4>
            <!-- Créer une variable et l'initialiser à 1. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrementer de la moitié de sa valeur -->
                
                <?php 
                    $init = 1;
                    

                    while($init < 10){

                        
                        echo $init."</br>";
                        $init = $init+($init/2);
                    
                    }
                       
                
                
                
                
                
                ?>  


          

            <h4>Exercice 5</h4>
            <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->

            <?php 
                    
                    $mess = "On y arrive presque.";
                    $messArray = str_split($mess,1);
                    for ($i=0;$i<20;$i++){


                        echo $messArray[$i];
                    }
                
                
                
                
                
            ?>

          

            <h4>Exercice 6</h4>
            <!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->
            
            <?php 
                    
                    $mess1 = "C'est presque bon.";
                    $messArray1 = str_split($mess1,1);
                    for ($i=0;$i<20;$i++){


                        echo $messArray1[$i];
                    }
                
                
                
                
                
            ?>

            <h4>Exercice 7</h4>
            <!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->
            <?php 
                    
                    $mess2 = "On tient le bon bout.";
                    $messArray2 = str_split($mess2,1);
                    for ($i=0;$i<100; ($i++)+15){


                        echo $messArray2[$i];
                    }
                
                
                
                
                
            ?>

          

            <h4>Exercice 8</h4>
            <!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->
            <?php 
                    
                    $mess3 = "Enfin !!!!.";

                    $messArray3 = array_reverse(str_split($mess3,1));
                    for ($i=200;$i>=0; ($i--)+12){
                       

                        echo $messArray3[$i];
                    }
                
                
                
                
                
            ?>

          

        </section><!-- /loop -->

        <!-- TABLEAU -->
        <section class="array">
        
            <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2>PHP - Les tableaux (ou array)</h2></a>

            <h4>Exercice 1</h4>
            <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

                <!-- janvier -->
                <!-- février -->
                <!-- mars -->
                <!-- avril -->
                <!-- mai -->
                <!-- juin -->
                <!-- juillet -->
                <!-- aout -->
                <!-- septembre -->
                <!-- octobre -->
                <!-- novembre -->
                <!-- décembre -->
                <?php
                $tableauMois = array("janvier","février", "mars","avril", "mai", "juin","juillet","aout","septembre","octobre","novembre","décenmbre")

                ?>

            <h4>Exercice 2</h4>
            <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
                <?php
                    echo $tableauMois[2]
                ?>

          
            <h4>Exercice 3</h4>
            <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->
            <?php
                    echo $tableauMois[5]
                ?>
          

            <h4>Exercice 4</h4>
            <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
            <?php
                    $tableauMois[7] = "août";
                    echo print_r($tableauMois)
                ?>

          

            <h4>Exercice 5</h4>
            <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

            <?php
                    $hautDeFrance = array(
                                      02 => "Aisne",
                                      59 => "Nord",
                                      60 => "Oise",
                                      62 => "Pas-de-Calais",
                                      80 => "Somme"


                    );
                    echo print_r($hautDeFrance)
        
            ?>




            <h4>Exercice 6</h4>
            <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->
            <?php
                    echo $hautDeFrance[59]
            ?>


          

            <h4>Exercice 7</h4>
            <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->

            <?php
                    $hautDeFrance[51] = "Marne";
                    var_dump($hautDeFrance)

            ?>


            <h4>Exercice 8</h4>
            <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
            <?php
                for ($i=0;$i<count($tableauMois);$i++){
                    
                    echo $tableauMois[$i]."</br>";
                }

            ?>
          

            <h4>Exercice 9</h4>
            <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
            <?php
                foreach($hautDeFrance as $numeroDpt => $nomDpt){
                    echo $nomDpt."\n";
                }
            ?>

        

            <h4>Exercice 10</h4>
            <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
            <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->

            <?php
                foreach($hautDeFrance as $numeroDpt => $nomDpt){
                    echo $numeroDpt."\n numero du département : ".$nomDpt."</br>";
                }
            ?>

        </section><!-- /array -->
        
        <!-- DATE -->
        <section class="date">

             <a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2>PHP - Les dates</h2></a>

            <h4>Exercice 1</h4>
            <!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->

                <?php
                echo date('d / n / Y')
                ?>

            <h4>Exercice 2</h4>
            <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->

            <?php
                echo date('d-n-y')
                ?>


          

            <h4>Exercice 3</h4>
            <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->
            <?php
                echo date('l j F Y')
                ?>

          

            <h5>Bonus</h5>
            <!-- Bonus : Le faire en français. -->

            <?php
                date_default_timezone_set('Europe/Paris');
                // --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
                setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
                // strftime("jourEnLettres jour moisEnLettres annee") de la date courante
                echo strftime("%A %d %B %Y");

                ?>


            <h4>Exercice 4</h4>
            <!-- Afficher le timestamp du jour. -->
            <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->
            <?php
                echo time()."</br>";

                $timestamp =  mktime(15,0,0,8,2,2016);
                echo $timestamp
                
            ?>

          

            <h4>Exercice 5</h4>
            <!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->
            <?php
                $timestamp2 =  mktime(0,0,0,5,16,2016);

                echo (time()-$timestamp2)/(86400)
            ?>

          

            <h4>Exercice 6</h4>
            <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

            <?php
                
               echo ((mktime(0,0,0,3,1,2016)-mktime(0,0,0,2,1,2016))/86400);

                
            ?>

         

            <h4>Exercice 7</h4>
            <!-- Afficher la date du jour + 20 jours. -->
            <?php
                echo date('m/d/Y', (time()+(86400*20)));
                ?>
          

            <h4>Exercice 8</h4>
            <!-- Afficher la date du jour - 22 jours -->

            <?php
                echo date('m/d/Y', (time()-(86400*22)));
                ?>
          

            <h4>Exercice FINAL</h4>
            <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
            <!-- En fonction des choix, l'afficher dans un calendrier -->
            
            <form action="GET" id="ok">
            </form>
            <input type="number" value="2019"/>
            <select name="monthlist" form="ok">
            <?php
                for ($i=0;$i<count($tableauMois);$i++){?>
                    <option value="<?php echo $tableauMois[$i] ?>"><?php echo $tableauMois[$i] ?></option>

                    <?php

                    
                }

                


            ?>
            
            </select>

            <table>
                <thead>
                    <tr>

                        <?php
                            for ($i=0;$i<count($tableauMois);$i++){?>
                                <th colspan="2"><?php echo $tableauMois[$i] ?></th>
                                <?php
                               }
                               ?>
                        <!-- <th colspan="2">The table header</th> -->
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            
            
            
         
        </section>

    </main>

</body>
</html>