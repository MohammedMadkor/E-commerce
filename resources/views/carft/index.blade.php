@include('layouts.header')
<div class="container my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">category</th>
            <th scope="col">prand</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">cost</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>

    @foreach ($carft as $c )
    <tr>
        <th scope="row">{{$loop->index + 1}}</th>
        <td >{{$c->category}} </td>
        <td >{{$c->prand}} </td>
        <td >{{$c->price}} </td>
        <td >{{$c->quantity}} </td>
        <td >{{$c->total_price }} </td>
        <td> <a href="{{url('carft/delete',$c->id)}}"><i class="fa-solid fa-trash q2"></i></a> </td>
    </tr>


    @endforeach
    <tr>
        <td colspan="5" style="text-align: center">total_cost</td>
        <td>{{$count}}</td>
        <td>  <button type="submit" class="btn btn-primary"> buy by visa</button></td>
    </tr>

        </tbody>
      </table>
</div>

@include('layouts.header')
