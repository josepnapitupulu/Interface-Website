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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Martumpol</h3>
              </div><br><br>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <td>Nama Mempelai Laki-Laki</td>
                      <td>{{$martumpols['nama_mempelai_laki']}}</td>
                    </tr>
                    <tr>
                      <td>Alamat Mempelai Laki-Laki</td>
                      <td>{{$martumpols['alamat_mempelai_laki']}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Martumpol</td>
                      <td>{{$martumpols['tanggal_martumpol']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah Mempelai Laki-Laki</td>
                      <td>{{$martumpols['nama_ayah_mempelai_laki']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu Mempelai Laki-Laki</td>
                      <td>{{$martumpols['nama_ibu_mempelai_laki']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Mempelai Perempuan</td>
                      <td>{{$martumpols['nama_lengkap_mempelai_perempuan']}}</td>
                    </tr>
                    <tr>
                      <td>Alamat Mempelai Perempuan</td>
                      <td>{{$martumpols['alamat_mempelai_perempuan']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah Mempelai Perempuan</td>
                      <td>{{$martumpols['nama_ayah_mempelai_perempuan']}}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu Mempelai Perempuan</td>
                      <td>{{$martumpols['nama_ibu_mempelai_perempuan']}}</td>
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