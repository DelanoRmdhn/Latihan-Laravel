{{-- @dd($dataSiswa); --}}

<section id="formulir-pengaduan">
  <div class="container px-4" style="height: 100vh;">
      <div class="row justify-content-center align-items-center">
          <div class="col-md-6 col-sm-6 shadow rounded px-5" style="border: 1px solid lightblue;">
              <div class="my-5"></div>
              <form id="formulir" action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="pending" class="hidden" name="status">
                  <div class="input-control my-1">
                      <label for="kategori" class="my-2">Kategori Aspirasi : </label>
                      <select name="category_id" id="kategori" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->ket_kategori}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="input-control my-1">
                    <label for="siswa" class="my-2">Nis Siswa : </label>
                    <select name="nis" id="siswa" class="form-select">
                      @foreach ($siswas as $siswa)
                      <option value="{{$siswa->id}}">{{$siswa->nis}}</option>
                      @endforeach
                    </select>
                </div>
                  <div class="input-control my-1">
                    <label for="aspirasi" class="my-2">Aspirasi Anda : </label>
                    <input type="text" class="form-control" id="aspirasi" name="aspirasi">
                  </div>
                  <div class="input-control my-1">
                      <label for="lokasi_kejadian" class="my-2">Lokasi Kejadian : </label>
                      <input type="text" class="form-control" id="lokasi_kejadian" name="lokasi_kejadian">
                  </div>
                  <div class="input-control my-1">
                      <label for="keterangan" class="my-2">Keterangan Detail : </label>
                      <textarea name="keterangan" id="keterangan" cols="20" rows="3" class="form-control"></textarea>
                  </div>
                  <div class="input-control my-1">
                      <label for="gambar_kejadian" class="my-2">Photo Kejadian : </label>
                      <input type="file" class="form-control" id="gambar_kejadian" name="gambar_kejadian">
                  </div>
                  <button type="submit" class="btn btn-primary my-4 px-4 py-2 text-white" style="float: right !important;">Submit</button>
              </form>
          </div>
      </div>
  </div>
</section>