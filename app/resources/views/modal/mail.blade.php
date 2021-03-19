<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">ОВЕН-АВТО</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		 		<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-parent">
				<div class="message"></div>
				<div class="input-group mb-3">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-user"></i></div>
			        </div>
			        <input type="text" class="form-control data-control" id="username" name="username"  placeholder="Ваше имя">
			    </div>
			</div>

			<div class="input-parent">
				<div class="message"></div>
			    <div class="input-group mb-3">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-phone"></i></div>
			        </div>
			        <input type="text" class="form-control data-control" id="userphone" name="userphone"  placeholder="Ваш телефон">
			    </div>
			</div>

			<div class="input-parent">
				<div class="message"></div>
			    <div class="input-group mb-3">
			        <div class="input-group-prepend">
			          <div class="input-group-text" style="display: block;"><i class="fa fa-comment"></i></div>
			        </div>
			        <textarea class="form-control data-control" id="userquestion" name="userquestion"  placeholder="Ваш вопрос" style="min-height: 150px;"></textarea>
			    </div>
			</div>

		    <div class="row soglasie-block" style="">
		    	<div class="col-2">
			    	<span class="checkbox-span">
			    		<input type="checkbox" name="soglasie">
			    	</span>
			    </div>
			    <div class="col-10">
			    	Даю согласие на обработку своих <a href="http://renault.oven-auto.ru/police.pdf" target="_blank">персональных данных</a>

			    </div>
		    </div>

		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-primary send disabled" data-url="{{route('ajax.send.mail')}}">Отправить</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
		</div>
	</div>
</div>