<html>
<head>
<h1> Registration Form </h1>
<hr class="solid">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="fname">First name:</label></td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td><label for="lname">Last name:</label></td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><label for="des">Designation:</label></td>
                <td><input type="radio" name="des" value="Junior Programmer">
                <label for="JP">Junior Programmer</label>
                <input type="radio" name="des" value="Senior Programmer">
                <label for="SP">Senior Programmer</label>
                <input type="radio" name="des" value="Project Lead">
                <label for="PL">Project Lead</label></td>
            </tr>
            <tr>
                <td><label for="lang">Preferred language:</label></td>
                <td><input type="checkbox" name="lang1" value="JAVA">
                <label for="lang1">JAVA</label>
                <input type="checkbox" name="lang2" value="PHP">
                <label for="lang2">PHP</label>
                <input type="checkbox" name="lang3" value="C++">
                <label for="lang3">C++</label></td>
            </tr>
            <tr>
                <td><label for="mail">E-mail:</label></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><label for="pass">Password:</label></td>
                <td><input type="password" name="pass"><br></td>
            </tr>
        </table>
        <td><label for="file">Please choose a file </label>
        <input type="file" name="myfile">
        <br>
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
include "../Control/result.php"
?>