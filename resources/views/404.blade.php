<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صفحه خطای 404 :: دریافت شده از وب روبیک</title>
    
    <link rel="stylesheet" href="{{ mix('css/bootstrap-rtl.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
</head>
<body>
    <!-- Error Page -->
    <div class="error">
        <div class="container-fluid">
            <div class="col-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                </div>
                <br>
                <h2 class="h1">صفحه مورد نظر یافت نشد!</h2>
                <a href="{{ url('/') }}"><button class="btn btn-primary">بازگشت به صفحه نخست</button></a>
            </div>
        </div>
    </div>
    <!-- Error Page -->
    <script src="{{ asset('js/app.js') }}"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
