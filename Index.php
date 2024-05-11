<!DOCTYPE html>
<html>

<head>
    <title>first pag index</title>
    <style>
        table {
            width: 200px;

        }

        table,
        th,
        td {
            border: 3px solid black
        }
    </style>
</head>

<body style="background-color: cyan;">

    <div align="Center">
        <img src="assets/nizwa.png" width="200" height="200" /><br>
        <?php //فيديو كلمه السلطان هيثم عن التعليم 
        ?>
        <video width="750" height="400" controls autoplay>
            <source src="video/oman.mp4" type="video/mp4">
        </video>
        <h1>COMP-270 : WEB DEVELOPMENT</h1><?php //here is php pag 
                                            ?>
        <h1>HOTEL BOOKING</h1>
        <?php
        echo "<mark>DR.Mohammed Ambu saidi</mark><br>";
        echo "<br>STUDENT: Sulaiman Ahmed Al-Ghfri <br>ID: 17959392";
        echo "<br>STUDENT: Idris Said Altamimi <br>ID: 12753575";
        echo "<br>STUDENT: Anas Yaqoob Alabri <br>ID:14287945";
        echo "<br>STUDENT: Muhanad Salim Albusaidi <br>ID: 15676614<br><br>";
        ?>

        <br><br>

        <p>Doctor Mohammed you need following information next pag</p>
        <table>
            <tr>
                <td>Password : </td>
                <td>555</td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>Mohammed@gmail.com</td>
            </tr>
        </table><br><br>

        <button>
            <a href="signIn.php" class="button-link">
                press here to go to our website
            </a>
        </button>



    </div>

</body>

</html>