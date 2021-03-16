@extends('layouts.app')

@section('content')
	<div class="container content py-3">

		<div class="row">
			<div class="col">
				<div class="h4">
					ОВЕН-АВТО – официальный дилер Renault и LADA в городе Сыктывкаре.
				</div>
				<div class="py-3 text-justify">
					Приглашаем Вас посетить наши дилерские центры в Сыктывкаре на Гаражной 1. Шоурумы наших автосалонов порадуют незабываемой атмосферой мира автомобилей, а наши специалисты постараются сделать все, чтобы оправдать Ваши ожидания.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 ">
				<a name="salonrenault"></a>
				<div class="h5 mt-3">
					Дилерский центр Renault
					
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
					<div class="col">
						8 (8212) 288 588
					</div>
				</div>
				<div class="row">
					<div class="col">
						Сервисный центр
					</div>
					<div class="col">
						8 (8212) 288 575
					</div>
				</div>

				<div class="row pt-3">
					<div class="col">
						г. Сыктывкар ул. Гаражная д.1 (въезд со стороны улицы Димитрова)
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 ">
				<a name="salolnlada"></a>
				<div class="h5 mt-3">
					Дилерский центр Lada
					
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
					<div class="col">
						8 (8212) 239 235
					</div>
				</div>
				<div class="row">
					<div class="col">
						Сервисный центр
					</div>
					<div class="col">
						8 (8212) 239 235
					</div>
				</div>
				<div class="row pt-3">
					
					<div class="col">
						г. Сыктывкар ул. Гаражная д.1 (въезд со стороны улицы Гаражная)
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection

