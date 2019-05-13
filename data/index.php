<?php echo 'salut';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="popup.js"></script>
    <title>Document</title>
</head>
<body>
    

    <form>
<input type="button" value="Valider" onClick="Message()">
</form>
<script type="text/javascript">
   function Message() {
       var msg="Votre inscription est validée!";
       //console.log(msg)
       alert(msg);
   }
</script>
</body>
</html>

