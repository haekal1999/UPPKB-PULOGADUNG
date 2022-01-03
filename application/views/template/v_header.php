<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title><?= $title; ?></title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link href="<?= base_url('assets/fonts/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/fonts/lineo-icon/style.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/vendor/datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/vendor/datatables/Buttons/css/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="<?= base_url('assets/images/dishub3.png'); ?>">
    <!-- Loading main css file -->
    <link href="<?= base_url('assets/maincss/style1.css'); ?>" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></scrip>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
    <style>
        .responsive {
            width: 100%;
            min-height: 200px;
            padding-left: 50px;
            padding-left: 50px;
        }

        @font-face

        /*perintah untuk memanggil font eksternal*/
            {
            font-family: 'digital';
            /*memberikan nama bebas untuk font*/
            src: url('assets/fonts/digital2/digital-7.ttf');
            /*memanggil file font eksternalnya di folder nexa*/
        }

        h4 {
            font-family: 'digital';
        }

        .jam-digital {
            width: 70%;
            margin: 1% 30%;
        }

        #jam span {
            float: left;
            text-align: center;
            color: white;
            font-size: 70px;
            margin: 0 2.5%;
            padding: 20px;
            width: 15%;
            border-radius: 10px;
            box-sizing: border-box;
        }

        #jam span:nth-child(1) {
            background: #a70c0c;
        }

        #jam span:nth-child(2) {
            background: #f6ab29;
        }

        #jam span:nth-child(3) {
            background: #298f19;
        }

        #jam:after {
            content: "";
            display: block;
            clear: both;
        }

        #unit span {
            float: left;
            width: 20%;
            margin-top: 30px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 18px;
            text-shadow: 1px 1px 1px rgba(10, 10, 10, 0.7)
        }

        span.turn {
            animation: turn 0.7s ease;
        }

        @keyframes turn {
            0% {
                transform: rotateX(0deg)
            }

            100% {
                transform: rotateX(360deg)
            }
        }

        @media screen and (max-width: 980px) {
            #jam span {
                float: left;
                text-align: center;
                font-size: 50px;
                margin: 0 1.5%;
                padding: 20px;
                width: 20%;
            }

            h1 {
                margin: 20px 5%;
            }

            .jam-digital {
                width: 100%;
                margin: 10% 20%;
            }

            #unit span {
                width: 23%;
            }
        }
    </style>

</head>


<body id="Container">

    <div class="top-header">
        <img class="img-fluid" src="<?= base_url('assets/'); ?>images/header.png" alt="">

    </div> <!-- .top-header -->