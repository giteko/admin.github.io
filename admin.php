<?php
session_start();
$conn = mysqli_connect("localhost","root","ekamma21","data_antri");    
$queryy = "SELECT * FROM user";
$result = mysqli_query($conn,$queryy);
function refres(){
    header("Location: admin.php");
}
if(isset($_POST["reset"])){
    $qw = "TRUNCATE user";
    mysqli_query($conn,$qw);
    refres();
}
if(isset($_POST["hapus"])){
    $namam = $_POST["namam"];
    $qww = "DELETE FROM `user` WHERE `id`='$namam'";
    mysqli_query($conn,$qww);
    refres();
}
if(isset($_POST["kirim"])){
    $data = $_POST["data"];
    $datak = ucwords($data);
    $qwww = "INSERT INTO `user`(`id`, `nama`) VALUES ('','$datak')";
    mysqli_query($conn,$qwww);
    refres();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function pindah1() {
            const heror = document.querySelector('.hero_r');
            const heroh = document.querySelector('.hero_h');
            document.getElementById("butt1").disabled = true;
            document.getElementById("butt2").disabled = false;
            heroh.classList.toggle('active');
            heror.classList.remove('active');
        }
        function pindah2() {
            const heroh = document.querySelector('.hero_h');    
            const heror = document.querySelector('.hero_r');
            document.getElementById("butt2").disabled = true;
            document.getElementById("butt1").disabled = false;
            heror.classList.toggle('active');
            heroh.classList.remove('active');

        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-family: system-ui;
            background-color: floralwhite;
        }
        .left_bar{
            margin-top: 5vh;
            margin-right: 3vh;
            width: 50vh;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .right_bar{
            margin-top: 5vh;
            width: 50vh;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .bx1{
            width: 49vh;
            height: 10vh;
            background-color: peru;
            display: flex;
            justify-content:center ;
            align-items: center;
            font-family: system-ui;
            border-radius: 2vh;
            color: white;
            border: 0.6vh solid tan;
            margin-bottom: 1vh;        
        }
        .bx3{
            width: 50vh;
            height: 9.1vh;
            display: flex;
            flex-direction: row;
        }
        .left{
            width: 15vh;
            height: 50vh;
        }
        .right{
            width: 35vh;
            height: 50vh;
        }
        .gr{
            width: 0.7vh;
            height:100%;
            position: absolute;
            background-color: white;
            left: 14.45vh;
            bottom: 0.3vh;
        }

        .no{
            width: 14.5vh;
            height: 8vh;
            background-color: peru;
            text-align: center;
            position: relative;
            bottom: 2vh;;
            color: white;
            border-radius: 1.5vh 0 0 0;
            margin-top: 2.5vh;
        }
        .no h4 {
            padding: 1vh;
            font-size: 2vh;
        }
        .nama h4 {
            padding: 1vh;
            font-size: 2.6vh;
            padding-bottom: 1.4vh; 
                  
        }
        .nama{
            width: 35vh;
            height: 8vh;
            background-color: peru;
            text-align: center;
            position: relative;
            bottom: 1.9vh;
            color: white;
            border-radius: 0 1.5vh 0 0;
            margin-top: 2.6vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .center{
            width: 50vh;
            min-height: 5vh;
            background-color:#d4a561;
            border-radius: 0 0 2vh 2vh;
            color: white;
            margin-bottom: 5vh;
            position: relative;
        }
        table,tr,td{
            border-bottom: 0.5vh solid white;
            border-collapse: collapse;
            width: 50vh;
            font-family: system-ui;
            font-weight: bold;
            padding: 0.5vh;
        }
        #td1{
            max-width: 19.7vh;
            text-align: center;
        }
        #td2{
            padding-left: 2vh;
        }
        .but{
            width: 50vh;
            height: 10vh;
            display: flex;
            flex-direction: row;
        }
        .bt1{
            width: 25vh;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .bt2{
            width: 25vh;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #butt1{
            width: 24vh;
            height: 8vh;
            border-radius: 2vh 2vh 2vh 0;
            border: 0;
            position: absolute;
            left: 0;
            top: 1vh;
            background-color: #d4a561;
            font-weight: bold;
            font-size: larger;
            color: white;
        }
        #butt2{
            width: 25vh;
            height: 8vh;
            border-radius: 2vh 2vh 2vh 0;
            border: 0;
            position: absolute;
            right: 0;
            top: 1vh;
            background-color: #d4a561;
            font-weight: bold;
            font-size: larger;
            color: white;
        }
        .hero_h{
            width: 50vh;
            height: 25%;
            background-color: #d4a561;
            position:absolute;
            top: 10vh;
            left: 0;
            border-radius: 0 0 2vh 2vh ;
            color: white;
            display: block;
        }
        .hero_h.active{
            display: block;
        }
        .hero_r{
            width: 50vh;
            height: 25%;
            background-color: #d4a561;
            position:absolute;
            top: 10vh;
            left: 0;
            color: white;
            border-radius: 0 0 2vh 2vh;
            display: none;
        }
        .hero_r.active{
            display: block;
        }
        #nama{
            border-radius: 1vh;
            padding: 0.5vh;
            border: 0;
            width: 21vh;
            position: absolute;
            top: 30%;
            left: 48%;
        }
        #lb{
            font-family: system-ui;
            font-weight: bold;
            position: absolute;
            top: 30%;
            left: 11%;
        }
        ul{
            list-style: none;
        }
        .butak{
            width: 18vh;
            height: 5vh;
            background-color: peru;
            padding: 1vh;
            border-radius: 1.6vh;
            font-weight: bold;
            border: 0.4vh solid white;
            color: white;
            position: absolute;
            top: 60%;
            left: 10%;
        }
        .buttak{
            width: 18vh;
            height: 5vh;
            background-color: peru;
            padding: 1vh;
            border-radius: 1.6vh;
            font-weight: bold;
            border: 0.4vh solid white;
            color: white;
            position: absolute;
            top: 60%;
            left: 33%;
        }
        .reset{
            width: 18vh;
            height: 5vh;
            position: absolute;
            width: 18vh;
            height: 5vh;
            padding: 1vh;
            border-radius: 1.6vh;
            font-weight: bold;
            border: 0.4vh solid white;
            color: white;
            background-color: peru;
            position: absolute;
            top: 60%;
            left: 54%;
        }
        </style> 
