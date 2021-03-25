@extends('layouts.app')

@section('content')
	<div class="container content py-3">

		<div class="row">
			<div class="col">
				<div class="h4">
					<h1>ОВЕН-АВТО – официальный дилер Renault и LADA в городе Сыктывкаре.</h1>
				</div>
				<div class="py-3">
					Приглашаем Вас посетить наши дилерские центры в Сыктывкаре на Гаражной 1. Шоурумы наших автосалонов порадуют незабываемой атмосферой мира автомобилей, а наши специалисты постараются сделать все, чтобы оправдать Ваши ожидания.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 ">
				<a name="salonrenault"></a>
				<div class="h5 mt-3"><h5>
					Дилерский центр Renault
					</h5>
				</div>

				<div class="text-center py-1 ">
					<img src="{{asset('images/facadrenault.jpg')}}">
				</div>

				<a href="http://renault.oven-auto.ru" class="btn btn-large btn-block custom-btn btn-renault py-2 my-3">
					Автомобили в продаже
				</a>

				<div class="row">
					<div class="col">
						Отдел продаж
					</div>
					<div class="col text-right">
						8 (8212) 288 588
					</div>
				</div>
				<div class="row">
					<div class="col">
						Сервисный центр
					</div>
					<div class="col text-right">
						8 (8212) 288 575
					</div>
				</div>

				<div class="row pt-3">
					<div class="col">
						г. Сыктывкар ул. Гаражная д.1 (въезд со стороны улицы Димитрова)
					</div>
				</div>


				<div class="row text-center pt-5 pb-4 d-flex d-sm-none">
					<div class="col" style="">
						<div type="" class="callback-bt" >
						    <a class="text-call" href="tel: +78212288588">
						        <i class="fa fa-phone"></i>
						        <span>Заказать<br>звонок</span>
						    </a>
						</div>
					</div>

					<div class="col">
						<div type="" class="email-bt" data-url="{{route('ajax.show.modal',['brand'=>'renault'])}}">
						    <div class="text-call">
						        <i class="fa fa-envelope" aria-hidden="true"></i>
						        <span>Обратная<br>связь</span>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col d-block d-sm-none"><div style="width: 100%;background: #ddd;height: 1px;" class="mt-3 "></div></div>
			<div class="col-xs-12 col-sm-6 ">
				<a name="salonlada"></a>
				<div class="h5 mt-3"><h5>
					Дилерский центр Lada
					</h5>
				</div>
				<div class="text-center py-1 ">
					<img src="{{asset('images/facadlada.jpg')}}">
				</div>
				<a href="http://lada.oven-auto.ru" class="btn btn-large btn-block btn-lada my-3 custom-btn py-2">
					Автомобили в продаже
				</a>

				<div class="row">
					<div class="col">
						Отдел продаж
					</div>
					<div class="col text-right">
						8 (8212) 239 235
					</div>
				</div>
				<div class="row">
					<div class="col">
						Сервисный центр
					</div>
					<div class="col  text-right">
						8 (8212) 239 235
					</div>
				</div>
				<div class="row pt-3">
					
					<div class="col">
						г. Сыктывкар ул. Гаражная д.1 (въезд со стороны улицы Гаражная)
					</div>
				</div>
				
				<div class="row text-center pt-5 pb-4  d-flex d-sm-none">
					<div class="col" style="">
						<div type="" class="callback-bt">
						    <a class="text-call" href="tel: +78212288588">
						        <i class="fa fa-phone"></i>
						        <span>Заказать<br>звонок</span>
						    </a>
						</div>
					</div>

					<div class="col">
						<div type="" class="email-bt" data-url="{{route('ajax.show.modal',['brand'=>'lada'])}}">
						    <div class="text-call">
						        <i class="fa fa-envelope" aria-hidden="true"></i>
						        <span>Обратная<br>связь</span>
						    </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog">
	</div>
@endsection

