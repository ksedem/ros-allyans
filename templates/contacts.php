<div id="request" style="margin-top:1.5%; margin-right:3%">
		<p>Отправить заявку</p>
	</div>
	<form id="form_request" action="" method="post">
		<div class="form-group">
			<div class="close_req" style="margin-top:1%; margin-right:1%">&#10006;</div>
			<label for="name" style="padding-top:2%">ФИО</label>
			<input type="text" name="name" class="form-control" id="inp_textbox" placeholder="Введите ФИО">
			<label for="name">email</label>
			<input type="text" name="email" class="form-control" id="inp_textbox" placeholder="Введите ваш email">
			<label for="name">Контактный телефон</label>
			<input type="number" name="phone" class="form-control" id="inp_textbox" placeholder="Введите номер контактного телефона">
			<label for="comment">Сообщение</label>
			<textarea rows="6" class="form-control" id="inp_textbox" placeholder="Введите сообщение о заинтересовавшем продукте" name="text"></textarea>
			<button type="submit" class="btn btn-default" id="button" onclick="FormRequest('messegeResult', 'form_request', 'request.php')">Отправить</button>
		</div>
		
	</form>
	<div id="messegeResult">
		<div class="close_req_mes" style="margin-top:1%; margin-right:1%">&#10006;</div>
		<p class="messegeText">Ваше сообщение успешно отправлено</p>
	</div>
	<div id="messegeResult_err">
		<div class="close_req_mes2" style="margin-top:1%; margin-right:1%">&#10006;</div>
		<p class="messegeText">Ошибка. Ваше сообщение не отправлено.</p>
	</div>
<div class="container-fluid">
	<div class="row">
		<div id="map" class="col-sm-6">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abaff50e2f7af2de3b631d2e58dea7eb66c422751dc58916fc2e5e0c0883f62c5&amp;width=542&amp;height=381&amp; max-width=100% lang=ru_RU&amp;scroll=true"></script>
		</div>
		<div class="col-sm-6">
			<div id="block_loc">
				<img src="images/location.png" alt="location" style="width:10%; height:10%; float:left; margin-left:6%; margin-right:4%">
				<p id="location_text">630015, г. Новосибирск, ул. Королёва, 29,оф.702</p>
			</div>
			<div id="block_loc">
				<img src="images/phone_1.png" alt="phone" style="width:10%; height:10%; float:left; margin-left:6%; margin-right:4%; margin-top:2%">
				<p id="location_text">+7 (499) 755-65-57</p>
				<p id="location_text" style="margin-left:20%; margin-top:1%; padding-top:0%">+7 (383) 279-24-30 (бухгалтерия)</p>
			</div>
			<div id="block_loc">
				<img src="images/mail.png" alt="mail" style="width:10%; height:10%; float:left; margin-left:6%; margin-right:4%; margin-top:2%">
				<p id="location_text">info@ros-allyans.ru</p>
			</div>
		</div>
	</div>
</div>