@include('layouts.navbar')
@include('layouts.header')
<div class="container">
<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">role</th>
        @if ($auth->role == 2)
        <th scope="col">action</th>
        @endif

    </tr>
    </thead>
    <tbody>
        @foreach ($user as $u)
        <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>
                @if($u->role == 0)
                User
                @elseif ($u->role == 1)
                Moderate
                @elseif ($u->role == 2)
                Admin
                @endif
            </td>
            @if ($auth->role == 2)
            <td>
                <a href="{{url('user/update',$u->id)}}"><i class="fa-solid fa-pen-to-square q1"></i></a>
                <a href="{{url('user/delete',$u->id)}}"><i class="fa-solid fa-trash q2"></i></a>
            </td>
            @endif
        </tr>
        @endforeach

</tbody>
</table>
</div>
@include('layouts.footer')
