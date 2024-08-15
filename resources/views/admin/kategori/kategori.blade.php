@extends('layouts.admin')

@section('content')
  <div class="sa4d25">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="st_title"><i class="uil uil-book-alt"></i>Kategori</h2>
        </div>
        <div class="col-md-12">
          <div class="card_dash1">
            <div class="card_dash_left1">
              <i class="uil uil-book-alt"></i>
              <h1>Jump Into Course Creation</h1>
            </div>
            <div class="card_dash_right1">
              <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Create
                Kategori</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-pane fade show active" id="pills-my-courses">
            <div class="table-responsive mt-30">
              <table class="table ucp-table">
                <thead class="thead-s">
                  <tr>
                    <th class="text-center" scope="col">Item No.</th>
                    <th>Kategori</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kategori as $get)
                    <tr>
                      <td class="text-center">{{ $get->created_at }}</td>
                      <td>{{ $get->nama_kategori }}</td>
                      <td class="text-center">
                        <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                        <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                      </td>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
