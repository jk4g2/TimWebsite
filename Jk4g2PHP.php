<!DOCTYPE html>

<!--
    name: Tim Kwon
    pawprint: jk4g2
    date: 10/22/19
    Challenge PHP
-->

<html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>Jk4g2PHP</title>
        <link rel="stylesheet" type="text/css" href="Jk4g2PHP.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="mainContainer">
            <h1 id="header">PHP Challenges</h1>
            <span id="formSection">Form Section</span>
            
            <div class="dropDownButtonDiv">
                <button id="dropDownButton">Select a Function</button>
                <div id="dropDownMenu">
                    <a onclick="openForms(1)">Name</a>
                    <a onclick="openForms(2)">Hamming Number</a>
                    <a onclick="openForms(3)">Anagram Finder</a>
                    <a onclick="openForms(4)">Hypotenuse Calculator</a></div>
            </div>
            <div id = "form1">
                <p class="name">Name Function: </p>
                <form method="post" action = "Jk4g2PHP.php">
                    <input type="text" name="firstName" placeholder="First Name" class="input">
                    <input type="text" name="lastName" placeholder="Last Name" class="input">
                    <input type="submit" value="Submit" class="inputButton">
                    <input type="button" onclick="isClearform()" value="Clear" class="inputButton">
                    <input name="function" value="form1" class="func">
                    <div class="displayResult">
                        <?php
                            if($_POST['function'] == 'form1'){
                                echo "<script>$('#form1').show();</script>";
                                if($_POST['firstName'] == null || $_POST['lastName'] == null)
                                    print "<h4>Sorry, but all fields are required</h4>";
                                else
                                    print "<h4>Hi {$_POST['firstName']} {$_POST['lastName']}, Welcome to my PHP challenge </h4>";
                            }
                        ?>
                    </div>
                </form>
            </div>
            
            <div id = "form2">
                <p class="name">Hamming Number Function:</p>
                <form method="get" action = "Jk4g2PHP.php">
                    <input type="text" name="number" placeholder="Provide a Number" class="input2">
                    <input type="submit" value="Submit" class="inputButton">
                    <input type="button" value="Clear" class="inputButton" onclick="isClearform()">
                    <input name="function" value="form2" class="func">
                    <div class="displayResult">
                        <?php
                            if($_GET['function'] == 'form2'){
                                echo "<script>$('#form2').show();</script>";
                                if($_GET['number']==null)
                                    print "<h4>Sorry, but all fields are required</h4>";
                                else{
                                    if(isHammingNumbers($_GET['number']))
                                        print "<h4> The provided number is a Hamming number</h4>";
                                    else
                                        print "<h4>The provided number is not a Hamming number</h4>";
                                    }
                                }
                         //https://www.w3resource.com/php-exercises/challenges/1/php-challenges-1-exercise-20.php
                        function isHammingNumbers($number){
                            if($number == 1)
                                return true;
                            if($number == 0)
                                return false;
                            if($number % 2 == 0)
                                return isHammingNumbers($number/2);
                            if($number % 3 == 0)
                                return isHammingNumbers($number/3);
                            if($number % 5 == 0)
                                return isHammingNumbers($number/5);
                            return false;
                        }
                        ?>
                    </div>
                </form>
            </div>
            
            <div id = "form3">
                <p class="name">Anagram finder:</p>
                <form method="get" action = "Jk4g2PHP.php">
                    <input type="text" name="firstWord" placeholder="Provide first Word" class="input">
                    <input type="text" name="secondWord" placeholder="Provide a second Word" class="input">
                    <input type="submit" value="Submit" class="inputButton">
                    <input type="button" onclick="isClearform()" value="Clear" class="inputButton">
                    <input name="function" value="form3" class="func">
                    <div class="displayResult">
                        <?php
                            if($_GET['function'] == 'form3'){
                                echo "<script>$('#form3').show();</script>";
                                if($_GET['firstWord'] == null || $_GET['secondWord'] == null)
                                    print "<h4>Sorry, but all fields are required</h4>";
                                else{
                                    if(isAnagram($_GET['firstWord'],$_GET['secondWord']))
                                        print "<h4>The provided Strings are an anagram</h4>";
                                    else
                                        print "<h4>The provided Strings are not an anagram</h4>";
                                }
                            }
                            //https://www.w3resource.com/php-exercises/challenges/1/php-challenges-1-exercise-21.php
                            function isAnagram($a, $b)
                            {
                                if (count_chars($a, 1) == count_chars($b, 1))
                                    return true;
                                else
                                    return false;
                            }
                        ?>
                    </div>
                </form>
            </div>
            
            <div id = "form4">
                <p class="name">Hypotenuse Calculator Function:</p>
                <form method="get" action = "Jk4g2PHP.php">
                    <input type="number" name="firstLeg" placeholder="Provide first Leg" class="input">
                    <input type="number" name="secondLeg" placeholder="Provide a second Leg" class="input">
                    <input type="submit" value="Submit" class="inputButton">
                    <input type="button" onclick="isClearform()" value="Clear" class="inputButton">
                    <input name="function" value="form4" class="func">
                    <div class="displayResult">
                        <?php
                            if($_GET['function'] == 'form4'){
                                echo "<script>$('#form4').show();</script>";
                                if($_GET['firstLeg'] == null || $_GET['secondLeg'] == null)
                                    print "<h4>Sorry, but all fields are required</h4>";
                                else
                                    echo "<h4>Hypotenuse of this triangle is : ", round(hypot($_GET['firstLeg'],$_GET['secondLeg']), 2), "</h4>";
                            }
                        ?>
                    </div>
                </form>
            </div>
            <p id="textInput">PHP Request Simulation Section</p>
            <p id="textInput2">Physically type '?function = showPicture' in the URL after the .php extension to simulate a PHP request!</p>
            
            <div id = "form5">
                <p class="name"></p>
                <form method="get" action = "Jk4g2PHP.php">
                    <input name="function" value="showPicture" class="func">
                    <div class="displayResult">
                        <?php
                            if($_GET['function'] == "showPicture"){
                                echo "<img src='php.png' alt='pic' id='picture'>";
                                echo "<input type='button' onclick='isClearform()' value='Clear' class='inputButtonPic'>";
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
        
        <script>
            var isClicked = 0;
            window.onclick = function(event){
                if(!event.target.matches("#dropDownButton")){
                    $("#dropDownMenu").hide();
                    isClicked = 0;
                }else{
                    if(isClicked == 0){
                        $("#dropDownMenu").show();
                        isClicked = 1;
                    }else{
                        $("#dropDownMenu").hide();
                        isClicked = 0;
                    }
                }
            }
 
            function openForms(form){
                if( form == 1 ){
                    $("#form1").show();
                    $("#form2").hide();
                    $("#form3").hide();
                    $("#form4").hide();
                }
                else if( form == 2 ){
                    $("#form1").hide();
                    $("#form2").show();
                    $("#form3").hide();
                    $("#form4").hide();
                }
                else if( form == 3 ){
                    $("#form1").hide();
                    $("#form2").hide();
                    $("#form3").show();
                    $("#form4").hide();
                }
                else if( form == 4 ){
                    $("#form1").hide();
                    $("#form2").hide();
                    $("#form3").hide();
                    $("#form4").show();
                }
        }
            function isClearform(){
                var shortInput = document.getElementsByClassName("input");
                var longInput = document.getElementsByClassName("input2");
                var displayResults = document.getElementsByClassName("displayResult");
                for(var i = 0; i < shortInput.length; i++)
                    shortInput[i].value = null;
                for(var i = 0; i < longInput.length; i++)
                    longInput[i].value = null;
                for(var i = 0; i < displayResults.length; i++)
                    displayResults[i].innerHTML = "";
                document.getElementsByClassName("displayResult").innerHTML = "";
                $("#form5").hide();
            }
            
            
        </script>
    </body>
</html>
        