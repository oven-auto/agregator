@extends('layouts.app')

@section('content')
	<div class="container content py-3">

		<div class="row">
			<div class="col">
				<div style="font-size: 1.6rem">
					ОВЕН-АВТО – официальный дилер Renault и LADA в городе Сыктывкаре.
				</div>
				<div class="py-3">
					Приглашаем Вас посетить наши дилерские центры в Сыктывкаре на Гаражной 1. Шоурумы наших автосалонов порадуют незабываемой атмосферой мира автомобилей, а наши специалисты постараются сделать все, чтобы оправдать Ваши ожидания.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="text-center py-1">
					<img src="{{asset('images/facadrenault.jpg')}}">
				</div>

				<a href="http://renault.oven-auto.ru" class="btn btn-warning btn-large btn-block">
					Автомобили в продаже
				</a>
			</div>

			<div class="col-6">
				<div class="text-center py-1">
						<img src="{{asset('images/facadlada.jpg')}}">
				</div>
				<a href="http://lada.oven-auto.ru" class="btn btn-dark btn-large btn-block">
					Автомобили в продаже
				</a>
			</div>
		</div>

		<div class="row pt-3">
			<div class="col">
				<div class="h4">
					Контакты
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="h5">
					Салон Renault
				</div>
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

			<div class="col">
				<div class="h5">
					Салон Lada
				</div>
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

