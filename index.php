<!DOCTYPE html>
<html>
    <head>
        <title>First Grade Kid Calculator</title>
        <h1> My First Calculator </h1>
        <h2>Solving your small problems.</h2>
        <meta charset="utf-8">
        <style>
          @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="result">
        <?php
               
            if(isset($_GET['submit'])){
                if(isset($_GET['n1']) && !empty($_GET['n2'])){
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
                    $op = $_GET['operation'];
                    if(isset($_GET['visualResult']) && $_GET['visualResult']=="yes"){
                        switch ($op) {
                            case "Add":
                                
                                if(($n1+$n2)<=10){
                                    echo "<div id= 'reason'>Explanation if result is less than 10.<br /></div>";
                                    echo "You entered:  ". $n1 ."  +  " . $n2. "<br />";
                                    for($i=0; $i<$n1; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                    echo " + ";
                                      for($i=0; $i<$n2; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                    $n1 += $n2;
                                    echo "<br /><br />Result: ". $n1 . "<br />";
                                     for($i=0; $i<$n1; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                } else{
                                    echo "You entered this:  ". $n1 ."  +  " . $n2. "<br />";
                                    $n1 += $n2;
                                    echo "Result: ". $n1;
                                }
                                break;
                             case "subs":
                                if(($n1-$n2)<=10){
                                    echo "<div id= 'reason2'>Explanation if result is less than 10.<br /></div>";
                                    echo "<div id= 'res2'>You entered:  ". $n1 ."  -  " . $n2. "<br /></div>";
                                    for($i=0; $i<$n1; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                    echo "   -   ";
                                      for($i=0; $i<$n2; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                    $n1 -= $n2;
                                    echo "<br /><br />Result: ". $n1 . "<br />";
                                     for($i=0; $i<$n1; $i++){
                                        echo '<img id = "pic" src="img/manzana.jpg">';
                                    }
                                } else{
                                    echo "<div id= 'res2'>You entered this:  ". $n1 ."  -  " . $n2. "<br /></div>";
                                    $n1 -= $n2;
                                    echo "<br /><br /> Result: ". $n1;
                                }
                                break;
                            case "Mult":
                                echo "<div id= 'res2'>You entered this:  ". $n1 ."  *  " . $n2. "<br /></div>";
                                $n1 *= $n2;
                                echo "<br /> Result: ". $n1;
                                
                                break;
                        }
                    }
                    else{
                         switch ($op) {
                            case "Add":
                                echo "<div id= 'res'>You entered this:  ". $n1 ."  +  " . $n2. "<br /></div>";
                                $n1 += $n2;
                                echo "Result: ". $n1 . "<br />";
                                
                                break;
                             case "subs":
                                 echo "<div id= 'res'>You entered this:  ". $n1 ." - " . $n2. "<br /></div>";
                                 $n1 -= $n2;
                                echo "Result: ". $n1 . "<br />";
                                
                                break;
                            case "Mult":
                                echo "<div id= 'res'>You entered this:  ". $n1 ."  +  " . $n2. "<br /></div>";
                                $n1 *= $n2;
                                echo "Result: ". $n1;
                                
                                break;
                        }
                    }
                }
                if((isset($_GET['n2']) && empty($_GET['n2']))||(isset($_GET['n1']) && empty($_GET['n1']))||(isset($op) && empty($op))){ 
                    echo "<div id= 'warning'>It is neccesary to have two inputs and one operation.</div>";
                }
            }else{
                echo "<div id= 'start'>Enter your values to compute.</div>";
            }
            unset($_GET[$op]);
        ?>
        </div>
    
        <form id = "calculator">
            <br /><br />
            <input type="text" name="n1">
            <br />
            
            <div id = "layoutDiv">
                <input type = "radio" id="addition" name="operation" value = "Add">
                <label for = "Addition"></label><label for="addition">+</label>
                <input type="radio" id="subs" name = "operation" value = "subs">
                <label for = "Substraction"></label><label for="subs">-</label>
                <input type = "radio" id="multiplication" name="operation" value = "Mult">
                <label for = "Mult"></label><label for="multiplication">*</label>
                <br />
            </div>
            
            <div id = "layoutDiv1">
                <input type = "text" name = "n2">
                <br />
             </div>
             <h3>Are you first grader?</h3>
            <select name="visualResult">
                  <option value = "">Select One</option>
                  <option value="yes">Yes</option>
                  <option>No</option>
            </select> 
             <br /><br />
                <td><input id="delete" type="submit" value="CLEAR" ></td>
                <input type="submit" name="submit" value="Enter">
          
        </form>
        <footer>
          <br /><br />
            <figure id="csumb">
                    <img width = "170" height = "130" alt="affective" id="pic2" src = "https://experiencecle.com/wp-content/uploads/2016/03/csumb_logo-1.png"/><br/>
                     CST 336 Internet Programming. 2018© <br/>
                     <strong id="claim">Disclaimer:</strong> the information in this webpage is fictitous. <br/>
                     It is used for academic purposes only.
            </figure>
        </footer>
    </body>
    
</html>