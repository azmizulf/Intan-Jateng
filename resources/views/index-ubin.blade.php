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
        @include('components.navbar-ubin')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="background: linear-gradient(to right, #f1edc1, #dbe4be);">
            <div class="page-header" style="background-color: #5e5741">
              <h3 class="page-title">Lacak </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form class="forms-sample">
                      <div class="form-group row" style="margin-bottom: 0;">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tahun Amatan</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" id="exampleInput2">
                            <option value="0">2020</option>
                            <option value="1">2021</option>
                            <option value="2">2022</option>
                            <option value="3">2023</option>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 0;">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Bulan Amatan</label>
                        <div class="col-sm-9">
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
                      </div>
                      <div class="form-group row" style="margin-bottom: 0;">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tahun Sample</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" id="exampleInput2">
                            <option value="0">2020</option>
                            <option value="1">2021</option>
                            <option value="2">2022</option>
                            <option value="3">2023</option>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 0;">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Bulan Sample</label>
                        <div class="col-sm-9">
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
                      </div>
                      <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.5rem;background: #a18c4a;">
                        <i class="fa fa-refresh"></i> Lihat </button></td>
                    </form>
                    <table class="table .table-bordered" style="margin-bottom: 2rem ;margin-top: 1rem;">
                      <thead>
                        <tr>
                          <th style="background-color: #5e5741;color: white;"> Keterangan </th>
                          <th style="background-color: #5e5741;color: white;"> Fase </th>
                          <th style="background-color: #5e5741;color: white;"> Subsegmen Utama </th>
                          <th style="background-color: #5e5741;color: white;"> Subsegmen Cadangan </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Available</td>
                          <td>2-Vegetatif Akhir
                          3-Generatif</td>
                          <td>50</td>
                          <td>11</td>
                        </tr>
                        <tr>
                          <td>Unavailable</td>
                          <td>4-Panen</td>
                          <td>70</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <td>Non-Eligible</td>
                          <td>Fase lainnya</td>
                          <td>85</td>
                          <td>20</td>
                        </tr>
                      </tbody>
                    </table>
                    <table id="padiamatan-table" class="table table-striped" style="border: 1px solid #ebedf2;">
                      <thead>
                        <tr>
                          <th> Kode Segmen </th>
                          <th> Subsegmen </th>
                          <th> Nilai Amatan </th>
                          <th> NKS </th>
                          <th> Strata </th>
                          <th> Bulan </th>
                          <th> Jenis Sample</th>
                          <th> Keterangan</th>
                          <th> Petani</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#abe96c">3</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#abe96c">AVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ffc37c">4</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ffc37c">UNAVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ff5050">7</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ff5050">NON-ELIGIBLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#abe96c">3</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#abe96c">AVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ffc37c">4</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ffc37c">UNAVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ff5050">7</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ff5050">NON-ELIGIBLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#abe96c">3</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#abe96c">AVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ffc37c">4</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ffc37c">UNAVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ff5050">7</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ff5050">NON-ELIGIBLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#abe96c">3</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#abe96c">AVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ffc37c">4</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ffc37c">UNAVAILABLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        <tr>
                          <td>3301261826</td>
                          <td>C1</td>
                          <td style="background-color:#ff5050">7</td>
                          <td>21020587</td>
                          <td>S1</td>
                          <td>Juli</td>
                          <td>C</td>
                          <td style="background-color:#ff5050">NON-ELIGIBLE</td>
                          <td>
                            <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.2rem;background: #87c351;" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-gradient-primary btn-icon-text"style="background: linear-gradient(to right, #696b4c, #b9af49);margin-bottom: 1rem;">
                    <i class="fa fa-download"></i> Unduh </button>
                    <!-- Modal for Edit Form -->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Data Petani</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form id="editForm">
                              <div class="form-group">
                                <label for="segmen">Kode Segmen</label>
                                <input type="text" class="form-control" id="segmen" value="3301261826" readonly>
                              </div>
                              <div class="form-group">
                                <label for="subsegmen">Subsegmen</label>
                                <input type="text" class="form-control" id="subsegmen" value="C1">
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                              </div>
                              <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK">
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="2" placeholder="Masukkan alamat"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="noHp">No. HP</label>
                                <input type="text" class="form-control" id="noHp" placeholder="Masukkan No. HP">
                              </div>
                              <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-gradient-primary btn-icon-text" style="background: linear-gradient(to right, #696b4c, #b9af49);margin-bottom: 1rem;" id="submitButton">Submit</button>
                                <div class="btn-group-right">
                                <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.5rem;background: #87c351;"data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i> Edit </button>
                                  <button type="button" class="btn btn-gradient-primary btn-icon-text" style="padding:0.5rem;background: #ff5050;"><i class="fa fa-trash-o"></i> Hapus </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<script>
  // Add event listener for form submission
  document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevent form from submitting

    // Show the Edit and Delete buttons after submitting the form
    document.getElementById('editButton').style.display = 'inline-block';
    document.getElementById('deleteButton').style.display = 'inline-block';

    // Disable the submit button after submit
    document.getElementById('submitButton').disabled = true;
  });

  // Optional: Add functionality for Edit and Delete buttons
  document.getElementById('editButton').addEventListener('click', function() {
    // Enable editing
    document.getElementById('submitButton').disabled = false;
    document.getElementById('submitButton').textContent = 'Update';  // Change the button text to "Update"
  });

  document.getElementById('deleteButton').addEventListener('click', function() {
    // Add delete functionality (e.g., clear fields or remove data)
    if(confirm('Apakah Anda yakin ingin menghapus data ini?')) {
      // Example: Clear all form fields
      document.getElementById('editForm').reset();
      document.getElementById('submitButton').disabled = false;
      document.getElementById('submitButton').textContent = 'Submit';
      
      // Hide the Edit and Delete buttons again
      document.getElementById('editButton').style.display = 'none';
      document.getElementById('deleteButton').style.display = 'none';
    }
  });
</script>
