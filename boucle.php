<?php include ('includes/head.php');?>

<body>
    <?php include ('includes/header.php');?>

    <section>
       <div class="container mb-4">
       <h1>Boucles</h1>
        <h2>Foreach</h2>
            <div class="row">
                <?php $colors = array("red", "green", "blue", "yellow","black","#6a7aab");
                
                    
                foreach ($colors as $color) {
                    if($color=='yellow'){$colorText='text-black';}else{$colorText='text-white';}

                    echo "<div class='p-3 mb-2 $colorText col-sm-4'>
                    <p class='p-3 mb-2' style='background-color:$color;'>Ce bloc est $color</p><br>";
                    monMsg($color);
                    echo "</div>";
                }
                ?>
            </div>
            <h2>Color random array</h2>
            <div class="row">
            
                <?php 
                $devs = array("Hortense", "Clément", "Kevin", "Romain", "Laurine", "Thibault", "Wikenson", "Yohan", "Aurelien", "Nicolas", "Ludo", "Matthias");
                $lenghDevs = count($devs);
                $colors = array("red", "green", "blue", "yellow","black","#6a7aab","green","purple","pink","grey");
                $lenghColors = count($colors);

                for ($i=0; $i < $lenghDevs; $i++) { 
                    $random = rand(0,$lenghColors-1);
                    $substrDevs = mb_substr($devs[$i],0,3);
                    echo "<h2 class='col-sm-4 text-center' style='color:$colors[$random];'>$substrDevs</h2>";
                }
       
                ?>
                
            </div>
            <h2>Color random perfect</h2>
            <div class="row">
            
                <?php 
                $devs = array("Hortense", "Clément", "Kevin", "Romain", "Laurine", "Thibault", "Wikenson", "Yohan", "Aurelien", "Nicolas", "Ludo", "Matthias");
                $lenghDevs = count($devs);
                function colorRandom(){
                    return '#'.str_pad(dechex(mt_rand(0, 0xFFFFFF)),6,'0', STR_PAD_LEFT);
                }

                for ($i=0; $i < $lenghDevs; $i++) { 
                    $colorRandom = colorRandom();
                    $substrDevs = mb_substr($devs[$i],0,3);
                    echo "<h2 class='col-sm-4 text-center' style='color:$colorRandom;'>$substrDevs</h2>";
                }
       
                ?>
                
            </div>
    </section>
    <div class="d-flex row justify-content-around">
        <section>
            <div class="container mb-4">
    
                <h2>For</h2>
    
                <div class="">
                    <?php
                        $a=0;
                        $b=0;
                        $c=0;
                        for ($i=0; $i < 5; $i++) { 
                            $a+=100;
                            $b+=50;
                            $c+=10;
                        }
                        echo"Le nombre est $a<br>Le nombre est $b<br>Le nombre est $c<br>";
                    ?>
    
                </div>
        </section>
        <section>
            <div class="container mb-4">
    
                <h2>While</h2>
    
                <div class="">
                    <?php
                    $d=0;
                while ($d <= 5) {
                echo"Le chiffre X = $d<br>";
                $d++;
                }
                    ?>
    
                </div>
        </section>
        <section>
            <div class="container mb-4">
    
                <h2>Do While</h2>
    
                <div class="">
                    <?php
                    $d=1;
                do {
                    echo"Ce dev est le n°$d<br>";
                    $d++;
                }while ($d <= 12);
                   
                
                    ?>
    
                </div>
        </section>
    </div>

    <?php include ('includes/footer.php');?>
    <?php include ('includes/scripts.php');?>
</body>

</html>