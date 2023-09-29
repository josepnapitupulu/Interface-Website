@include('formSearch.header')
@include('formSearch.navbar')
@include('formSearch.sidebar')
@include('formSearch.footer')

<!-- Main content -->
<div class="content-wrapper"><br><br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Daftar Jemaat Martumpol</h3>
              </div><br>
              <div>
                <a href="{{route('forms6.lihatDaftarMartumpol')}}" class="btn btn-success float-right" id="buttonHeader">Tambah Martumpol</a>
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
                  @foreach($martumpols as $item)
                  <tr>
                    <td>{{$item['nama_mempelai_laki']}}</td>
                    <td>
                      <form action="{{ route('formSearch6.martumpolDelete', $item['ID']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sidi ini?')">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('forms6.detailMartumpol', $item['ID'])}}" class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></a>
                      <a href="{{route('forms6.editMartumpol', $item['ID'])}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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