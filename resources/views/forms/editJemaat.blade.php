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
              
              <form action="{{ route('forms.updateJemaat', $jemaats['nik']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_jemaat">Nama Jemaat</label>
                    <input type="text" class="form-control" id="nama_jemaat" name="cNamaJemaat" value="{{ $jemaats['nama_jemaat'] }}">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="lahir" name="cTempatLahir" placeholder="Bidang Pendidikan" value="{{$jemaats['tempat_lahir']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="kelamin" name="cJenisKelamin" placeholder="Pekerjaan" value="{{$jemaats['jenis_kelamin']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="cAlamat" placeholder="Gereja" value="{{$jemaats['alamat']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No_HP</label>
                    <input type="text" class="form-control" id="hp" name="cNoHp" placeholder="Distrik" value="{{$jemaats['no_hp']}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->