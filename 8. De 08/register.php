<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style9.css">
</head>
<body>
<script>
    function ktra() {
        var x= document.getElementsByClassName("input9");
        for(let i=0;i<x.length;i++){
            if(x[i].value===""){
                alert("vui lòng điền đầy đủ các ô chứa dấu *");
                return false;
            }
        }
        var x= document.getElementById("password");
        var y= document.getElementById("cfpassword");
        if(x.value != y.value){
            alert("Mật khẩu nhập lại chưa trùng khớp");
            return  false;
        }
        // cách 2
        // var x=document.forms["form"]["password"].value;
        // var y=document.forms["form"]["cfpassword"].value;
        // if(x != y){
        //     alert("Mật khẩu nhập lại chưa trùng khớp");
        //     return  false;
        // }
    }
</script>

<form id="khung-ngoai9" name="form" action="xuly9.php" method="post">
    <div id="tieude9"><h2>Create an account</h2></div>
    <div class="khoi">
        <p>Your personnal detail</p>
        <div class="form-group9">
            <label class="label9">Your username * </label>
            <input class="input9" id="username" name="username" type="text">
        </div>
        <div class="form-group9">
            <label class="label9">Your name * </label>
            <input class="input9" id="name" name="name" type="text">
        </div>
        <div class="form-group9">
            <label class="label9">Email * </label>
            <input class="input9" id="email" name="email" type="text">
        </div>
    </div>
    <div class="khoi">
        <p>Your password</p>
        <div class="form-group9">
            <label class="label9">Password * </label>
            <input class="input9" id="password" name="password" type="password">
        </div>
        <div class="form-group9">
            <label class="label9">Confirm Password * </label>
            <input class="input9" id="cfpassword" name="cfpassword" type="password">
        </div>
    </div>
    <div id="footer9">
        <button type="submit" name="btn-create" id="btn-create" onclick=" ktra()">Create an account </button>
        <button type="reset" name="btn-cancel" id="btn-cancel">Cancel</button>
    </div>
</form>
</body>
</html>