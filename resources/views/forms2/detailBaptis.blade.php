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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Baptis</h3>
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
                      <td>NIK Anak</td>
                      <td>{{$baptis['nik']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap Anak</td>
                      <td>{{$baptis['nama_anak']}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Baptis</td>
                      <td>{{$baptis['tanggal_Baptis']}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>{{$baptis['tanggal_lahir']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah</td>
                      <td>{{$baptis['nama_ayah']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu</td>
                      <td>{{$baptis['nama_ibu']}}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{$baptis['alamat']}}</td>
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