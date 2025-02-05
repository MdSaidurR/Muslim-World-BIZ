<?php 
	session_start();

	// variable declaration
	$adminname = "";
	$admin_designation = "";
	$admin_email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	 $db= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");

	// REGISTER USER
	if (isset($_POST['reg_admin'])) {
		// receive all input values from the form
		$adminname = mysqli_real_escape_string($db, $_POST['adminname']);
		$admin_designation = mysqli_real_escape_string($db, $_POST['admin_designation']);
		$admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($adminname)) { array_push($errors, "Amin name is required"); }
		if (empty($admin_designation)) { array_push($errors, "Designation is required"); }
		if (empty($admin_email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO admin (adminname, admin_designation, admin_email, password) 
					  VALUES('$adminname', '$admin_designation', '$admin_email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['adminname'] = $adminname;
			$_SESSION['admin_designation'] = $admin_designation;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_admin'])) {
		$admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($admin_email)) {
			array_push($errors, "Email is required");
		}

		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM admin WHERE admin_email='$admin_email'  AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['admin_email'] = $admin_email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong adminname/password /Designation");
			}
		}
	}

?>