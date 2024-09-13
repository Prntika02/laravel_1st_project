
@extends ('layouts.FrontendLayout')

@section('title','-Add')

@section('content')
<!-- Form Starts -->
<div class="col-lg-5 mx-auto">
  <div class="card mt-5">
    <div class="card-header bg-dark text-light">
      <h6 class="text-center">Add New User</h6>
      </div>
      <div class="card-body">
        <form action="{{route('todo.store')}}" method="POST">
          @csrf       
          <input value="{{old('title')}}" name="title" type="text" class="form-control my-2" placeholder="Todo Title">
          @error('title')
          <span class="text-danger">{{ $message }}</span>
          @enderror

          <textarea name="detail" class="form-control my-2" placeholder="Todo Detail">{{old('detail')}}</textarea>
          @error('detail')
          <span class="text-danger">{{ $message }}</span>
          @enderror
    
          <input value="{{old('author')}}" name="author" type="text" class="form-control my-2" placeholder="Author">
          <!-- @error('author')
          <p class="text-danger">{{ $message }}</p>
          @enderror -->
         <button class="btn btn-dark W-100 rounded-0">Store Todo</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Form  Ends -->
 

@endsection

 
