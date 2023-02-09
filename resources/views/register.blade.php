<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/register.css"> -->
    <title>REGISTER</title>
</head>

<body>


    <form action="{{url('/login')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <p>Are you a reader[0] or publisher [1]?</p>
        <input type="radio" id="reader" name="type" value="reader">
        <label for="reader">reader</label><br>
        <input type="radio" id="publisher" name="type" value="publisher">
        <label for="publisher">publisher</label><br>
        <input type="submit" value="register">
    </form>
    <!-- <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Responsive Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="{{url('/login')}}" method="post">
                        @csrf
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>


                        <div class="input_field radio_option">
                            <input type="radio" id="reader" name="type" value="reader">
                            <label for="reader">reader</label><br>
                            <input type="radio" id="publisher" name="type" value="publisher">
                            <label for="publisher">publisher</label><br>
                        </div>


                        <input class="button" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="credit">Developed by <a href="https://github.com/MohamedKarm551/" target="_blank">Mohamed Karm</a></p>
-->

</body>

</html>