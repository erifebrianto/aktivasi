  <!-- Begin Page Content -->
                <div class="container-fluid">
                  <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                          <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                      <!-- Area Chart -->
                      <div class="col-xl-12 col-lg-7">
                          <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div
                                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Aktivas Pelanggan</h6>
                              </div>
                              <!-- Card Body -->
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="namapelanggan">Nama Pelanggan</label>
                                        <input  type="text" class="form-control" placeholder="Nama Pelanggan / ID pelanggan" id="namapelanggan">
                                    </div>
                                    <div class="form-group">
                                      <label>Paket Berlangganan</label>
                                      <select class="form-control select2bs4" id="profileMbps" style="width: 100%;">
                                        <option value="" selected>Pilih Paket Internet Pelanggan</option>
                                        <option value="BR2MB-BASE">2 Mbps</option>
                                        <option value="BR5MB-BASE">5 Mbps</option>
                                        <option value="BR10MB-BASE">10 Mbps</option>
                                        <option value="BR20MB-BASE">20 Mbps</option>
                                     </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="snmodem">Serial Number Modem</label>
                                      <input type="text" class="form-control" id="snModem" placeholder="Serial Number Modem">
                                    </div>                                    
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="snmodem">Akun PPPOE</label>
                                      <input type="text" class="form-control" id="akunpppoe" placeholder="Akun PPPPOE">
                                    </div>
                                    <div class="form-group">
                                      <label for="snmodem">Password PPPOE</label>
                                      <input type="text" class="form-control" id="passwordpppoe" placeholder="Password PPPPOE">
                                    </div>
                                    <div class="form-group">
                                      <label for="typeModem">Tipe Modem</label>
                                      <select class="form-control select2bs4" id="typeModem" style="width: 100%;">
                                        <option value="" selected>Pilih tipe</option>
                                        <option value="1">ZTE-F609</option>
                                        <option value="2">Huawei</option>
                                        <option value="3">Fiberhome</option>
                                        <option value="4">ZTE-F660</option>
                                      </select>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                     </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