</head>
<body>
    <div class="left_bar">
        <div class="bx1">
            <h1>Daftar Antrian</h1>
        </div>
        <div class="bx3">
            <div class="left">
                <div class="no">
                    <h4>Nomor Antrian</h4>
                </div>
            </div>
            <div class="right">
                <div class="nama">
                    <h4>Atas Nama </h4>
                </div>
            </div>
        </div>
        <div class="center">
            <table>
                <?php while($row = mysqli_fetch_assoc($result) ): ?>
                <tr>
                    <td id="td1">
                        <?php
                            $per = $row["id"];
                            if ($per < 10) {
                                echo"A0",$per;
                            }
                            if ($per >= 10) {
                                echo"A",$per;
                            }
                        ?> 
                    </td>
                    <td id="td2">
                        <?php
                            echo$row["nama"];
                        ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
            <div class="gr"></div>
        </div>
    </div>
    <div class="right_bar">
        <div class="but">
            <div class="bt1">
                <script>set();</script>
                <a href="#"id="bu1"><button type="button"id="butt1"onclick="pindah1()">Hapus</button></a>
            </div>
            <form action=""method="post"class="bt2">
                <a href="#"id="bu2"><button type="button"id="butt2"onclick="pindah2()">Manual Input</button></a>
            </form>
            
        </div>
        <div class="hero_h">
            <form action=""method="post"class="hero_h1">
                <ul>
                    <li>
                        <label for="nama"id="lb">Nomor Antri</label>
                        <input type="text"name="namam"id="nama".require>
                    </li>
                    <li>
                        <button type="submit"name="hapus"class="butak">Hapus</button>
                        <button type="submit"name="reset"class="reset">Reset</button>
                        </form>
                    </li>
                </ul>
            </form>
        </div>
        <div class="hero_r">
            <form action=""method="post"class="namam">
                <ul>
                    <li>
                        <label for="nama"id="lb">Atas Nama</label>
                        <input type="text"name="data"id="nama">
                    </li>
                    
                    <li>
                    <button type="submit"name="kirim"class="buttak">Kirim!</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>