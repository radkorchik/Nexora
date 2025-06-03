<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новая заявка с сайта</title>
</head>
<body>
    <h2>Новая заявка с сайта NEXORA</h2>
    
    <p><strong>ФИО:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Телефон:</strong> {{ $data['phone'] }}</p>
    
    <p>Дата отправки: {{ now()->format('d.m.Y H:i') }}</p>
</body>
</html>
