
@extends ('layouts.FrontendLayout')

@section('title','-All')
@section('content')

 <!-- Form Starts -->
<div class="col-lg-8 m-auto mt-5">
    <div class="table-responsive">
        <table class="table border">
            <tr class="table-primary">
                <th>#</th>
                <th>Todo</th>
                <th>Detail</th>
                <th>Author/User</th>
                <th>Status</th>
                <th></th>
            </tr>
@foreach($todos as $key=>$todo)
            <tr class="table-light">
                <td>{{$todos->firstItem() +$key}}</td>
                <td>
                <p class="m-0">{{$todo->title}}</p>
                <p class="m-0">{{$todo->created_at->diffForHumans()}}</p>
                </td>
               

                <td>{{$todo->detail}}</td>
                <td>{{$todo->author}}</td>
                <td>
                <a href="{{route('todo.status',$todo->id)}}">
                <span class="badge bg-{{$todo->is_complete ? 'success':'warning text-dark'}}">{{$todo->is_complete ?'Complete':'Pending'}}</span>
                </a>
               </td>
                <td>
                <div class="btn-group">
                    @if(!$todo->is_complete)
                    <a class="btn btn-sm btn-warning" href="{{route('todo.edit',$todo->id)}}">Edit</a>
                    @endif
                    <a class="btn btn-sm btn-danger"  href="{{route('todo.delete',$todo->id)}}">Delete</a>

            
                </div>
                </td>
            </tr>
 @endforeach
        </table>
        <span>{{$todos->links()}}</span>
    </div>
</div>
<!-- Form  Ends -->
 
@endsection
