<div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-collapse collapse app-navbar-collapse">
      <ul class="nav nav-stacked">
        <li><a href="{{ url('/') }}">News</a></li>
          <li class="dropdown {{ Route::currentRouteNamed('products') ? 'open' : '' }}">
			<a href="{{ route('products') }}">Shop</a>
			<ul class="dropdown-menu">
				<li><a href="{{ route('products') }}">Shirts</a></li>
				<li><a href="{{ route('products') }}">Sweatshirts</a></li>
				<li><a href="{{ route('products') }}">Jackets</a></li>
				<li><a href="{{ route('products') }}">Hats</a></li>
				<li><a href="{{ route('products') }}">Tops</a></li>
				<li><a href="{{ route('products') }}">Trousers</a></li>
				<li><a href="{{ route('products') }}">Jeans</a></li>
				<li><a href="{{ route('products') }}">Shoes</a></li>
			</ul>
		</li>
        <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="{{ Route::currentRouteNamed('cart') ? 'active' : '' }}"><a href="#">Cart</a></li>
        <li><a href="#">Facebook</a></li>
    </div><!--/.nav-collapse -->
  </div>
</div>
