<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:wght@400&display=swap" />

</head>

<body>

    <div class="home-page">
        <img class="home-page-child" alt=""
            src="C:\Users\lisa\Downloads\SiKomLek\resources\assets\images\Group_10.png">

        <img class="image-1-icon" alt=""
            src="C:\Users\lisa\Downloads\SiKomLek\resources\assets\images\image_1.png">

        <div class="title">
            <span class="title-txt">
                <p class="sistem-informasi">Sistem Informasi</p>
                <p class="sistem-informasi">Komunikasi dan Elektronika</p>
            </span>
        </div>
        <img class="home-page-item" alt=""
            src="C:\Users\lisa\Downloads\SiKomLek\resources\assets\images\Group 10.svg">

    </div>
    <button id="login-button" enabled>Login</button>
    <div class="login-form">
        <div class="input-field">
            <input type="email" id="email" placeholder="Email" oninput="checkInputs()" />
        </div>
        <div class="input-field1">
            <input type="password" id="password" placeholder="Password" oninput="checkInputs()" />
        </div>

    </div>
    </div>

</body>

</html>
