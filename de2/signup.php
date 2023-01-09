<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="config.php" id="form" method="post">
<div class="khung-ngoai">
	<div class="header_background">
		<img src="image/header_background.png" alt="">
	</div>	
	<div class="form-bot">
		<div class="form-group">
			<label for="" class=""> Your Username</label>
			<div class="information">
				<img src="image/user.png" alt="">
				<input type="text" class="input" id="usename">
			</div>
		</div>
		<div class="form-group">
			<label for="" class=""> Your email</label>
			<div class="information">
				<img src="image/email.png" alt="">
				<input type="text" class="input" id="email">
			</div>
		</div>
		<div class="form-group">
			<label for="" class=""> Your password</label>
			<div class="information">
				<img src="image/key.png" alt="">
				<input type="password" name="password" id="password" class="input">
			</div>
		</div>
		<div class="form-group">
			<label for="" class=""> Please confirm your password</label>
			<div class="information">
				<img src="image/key.png" alt="">
				<input type="password" name="passwordagain" id="password-again" class="input">
			</div>
		</div>
		<button onclick="createAccount()"><img src="image/button.png"></button>
	</div>
	<div class="footer">
		<div class="footer-image">
			<img src="image/footer_background.png" alt="">
			<div class="infor">
			<p>Already a member? <button>Go and log in</button></p>
		</div>
		</div>
	</div>
</div>
</form>
<script>
	function createAccount() {
		const pass = document.getElementById("password");
		const passa = document.getElementById("password-again");
		const x = document.getElementsByClassName("input");
		if (pass.value != passa.value) 
		{
			alert('mat khau ko trung nhau')
			return false;
		}
	for (let i = 0;i < x.length; i++)  
	{
	  if(x[i].value === "")
                {
                    alert("Nhập đầy đủ thông tin");
                    return  false;
                }
            }

        }
    </script>
</body>
</html>