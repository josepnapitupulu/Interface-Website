@include('forms.header')
@include('forms.navbar')
@include('forms.sidebar')
@include('forms.footer')

<div class="content-wrapper"><br><br>
  <section class="content">
      <div class="container-fluid">
          <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Detail Data Jemaat</h3>
              </div><br><br>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bio Data</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>NIK</td>
                      <td>{{$jemaats['nik']}}</td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td>{{$jemaats['nama_jemaat']}}</td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir</td>
                      <td>{{$jemaats['tempat_lahir']}}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>{{$jemaats['jenis_kelamin']}}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{$jemaats['alamat']}}</td>
                    </tr>
                    <tr>
                      <td>No_HP</td>
                      <td>{{$jemaats['no_hp']}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div><br>
              <!-- /.card-body -->
              <div>
                <button class="btn btn-default" id="buttonKembali">Kembali</button>
                <button class="btn btn-warning" id="buttonEdit">Edit</button>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>