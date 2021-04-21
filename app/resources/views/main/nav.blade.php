
	<nav class="navbar navbar-expand-lg navbar-light  py-1 " >
	  <div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#salonrenault" style="">Автосалон Renault</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#salonlada" style="">Автосалон Lada</a>
		      </li>
		      @if(isset($actionLinks) && count($actionLinks))
		      	@foreach($actionLinks as $itemLink)
		      		<li class="nav-item">
				        <a target="_blank" class="nav-link" href="http://promo.oven-auto.ru/content/view?id={{$itemLink->id}}" style="">
				        	{{$itemLink->name}}
				        </a>
				    </li>
		      	@endforeach
		      @endif
		    </ul>
		  </div>
		</div>
	</nav>
