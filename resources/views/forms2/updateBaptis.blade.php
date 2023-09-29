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
            <h1>Update Data Jemaat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat</li>
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
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('forms2.updateBaptis', $baptis['nik'])}}">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Anak</label>
                    <input type="text" class="form-control" id="nik" name="cNikAnak" value="{{ $baptis['nik'] }}" placeholder="Nik Anak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap Anak</label>
                    <input type="text" class="form-control" id="nama" name="cNamaAnak" value="{{ $baptis['nama_anak'] }}" placeholder="Nama Lengkap Anak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="lahir" name="cTanggalLahir" value="{{ $baptis['tanggal_lahir'] }}" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Baptis</label>
                    <input type="date" class="form-control" id="baptis" name="cTanggalBaptis" value="{{ $baptis['tanggal_aptis'] }}" placeholder="Tanggal Baptis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ayah</label>
                    <input type="text" class="form-control" id="ayah" name="cNamaAyah" value="{{ $baptis['nama_ayah'] }}" placeholder="Nama Ayah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ibu</label>
                    <input type="text" class="form-control" id="ibu" name="cNamaIbu" value="{{ $baptis['nama_ibu'] }}" placeholder="Nama Ibu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="cAlamat" value="{{ $baptis['alamat'] }}" placeholder="alamat">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->