
	<nav class="navbar navbar-expand-lg navbar-light  py-1 " >
	  <div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Автосалон Renault
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="http://www.renault.oven-auto.ru/content/availablelist">Автомобили в продаже</a>
		          @if(isset($actionLinks) && isset($actionLinks[1]))
		          	@foreach($actionLinks[1] as $itemRenalt)
		          	<a target="_blank" class="nav-link" href="http://promo.oven-auto.ru/content/view?id={{$itemRenalt->id}}" style="">
			        	{{$itemRenalt->name}}
			        </a>
		          	@endforeach
		          @endif
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Автосалон Lada
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="https://oven-auto.lada.ru/ds/cars/">Автомобили в продаже</a>
		          @if(isset($actionLinks) && isset($actionLinks[2]))
		          	@foreach($actionLinks[2] as $itemRenalt)
		          	<a target="_blank" class="nav-link" href="http://promo.oven-auto.ru/content/view?id={{$itemRenalt->id}}" style="">
			        	{{$itemRenalt->name}}
			        </a>
		          	@endforeach
		          @endif
		        </div>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>
