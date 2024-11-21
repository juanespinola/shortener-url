<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por utilizar el servicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 20px;
        }
        .qr-code {
            margin: 20px auto;
        }
        .footer {
            font-size: 14px;
            color: #777777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Contacto</div>
        <div class="qr-code">
            
            <div>
                De {{ $data['title'] }} - {{ $data['email']}}
            </div> 

            <div>
                Dice:
                {{$data['message']}}
            </div>

        </div>
        <div class="footer">
            <p>Si tiene alguna pregunta, no dude en ponerse en contacto con nosotros.</p>
            <p>&copy; 2024 JustAnotherLinkCut.com. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>