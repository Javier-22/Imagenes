@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Cargar Imagenes</h1>
          {{--  <div class="car">
               <div class="car body">
                <form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="file" id="" accept="image/*"><br>
                        @error('file')
                        <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Subir imagen</button>
                </form>
               </div>
           </div> --}}


          <form action="{{ route('admin.files.store') }}" 
          method="POST"
          class="dropzone"
          id="my-awesome-dropzone"></form>
    </div>
    </div>
    </div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"> </script>
  <script>Dropzone.options.myAwesomeDropzone = {
   headers:{
       'x-CSRF-TOKEN' : "{{ csrf_token()}}"

   },
   dictDefaultMessage: "Arrastre una imagen al recuadro para subirlo",
            acceptedFiles: "image/*",
            maxFilesize: 2,
            maxFiles: 4,
        };
    </script>
@endsection