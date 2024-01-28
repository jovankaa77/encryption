<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
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
            /* border: 1px solid black; */
            padding: 30px;
            box-shadow: 5px 5px 5px rgb(70, 58, 58), -5px -5px 5px  rgb(81, 62, 62);
            overflow: hidden;
            border-radius: 10px;
        }
        .container-center{
            width: 100%;
            text-align: center;
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
        textarea{
            width: 100%;
            border-radius: 10px;
            background-color: #333;
            /* opacity: 50%; */
            color: #fff;
            font-weight: bold;
            padding: 15px;
            box-sizing: border-box;
            outline-color: aqua;
            /* outline-color: aquamarine; */
            font-size: 21px;
            margin: 0 0 30px 0;
        }

        .container-utama input{
            background-color: rgba(224, 223, 223, 0.1);
            padding: 15px;
            opacity: 90%;
            box-sizing: border-box;
            border-radius: 10px;
            border: none;
            color: #fff;
            margin: 0 15px 0 0 ;
            outline-color: aqua;

        }
        .container-utama input::-webkit-input-placeholder{
	        color: white;
            font-size: 16px;
        }
        .container-utama button{
            background-color: #29a089;
            padding: 15px;
            opacity: 90%;
            box-sizing: border-box;
            border-radius: 10px;
            border: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }
        .hasil h4{
            color: #fff;
        }
    </style>
</head>
<body>


    <div class="container-utama">

        <div class="container-center">
            <h3> Deskripsi Pesan Anda</h3>
            <p>Dekripsi pesan anda dibawah ini dengan mengisinya dengan ciphertext yang anda terima dari <br>  orang yang mengenkripsinya  masukkan password juga jika pengirim menggunakan <br> password untuk enkripsi. Memiliki pesan yang ingin dienkripsi? <a style="color:#29a089" href="{{ url('kalimat') }}">Enkripsi</a></p>

            <form method="post" action="{{ url('kalimat/postText') }}">
                @csrf
                <textarea autofocus name="kalimat" id="" cols="30" rows="10" placeholder="Deskripsi text" required></textarea>
                <input type="password" name="password" placeholder="Password" required>
                {{-- <button type="Submit">Submit</button> --}}

                <button type="submit">Deskripsi</button>


            </form>
        </div>
        <div class="hasil">
            <h4>Hasil : </h4>
            <textarea name="kalimat" id="" cols="30" rows="5" placeholder="Hasil Deskripsi">@if(Session::has('pesan')){{ Session::get('pesan') }}@endif</textarea>
        </div>
    </div>
    <script src="{{ asset('bs/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bs/js/bootstrap.bundle.js') }}"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
