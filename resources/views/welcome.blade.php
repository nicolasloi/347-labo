<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'accueil</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 50px;
            }

            h1 {
                color: #333;
            }

            a {
                text-decoration: none;
                color: #007bff;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <h1>Bienvenue sur la page d'accueil</h1>
    <p>Cliquez sur le lien ci-dessous pour accéder à la page d'administration :</p>
    <a href="{{ url('/admin') }}">Page d'administration</a>
    </body>
</html>
