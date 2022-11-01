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
<?php
include 'conn.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$userlist = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
    <title>Admin</title>
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

    <main>

        <div class="container">
            <div style="text-align:center">
                <h1>Admin</h1>
            </div>
            <div class="adminRow">
                <div class="adminColumn">

                    <input type="text" id="myInput" onkeyup="searchName()" placeholder="Search for names.." title="Type in a name">

                    <div class="addUser">
                        <button class="adminbtn"> Add Class</button>
                    </div>

                    <div class="cleardiv"></div>
                    <div class="normalScreen">
                        <table id='myTable'>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Update</td>
                                <td>Delete</td>
                            </tr>
                            <?php foreach ($userlist as $user) : ?>
                                <tr>
                                    <td><?php echo $user['u_id'] ?></td>
                                    <td><?php echo $user['u_name'] ?></td>
                                    <td><?php echo $user['u_email'] ?></td>
                                    <td><?php echo $user['u_phone'] ?></td>
                                    <td><a href='#' onclick=edit(1)>Edit</a></td>
                                    <td><a href='./del-user.php?u_id=<?php echo $user['u_id'] ?>'>Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="mobileScreen">
                        <table id='myTable'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php foreach ($userlist as $user) : ?>
                                <tr>
                                    <th><?php echo $user['u_id'] ?></th>
                                    <th><?php echo $user['u_name'] ?></th>
                                    <th><?php echo $user['u_email'] ?></th>
                                    <th><?php echo $user['u_phone'] ?></th>
                                    <th><a href='#' onclick=edit(1)>Edit</a></th>
                                    <th><a href='./del-user.php?u_id=<?php echo $user['u_id'] ?>'>Delete</a></th>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

                <div class="adminColumn">
                    <form action="update.php" method="POST" onsubmit="return check()">
                        <label for="id">ID</label>
                        <input type="text" id="update-id" name="userid" readonly>
                        <label for="name">Name</label>
                        <input type="text" id="update-name" name="name" placeholder="Your Name..">
                        <span class="text-reminder" id="name-reminder" style="display:none">* Username must be at least 5 characters</span><br>
                        <label for="password">Password</label>
                        <input type="password" id="psw" name="password" placeholder="Your Password..">
                        <label for="psw-repeat">Repeat Password</label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                        <span class="text-reminder" id="psw-reminder" style="display:none">* Passwords do not match</span><br>
                        <label for="email">Email</label>
                        <input type="text" id="update-email" name="email" placeholder="Your Email..">
                        <span class="text-reminder" id="email-reminder" style="display:none">* E-mail format is incorrect</span><br>
                        <label for="phone">Phone</label>
                        <input type="text" id="update-phone" name="phone" placeholder="Your Phone number..">
                        <span class="text-reminder" id="phone-reminder" style="display:none">* Phone number must be 11 digits long</span><br>
                        <label for="level">Level</label>
                        <select name='u_level'>
                            <?php

                            $sql = "select * from permissions";
                            $result_permission = mysqli_query($conn, $sql) or die("Error require Permission Level! - " . mysqli_error($conn));
                            while ($level = mysqli_fetch_array($result_permission)) {
                                echo "<option value ='$level[p_level]'>$level[p_name]</option>";
                            }
                            ?>
                        </select>
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>



        <script>
            function searchName() {
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

            function edit(count) {
                var tab = document.getElementById("myTable");
                document.getElementById('update-id').setAttribute("value", tab.rows[count].cells[0].innerText);
                document.getElementById('update-name').setAttribute("value", tab.rows[count].cells[1].innerText);
                document.getElementById('update-email').setAttribute("value", tab.rows[count].cells[2].innerText);
                document.getElementById('update-phone').setAttribute("value", tab.rows[count].cells[3].innerText);
            }

            function check() {
                var uname = document.getElementById('update-name');
                var pwd = document.getElementById("psw");
                var pwdRepeat = document.getElementById("psw-repeat");
                var email = document.getElementById("update-email");
                var phone = document.getElementById("update-phone");
                var result = true;
                if (uname.value.length < 2) {
                    alert(1);
                    document.getElementById("name-reminder").style.display = "block";
                    document.getElementById("name-reminder").style.color = "red";
                    result = false;
                }
                if (pwd.value != pwdRepeat.value) {
                    alert(3);
                    document.getElementById("psw-reminder").style.display = "block";
                    document.getElementById("psw-reminder").style.color = "red";
                    result = false;
                }
                var reg = /^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
                if (!reg.test(email.value)) {
                    alert(4);
                    document.getElementById("email-reminder").style.display = "block";
                    document.getElementById("email-reminder").style.color = "red";
                    result = false;
                }
                if (phone.value.length != 10) {
                    alert(5);
                    document.getElementById("phone-reminder").style.display = "block";
                    document.getElementById("phone-reminder").style.color = "red";
                    result = false;
                }
                return result;
            }
        </script>

    </main>

    <?php include("footer.php"); ?>