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
const weekdayz = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
const fullMonth = ["Januari", "Februari", 'Maret', "April", 'Mei', "Juni", "Juli", 'Agustus', 'September', 'Oktober',
    'November', 'Desember'
]
const d = new Date()
let date = d.getDate();
let month = fullMonth[d.getMonth()];
let year = d.getFullYear();
let day = weekdayz[d.getDay()];


window.addEventListener('load', (event) => {
    var path = window.location.pathname.replace('/AbsensiOnlineV1/', '')
    switch (path) {
        case '':
            $('.layout').load('./home2')
            break;
        case 'home':
            $('.layout').load('./home2')
            break;
    }
    document.getElementById('day').innerHTML = day + ',' + date + ' ' + month + ' ' + year;
})
document.getElementById('absen').addEventListener('click', (event) => {
    event.preventDefault()
    if (day == "Sabtu" || day == "Minggu") {
        alert('Maaf Hari ini sedang libur')
    } else {
        $('.layout').load('./present')
    }

})



const array_nav = ['home', 'profile', 'absen', 'id-card', 'riwayat']
const array_side = []
const array_route = ['./home2', './profile', './present', './id-card', './history']

array_nav.forEach((item) => array_side.push("side-" + item))

///Navbar bottom
const lists = document.querySelectorAll('.list');
const list_sidebar = document.querySelectorAll('.list-sidebar');

function activeLinks() {
    var menu = $(this).attr('id')
    list_sidebar.forEach((item) => item.classList.remove('active'))
    array_nav.forEach((item, i) => {
        if (menu == item) {
            $('.layout').load(array_route[i])
            list_sidebar[i].classList.add('active')
        }
    })
    lists.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');

}


lists.forEach((item) =>
    item.addEventListener('click', activeLinks));
// Sidebar 

function activeLink() {
    var menu = $(this).attr('id')
    lists.forEach((item) => item.classList.remove('active'))
    array_side.forEach((item, i) => {
        if (menu == item) {
            $('.layout').load(array_route[i])
            lists[i].classList.add('active')
            return
        }
        if (menu == 'side-logout') {
            window.location.href = './logout'
            return
        }
    })
    list_sidebar.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
}
list_sidebar.forEach((item) =>
    item.addEventListener('click', activeLink));
</script>