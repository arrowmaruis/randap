<!-- resources/views/emails/password-reset.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lien de réinitialisation de mot de passe</title>
</head>
<body>
    <p>Bonjour,</p>
    <p>Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe :</p>
    <p><a href="{{ $resetLink }}">{{ $resetLink }}</a></p>
    <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
</body>
</html>
