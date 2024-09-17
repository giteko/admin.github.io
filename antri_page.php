<?php
$conn = mysqli_connect("localhost","root","ekamma21","data_antri");    
if(isset($_POST["kirim"]) ) {
    $naa = $_POST["nama"];
    $nama = ucwords($naa);

    $qw1 = "SELECT * FROM user WHERE nama='$nama'";
    $qww1 = mysqli_query($conn,$qw1);
    if(mysqli_num_rows($qww1) === 1) {
        $rw1 = mysqli_fetch_assoc($qww1);
        $nm1 = $rw1["nama"];
        $kd1 = true;
    }
    if(mysqli_num_rows($qww1) !== 1) {
        $kd2 = true;
    }
    
    if(isset($kd2)){
        $qw2 = "INSERT INTO `user`(`id`, `nama`) VALUES ('','$nama')";
        $qww2 = mysqli_query($conn,$qw2);
    }

    // $qw3 = "SELECT * FROM user WHERE nama='$nama'";
    // $qww3 = mysqli_query($conn,$qw3);
    // $rw3 = mysqli_fetch_assoc($qww3);
    // // $nm3 = $rw3["nama"];
    
    // if($nama = $nm1){
    //     $kd1 = true;
    // }
    // if($nama != $nm1){
    //     $kd2 = true;
    // }
}
$queryy = "SELECT * FROM user";
$result = mysqli_query($conn,$queryy);


$w1 = "#3DB2FF";
$w2 = "#FF8343";
$w3 = "#F05A7E";
$w4 = "#88D66C";
$w5 = "#6C48C5";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: system-ui;
            background-color: floralwhite;
        }
        .bx1{
            width: 50vh;
            height: 10vh;
            background-color: peru;
            display: flex;
            justify-content:center ;
            align-items: center;
            font-family: system-ui;
            margin-bottom: 1.5vh;
            border-radius: 2vh;
            color: white;
            border: 0.6vh solid tan;
        }
        .bx2{
            width: 50vh;
            height: 34vh;
            background-color: white;
            display: flex;
            flex-direction: column;
            border-radius: 2vh;
        }
        .bx21{
            width: 50vh;
            height: 4.3vh;
            
            border-radius: 1vh 1vh 0 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .bx22{
            width: 50vh;
            height: 25vh;
            
            margin: 0.7vh 0 0.7vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size:xx-large;
        }
        .bx23{
            width: 50vh;
            height: 4vh;
            
            border-radius: 0 0 1vh 1vh ;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .bx3{
            width: 50vh;
            height: 50vh;
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
            width: 0.5vh;
            height: 100%;
            position: absolute;
            background-color: white;
            top: 0vh;
            right: 35vh;
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
            margin-top: 4.5vh;
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
            bottom: 2vh;
            color: white;
            border-radius: 0 1.5vh 0 0;
            margin-top: 4.5vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .center{
            width: 50vh;
            min-height: 5vh;
            background-color:#d4a561;
            position: absolute;
            top: 59.8vh;
            border-radius: 0 0 2vh 2vh;
            color: white;
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
            padding-bottom: 2px;
        }
        #td2{
            padding-left: 2vh;
            padding-bottom: 2px;
        }
    </style>
</head>
<body onload="return ran_col()">
    <div class="bx1">
        <h1>Daftar Antrian</h1>
    </div>
    <div class="bx2">
        <div class="bx21"id="bx213">
            <h3>Nomor Antrian Anda</h3>
        </div>
        <div class="bx22"id="bx223">
            <h1>
                <?php
                    $qwr = "SELECT * FROM `user` WHERE `nama` LIKE '$nama'";
                    $hs = mysqli_query($conn,$qwr);
                    $hss = mysqli_fetch_row($hs);
                    $nmrr = $hss[0];
                    if($nmrr < 10){
                    echo"A0",$nmrr;
                    }
                    if($nmrr >= 10){
                        echo"A",$nmrr;
                    }
                ?>
            </h1>
        </div>
        <div class="bx23"id="bx233">
            <h3>Atas Nama 
                <?php 
                    if(isset($kd1)){
                        echo$nm1;
                    } 
                    if(isset($kd2)){
                        echo$nama;
                    }
                ?>
            </h3>
        </div>
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
    <script type="text/javascript">
            function ran_col() { //function name
                var color = '#'; // hexadecimal starting symbol
                var letters = ['3DB2FF','FF8343','F05A7E','88D66C','6C48C5']; //Set your colors here
                color += letters[Math.floor(Math.random() * letters.length)];
                document.getElementById('bx213').style.backgroundColor = color; // Setting the random color on your div element.
                document.getElementById('bx223').style.backgroundColor = color; // Setting the random color on your div element.
                document.getElementById('bx233').style.backgroundColor = color; // Setting the random color on your div element.
            }
        </script>
</body>
</html>