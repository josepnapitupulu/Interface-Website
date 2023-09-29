@include('formSearch.navbar')
@include('formSearch.header')
@include('formSearch.sidebar') q 
@include('formSearch.footer')

<!-- Main content -->
<div class="content-wrapper"><br><br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Daftar Jemaat Sidi</h3>
              </div><br>
              <div>
                <button type="submit" class="btn btn-success float-right" id="buttonHeader">Tambah Sidi</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th width="120px"><center>Aksi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jadwals as $item)
                  <tr>
                    <td>{{$item['nama_minggu']}}</td>
                    <td>
                      <form action="{{ route('formSearch4.jadwalDelete', $item['ID']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sidi ini?')">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('forms4.detailJadwal', $item['ID'])}}" class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></a>
                      <a href="{{route('forms4.editJadwal', $item['ID'])}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </form>
                    </td>                    
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->