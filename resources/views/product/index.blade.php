@include('layouts.navbar')
@include('layouts.header')
<div class="container ">
    <a href="{{url('product/create')}}"> <button type="button" class="btn btn-primary mb-2">addproduct</button></a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category_id</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">prand</th>
        <th scope="col">image</th>
        @if ($auth->role == 2)
        <th scope="col">action</th>
        @endif

    </tr>
    </thead>
    <tbody>
        @foreach ($product as $p)
        <tr>
            <th scope="row"> {{$loop->index+1}}</th>
            <td>{{$p->Category->name}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->prand}}</td>
            <td>
                <div class="ads-thumbnail">
                    <img src="{{ $p->image }}" class="attachment-full size-full wp-post-image img-fluid"
                      style=" border-radius: 8px; width: 100px; height: 80px;">
                  </div>
            </td>
            @if ($auth->role == 2)
            <td>
                <a href="{{url('product/update',$p->id)}}"><i class="fa-solid fa-pen-to-square q1"></i></a>
                <a href="{{url('product/delete',$p->id)}}"><i class="fa-solid fa-trash q2"></i></a>
            </td>
            @endif
    </tr>

        @endforeach

    </tbody>
  </table>
</div>

@include('layouts.footer')
