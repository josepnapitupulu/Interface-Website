@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Jemaat Sidi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat Sidi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="height:6rem">
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat Sidi</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('forms1.updateSidi', $sidis['nik']) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" name="cNik" id="nik" placeholder="NIK" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Jemaat</label>
                        <input type="text" class="form-control" name="cNamaJemaat" id="nama" placeholder="Nama" value="{{ $sidis['nama_jemaat'] }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Sidi</label>
                        <input type="date" class="form-control" name="cTanggalSidi" id="tanggalSidi" placeholder="Tanggal Sidi" value="{{ $sidis['tanggal_sidi'] }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="cTanggalLahir" id="tanggalLahir" placeholder="Tanggal Lahir" value="{{ $sidis['tanggal_lahir'] }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pendeta</label>
                        <input type="text" class="form-control" name="cNamaPendeta" id="pendeta" placeholder="Nama Pendeta" value="{{ $sidis['nama_pendeta'] }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="cAlamat" id="alamat" placeholder="Alamat" value="{{ $sidis['alamat'] }}">
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="reset" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->