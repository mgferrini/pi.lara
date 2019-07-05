<div class="row">
  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          @foreach(App\Category::with('subCategory')->where('parent', '=', '0' )->get() as $item)
            @if($item->subCategory->count()>0)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{$item->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach($item->subCategory as $subCategory)
                    <a class="dropdown-item" href="{{ url('category/'. $subCategory->id . '/show') }}">{{$subCategory->name}}</a>
                  @endforeach
                </div>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ url('category/'. $item->id . '/show') }}">{{$item->name}}</a>
              </li>
            @endif

          @endforeach
          <li class="navCat">
            <form class="form-inline my-2 my-lg-0" action="{{ url("search")  }}">
              <input class="form-control mr-sm-1 icon" type="search" placeholder="" aria-label="Search" name="data">
              <a class="fas fa-search nav-item fa-lg icon" type="submit"></a>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

