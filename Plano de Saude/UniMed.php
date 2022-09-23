<?php
    include_once "configUM.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Name = $_POST['name'];
        $age0 = $_POST['age'];
        $age1 = $_POST['age1'];
        $age2 = $_POST['age2'];
        $age3 = $_POST['age3'];
        $tt = $age0 + $age1 + $age2 + $age3;
    
        $pls=$_POST['id'];
        if ($tt >= 0 && $tt <= 18) {
            if ($pls[0] === "ENF") {
                $value = 193.00; //Enfermaria 0 - 18 anos
            }else {
                $value = 282.00; //apartamento 0 - 18 anos
            }    
        }
        
        if ($tt >= 19 && $tt <= 23) {
            if ($pls[0] === "ENF") {
                $value = 221.00; //enfermaria 19 - 23 anos
            }else {
                $value = 325.00; //apartamento 19 - 23 anos
            }    
        }
        
        if ($tt >= 24 && $tt <= 28) {
            if ($pls[0] === "ENF") {
                $value = 255.00; //enfermaria 24 - 28 anos
            }else {
                $value = 373.00; //apartamento 24 - 28 anos
            }    
        }
        
        if ($tt >= 29 && $tt <= 38) {
            if ($pls[0] === "ENF") {
                $value = 337.00; //enfermaria 29 – 38 anos
            }else {
                $value = 494.00; //apartamento 29 - 38 anos
            }    
        }
        
        if ($tt >= 39 && $tt <= 53) {
            if ($pls[0] === "ENF") {
                $value = 616.00; //enfermaria 39 – 53 anos
            }else {
                $value = 902.00; //apartamento 39 - 53 anos
            }    
        }
        
        if ($tt >= 54) {
            if ($pls[0] === "ENF") {
                $value = 800.00; //enfermaria 54 anos ou mais
            }else {
                $value = 1200.00; //apartamento 54 anos ou mais
            }    
        }
        
        if ($pls[0] == "ENF") {
            $planp = "Nursery";
        }else {
            $planp = "Apartament";
        }
    
        $sql = "INSERT INTO Users (Name, Age, DPAge1, DPAge2, DPAge3, Plan, Created_at) VALUES (?,?,?,?,?,?, NOW())";
        $conn->prepare($sql)->execute([$Name, $age0, $age1, $age2, $age3, $value]);

    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Style/style.css">
    <title>UniMed</title>
</head>

<body>
    <!-- Div Tips -->
    <div id="formTips">
        <label>Tips</label>
        <br>
        <label>Coloque seu nome e sobrenome com as iniciais em maiúsculas.</label>
        <br>
        <label>Deixe as idades em 0(Zero) para nenhum dependente.</label>
        <br>
        <label>Abreviação: Dp > Dependente.</label>
    </div>

    <!-- Back Button -->
    <a href="./Home.php">
        <input type="button" class="fadeInDown" value="Back">
    </a>
    <br>
    <!-- Consult Button -->
    <a href="./Consulta.php">
        <input type="button" class="fadeInDown" value="Consult">
    </a>
    <br>
    <h5>Created by:</h5>
    <h6>Ruan Ferreira</h6>
    <h6>Fábio Higor</h6>
    <br>


    <div class="wrapper fadeInDown">
        <div id="formValue">
            <!-- Confirm Value -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label">Your plan and data!</label>
                        <br>
                        <?php 
                            if (isset($_POST['btnnext'])) {
                                echo "<br>Name: $Name <br>";
                                echo "Age: $age0 <br>";
                                echo "Age Dp (1): $age1 <br>";
                                echo "Age Dp (2): $age2 <br>";
                                echo "Age Dp (3): $age3 <br>";
                                echo "<br> $planp";
                                echo "<br> R$ $value<br>";
                            }
                        ?>
                        <br>
                        <!--
                        <input type="submit" class="fadeIn two" value="Confirm" name="btnone">
                        -->
                    </div>
            </form>
        </div>

        <div id="formContent">
            <!-- LOGO -->
            <img src="./Img/unimed-logo.png" alt="Logo Unimed" width="250" height="300">
            <img src="./Img/Fatec_Logo.png" alt="Logo Fatec" width="170" height="300">

            <!-- User Form -->
            <form action="# " method="post">
                <div class="form-group">
                    <!-- User Label -->
                    <input placeholder="Name" type="text" class="fadeIn second" name="name"
                        pattern="(-?([A-Z].\s)?([A-Z][a-z]+)\s?)+([A-Z]'([A-Z][a-z]+))?">
                    <input placeholder="Age" type="text" class="fadeIn second" name="age" pattern="\d*">
                    <br><br>

                    <!-- plan Label -->
                    <label class="fadeIn third">Please select a plan</label>
                    <br>
                    <input type="radio" id="enf" name="id[]" value="ENF" class="fadeIn third">
                    <label for="enf" class="fadeIn third">Nursery</label>
                    <br>
                    <input type="radio" id="apart" name="id[]" value="APART" class="fadeIn third">
                    <label for="apart" class="fadeIn third">Apartment</label>
                    <br><br>
                    <label class="fadeIn third">Age of dependents( 0 for no dependent ):</label>
                    <br>


                    <!-- Dependents Label -->
                    <input placeholder="Dependents age" type="text" class="fadeIn third" name="age1" value="0"
                        pattern="\d*">
                    <input placeholder="Dependents age" type="text" class="fadeIn third" name="age2" value="0"
                        pattern="\d*">
                    <input placeholder="Dependents age" type="text" class="fadeIn third" name="age3" value="0"
                        pattern="\d*">
                    <br><br>

                    <!-- Button -->
                    <input type="submit" class="fadeIn fourth" value="Next" name="btnnext">
                    <input type="reset" class="fadeIn fourth" value="Clear">
                </div>
            </form>
        </div>
    </div>
</body>

</html>