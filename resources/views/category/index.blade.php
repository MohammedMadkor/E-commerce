@include('layouts.navbar')
@include('layouts.header')
<div class="container">
    <a href="{{url('category/create')}}"><button type="button" class="btn btn-primary">addcategory</button></a>
<table class="table table-striped" >
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        @if ($auth->role == 2)
        <th scope="col">action</th>
        @endif
    </tr>
    </thead>
    <tbody>
        @foreach ($category as $c )


    <tr>
        <th scope="row">{{$loop->index + 1}}</th>

        <td>{{$c->name}}</td>
        @if ($auth->role == 2)
        <td>
            <a href="{{url('category/update',$c->id)}}"><i class="fa-solid fa-pen-to-square  q1"></i></a>
            <a href="{{url('category/delete',$c->id)}}"><i class="fa-solid fa-trash q2"></i></a>
        </td>
        @endif

    </tr>
    @endforeach


    </tbody>
</table>
</div>

@include('layouts.footer')
