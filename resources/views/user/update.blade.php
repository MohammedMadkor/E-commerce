@include('layouts.header')
<div class="card" style="width: 18rem; margin-top: 100px; margin-left: 450px;">
    <div class="card-body text-center">
        <form action="{{url('user/edit',$user->id)}}" method="post" >
            @csrf

            <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            @error('name')
            <span class="text-danger err-msg-name" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror

            </div>
            <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            @error('email')
            <span class="text-danger err-msg-email" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
            <select class="form-select mb-3 " aria-label="Default select example" name="role">
                <option selected disabled> choose type</option>
                <option {{ $user->role == 0 ? "selected" : "" }} value="0">User</option>
                <option {{ $user->role == 1 ? "selected" : "" }} value="1">Moderate</option>
                <option {{ $user->role == 2 ? "selected" : "" }} value="2">Admin</option>
              </select>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@include('layouts.footer')
