<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8"style="background: gray;">
				<form method="post" action="">
					<h1 align="center" style="color: ;"><b>REGISTRATION FORM</b></h1>

					<div class="form-group">
						<label class="form label">REGNO</label>
						<input type="text" class="form control" name="regno" placeholder="enter your regno">
					</div><br>

					<div class="form-group">
						<label class="form label">NAME</label>
						<input type="text" class="form control" name="name" placeholder="enter your name">
					</div><br>

					<div class="form-group">
						<label class="form label">GENDER</label>
						<input type="radio" name="form control radio" name="gen"value="male">MALE
						<input type="radio" name="form control radio" name="gen" value="female">FEMALE
						
					</div><br>

					<div class="form-group">
						<label>DEPARTMENT APPLIED FOR</label><br>
						<input type="checkbox" class="form control check box" name="dept" value="bca">BCA
						<input type="checkbox" class="form control check box" name="dept" value="cs">CS
						
					</div><br>


					<div class="form-group">
						<label>CITY</label>
						<select class="text" name="city">
							<option></option>
							<option>trichy</option>
							<option>pdkt</option>
							
						</select>
						
					</div><br>

					<div class="form-group">
						<label class="form label">EMAIL</label>
						<input type="text" class="form control" name="email" required>
						
					</div><br>

					<div class="form-group">
						<label class="form label">PHONENO</label>
						<input type="text" class="form control" name="phoneno" placeholder="+91">
						
					</div><br>

					<div class="form-group">
						<label class="form label">ADDRESS</label>
						<textarea class="form control" name="addr" required>
						</textarea>
						
					</div><br>
					
					<div class="form-group">
						<input type="submit" class="btn-btn-success" name="submit" value="submit">
					     <input type="reset" class="btn-btn-dager" name ="reset" value="reset">
						
					</div>
				</form>
			</div>
			<div class="col-2">
				
			</div>
		</div>
	</div>
</body>
</html>






















