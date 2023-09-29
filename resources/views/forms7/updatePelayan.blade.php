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
                <h3 class="card-title" id="textHeader">Ubah Data Pelayan</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('forms7.updatePelayan', $pelayans['nik'])}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="nik" name="cNIK" value="{{ $pelayans['nik'] }}"  placeholder="NIK">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelayan</label>
                    <input type="text" class="form-control" id="nama" name="cNamaPelayan" value="{{ $pelayans['nama_pelayan'] }}" placeholder="Nama Pelayan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahbisan</label>
                    <input type="date" class="form-control" id="tahbisan" name="cTahbisan" value="{{ $pelayans['tahbisan'] }}" placeholder="Tahbisan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" name="cPendidikan" value="{{ $pelayans['pendidikan'] }}" placeholder="Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bidang Pendidikan</label>
                    <input type="text" class="form-control" id="bidang" name="cBidangPendidikan" value="{{ $pelayans['bidang_pendidikan'] }}" placeholder="Bidang Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="cPekerjaan" value="{{ $pelayans['pekerjaan'] }}" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="cAlamat" value="{{ $pelayans['alamat'] }}" placeholder="Keterangan">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->