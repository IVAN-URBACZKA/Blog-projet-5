<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <h1>Formulaire d'inscription</h1>

    <form id="formulaire" action="index.php?action=adduser" method="post" >


    <label for="">Pseudo</label>
    <input type="text" name="pseudo">

    <label for="">Surname</label>
    <input type="text" name="surname">

    <label for="">FirstName</label>
    <input type="text" name="firstname">

    <label for="">Password</label>
    <input type="password" name="pass">

    <label>Retype password</label>
    <input type="password" name="pass_verification">

    <label>E-mail</label>
    <input type="email" name="email">

    <input type="submit" value="envoyer">

    
    
    </form>

</body>
</html>

