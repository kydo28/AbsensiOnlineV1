<?php 
if ($mod ==''){
    header('location:../404');
    echo'kosong';
}else{
    include_once 'mod/sw-header.php';
if(!isset($_COOKIE['COOKIES_MEMBER']) OR !isset($_COOKIE['COOKIES_COOKIES'])){

$query = mysqli_query($connection, "SELECT max( employees_code) as kodeTerbesar FROM employees");
$data = mysqli_fetch_array($query);
$kode_karyawan = $data['kodeTerbesar'];
$urutan = (int) substr($kode_karyawan, 3, 3);
$urutan++;
$huruf = "OM";
$kode_karyawan = $huruf . sprintf("%03s", $urutan);

 echo'
 <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section text-center">
            <h1 class="text-primary" style="font-size:24px;"><i class="text-primary fa fa-user-plus"></i><br>Register</h1>
        </div>
        <div class="section mb-5 p-2">
            <form id="form-registrasi">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">NIP</label>
                                <input type="text" class="form-control" style="padding-left:0%;" id="name" name="employees_nip" placeholder="Nomer Induk Pegawai" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Nama</label>
                                <input type="text" class="form-control" style="padding-left:0%;" id="name" name="employees_name" placeholder="Nama Lengkap" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Email</label>
                                <input type="email" class="form-control" style="padding-left:0%;" id="email" name="employees_email" placeholder="Masukkan Email" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label">Pekerjaan</label>
                            <select class="form-control" style="padding-left:0%;" name="position_id" id="position_id"  required="">
                              <option value="">Pilih Pekerjaan</option>';
                              $query="SELECT position_id,position_name from position order by position_name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['position_id'].'">'.$row['position_name'].'</option>';
                                  }echo'
                            </select>
                        </div>
                    </div>
                    <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Perusahaan</label>
                                <select class="form-control" style="padding-left:0%;" name="shift_id" id="shift_id" required="">
                                  <option value="">Pilih Perusahaan</option>';
                                  $query="SELECT * from perusahaan order by name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                  }echo'
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Jam kerja</label>
                                <select class="form-control" style="padding-left:0%;" name="shift_id" id="shift_id" required="">
                                  <option value="">Pilih Jam kerja</option>';
                                  $query="SELECT shift_id,shift_name from shift order by shift_name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['shift_id'].'">'.$row['shift_name'].'</option>';
                                  }echo'
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Lokasi Penempatan</label>
                                <select class="form-control" style="padding-left:0%;" name="building_id" id="building" required="">
                                  <option value="">Pilih Lokasi Penempatan</option>';
                                  $query="SELECT building_id,name,address from building order by name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['building_id'].'">'.$row['name'].'</option>';
                                  }echo'
                              </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password1">Password</label>
                            <input type="password" class="form-control" style="padding-left:0%;" id="password" name="employees_password"  placeholder="Masukkan password" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2">
                <div class="pb-1">
                    <button type="submit" class="btn btn-primary btn-block"></i>Daftar</button>
                </div>
                    <p class="text-center text-secondary" style="opacity:50%;">atau</p>
                <div class="pb-4">
                    <a href="oauth/google" class="btn btn-light btn-block">
                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                    Daftar dengan Google</a>
                </div>
                <div class="pb-4 text-center">
                    <p>Sudah memiliki akun?<a href="login" class="text-primary"> Login</a></p>
                </div>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->';}
  else{
  }

  include_once 'mod/sw-footer.php';
} ?>