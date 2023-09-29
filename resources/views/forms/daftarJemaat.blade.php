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
          <h1>Pendaftaran Jemaat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pendaftaran Jemaat</li>
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
              <h3 class="card-title" id="textHeader">Tambah Jemaat</h3>
            </div><br>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('forms.daftarJemaat')}}" >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control" id="nik" name="cNik" placeholder="NIK">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Jemaat</label>
                  <input type="text" class="form-control" id="nama" name="cNamaJemaat" placeholder="Nama Jemaat">
                </div>
                <div class="form-group">
                  <label for="lahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="lahir" name="cTempatLahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="kelamin">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="kelamin" name="cJenisKelamin" placeholder="Jenis Kelamin">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="cAlamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="hp">No HP</label>
                  <input type="text" class="form-control" id="hp" name="cNoHp" placeholder="No HP">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="reset" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
