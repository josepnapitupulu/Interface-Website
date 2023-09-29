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
              <form action="{{ route('forms5.updateKegiatan', $kegiatans['ID']) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cNamaKegiatan" value="{{ $kegiatans['nama_kegiatan'] }}" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="cJenisKegiatan" value="{{ $kegiatans['jenis_kegiatan'] }}" placeholder="Jenis Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cJadwalKegiatan" value="{{ $kegiatans['jadwal_kegiatan'] }}" placeholder="Jadwal Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cLokasiKegiatan" value="{{ $kegiatans['lokasi_kegiatan'] }}" placeholder="Lokasi Kegiatan">
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