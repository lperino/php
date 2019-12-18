<section class="condition">

            <a href="https://apprendre-php.com/tutoriels/tutoriel-9-les-structures-de-contrle-les-conditions.html" target="_blank"><h2>PHP - Les conditions</h2></a>

            <h4>Exercice 1</h4>
            <!-- Les conditions ##Exercice 1 Créer une variable age et l'initialiser avec une valeur. -->
            <!-- Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->
            <?php
                
                $age = 26;
                echo $age<18 ? 'Vous etes mineur':'Vous etes majeur'
            ?>

         

            <h4>Exercice 2</h4>
            <!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur. -->
            <!-- Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. -->
            <?php
                $IsEasy =  true;
                
                echo $IsEasy == false ? "c'est vrai": "c'est faux"
            ?>
         

            <h4>Exercice 3</h4>
            <!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur : -->

                <!-- Homme -->
                <!-- Femme -->
                <?php
                $homme ='Homme';
                $femme = 'Femme';
                $majeur = 22;
                $mineur = 17;
                
                $genre = $homme;
                $age = $majeur;



                    if ($genre==$homme & $age >= 18){
                    echo "Vous êtes un homme et vous êtes majeur";
                }
                    if ($genre==$homme & $age < 18){
                    echo "Vous êtes un homme et vous êtes mineur";
                };
                    if ($genre==$femme & $age >= 18){
                    echo "Vous êtes une femme et vous êtes majeur";
                };
                    if ($genre==$femme & $age < 18){
                    echo "Vous êtes une femme et vous êtes mineur";
                }
                
            ?>

            <!-- En fonction de l'âge et du genre afficher la phrase correspondante : -->

                <!-- Vous êtes un homme et vous êtes majeur -->
                <!-- Vous êtes un homme et vous êtes mineur -->
                <!-- Vous êtes une femme et vous êtes majeur -->
                <!-- Vous êtes une femme et vous êtes mineur -->

            <!-- Gérer tous les cas. -->




            <h4>Exercice 4</h4>
            <!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. -->
            <!-- Cette échelle va de 1 à 9. -->
            <!-- Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. -->

                <!-- 1	Micro-séisme impossible à ressentir. -->
                <!-- 2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. -->
                <!-- 3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. -->
                <!-- 4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. -->
                <!-- 5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. -->
                <!-- 6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. -->
                <!-- 7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. -->
                <!-- 8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. -->
                <!-- 9	Séisme capable de tout détruire sur une très vaste zone. -->

            <!-- Gérer tous les cas et utiliser autre chose que des if else -->

            <?php 
                
                $magnitude = 5;

                    switch($magnitude)
                    {
                    case $magnitude == 1 :
                        echo 'Micro-séisme impossible à ressentir';
                    break;
                    case $magnitude == 2 :
                        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                    break;
                    case $magnitude == 3 :
                        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                    break;
                    case $magnitude == 4 :
                        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                    break;
                    case $magnitude == 5 :
                        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
                    break;
                    case $magnitude == 6 :
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                    break;
                    case $magnitude == 7 :
                        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                    break;
                    case $magnitude == 8 :
                        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                    break;
                    case $magnitude == 9 :
                        echo 'Séisme capable de tout détruire sur une très vaste zone.';
                    break;
                    
                    
                    
                    default :
                        echo ("tes con");
                    break;
                    }
            
            
            
            
            
            ?>

         

            <h4>Exercice 5</h4>
            <!-- Traduire ce code avec des if et des else : -->

                <?php
                    $maVariable = 'Homme';
                    // echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

                    if ($maVariable != 'Homme')
                        echo "C'est une développeuse !!!";
                    
                    else 
                        echo "C'est un développeur !!!";
                    

                ?>

              

            <h4>Exercice 6</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <?php

                // echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
                $monAge = 19;
                    // echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

                    if ($monAge >=18 )
                        echo "Tu es majeur!!!";
                    
                    else 
                        echo "Tu es mineur!!!";
                    

            ?>

           

            <h4>Exercice 7</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <?php
                $maVariable = true;
                // echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
                if ($maVariable == false)
                        echo "C'est pas bon !!!";
                    
                    else 
                        echo "C'est ok !!!";
                    


            ?>

          

            <h4>Exercice 8</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <?php

                // echo ($maVariable) ? 'cest ok !!' : 'cest null :D';

                $maVariable = null;
                if ($maVariable == null)
                    echo "C'est null !!!";
                    
                else 
                    echo "C'est ok !!!";

            ?>

          

        </section><!-- /condition -->