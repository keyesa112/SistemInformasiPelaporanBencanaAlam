@extends('layouts/main')

@section('isi-konten')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              {{-- <h2>Jawa Timur</h2> --}}
              <p style="font-size: 20px">Mari bersama-sama melaporkan bencana yang terjadi di sekitar kita,
                Kita perlu menjadi mata dan telinga yang peka terhadap bencana-bencana yang terjadi di sekitar kita.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/index">Home</a></li>
            <li>Melaporkan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

 <!-- ======= Contact Section ======= -->
 
 <div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                  
                      @csrf

                      <div class="form-group">
                          <label class="font-weight-bold">Provinsi</label>
                          <select name="provinsi" class="form-control" id="provinsi">
                            <option value="-1">--Pilih Provinsi--</option>
                            @foreach ($provinsi as $item)
                            <option data-id="{{ $item->id }}" value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                          <!-- error message untuk title -->
                          @error('provinsi')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                        
                      </div>
                      <div class="form-group d-none">
                          <label class="font-weight-bold">Kota</label>
                          <select name="kota" class="form-control" id="kota">
                          </select>
                          <!-- error message untuk title -->
                      
                      </div>
                      <div class="form-group d-none">
                          <label class="font-weight-bold">Kecamatan</label>
                          <select name="kecamatan" class="form-control" id="kecamatan">
                           
                          </select>
                          <!-- error message untuk title -->
                      </div>
                      <div class="form-group d-none">
                          <label class="font-weight-bold">kelurahan</label>
                          <select name="kelurahan" class="form-control" id="kelurahan">
                          
                          </select>
                          <!-- error message untuk title -->
                      </div>
                     
                      <div class="form-group">
                          <label class="font-weight-bold">GAMBAR</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                      
                          <!-- error message untuk title -->
                          @error('image')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label class="font-weight-bold">JUDUL</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">
                      
                          <!-- error message untuk title -->
                          @error('title')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label class="font-weight-bold">KONTEN</label>
                          <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>
                      
                          <!-- error message untuk content -->
                          @error('content')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                      <button type="reset" class="btn btn-md btn-warning">RESET</button>

                  </form> 
              </div>
          </div>
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

  <script>
  $(document).ready(function () {
    $('#provinsi').on('change', function () {
      let id = $(this).find('option:selected').attr('data-id');
      $.ajax({
        type: "get",
        url: `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id}.json`,
        success: function (response) {
          console.log(response);
          $('#kota').html('');
          $('#kota').append('<option value="-1">--Pilih Kota--</option>');
          response.map((e)=>{
            
            let optionelement = `<option data-id="${e.id}" value="${e.name}">${e.name}</option>`
            $('#kota').append(optionelement);

          });
          $('#kota').closest('.form-group').removeClass('d-none');
            
          
        }
      });
    });
    $('#kota').on('change', function () {
      let id = $(this).find('option:selected').attr('data-id');
      $.ajax({
        type: "get",
        url: `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id}.json`,
        success: function (response) {
          console.log(response);
          $('#kecamatan').html('');
          $('#kecamatan').append('<option value="-1">--Pilih kecamatan--</option>');
          response.map((e)=>{
            
            let optionelement = `<option data-id="${e.id}" value="${e.name}">${e.name}</option>`
            $('#kecamatan').append(optionelement);

          });
          $('#kecamatan').closest('.form-group').removeClass('d-none');
          
        }
      });
    });
    $('#kecamatan').on('change', function () {
      let id = $(this).find('option:selected').attr('data-id');
      $.ajax({
        type: "get",
        url: `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id}.json`,
        success: function (response) {
          console.log(response);
          $('#kelurahan').html('');
          $('#kelurahan').append('<option value="-1">--Pilih kelurahan--</option>');
          response.map((e)=>{
            
            let optionelement = `<option data-id="${e.id}" value="${e.name}">${e.name}</option>`
            $('#kelurahan').append(optionelement);

          });
          $('#kelurahan').closest('.form-group').removeClass('d-none');
          
        }
      });
    });
  
  });
</script>
{{-- CKEDITOR.replace( 'content' ); --}}

@endsection
