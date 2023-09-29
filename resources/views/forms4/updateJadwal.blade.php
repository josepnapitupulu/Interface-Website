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
                <h3 class="card-title" id="textHeader">Ubah Data Jadwal Ibadah</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('forms4.updateJadwal', $jadwals['ID'])}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Minggu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cNamaMinggu" value="{{ $jadwals['nama_minggu'] }}" placeholder="Nama Minggu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Ibadah</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="cTanggalIbadah" value="{{ $jadwals['tanggal_ibadah'] }}" placeholder="Tanggal Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Ibadah</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" name="cWaktuIbadah" value="{{ $jadwals['waktu_ibadah'] }}" placeholder="Waktu Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penkotbah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cPenkotbah" value="{{ $jadwals['penkotbah'] }}" placeholder="Penkotbah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Shift</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="cShift" value="{{ $jadwals['shift'] }}" placeholder="Shift">
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