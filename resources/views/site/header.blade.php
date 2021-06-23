 <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a></div>
      @if(isset($menu))
    <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
      <div class="navbar-header">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        </div>
      <div class="collapse navbar-collapse navStyle" id="navbarSupportedContent">
          <ul class="nav nav-pills nav-fill" id="mainNav">
            @foreach($menu as $item )
            <li class="nav-item"><a href="#{{ $item['alias']  }}" class="nav-link">{{ $item['title']  }}</a></li>
            @endforeach
          </ul>
      </div>
   </nav>
     @endif
 </div>
</div>
@if(session('error'))
  <div class="alert alert-success">
       {{ session('error') }}
  </div>
@endif
@if(count($errors) > 0 )
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif