<section class="variable">
            <!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
            <!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
            <!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->

            <a href="https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html" target="_blank"><h2>PHP - Les variables</h2></a>

            <h4>Exercice 1</h4>
<pre>
<code>
&lt;!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu. --&gt;
&lt;?php
    $nom = 'Léni';
    echo $nom;
?&gt;
</code>
</pre>

            <!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu. -->
    <div class="explained text-center">
        <em>Création de la variable $nom.</em></br>
        <em>Assignation Valeur "Léni".</em></br>
        <em>Affichage de la variable par l'intermédiaire du echo.</em>
    
    
    </div>
        
    <div class="resultat text-center">
    Résultat:
    <span>
        <?php

            $nom = 'Léni';
            echo $nom;
        ?>
    </span>
    </div>        
            
            <h4>Exercice 2</h4>

            


            <pre>
<code>
&lt;!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. --&gt;
&lt;!-- Attention age est de type entier. Afficher leur contenu. --&gt;
&lt;?php
    $nom = 'Léni';
    $prenom = 'Périno';
    $age = 26;
    echo $nom." ".$prenom." ".$age." ans"
?&gt;
</pre>
</code>
<div class="explained text-center">
        <em>Concaténation de plusieurs variables.</em></br>
        
    
    
    </div>
        
    <div class="resultat text-center">
    Résultat:
    <span><!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. -->
            <!-- Attention age est de type entier. Afficher leur contenu. -->
            "<?php
                $nom = 'Léni';
                $prenom = 'Périno';
                $age = 26;
                echo $nom." ".$prenom." ".$age." ans"
            ?>
"
    </span>
    
    </div> 



            <h4>Exercice 3</h4>
            <pre>
<code>
&lt;!-- Créer une variable km. L'initialiser à 1. Afficher son contenu. --&gt;
&lt;!-- Changer sa valeur par 3. Afficher son contenu. --&gt;
&lt;!-- Changer sa valeur par 125. Afficher son contenu. --&gt;
&lt;?php
    $km = 1 ;
    echo $km . "&lt;br/&gt;" ;   
    $km = 3;
    echo $km . "&lt;br/&gt;" ;
    $km = 125;
    echo $km
?&gt;
</code>
</pre>
<div class="explained text-center">
        <em>Écrasement de la valeur d'une variable</em></br>
        
    
    
    </div>
        
    <div class="resultat text-center">
    Résultat:
    <span><!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. -->
            <!-- Attention age est de type entier. Afficher leur contenu. -->
            <div> <?php

$km = 1 ;
echo $km . "<br/>" ;

$km = 3;
echo $km . "<br/>" ;
$km = 125;
echo $km

?>
</div>

    </span>
    
    </div> 
            <!-- Créer une variable km. L'initialiser à 1. Afficher son contenu. -->
            <!-- Changer sa valeur par 3. Afficher son contenu. -->
            <!-- Changer sa valeur par 125. Afficher son contenu. -->
           

         

            <h4>Exercice 4</h4>
            <pre>
<code>
&lt;!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. --&gt;
&lt;!-- Les afficher. --&gt;
&lt;?php
    $string = 'abdef';
    $int = 9;
    $float = 8.5;
    echo $string." ".$int." ".$float;
?&gt;
</code>
</pre>
            <!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. -->
            <!-- Les afficher. -->
            <?php

                $string = 'abdef';
                $int = 9;
                $float = 8.5;

                echo $string." ".$int." ".$float;
            
            ?>

      

            <h4>Exercice 5</h4>
            <pre>
<code>
&lt;!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. --&gt;
&lt;!-- Les afficher. --&gt;
&lt;!-- Créer une variable de type float. L'initialiser à 1. Afficher son type. --&gt;
&lt;!-- Changer sa valeur par 4.8 et afficher son contenu. --&gt;
&lt;?php
    $float = 1;
    echo gettype($float);
    $float = 4.8;
    echo var_dump($float)
?&gt;
</code>
</pre>
            <!-- Créer une variable de type float. L'initialiser à 1. Afficher son type. -->
            <!-- Changer sa valeur par 4.8 et afficher son contenu. -->
            <?php
                $float = 1;
                echo gettype($float);
                $float = 4.8;
                echo var_dump($float)
            ?>
         

            <h4>Exercice 6</h4>
            <pre>
<code>
&lt;!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. --&gt;
&lt;!-- Afficher : "Bonjour" + nom + ", comment vas tu ?". --&gt;
&lt;?php
    $nom = "leni";
    echo "Bonjour ".$nom. ", comment vas tu ?"
?&gt;
</code>
</pre>
            <!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. -->
            <!-- Afficher : "Bonjour" + nom + ", comment vas tu ?". -->

            <?php
                $nom = "leni";
                echo "Bonjour ".$nom. ", comment vas tu ?"

            ?>

        

            <h4>Exercice 7</h4>
            <pre>
<code>
&lt;!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. --&gt;
&lt;!-- Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". --&gt;
&lt;?php
    $nom = 'Léni';
    $prenom = 'Périno';
    $age = 26;
    echo "Bonjour" .$nom." ".$prenom.",tu as ".$age." ans"
?&gt;
</code>
</pre>
            <!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. -->
            <!-- Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->
            <?php
                $nom = 'Léni';
                $prenom = 'Périno';
                $age = 26;
                echo "Bonjour" .$nom." ".$prenom.",tu as ".$age." ans"
            ?>
          

            <h4>Exercice 8</h4>
            <pre>
<code>
&lt;!-- Créer 3 variables. --&gt;
&lt;!-- Dans la première mettre le résultat de l'opération 3 + 4. --&gt;
&lt;!-- Dans la deuxième mettre le résultat de l'opération 5 * 20. --&gt;
&lt;!-- Dans la troisième mettre le résultat de l'opération 45 / 5. --&gt;
&lt;!-- Afficher le contenu des variables. --&gt;
&lt;?php
    $addition = 3+4;
    $produit = 5*20;
    $quotient = 45/5;
    echo $addition." ".$produit." ".$quotient
?&gt;

</code>
</pre>
            <!-- Créer 3 variables. -->
            <!-- Dans la première mettre le résultat de l'opération 3 + 4. -->
            <!-- Dans la deuxième mettre le résultat de l'opération 5 * 20. -->
            <!-- Dans la troisième mettre le résultat de l'opération 45 / 5. -->
            <!-- Afficher le contenu des variables. -->

            <?php
                $addition = 3+4;
                $produit = 5*20;
                $quotient = 45/5;
                echo $addition." ".$produit." ".$quotient
            ?>

          

        </section><!-- /variable -->
