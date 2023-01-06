<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form id="form-contact" method="post" action="xuly.php">
    <div id="header-tieude">
        <h2>Contact Us</h2>
    </div>
    <div class="main1-content">
        <div class="form-group">
            <label class="label">Your Name</label>
            <input class="input" name="name" type="text">
        </div>
        <hr class="hr">
        <div class="form-group">
            <label class="label">Your surname</label>
            <input class="input" name="surname" type="text">
        </div>
        <hr class="hr">
        <div class="form-group">
            <label class="label">Your email</label>
            <input class="input" name="email" type="text">
        </div>
        <hr class="hr">
        <div class="form-group">
            <label class="label">Messenger</label>
            <textarea  class="input" name="message" rows="5"></textarea>
        </div>
    </div>
    <div class="footer">
        <button type="submit"  id="btn-send" class="btn-send" name="btn-send" onclick="batkey()">Send</button>
    </div>
</form>

<script>
    function batkey() {
        var x = document.getElementsByClassName("input");
        for( let i=0; i< x.length;i++){
            if(x[i].value===""){
                alert("Bạn phải nhập đầy đủ thông tin");
                return false;
            }
        }
    }
</script>
</body>
</html>