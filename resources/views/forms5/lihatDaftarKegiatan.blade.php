@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Naik Sidih</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{route('forms5.daftarKegiatan')}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cNamaKegiatan" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="cJenisKegiatan" placeholder="Jenis Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cJadwalKegiatan" placeholder="Jadwal Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cLokasiKegiatan" placeholder="Lokasi Kegiatan">
                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                    <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </section>
    </div>
            <!-- /.card -->