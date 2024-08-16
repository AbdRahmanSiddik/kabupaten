@extends('layouts.admin')

@section('content')
  <div class="sa4d25">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="st_title"><i class="uil uil-analysis"></i> Jual Produk Baru</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="course_tabs_1">
            <form action="/admin/produk-baru" method="POST" enctype="multipart/form-data" class="course__form">
              @csrf
              <div class="general_info10">
                <div class="row">
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <label>Nama Produk <small class="text-danger">*</small></label>
                      <div class="ui left icon input swdh19">
                        <input class="prompt srch_explore" type="text" placeholder="Course title here"
                          name="nama_produk" data-purpose="edit-course-title">
                        <div class="badge_num">60</div>
                      </div>
                      <div class="help-block">(Please make this a maximum of 100 characters and
                        unique.)</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <label>Harga <small class="text-danger">*</small></label>
                      <div class="ui left icon input swdh19">
                        <input class="prompt srch_explore" type="text" placeholder="Course title here" name="harga">
                      </div>
                      <div class="help-block">(masukkan harga produk ini.)</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <label>Stok <small class="text-danger">*</small></label>
                      <div class="ui left icon input swdh19">
                        <input class="prompt srch_explore" type="text" placeholder="Course title here" name="stok">
                      </div>
                      <div class="help-block">(masukkan harga produk ini.)</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <div class="mt-30 lbel25">
                        <label> Category*</label>
                      </div>
                      <select class="selectpicker" title="Select Category" name="kategori" id="kategori"
                        data-live-search="true">
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($kategoris as $item)
                          <optgroup label="{{ $item->nama_kategori }}">
                            @foreach ($item->subs as $get)
                              <option value="{{ $get->id_sub_kategori }}">{{ $get->nama_sub_kategori }}</option>
                            @endforeach
                          </optgroup>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <label>Varian Produk</label>
                      <div id="input-container">
                        <div class="ui left icon input swdh19 mt-2 mb-2">
                          <input class="prompt srch_explore" type="text" placeholder="Varian: Original, Pedas"
                            name="nama_varian[]" data-purpose="edit-course-title" id="main[title]" value="">
                        </div>
                      </div>
                      <button class="btn btn-danger rounded mt-2 mb-2" id="add-input-btn"
                        type="button"><strong>+</strong></button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="ui search focus mt-30 lbel25">
                      <label>Ukuran Produk</label>
                      <div id="input-containers">
                        <div class="ui left icon input swdh19 mt-2 mb-2">
                          <input class="prompt srch_explore" type="text" placeholder="Ukuran: XL, 100g, 1kg"
                            name="ukuran[]" data-purpose="edit-course-title" id="main[title]" value="">
                        </div>
                      </div>
                      <button class="btn btn-danger rounded mt-2 mb-2" id="add-input-btnn"
                        type="button"><strong>+</strong></button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5 col-md-6 mb-2">
                    <label class="label25 text-left">Thumbnail Produk <small>*</small></label>
                    <div class="thumb-item">
                      <!-- Gambar default -->
                      <img id="thumbnail-preview" src="{{ asset('') }}assets/images/thumbnail-demo.jpg"
                        alt="Thumbnail Produk" style="width: 100%; height: auto;">
                      <div class="thumb-dt">
                        <div class="upload-btn">
                          <!-- Input file -->
                          <input class="uploadBtn-main-input" type="file" id="ThumbFile__input--source"
                            name="thumbnail" accept="image/*">
                          <label for="ThumbFile__input--source" title="Zip">Choose
                            Thumbnail</label>
                        </div>
                        <span class="uploadBtn-main-file">Size: 590x300 pixels. Supports: jpg,
                          jpeg, or png</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="editor" class="label25 text-left">Deskripsi Produk</label>
                    <textarea name="deskripsi" id="editor" rows="100"></textarea>
                  </div>
                </div>
                {{-- <input type="text" name="{{ auth()->user()->name }}"> --}}

                <div class="flex gap-2 mt-4 mb-4">
                  <button class="btn btn-default steps_btn "><a href="" class=" btn-default">
                      Cancel </a> </button>
                  <button type="submit" class="btn btn-default steps_btn">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('ThumbFile__input--source').addEventListener('change', function(event) {
      // Ambil file yang dipilih
      var file = event.target.files[0];

      // Pastikan file ada dan merupakan gambar
      if (file && file.type.startsWith('image/')) {
        var reader = new FileReader();

        // Ketika file telah dibaca, tampilkan hasilnya di <img>
        reader.onload = function(e) {
          document.getElementById('thumbnail-preview').src = e.target.result;
        };

        // Baca file sebagai URL data
        reader.readAsDataURL(file);
      }
    });

    document.getElementById('add-input-btn').addEventListener('click', function() {
      // Buat elemen baru untuk inputan dan tombol 'x'
      var newInputGroup = document.createElement('div');
      newInputGroup.classList.add('ui', 'left', 'icon', 'input', 'swdh19');
      newInputGroup.style.position = "relative";

      // Buat elemen input
      var newInput = document.createElement('input');
      newInput.classList.add('prompt', 'srch_explore');
      newInput.type = 'text';
      newInput.name = 'nama_varian[]';
      newInput.placeholder = 'Varian Baru';
      newInput.setAttribute('data-purpose', 'edit-course-title');
      newInput.maxLength = 60;

      // Buat tombol 'x' untuk menghapus inputan di sebelah kanan
      var deleteButton = document.createElement('button');
      deleteButton.innerHTML = 'x';
      deleteButton.classList.add('btn', 'btn-danger', 'mx-4');
      deleteButton.style.position = 'absolute';
      deleteButton.style.right = '-40px';
      deleteButton.style.top = '50%';
      deleteButton.style.transform = 'translateY(-50%)';

      // Tambahkan event listener untuk menghapus input group ketika tombol 'x' diklik
      deleteButton.addEventListener('click', function() {
        newInputGroup.remove();
      });

      // Masukkan input dan tombol 'x' ke dalam newInputGroup
      newInputGroup.appendChild(newInput);
      newInputGroup.appendChild(deleteButton);

      // Tambahkan elemen baru ke container
      document.getElementById('input-container').appendChild(newInputGroup);
    });

    document.getElementById('add-input-btnn').addEventListener('click', function() {
      // Buat elemen baru untuk inputan dan tombol 'x'
      var newInputGroup = document.createElement('div');
      newInputGroup.classList.add('ui', 'left', 'icon', 'input', 'swdh19');
      newInputGroup.style.position = "relative";

      // Buat elemen input
      var newInput = document.createElement('input');
      newInput.classList.add('prompt', 'srch_explore');
      newInput.type = 'text';
      newInput.name = 'ukuran[]';
      newInput.placeholder = 'Ukuran baru';
      newInput.setAttribute('data-purpose', 'edit-course-title');
      newInput.maxLength = 60;

      // Buat tombol 'x' untuk menghapus inputan di sebelah kanan
      var deleteButton = document.createElement('button');
      deleteButton.innerHTML = 'x';
      deleteButton.classList.add('btn', 'btn-danger', 'mx-4');
      deleteButton.style.position = 'absolute';
      deleteButton.style.right = '-40px';
      deleteButton.style.top = '50%';
      deleteButton.style.transform = 'translateY(-50%)';

      // Tambahkan event listener untuk menghapus input group ketika tombol 'x' diklik
      deleteButton.addEventListener('click', function() {
        newInputGroup.remove();
      });

      // Masukkan input dan tombol 'x' ke dalam newInputGroup
      newInputGroup.appendChild(newInput);
      newInputGroup.appendChild(deleteButton);

      // Tambahkan elemen baru ke container
      document.getElementById('input-containers').appendChild(newInputGroup);
    });
  </script>
@endsection
