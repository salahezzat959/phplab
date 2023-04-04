<!--  Task 1 -->
<?php
$name =$email =$group =$details=$gender =$course= "";
$nameErro =$emailErro = $genderErro =$agreeErro ="";
if( isset($_GET['submitForm'] )){
    if( !empty($_GET['name'])){
        $name =  $_GET['name'];
    }
    else {
        $nameErro ="Name is Required";
    }
    if(isset($_GET['email'])&& !empty($_GET['email'])){
        $email =  $_GET['email'];
    }
    else {
        $emailErro = "Email is Required";
    }
    if(isset($_GET['group'])&& !empty($_GET['group'])){
        $group =  $_GET['group'];
    }
    if(isset($_GET['details'])&& !empty($_GET['details'])){
        $details =  $_GET['details'];
    }
    else{}
    if(isset($_GET['gender'])&& !empty($_GET['gender'])){
        $gender =  $_GET['gender'];
    }
    else {
        $genderErro = "Gender is Required";
    }
    if(isset($_GET['course'])&& !empty($_GET['course'])){
        $course = $_GET['course'];
    }
    if(empty($_GET['agree'])){
        $agreeErro ="You must agree to terms" ;
    }


}
?>

<html>
    <body>
    <h2>Application name : AASt_BIS class registration</h2>
    <p style="color:red">* Required field</p>
    <form action="lab3.php" method="Get">
        <label for="">Name</label>
        <input type="text"  name="name"><span style="display: inline;color:red"> * <?php echo $nameErro ?></span>
        <br><br>
        <label for="">E-mail</label>
        <input type="email"  name="email"><span style="display: inline;color:red"> *  <?php echo $emailErro ?></span>
        <br><br>
        <label for="">Group#</label>
        <input type="text"  name="group">
        <br><br>
        <label for="">Class details:</label>
        <textarea name="details"  cols="30" rows="8"></textarea>
        <br><br>
        Gender: <input type="radio" id="fe" name="gender" value="Female">
        <label for="fe">Female</label>
        <input type="radio" id="ma" name="gender" value="Male">
        <label for="ma">Male</label><span style="display: inline;color:red"> *  <?php echo $genderErro ?></span>
        <br>
        <label for="co">Select Courses</label>
        <select name="course[]" id="co" multiple="multiple">
            <option value="PHP"> PHP</option>
            <option value="Java script"> Java Script</option>
            <option value="MYSQL"> My Sql</option>
            <option value="HTML"> HTML</option>
        </select>
        <br> 
        <br>
        <label for="ag">Agree</label>
        <input id="ag" name="agree" type="checkbox"><span style="display: inline;color:red"> *  <?php echo $agreeErro ?></span>
        <br>
        <input type="submit" name="submitForm">
        </form>
    </body>
</html>
<?php
if( isset($_GET['submitForm'] )){
echo "<h2>Your Gaven value as :</h2>"."<br>";
echo "Name :". $name ."<br>";
echo "Email :". $email ."<br>";
echo "Group :". $group ."<br>";
echo "Class details:". $details ."<br>";
echo "Gender :". $gender ."<br>";
echo " Your courses are : ";
foreach($course as $value) {
    echo   $value  ;
}
}
?>

