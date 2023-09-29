@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Jadwal Ibadah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{route('forms4.daftarJadwal')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Minggu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cNamaMinggu" placeholder="Nama Minggu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Ibadah</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="cTanggalIbadah" placeholder="Tanggal Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Ibadah</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" name="cWaktuIbadah" placeholder="Waktu Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penkotbah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cPenkotbah" placeholder="Penkotbah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Shift</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="cShift" placeholder="Shift">
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