<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Email de contact</title>
    <style>
        .mt-50{
            margin-top:50px;
        }
        .p-20{
            padding: 20px;
        }
        .pb-20{
            padding-bottom: 20px;
        }
        .pl-60{
            padding-left: 60px;
        }
        .pt-30{
            padding-top:30px;
        }
        .pt-80{
            padding-top:80px;
        }
        .container{
            width: 40%;
            height: 100vh;
            margin-left: auto;     
            margin-right: auto; 
         }
        .bg-light{
            background-color: rgb(241, 241, 241);
        }
        .bg-gray{
            background-color:rgb(241 241 241);
        }
        .bg-purple{
            background-color:rgb(84, 37, 128);
        }
        .text-purple{
            color: rgb(84, 37, 128);
        }
        .text-light{
            color: rgb(241, 241, 241);
        }
        .text-center{
            text-align: center;
        }
        .b-radius{
           border-radius: 6px;
        }
        .title{
            font-weight: bolder;
            color: gray;
        }
        .shadow{
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }
    </style>
</head>
<body class="bg-gray">
    <div class="container">
        <h1 class="text-light text-center mt-50 bg-purple p-20 b-radius shadow">Inscription</h1>
        <div class="content bg-light pl-60 pt-30 shadow b-radius pb-20">     
            <h1>Bienvenue {{$mail['name']}}</h1>
            <h4>Adresse Email : {{$mail['email']}} </h4>
            <h4>Mot de passe : {{$mail['password']}} </h4>
        </div>
    </div>    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
