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
            margin: 30px auto;
            /* border: 1px solid black; */
            text-align: center;
            padding: 30px;
            box-shadow: 5px 5px 5px rgb(70, 58, 58), -5px -5px 5px  rgb(81, 62, 62);
            overflow: hidden;
            border-radius: 20px;
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
        .container-utama textarea{
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
        .container-utama .button1{
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

        /* CSS untuk pesan */
        .pesan {
            width: 80%;
            margin: 5px auto;
            /* padding: 30px; */
        }

        /* CSS untuk judul "Copy Url" */
        .pesan h3 {
            font-size: 21px;
            color: #c5bfbf;
            font-family: "jua";
            margin: 0 0 15px 0;
        }
        .pesan textarea{
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

        /* CSS untuk tombol "Copy" */
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        /* CSS untuk tombol "Copy" saat hover */
        .btn:hover {
            background-color: #0056b3;
        }

        /* Tambahkan CSS untuk pesan pemberitahuan */
            .notification {
                display: none;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                padding: 10px;
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
            }

            /* CSS untuk tombol "Copy" saat hover */
            .btn:hover {
                background-color: #0056b3;
            }
    </style>
</head>
<body>

    <div class="container-utama">
        <h3> Enkripsi Pesan Anda</h3>
        <p>Enkripsi pesan anda dengan mengisi textarea dibawah ini, agar lebih aman anda dapat mengisi bagian password dekripsi <br> sehingga pesan  yang di dekripsi harus mengisi password yang benar baru dapat di dekripsi. <br> Memiliki pesan cipher yang ingin di dekripsi?<a style="color:#29a089" href="{{ url('kalimat/seeText') }}"> <i><b>Deskripsi</a></b></i></p>

        <form action="{{ url('kalimat/addText') }}">
            @csrf
            <textarea required autofocus name="kalimat" id="" cols="30" rows="10" placeholder=" Masukan kata"></textarea>
            <input required type="password" name="password" id="" placeholder="Password..">
            <button class="button1" type="submit">Enkripsi Pesan</button>
        </form>
    </div>

    <div class="pesan">
        <h3>Copy Url : </h3>
            <textarea name="" readonly id="copy-text" >@if(session('model')){{ session('model')->kalimat }}@endif
            </textarea>
        <button id="copy-button" class="btn">Copy</button>
    </div>

    <div id="notification" class="notification hidden">
        Teks telah disalin ke clipboard!, <b>silahkan kunjungi fitur deksripsi pesan</b>
    </div>
    <br><br><br>
    <br><br><br>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var copyButton = document.querySelector("#copy-button");
            var textElement = document.querySelector("#copy-text");
            var notification = document.querySelector("#notification");

            copyButton.addEventListener("click", function () {
                var textToCopy = textElement.textContent;
                var tempInput = document.createElement("textarea");
                document.body.appendChild(tempInput);
                tempInput.value = textToCopy;
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);

                // Tampilkan pesan pemberitahuan
                notification.style.display = "block";

                // Sembunyikan pesan pemberitahuan setelah beberapa detik (misalnya, 3 detik)
                setTimeout(function () {
                    notification.style.display = "none";
                }, 3000); // Pesan akan hilang setelah 3 detik
            });
        });
    </script>

</body>
</html>
