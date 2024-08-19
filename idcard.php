<html>
<head>
<title>
form expriment
</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
<table border ="1"cellpadding="6px">
<thead>
<tr>
<th colspan="2">Registration Form</th>
</tr>
</thead>
<tbody>
    <tr>
        <td><label for="clgname">College name</label></td>
        <td><input type="text" id="clgname" name="clgname" ></td>
        </tr>    
    <tr>
<td><label for="student name">Student name</label></td>
<td><input type="text" id="studentname" name="studentname" ></td>
</tr>
<tr>
<td><label for="father name">Father name</label></td>
<td><input type="text" id="father name" name="fathername" ></td>
</tr>
<tr>
<td><label for="DOB">Date of Birth</label></td>
<td><input type="date" id="DOB" name="DOB" ></td>
</tr>
<tr>
<td><label for="email">Email</label></td>
<td><input type="email" id="email" name="email" ></td>
</tr>
<tr>
<td><label for="mobile">Mobile no.</label></td>
<td><input type="tel" id="mobile" name="mobile"></td>
</tr>
<tr>
<td><label for="file">Upload File</label></td>
<td><input type="file" id="file" name="file"></td>
</tr>

<tr>
<td><label for="adderss">Adderss<label></td>
<td><textarea id="address" name="address" row="70" col="40"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="upload file" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>




<?php 
if(isset($_POST["submit"])){
$myfile = fopen("idinfermation.html", "w") or die("Unable to open file!");
$sname=$_POST["studentname"];
$clgname=$_POST["clgname"];
$fathername=$_POST["fathername"];
$DOB=$_POST["DOB"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$format=strtolower(pathinfo($name,PATHINFO_EXTENSION));


echo $name."<br>";
echo $tmp_name."<br>";
echo $format."<br>";


$html="<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
           .idcard{
            border: 1px solid;
            border-radius: 5px;
            width: 250px;
            height: 400px;
           }
           .clgname{
            text-align: center;
            font-family:sans-serif;
            font-weight: 800;
            font-size: 17px;
            margin-top: 10px;
           }
           .up{
            width: 125px;
            height: 125px;
            border-radius: 50%;
            object-fit: cover;
           }
           .align{
            text-align: center;
            margin: 35px 0px 25px 0px;
           }
           label{
            font-family: sans-serif;
            line-height: 4px;
            font-size: 14px;
           }
           .value{
            padding-left: 5px;
           }
           .center{
            display: flex;
            align-items: center;
            }
            .labeel{
                padding: 0px 14px;
                }
    </style>
</head>
<body>
    <div class='idcard'>
        <div><h3 class='clgname'>$clgname</h3></div>
        <div class='align'>
        <img src='$name' class='up'> 
        </div>
        <div class='labeel'>
           <div class='center'><strong> <label>Name:</label></strong><span class='value'>$sname</span></div>
          <div class='center' ><strong><label>Father Name:</label></strong><span class='value'>$fathername</span></div>
           <div class='center'> <strong><label>DOB:</label></strong><span class='value'>$DOB</span></div>
           <div class='center'> <strong> <label>Email:</label></strong><span class='value'>$email</span></div>
            <div class='center'><strong><label>Mobile number:</label></strong><span class='value'>$mobile</span></div>
            <div class='center'> <strong><label>Address:</label></strong><span class='value'>$address</span></div>
        </div>

    </div>
</body>
</html>";
/*fwrite($myfile,$name);
fwrite($myfile,$clgname);
fwrite($myfile,$fathername);
fwrite($myfile,$DOB);
fwrite($myfile,$email);
fwrite($myfile,$mobile);
fwrite($myfile,$address);*/

fwrite($myfile,$html);
fclose($myfile);
}

?>

