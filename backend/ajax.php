<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Ajax Script</title>
</head>
<body>
    

<script>
    
    fetch('ajax-get-drivers.php').then(response => response.json()).then(data => console.log(data))
</script> 
</body>
</html>