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

<main>

<div class="container">
            <div style="text-align:center">
                <h1>Admin</h1>
            </div>
            <div class="row">
                <div class="column">

                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                    <div class="addUser">
                        <button class="adminbtn"> Add Class</button>
                    </div>

                    <div class="cleardiv"></div>

                    <table id="myTable">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Delete</th>

                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Smith</td>
                            <td>SomeEmail@Gmail.com</td>
                            <td><button type="submit">View</button></td>
                            <td><button type="submit">Delete</button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Jackson</td>
                            <td>Other@Gmail.com</td>
                            <td><button type="submit">View</button></td>
                            <td><button type="submit">Delete</button></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Johnson</td>
                            <td>ThisEmail@Gmail.com</td>
                            <td><button type="submit">View</button></td>
                            <td><button type="submit">Delete</button></td>
                        </tr>
                    </table>


                    </div>
                <div class="column">
                    <form action="/action_page.php">
                        <label for="id">ID</label>
                        <input type="text" id="id" name="ID" placeholder="Your ID..">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name..">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" placeholder="Your Password..">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your Email..">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Your Phone number..">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Your Address number..">
                        <label for="level">Level</label>
                        <input type="text" id="level" name="level" placeholder="Your Level..">
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>



        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

</main>

    <?php include("footer.php"); ?>