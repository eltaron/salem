<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salem </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        @media only screen and (max-width: 767px){
            .box {
                width: 357px;
            }
        }
    </style>
</head>
<body>
    <div class="box" dir="rtl" style="text-align: right">
        <h2>تسجيل الدخول</h2>
        <div style="text-align: center"><img src="{{asset('admin')}}/images/logo.png" alt="Logo" width="120"></div>
        <form action="{{aurl('login')}}" method="POST">
            @csrf
            <div class="inputBox">
                <input type="text" required name="name" autocomplete="off" >
                <label for="">اسم المستخدم</label>
            </div>
            <div class="inputBox">
                <input type="password" required name="password" autocomplete="new-password">
                <label for="">كلمة المرور</label>
            </div>
            <input type="submit" value="تسجيل الدخول">
        </form>
    </div>
    <!-- RESPONSİVE TASARIM YAPILMAMIŞTIR... -->
</body>
</html>
