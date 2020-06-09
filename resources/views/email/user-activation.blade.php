<html>
<head>
    <title>Activation Email - ShopPet.com</title>
</head>
<body>
<p>
    Chào mừng {{ $user->name }} đã đăng ký thành viên tại ShopPet.com. Bạn hãy click vào đường link sau đây để hoàn tất việc đăng ký.
    </br>
    <a href="{{ route('verify', $user->activation_code) }}">Click here to active account</a>
</p>
</body>
</html>
