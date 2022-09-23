<?php
header('Content-type:text/html; charset=utf-8');
// Open Session
session_start();

if (isset($_SESSION['islogin'])) {
    $login = ucfirst($_SESSION['username']);
} else {
    $login = 'Login';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

    <!-- Title-->
<main>
  <div style="text-align:center">
            <h1>Training</h1>
        </div>


        <div id="myBtnContainer">
            <button class="Trainingbtn active" onclick="filterSelection('all')"> Show all</button>
            <button class="Trainingbtn" onclick="filterSelection('SS')"> Strategic Studies</button>
            <button class="Trainingbtn" onclick="filterSelection('IT')"> IT</button>
            <button class="Trainingbtn" onclick="filterSelection('Cyber')"> Cyber Security</button>
            <button class="Trainingbtn" onclick="filterSelection('Finance')"> Finance</button>
            <button class="Trainingbtn" onclick="filterSelection('Governance')"> Governance</button>
        </div>

        <div id="addbtnContainer"
            <div class=" addTrainingbtn">
				<button class="Trainingbtn" onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Add Class</button>
            </div>
        </div>

        <div id="id10" class="modal">
	        <form class="modal-content"  method="POST">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                    <h1>Add Class</h1>
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category" placeholder="Enter Category of class">
                    <label for="cost">Cost</label>
                    <input type="text" id="cost" name="cost" placeholder="Enter Cost of class">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter Title of class">
                    <label for="info">Information</label>
                    <textarea id="info" name="info" placeholder="Enter Information about class" style="height:170px"></textarea>
                    <input type="submit" value="Add Class">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
	        </form>
        </div>

        <div class="cleardiv"></div>

        <div class="TrainingContainer SS">

            <div class="TrainingSubTitle">
                <h3>Strategic Studies</h3>
            </div>

            <div class="TrainingContent">
                <div class="TrainingImg">
                    <h3>A longer title to what happens A longer title to what happens</h3>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
				
				<div class="TrainingImg">
                    <h3>Cost: $120</h3>
                </div>
                <input type="submit" value="Join" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>

            <div class="TrainingContent">
                <div class="TrainingImg">
                    <h1>Stuff</h1>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Join" class="JoinClass">
            </div>
        </div>

        <div class="TrainingContainer IT">

            <div class="TrainingSubTitle">
                <h3>IT</h3>
            </div>

            <div class="TrainingContent">
                <div class="TrainingImg">
                    <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Join" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>
        </div>

        <div class="TrainingContainer Cyber">

            <div class="TrainingSubTitle">
                <h3>Cyber Security</h3>
            </div>

            <div class="TrainingContent">
                <div class="TrainingImg">
                    <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Join" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>
        </div>

        <div class="TrainingContainer Finance">

            <div class="TrainingSubTitle">
                <h3>Finance</h3>
            </div>
            <div class="TrainingContent">
                <div class="TrainingImg">
                    <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Join" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>
        </div>

        <div class="TrainingContainer Governance">

            <div class="TrainingSubTitle">
                <h3>Governance</h3>
            </div>

            <div class="TrainingContent">
                <div class="TrainingImg">
                    <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Join" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>
        </div>



        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("TrainingContainer");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
                }
            }

            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }


            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("Trainingbtn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>

</main>

    <!-- This is footer file -->
    <?php include("footer.php"); ?>



