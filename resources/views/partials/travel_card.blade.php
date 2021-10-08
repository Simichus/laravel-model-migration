<div class="card bg-secondary text-white container">
    <div class="card-header">
      {{$package->package_name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$package->destination}}</h5>
      <p class="card-text">{{$package->description}}</p>
      <a href="{{route('packages.detail', ['id' => $loop->iteration])}}" class="btn btn-warning">Di più</a>
    </div>
  </div>