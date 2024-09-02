<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PAK TANI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/img/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
        <!-- resources/views/home.blade.php -->
        @include('components.navbar-padi')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Validasi Amatan </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                <div class="form-group">
                  <form  id="myForm">
                    <label for="exampleInput2">Tahun</label>
                        <select type="text" class="form-control" id="exampleInput2">
                          <option value="0">2020</option>
                          <option value="1">2021</option>
                          <option value="2">2022</option>
                          <option value="3">2023</option>
                        </select> 
                </div>
                      <div class="form-group">
                        <label for="exampleInpu3">Bulan</label>
                        <select class="form-control" id="exampleInput3" >
                          <option value="01">01 - Januari</option>
                          <option value="02">02 - Februari</option>
                          <option value="03">03 - Maret</option>
                          <option value="04">04 - April</option>
                          <option value="05">05 - Mei</option>
                          <option value="06">06 - Juni</option>
                          <option value="07">07 - Juli</option>
                          <option value="08">08 - Agustus</option>
                          <option value="09">09 - September</option>
                          <option value="10">10 - Oktober</option>
                          <option value="11">11 - November</option>
                          <option value="12">12 - Desember</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="exampleInput4">Wilayah Amatan</label>
                        <select class="form-control" id="exampleInput4" >
                        <option value="3399">Pilih Wilayah</option><option value="3300">Jawa Tengah</option><option value="3301">3301 - Cilacap</option><option value="3302">3302 - Banyumas</option><option value="3303">3303 - Purbalingga</option><option value="3304">3304 - Banjarnegara</option><option value="3305">3305 - Kebumen</option><option value="3306">3306 - Purworejo</option><option value="3307">3307 - Wonosobo</option><option value="3308">3308 - Magelang</option><option value="3309">3309 - Boyolali</option><option value="3310">3310 - Klaten</option><option value="3311">3311 - Sukoharjo</option><option value="3312">3312 - Wonogiri</option><option value="3313">3313 - Karanganyar</option><option value="3314">3314 - Sragen</option><option value="3315">3315 - Grobogan</option><option value="3316">3316 - Blora</option><option value="3317">3317 - Rembang</option><option value="3318">3318 - Pati</option><option value="3319">3319 - Kudus</option><option value="3320">3320 - Jepara</option><option value="3321">3321 - Demak</option><option value="3322">3322 - Semarang</option><option value="3323">3323 - Temanggung</option><option value="3324">3324 - Kendal</option><option value="3325">3325 - Batang</option><option value="3326">3326 - Pekalongan</option><option value="3327">3327 - Pemalang</option><option value="3328">3328 - Tegal</option><option value="3329">3329 - Brebes</option><option value="3371">3371 - Kota Magelang</option><option value="3372">3372 - Kota Surakarta</option><option value="3373">3373 - Kota Salatiga</option><option value="3374">3374 - Kota Semarang</option><option value="3375">3375 - Kota Pekalongan</option><option value="3376">3376 - Kota Tegal</option></select>
                        </select>
                      </div>
                      <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.5rem;background: #87c351;margin-bottom:2rem">
                        <i class="fa fa-refresh"></i> Lihat </button></td>
                    </form>
                    <table id="padiamatan-table" class="table table-bordered"style="border-bottom-color: #ebedf2;">
                      <thead>
                        <tr>
                          <th> Kode </th>
                          <th> A1 </th>
                          <th> A2 </th>
                          <th> A3 </th>
                          <th> B1 </th>
                          <th> B2 </th>
                          <th> B3 </th>
                          <th> C1 </th>
                          <th> C2 </th>
                          <th> C3 </th>
                          <th> Status </th>
                          <th> Segmen & Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 330101001 </td>
                          <td style="background-color:#ffc37c"> W </td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td> <label class="badge badge-danger">Approve</label></td>
                          <td><label class="badge badge-warning">APPROVE</label></td>
                        </tr>
                        <tr>
                          <td> 330101001 </td>
                          <td style="background-color:#ffc37c"> W </td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td> <label class="badge badge-danger">Approve</label></td>
                          <td><label class="badge badge-warning">APPROVE</label></td>
                        </tr>
                        <tr>
                          <td> 330101001 </td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#ff5050"> TK</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td> <label class="badge badge-danger">Approve</label></td>
                          <td><label class="badge badge-info">REJECTED</label></td>
                        </tr>
                        <tr>
                          <td> 330101001 </td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#ff5050"> TK</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td> <label class="badge badge-danger">Approve</label></td>
                          <td><label class="badge badge-info">REJECTED</label></td>
                        </tr>
                        <tr>
                          <td> 330101001 </td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#ff5050"> TK</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td> 
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td> 
                          <td style="background-color:#abe96c"> K</td>
                          <td style="background-color:#abe96c"> K</td>
                          <td> <label class="badge badge-danger">Approve</label></td>
                          <td><label class="badge badge-info">REJECTED</label></td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-gradient-primary btn-icon-text">
                    <i class="fa fa-download"></i> Unduh </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('components.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/select2/select2.min.js"></script>
    <script src="/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/misc.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/file-upload.js"></script>
    <script src="/assets/js/typeahead.js"></script>
    <script src="/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#padiamatan-table').DataTable({
                "pageLength": 10, // Jumlah default baris per halaman
                "lengthMenu": [5, 10, 25, 50, 100], // Opsi jumlah baris per halaman
                "order": [[ 0, "asc" ]], // Urutkan berdasarkan kolom pertama secara ascending
            });
        });
    </script>
  </body>
</html>