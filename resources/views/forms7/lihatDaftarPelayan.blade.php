@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Pelayan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{route('forms7.daftarPelayan')}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="nik" name="cNIK" placeholder="NIK">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelayan</label>
                    <input type="text" class="form-control" id="nama" name="cNamaPelayan" placeholder="Nama Pelayan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahbisan</label>
                    <input type="date" class="form-control" id="tahbisan" name="cTahbisan" placeholder="Tahbisan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" name="cPendidikan" placeholder="Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bidang Pendidikan</label>
                    <input type="text" class="form-control" id="bidang" name="cBidangPendidikan" placeholder="Bidang Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="cPekerjaan" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="cAlamat" placeholder="Keterangan">
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