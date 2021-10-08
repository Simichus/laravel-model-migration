<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{request()->routeIs('home') ? 'active bg-warning' : 'text-warning'}}" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{request()->routeIs('packages.index') ? 'active bg-warning' : 'text-warning'}}" href="{{route('packages.index')}}">Pacchetti</a>
    </li>
  </ul>