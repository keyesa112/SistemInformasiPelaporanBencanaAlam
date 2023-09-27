@extends('layouts/main')

@section('isi-konten')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Jawa Timur</h2>
              <p>Mari bersama-sama melaporkan bencana yang terjadi di sekitar Jawa Timur
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
CKEDITOR.replace( 'content' );

@endsection
