<script src="'.$base_url.'mod/assets/js/lib/jquery-3.4.1.min.js"></script>
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
                  
      <div id="appCapsule">
      <!-- Wallet Card -->
      <div class="section wallet-card-section pt-1">
          <div class="wallet-card">
              <!-- Balance -->
              <div class="balance">
                  <div class="left">
                      <p id="day">
                      <p class="title"> Selamat '.$salam.'</p>
                      <h1 class="total">'.ucfirst($row_user['employees_name']).'</h1>
                  </div>
              </div>
              <!-- * Balance -->
          </div>
      </div>
      <!-- Wallet Card -->
      <div class="section mt-2 mb-2">
          <div class="section-title">1 Minggu Terakhir</div>
              <div class="card">
                  <div class="table-responsive">
                      <table class="table table-dark bg-table">
                          <thead>
                              <tr>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Jam Masuk</th>
                                  <th scope="col">Jam Pulang</th>
                                  <th scope="col">Tanggal Pulang</th>
                                
                                  
                              </tr>
                          </thead>
                          <tbody>';
                              $query_absen="SELECT * FROM presence WHERE MONTH(presence_date) ='$month' AND employees_id='$row_user[id]' ORDER BY presence_id DESC LIMIT 6";
                              $result_absen = $connection->query($query_absen);
                              if($result_absen->num_rows > 0){
                                  while ($row_absen= $result_absen->fetch_assoc()) {
                                  echo'
                                  <tr class="text-center">
                                      <th scope="row">'.tgl_ind($row_absen['presence_date']).'</th>
                                      <td>'.$row_absen['time_in'].'</td>
                                      <td>'.$row_absen['time_out'].'</td>
                                      <td>'.tgl_ind($row_absen['presence_date_out']).'</td>  
                                    
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
  <div class="boxheader"></div>
  <!-- App Capsule -->
        ';
       
    }
}

?>
<script>
const weekday = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
const fullMonth = ["Januari", "Februari", 'Maret', "April", 'Mei', "Juni", "Juli", 'Agustus', 'September', 'Oktober',
    'November', 'Desember'
]
const d = new Date()
let date = d.getDate();
let month = fullMonth[d.getMonth()];
let year = d.getFullYear();
let day = weekday[d.getDay()];


window.addEventListener('load', (event) => {
    document.getElementById('day').innerHTML = day + ',' + date + ' ' + month + ' ' + year;
})
document.getElementById('absen').addEventListener('click', (event) => {
    event.preventDefault()
    if (day == "Sabtu" || day == "Minggu") {
        alert('Maaf Hari ini sedang libur')
    } else {
        window.location.href = "./present"
    }

})
</script>