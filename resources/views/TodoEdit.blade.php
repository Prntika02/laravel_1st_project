
@extends ('layouts.FrontendLayout')

@section('title','-Add')

@section('content')
<!-- Form Starts -->
<div class="col-lg-5 mx-auto">
  <div class="card mt-5">
    <div class="card-header bg-dark text-light">
      <h6 class="text-center">Edit User</h6>
      </div>
      <div class="card-body">
        <form action="{{route('todo.update',$todo->id)}}" method="POST">
          @csrf  
          @method('patch')   
          <input value="{{$todo->title}}" name="title" type="text" class="form-control my-2" placeholder="Todo Title">
          @error('title')
          <span class="text-danger">{{ $message }}</span>
          @enderror

          <textarea name="detail" class="form-control my-2" placeholder="Todo Detail">{{$todo->detail}}</textarea>
          @error('detail')
          <span class="text-danger">{{ $message }}</span>
          @enderror
    
          <input value="{{$todo->author}}" name="author" type="text" class="form-control my-2" placeholder="Author">

         <button class="btn btn-dark W-100 rounded-0">Update Todo</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Form  Ends -->
 

@endsection

 
