<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
           margin: 0;
           padding: 0;
        }
        @font-face{
			src: url(Jua-Regular.ttf);
			font-family: 'jua';
		}
        body{
            background-color: #333;
        }
        .container-utama{
            width: 80%;
            margin: 100px auto;
            border: 1px solid black;
            text-align: center;
            padding: 30px;
        }
        .container-utama h3{
            font-size: 60px;
            color: #fff;
            font-family: "jua";
        }
        .container-utama p{
            font-size: 20px;
            color: #fff;
            margin: 30px 0 30px 0;
        }
        .container-utama a{
            text-decoration: none;
            text-decoration: none;
            margin: 30px 0 0 30px;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }
        .container-utama .colorEnkripsi{
            background-color: #29a089;
            padding: 10px;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.8s;
        }

        .container-utama h5{
            width: 17%;
            border-radius: 30px;
            padding: 5px;
            box-sizing: border-box;
            color: #333;
            background-color: #fff;
            display: inline-block;
            margin: 0 0 20px 0 ;
            opacity: 90%;
            font-weight: bold;
        }

        .pesan{
            border: 1px solid #fff;
        }
    </style>
</head>
<body>
    <div class="container-utama">
        <h5>Amankan pesanmu sekarang</h5>
        <h3>Enkripsi dan Dekripsi Pesan <br> Anda dengan Mudah dan Aman</h3>
        <p>Dengan algoritma dan logika enkripsi kami, anda dapat mengenkripsi pesan anda dengan aman  dan anda <br> bisa mengatur sendiri password nya sehingga tidak sembarang orang bisa mendekripsinya.</p>

        <a href="{{ url('kalimat') }}" class="colorEnkripsi">Enkripsi Pesan</a>
        <a href="{{ url('kalimat/seeText') }}">Deskripsi Pesan -></a>
    </div>

    <div class="pesan">

    </div>
</body>
</html>
