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
    <div class="layout">
    </div>     
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
        var path=window.location.pathname.replace('/AbsensiOnlineV1/','')
        switch(path){
            case '': 
                $('.layout').load('./home2')
                break;
            case 'home':
                $('.layout').load('./home2')
                break;  
        }
        document.getElementById('day').innerHTML=day+','+date+' '+month+' '+year;
    })
    document.getElementById('absen').addEventListener('click',(event)=>{
        event.preventDefault()
        if(day=="Sabtu" || day=="Minggu"){
           alert('Maaf Hari ini sedang libur')
        }
        else{
            $('.layout').load('./present')
        }
       
    })


    
$('.klik_menu').click(function(e){
    e.preventDefault()
    var menu=$(this).attr('id')
    alert(menu)
    switch(menu){
        case 'profile':
            $('.layout').load('./profile')
            break;
        case 'home':
            $('.layout').load('./home2')
            break;
        case 'absen':
            $('.layout').load('./present')
            break;
        case 'id-card':
            $('.layout').load('./id-card')
            break;
        case 'riwayat':
            $('.layout').load('./history')
            break;
    }
   
  
})
const list_sidebar = document.querySelectorAll('.list-sidebar');

function activeLink() {
    
    var menu=$(this).attr('id')
    alert(menu)
    switch(menu){
        case 'side-profile':
            $('.layout').load('./profile')
            break;
        case 'side-home':
            $('.layout').load('./home2')
            break;
        case 'side-present':
            $('.layout').load('./present')
            break;
        case 'side-id-card':
            $('.layout').load('./id-card')
            break;
        case 'side-history':
            $('.layout').load('./history')
            break;
        case 'side-logout':
            window.location.href='./index'
    }
    list_sidebar.forEach((item) =>{
        item.classList.remove('active')
        });
    this.classList.add('active');
}
list_sidebar.forEach((item) =>
    item.addEventListener('click', activeLink));

</script>