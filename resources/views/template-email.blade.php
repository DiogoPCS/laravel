<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmação de Voto</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: white; padding: 30px; border-radius: 10px;">
        <h2 style="color: #333;">Confirmação de Voto</h2>
        <p>Olá,</p>
        <p>Recebemos sua intenção de voto para a <strong>{{ $chapa }}</strong>.</p>
        <p>Para confirmar seu voto, clique no botão abaixo:</p>

        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ $link }}" style="background-color: #007bff; color: white; padding: 12px 20px; text-decoration: none; border-radius: 5px;">
                Confirmar meu Voto
            </a>
        </div>

        <p><strong>Importante:</strong> se o botão não funcionar, copie e cole o seguinte link no seu navegador:</p>
        <p style="word-break: break-all;">{{ $link }}</p>

        <p style="margin-top: 40px;">Obrigado por participar!</p>
        <p>Comissão Eleitoral</p>
    </div>
</body>
</html>
