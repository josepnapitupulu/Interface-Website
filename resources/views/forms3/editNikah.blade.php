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
            <h1>Update Data Jemaat Nikah</h1>
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
                <h3 class="card-title" id="textHeader">Ubah Data Nikah</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Mempelai Laki-laki</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Mempelai Perempuan</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <form action="{{ route('forms3.updateNikah', $nikahs['ID']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaMempelaiLaki" value="{{ $nikahs['nama_mempelai_laki'] }}" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cAlamatMempelaiLaki" value="{{ $nikahs['alamat_mempelai_laki'] }}" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Pernikahan</label>
                        <input type="date" class="form-control" id="exampleInputText" name="cTanggalPernikahan" value="{{ $nikahs['tanggal_pernikahan'] }}" placeholder="Tanggal Nikah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaAyahMempelaiLaki" value="{{ $nikahs['nama_ayah_mempelai_laki'] }}" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaIbuMempelaiLaki" value="{{ $nikahs['nama_ibu_mempelai_laki'] }}" placeholder="Nama Ibu">
                      </div>
                      <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaLengkapMempelaiPerempuan" value="{{ $nikahs['nama_lengkap_mempelai_perempuan'] }}" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cAlamatMempelaiPerempuan" value="{{ $nikahs['alamat_mempelai_perempuan'] }}" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaAyahMempelaiPerempuan" value="{{ $nikahs['ayah_mempelai_perempuan'] }}" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaIbuMempelaiPerempuan" value="{{ $nikahs['nama_ibu_mempelai_perempuan'] }}" placeholder="Nama Ibu">
                      </div>
                      <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                      <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->