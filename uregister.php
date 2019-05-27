<?php

    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
    $nit=$_POST['nit'];
    $photo=$_POST['photo'];
	  $gender = $_POST['gender'];
    $email=$_POST['uemail'];

    //nombre del archivo
        $file_name = $_FILES['photo']['name'];
        //tipo de archivo
        $file_type = $_FILES['photo']['type'];
        //tamaño del archivo default (kb)
        $file_size = $_FILES['photo']['size'];
        //donde guarda la carpeta
        $file_tmp = $_FILES['photo']['tmp_name'];
      //  echo $idNumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;
        move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$_FILES['photo']['name']);
        $photo_url_db= "images/".$_FILES['photo']['name'];

	if (($photo == "" && $gender == "M"))
		$photo = "images/boy.png";
	if	( ($photo == "") && ($gender == "F"))
		$photo = "images/girl.png";
	else if	( ($photo == "") && ($gender == ""))
		$photo = "images/img_default.png";

	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE  email = '$email' or nit = '$nit' ";
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname,nit,email, password,photo) VALUES('$firstname','$lastname','$nit','$email','$pswd','$photo_url_db')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			header("Refresh:0;url=login.php");
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('el correo electronico o la identificacion ya estan registrados')</script>";
		header("Refresh:0;url=login.php");

  }


?>
