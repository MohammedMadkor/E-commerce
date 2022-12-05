@include('layouts.navbar')
@include('layouts.header')
<div class="container">
    <a href="{{url('slider/create')}}"> <button type="button" class="btn btn-primary  mb-2"> add slider</button></a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">image</th>
        @if ($auth->role == 2)
        <th scope="col">action</th>
        @endif
      </tr>
    </thead>
    <tbody>
        @foreach ($slider as $s)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>
                <div>
                    <img src="{{$s->image}}" alt=""style=" border-radius: 8px; width: 100px; height: 80px;">

                </div>
            </td>
            @if ($auth->role == 2)
            <td>

                <a href="{{url('slider/update',$s->id)}}"><i class="fa-solid fa-pen-to-square q1"></i></a>
                <a href="{{url('slider/delete',$s->id)}}"><i class="fa-solid fa-trash q2"></i></a>
            </td>
            @endif

          </tr>

        @endforeach

    </tbody>
  </table>
</div>
@include('layouts.footer')
