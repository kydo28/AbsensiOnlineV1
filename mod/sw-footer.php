<?php if(empty($connection)){
	header('location:./404');
} else {


if(isset($_COOKIE['COOKIES_MEMBER'])){
echo'

<div class="navigation">
    <ul>
        <li class="list active">
            <a class="klik_menu" id="home">
                <span class="icon">
                    <ion-icon name="home-outline" href="home"></ion-icon>
                </span>
                <span class="text">Home</span>
            </a>
        </li>
        <li class="list">
            <a class="klik_menu" id="profile">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="text">Profil</span>
            </a>
        </li>
        <li class="list">
            <a class="klik_menu" id="absen">
                <span class="icon">
                    <ion-icon name="camera-outline"></ion-icon>
                </span>
                <span class="text">Absen</span>
            </a>
        </li>
        <li class="list">
            <a class="klik_menu" id="id-card">
                <span class="icon">
                    <ion-icon name="id-card-outline"></ion-icon>
                </span>
                <span class="text">ID Card</span>
            </a>
        </li>
        <li class="list">
            <a class="klik_menu" id="riwayat">
                <span class="icon">
                    <ion-icon name="document-text-outline"></ion-icon>
                </span>
                <span class="text">Riwayat</span>
            </a>
        </li>
        <div class="indicator"></div>
    </ul>
    </div>

   
<!-- * App Bottom Menu -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>';?>

<script type="text/javascript">
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
    
</script>

<?php }?>
  <!-- </body></html> -->
  </body>
</html><?php }?>
<script>
   
</script>
