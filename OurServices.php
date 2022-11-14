<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the Our Services page. It displays a summery of the various services TS offers.
//References: Some snippets of code were adapted from W3schools.com
//			https://en.wikipedia.org/wiki/Strategic_communication
//			https://en.wikipedia.org/wiki/Information_technology
//			https://en.wikipedia.org/wiki/Computer_security
//			
//
//*****************************************************************
-->

<?php
	header('Content-type:text/html; charset=utf-8');
	// Open Session
	session_start();

	if (isset($_SESSION['username'])) {
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
    <title>Our Services</title>
</head>

<body>
    <!-- This is thenav bar file -->
    <?php include('nav.php') ?>

<main>
        <div style="text-align:center">
            <h1>Our Services</h1>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Strategic Communications</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h3 style="float:right;">Cost: $220</h3>
            <div class="cleardiv"></div>
            <p>
				"Communication is strategic when it is completely consistent with the organisation's mission, vision, values and 
				when it is able to enhance the strategic positioning and competitiveness between their competitors. It is important 
				to understand the concept of communication strategy, it should be seen from the organization's perspective and no one else beside them."
				- Wikipedia <br>
				Strategic Communications is an often misunderstood and yet invaluable area of knowledge for any organization. This ten week
				course will teach you how to strategically guide your business to greater success while maintaining it's integrity. Learn all
				of the industry standard principles and techniques used by the biggest businesses in the world.
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Information Technology</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h3 style="float:right;">Cost: $135</h3>
            <div class="cleardiv"></div>
            <p>
				"Information technology (IT) is the use of computers to create, process, store, retrieve, and exchange all kinds of data 
				and information. IT forms part of information and communications technology (ICT). An information technology system (IT system) 
				is generally an information system, a communications system, or, more specifically speaking, a computer system — including 
				all hardware, software, and peripheral equipment — operated by a limited group of IT users."
				- Wikipedia <br>
				Information technology is all around as, and shapes the world we live in. This course seeks to aim you with general knowledge on
				the most common areas inside IT. In ten weeks learn how to code basic programs, how IT networks are set up,
				and the tools and principles that have been assisting the most talented programers throughout history.
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Cyber Security</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $321</h4>
            <div class="cleardiv"></div>
            <p>
				"(cyber security) is the protection of computer systems and networks from information disclosure, theft of, or damage to their 
				hardware, software, or electronic data, as well as from the disruption or misdirection of the services they provide." 
				- Wikipedia <br>
				Cyber security is one of the biggest and most important emerging feilds, with often the highest paygrades, and hardest workloads.
				This course will train you in the tools, methods and knowledge required to excell in a cyber security role. Weither you are 
				looking to gain a job in cyber security or are simply trying to learn how to protect your business from cybercrime, this is the
				course for you. 
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Business</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $256</h4>
            <div class="cleardiv"></div>
            <p>
				Business is the practice of making one's living or making money by producing or buying and selling products. Learn how to
				be more effective in the managing of businesses. Including the importance and preparation of documentation, how to set up
				effective supply trains, important economic factors to success and the different types of businesses and how to appropriately
				set them up. Weither you wish to start a new business or bolster an old one, this ten week course will leave you with all 
				the knowledge for success.
			</p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Education</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $150</h4>
            <div class="cleardiv"></div>
            <p>
				Learn proven methods to bolster the education of others, including how to effectively teach curriculums, run tests and exams,
				and how to inspire a drive for higher education in others. This ten week course will help strengthen your knowledge and
				resolve in the feild of general education. And who better to learn how to teach from then teachers who teach teaching.
            </p>
        </div>
    <div class="cleardiv"></div>

	<!-- payment modal -->
    <div id="id38" class="modal">
            <form class="modal-content"  method="POST">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id38').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                <div class="container">
                    <h1>Payment</h1>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name on card">
                    <label for="cardNum">Card Number</label>
                    <input type="text" id="cardNum" name="cardNum" placeholder="Enter Card Number">
                    <label for="expiration">Expiration</label>
                    <input type="text" id="expiration" name="expiration" placeholder="Enter expiration of card">
                    <label for="securityCode">Security Code</label>
                    <input type="text" id="securityCode" name="securityCode" placeholder="Enter Security Code of card">
                    <input type="submit" value="Confirm">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id38').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
</main>

	<!-- This is the footer file -->
	<?php include("footer.php"); ?>
