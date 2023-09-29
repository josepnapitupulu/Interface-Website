@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Naik Baptis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{route('forms2.daftarBaptis')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Anak</label>
                    <input type="text" class="form-control" id="nik"  placeholder="Nik Anak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap Anak</label>
                    <input type="text" class="form-control" id="nama" name="cNamaAnak" placeholder="Nama Lengkap Anak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="lahir" name="cTanggalLahir" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Baptis</label>
                    <input type="date" class="form-control" id="baptis" name="cTanggalBaptis" placeholder="Tanggal Baptis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ayah</label>
                    <input type="text" class="form-control" id="ayah" name="cNamaAyah" placeholder="Nama Ayah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ibu</label>
                    <input type="text" class="form-control" id="ibu" name="cNamaIbu" placeholder="Nama Ibu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="cAlamat" placeholder="Wijk">
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