<?php 
if ($mod ==''){
    header('location:../404');
    echo'kosong';
}else{
    include_once 'mod/sw-header.php';
if(!isset($_COOKIE['COOKIES_MEMBER']) && !isset($_COOKIE['COOKIES_COOKIES'])){
        setcookie('COOKIES_MEMBER', '', 0, '/');
        setcookie('COOKIES_COOKIES', '', 0, '/');
        // Login tidak ditemukan
        setcookie("COOKIES_MEMBER", "", time()-$expired_cookie);
        setcookie("COOKIES_COOKIES", "", time()-$expired_cookie);
        session_destroy();
        header("location:./");
}else{
  echo'<!-- App Capsule -->
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <!--<div class="balance">
                    <div class="left">
                        <span class="title"> Selamat '.$salam.'</span>
                        <h4>'.ucfirst($row_user['employees_name']).'</h4>
                    </div>
                    <div class="right">
                        <span class="title">'.tgl_ind($date).' </span>
                        <h4><span class="clock"></span></h4>
                    </div>

                </div>-->
                <!-- * Balance -->
                <!-- Wallet Footer --><div class="text-center"><h3>'.tgl_ind($date).' - <span class="clock"></span></h3></div>
                <div class="wallet-footer text-center">
                    <div class="webcam-capture-body text-center">
                        <span class="latitude d-none" id="latitude"></span>
                        <div class="webcam-capture"></div>
                        <div class="form-group basic">';
                        $query ="SELECT employees_id,time_in FROM presence WHERE employees_id='$row_user[id]' AND time_out=''";
                        $result = $connection->query($query);
                        $row = $result->fetch_assoc();
                        if($result->num_rows > 0){
                        echo'
                        <button class="btn btn-success btn-lg btn-block" onClick="captureimage(0)"><ion-icon name="camera-outline"></ion-icon>Absen Pulang</button>';}
                        else{
                        echo'
                        <button class="btn btn-success btn-lg btn-block" onClick="captureimage(0)"><ion-icon name="camera-outline"></ion-icon>Absen Masuk</button>';
                        }
                        echo'
                        </div>
                    </div>
                </div>
                <!-- * Wallet Footer -->
                
            </div>
        </div>
        <!-- Card -->
    </div>
    <!-- * App Capsule -->
';
  }
  
echo'
<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="'.$base_url.'mod/assets/js/lib/jquery-3.4.1.min.js"></script>
<!-- Bootstrap-->
<script src="'.$base_url.'mod/assets/js/lib/popper.min.js"></script>
<script src="'.$base_url.'mod/assets/js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://kit.fontawesome.com/0ccb04165b.js" crossorigin="anonymous"></script>
<!-- Base Js File -->
<script src="'.$base_url.'mod/assets/js/base.js"></script>
<script src="'.$base_url.'mod/assets/js/sw-script.js"></script>
<script src="'.$base_url.'mod/assets/js/sweetalert.min.js"></script>
<script src="'.$base_url.'mod/assets/js/webcamjs/webcam.min.js"></script>';
if($mod =='id-card'){
echo'
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>';
  ?>
 
<script type="text/javascript">

// $(document).ready(function(){
//     //klik navbar tanpa reload
// 		$('.klik_menu').click(function(){
// 			var menu = $(this).attr('id');
// 			if(menu == "home"){
// 				$('#appCapsule').load('home.php');						
// 			}else if(menu == "profile"){
// 				$('#appCapsule').load('profile.php');						
// 			}else if(menu == "absen"){
// 				$('#appCapsule').load('present.php');						
// 			}else if(menu == "id-card"){
// 				$('#appCapsule').load('id-card.php');						
// 			}else if(menu == "riwayat"){
// 				$('#appCapsule').load('history');						
// 			}
// 		});
 
 
// 		// halaman yang di load default pertama kali
// 		$('#appCapsule').load('home.php');						
 
// 	});

    /* ---------- Save Id Card ----------*/
var element = $("#divToPrint"); // global variable
var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    
    $(".btn-Convert-Html2Image").on('click', function () {
        var imgageData = getCanvas.toDataURL("image/png");
        // Now browser starts downloading it instead of just showing it
        var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        $(".btn-Convert-Html2Image").attr("download", "ID-CARD.jpg").attr("href", newData);
    });
</script>
<?PHP }

if($mod =='history'){
echo'
<script src="'.$base_url.'mod/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="'.$base_url.'mod/assets/js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="'.$base_url.'mod/assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="'.$base_url.'mod/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>
    $(".datepicker").datepicker({
        format: "dd-mm-yyyy",
        "autoclose": true
    }); 
    
</script>';
}

if ($mod =='present'){?>
<script type="text/javascript">
   var result;
    $(document).ready(function getLocation() {
        result = document.getElementById("latitude");
       // 
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        } else {
            swal({title: 'Oops!', text:'Maaf, browser Anda tidak mendukung geolokasi HTML5.', icon: 'error', timer: 3000,});
        }
    });
    
    // Define callback function for successful attempt
    function successCallback(position) {
       result.innerHTML =""+ position.coords.latitude + ","+position.coords.longitude + "";
    }

    // Define callback function for failed attempt
    function errorCallback(error) {
        if(error.code == 1) {
            swal({title: 'Oops!', text:'Anda telah memutuskan untuk tidak membagikan posisi Anda, tetapi tidak apa-apa. Kami tidak akan meminta Anda lagi.', icon: 'error', timer: 3000,});
        } else if(error.code == 2) {
            swal({title: 'Oops!', text:'Jaringan tidak aktif atau layanan penentuan posisi tidak dapat dijangkau.', icon: 'error', timer: 3000,});
        } else if(error.code == 3) {
            swal({title: 'Oops!', text:'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.', icon: 'error', timer: 3000,});
        } else {
            swal({title: 'Oops!', text:'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.', icon: 'error', timer: 3000,});
        }
    }
    
    // start webcame
    Webcam.set({
        width: 590,
        height: 460,
        image_format: 'jpeg',
        jpeg_quality:80,
    });
    

    var cameras = new Array(); //create empty array to later insert available devices
    navigator.mediaDevices.enumerateDevices() // get the available devices found in the machine
    .then(function(devices) {
        devices.forEach(function(device) {
        var i = 0;
            if(device.kind=== "videoinput"){ //filter video devices only
                cameras[i]= device.deviceId; // save the camera id's in the camera array
                i++;
            }
        });
    })

    Webcam.set('constraints',{
        width: 590,
        height: 460,
        image_format: 'jpeg',
        jpeg_quality:80,
        sourceId: cameras[0]
    });

    Webcam.attach('.webcam-capture');
    // preload shutter audio clip
    var shutter = new Audio();
    //shutter.autoplay = true;
    shutter.src = navigator.userAgent.match(/Firefox/) ? './mod/assets/js/webcamjs/shutter.ogg' : './mod/assets/js/webcamjs/shutter.mp3';
    function captureimage() {
    var latitude = $('.latitude').html();
        // play sound effect
        shutter.play();
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
            // display results in page
            Webcam.upload(data_uri, './sw-proses?action=present&latitude='+latitude+'', function(code,text) {
                $data       =''+text+'';
                var results = $data.split("/");
                $results = results[0];
                $results2 = results[1];
                if($results =='success'){
                    swal({title: 'Berhasil!', text:$results2, icon: 'success', timer: 3500,});
                    setTimeout("location.href = './' ;",3600);
                }else{
                    swal({title: 'Oops!', text:text, icon: 'error', timer: 3500,});
                }
            });    
        } );
    }
</script>

  <?php
    }
} ?>