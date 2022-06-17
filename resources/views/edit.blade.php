<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body> 
    @if(session('msg'))
    <span class="text-success">{{session('msg')}}</span>
    @endif
    {{-- <a href="{{url('show')}}" class="btn btn-primary">table</a> --}}
      <div class="container my-5">
          <div class="row">
              <div class="col-6">
               
                <form action="{{url('update',['id'=>$edit->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  @if(session('msg'))
                  <span class="text-success">{{session('msg')}}</span>
                  @endif
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="{{$edit->name}}">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>

                    <div class="form-group">
                     <label>Password</label>
                      <input type="text" class="form-control" name="password" value="{{$edit->password}}">
                      
                      @error('password')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                   
                    <div class="form-group">
                      <label>profile</label>
                      <input type="file" class="form-control" name="file" >
                      <img src="{{asset('upload/'.$edit->file)}}" width="70px" height="70px" alt="image">
                      @error('file')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>
                    
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
              </div>
          </div>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>