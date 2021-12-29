<?php 
if ($mod ==''){
    header('location:../404');
    echo'kosong';
}else{
    include_once 'mod/sw-header.php';
    if(!isset($_COOKIE['COOKIES_MEMBER'])){
        header('location:index');
    }
    else {
        echo'
            <!-- App Capsule -->
            <div id="appCapsule">
                <!-- Wallet Card -->
                <div class="section wallet-card-section pt-1">
                    <div class="wallet-card">
                        <!-- Balance -->
                        <div class="balance">
                            <div class="left">
                                <p id="day">
                                <span class="title"> Selamat '.$salam.'</span>
                                
                                <h1 class="total">'.ucfirst($row_user['employees_name']).'</h1>
                            </div>
                        </div>
                        <!-- * Balance -->
                        <!-- Wallet Footer -->
                        <div class="wallet-footer">
                            <div class="item">
                                <a href="./profile">
                                    <div class="icon-wrapper bg-primary">
                                        <ion-icon name="person-outline"></ion-icon>
                                    </div>
                                    <strong>Profil</strong>
                                </a>
                            </div>
                            <div class="item">
                                <span type="button" id="absen">
                                    <div class="icon-wrapper bg-success">
                                        <ion-icon name="camera-outline"></ion-icon>
                                    </div>
                                    <strong>Absen</strong>
                                </span>
                            </div>
                            <div class="item">
                                <a href="./id-card">
                                    <div class="icon-wrapper bg-warning">
                                        <ion-icon name="id-card-outline"></ion-icon>
                                    </div>
                                    <strong>ID Card</strong>
                                </a>
                            </div>
                            <div class="item">
                                <a href="./history">
                                    <div class="icon-wrapper bg-danger">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                    </div>
                                    <strong>Riwayat</strong>
                                </a>
                            </div>
                        </div>
                        <!-- * Wallet Footer -->
                    </div>
                </div>
                <!-- Wallet Card -->
                <div class="section mt-2 mb-2">
                    <div class="section-title">1 Minggu Terakhir</div>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-dark rounded bg-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam Masuk</th>
                                            <th scope="col">Jam Pulang</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                        $query_absen="SELECT presence_date,time_in,time_out FROM presence WHERE MONTH(presence_date) ='$month' AND employees_id='$row_user[id]' ORDER BY presence_id DESC LIMIT 6";
                                        $result_absen = $connection->query($query_absen);
                                        if($result_absen->num_rows > 0){
                                            while ($row_absen= $result_absen->fetch_assoc()) {
                                            echo'
                                            <tr>
                                                <th scope="row">'.tgl_ind($row_absen['presence_date']).'</th>
                                                <td>'.$row_absen['time_in'].'</td>
                                                <td>'.$row_absen['time_out'].'</td>
                                            </tr>';
                                        }}
                                        echo'
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- App Capsule -->
        ';
    }
    include_once 'mod/sw-footer.php';
}
?>
<script>
  const weekday = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
        const fullMonth=["Januari","Februari",'Maret',"April",'Mei',"Juni","Juli",'Agustus','September','Oktober','November','Desember']
        const d=new Date()
        let date=d.getDate();
        let month=fullMonth[d.getMonth()];
        let year=d.getFullYear();
        let day=weekday[d.getDay()];


    window.addEventListener('load',(event)=>{
        document.getElementById('day').innerHTML=day+','+date+' '+month+' '+year;
    })
    document.getElementById('absen').addEventListener('click',(event)=>{
        event.preventDefault()
        if(day=="Sabtu" || day=="Minggu"){
           alert('Maaf Hari ini sedang libur')
        }
        else{
            window.location.href="./present"
        }
       
    })
</script>