<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function comprobarClave(){
   	  clave1 = document.f1.pswd.value
   	  clave2 = document.f1.pswd2.value
   	  if (clave1 == clave2)
		    document.f1.submit()
        else
        alert("Las contraseñas son distintas")
      }
  </script>

</head>
<body>

<div class="container">

  <h2>Sign Up</h2>
  <p>Formulario de registro de usuarios</p>
  <form action="uregister.php"  class="was-validated" method="POST" name="f1" enctype="multipart/form-data">
    <div class="form-group">
      <label for="uname">Fisrtname:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Lastname:</label>
      <input type="text" class="form-control" id="ulastname" placeholder="Enter Lastname" name="ulastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="uname">Nit:</label>
      <input type="text" value="" maxlength="10"onkeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false; required" class="form-control" id="nit" placeholder="Enter Nit" name="nit" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

	<div class="form-group">
      <label for="uname">Gender:</label>
      <select name="gender" class="form-control">
	  <option value="M">Male</option>
	  <option value="F">Female</option>
	  <option value="O">Other</option>
	  </select>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="photo">photo</label>
      <input type="file" class="form-control" id="photo" name="photo" required>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Confirmar password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>



    <button type="button" class="btn btn-primary"  onClick="comprobarClave()"  >Register</button>
  </form>

</div>

</body>
</html>
