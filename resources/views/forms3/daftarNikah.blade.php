@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Jemaat Nikah</h3>
              </div>
              <!-- /.card-header -->
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
                    <form method="post" action="{{route('forms3.daftarNikah')}}">
                    @csrf
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaMempelaiLaki" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cAlamatMempelaiLaki" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Pernikahan</label>
                        <input type="date" class="form-control" id="exampleInputText" name="cTanggalPernikahan" placeholder="Tanggal Nikah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaAyahMempelaiLaki" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaIbuMempelaiLaki" placeholder="Nama Ibu">
                      </div>
                      <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaLengkapMempelaiPerempuan" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cAlamatMempelaiPerempuan" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaAyahMempelaiPerempuan" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" name="cNamaIbuMempelaiPerempuan" placeholder="Nama Ibu">
                      </div>
                      <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
        </section>
    </div>
            <!-- /.card -->