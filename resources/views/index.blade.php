<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/logo/new/black/logo-only-trans.png">
    <title>
        Smart Home
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
</head>

<style>
    h3 {
        margin-top: -50px;
        font-family: var(--bs-body-font-family);
    }

    img {
        margin-top: -20px;
        height: 200px;
        width: 200px;
        animation: wait 2s infinite;
        -webkit-animation: wait 2s infinite;
        -moz-animation: wait 2s infinite;
        transition: 0.5s;
    }

    @keyframes wait {
        0% {
            transform: rotateY(0deg);
        }

        100% {
            transform: rotateY(180deg);
        }
    }

    .card {
        background-image: url('../../../assets/img/cover/bg-7.jpg');
        background-position: right center;
        background-size: cover;
        box-shadow: none;
        height: 500px;
        background-color: lightgray;
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body class="bg-gray-200">

    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('../../../assets/img/cover/bg-5.jpg');">

            <div class="container my-auto">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card card-plain">
                            <div class="center">
                                <img src="../../../assets/img/logo/new/black/logo-only-trans.png" alt=""
                                    srcset="">
                                <center>
                                    <h3>Smart Home</h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script type="text/javascript">

    // if (returnLocation == 'null' && accDataVal != 'INVALID') {
    //     window.location.href = "error@423";
    // }

    setTimeout(function() {
        // if (accDataVal != 'INVALID') {
        //     if (returnLocation != 'null') {
        //         window.location.href = returnLocation;
        //     } else {
        //         window.location.href = "error@404";
        //     }
        // } else {
        //     window.location.href = "sign-in" + "<redirectURL ?>";
        // }
        window.location.href = "sign-in";
    }, 1000);
</script>

</html>
