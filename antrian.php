<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian</title>
    <style>
        body{
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: whitesmoke;
        }
        .kotak{
            background-color: burlywood;
            width: 70vh;
            height: 40vh;
            border-radius: 30px;
            position: relative;
        }
        .kotak form{
            background-color: white;
            border-radius: 18px;
            height: 36vh;
            width: 65.5vh;
            position: absolute;
            top: 5%;
            left: 3%;
        }
        .kotak form ul{
            list-style: none;
        }
        .but{
            position: relative;
            top: 5vh;
            left: 17vh;
            width: 18vh;
            height: 5vh;
            padding: 1vh;
            border-radius: 2vh;
            font-weight: bold;
        }
        .kotak form h1{
            display: flex;
            justify-content: center;
            font-family: system-ui;        
        }
        #nama{
            border-radius: 1vh;
            margin-left: 2vh;
            padding: 0.5vh;
        }
        #lb{
            font-family: system-ui;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="kotak">
    <form action="antri_page.php" method="post">
        <h1>Registrasi</h1>
        <ul>
            <li>
                <label for="nama"id="lb">Masukkan Nama</label>
                <input type="text"name="nama"id="nama">
            </li>
            <li>
                <button type="submit"name="kirim"class="but">Kirim!</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>