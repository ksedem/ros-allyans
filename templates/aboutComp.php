<div id="request" style="margin-right:3%">
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
<div id="page_about" class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<p id="header">О КОМПАНИИ</p>
			<div class="col-sm-12">
				<p id="text_about">ООО «Рос-Альянс» ориентировано на производство и поставку химических реагентов для нефтегазодобывающих предприятий. На сегодняшний день мы поставляем широкий спектр материалов российского и иностранного производства. Вся поставляемая нами продукция сертифицирована и проходит дополнительный контроль качества. Приоритетом компании «Рос-Альянс» является создание для наших партнёров особых условий, способствующих развитию долгосрочных отношений:</p>
			</div>
			<div class="col-sm-6">
				<ul id="text_about" style="padding-left:15%; padding-top:6%">
					<li>лучшее ценовое предложение на рынке</li>
					<li>отсрочка платежа до 60 дней</li>
					<li>поставка химических реагентов в минимальные сроки</li>
					<li>лабораторный контроль качества материала</li>
					<li>создание оптимальной складской программы</li>
					<li>оказание логистических услуг на выгодных условиях</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/1_1.png" alt="photo 1" style="width:630px; height:310px; max-width:100%">
						</div>
						<div class="item">
							<img src="images/4_1.png" alt="photo 2" style="width:630px; height:310px; max-width:100%">
						</div>
						<div class="item">
							<img src="images/6_1.png" alt="photo 3" style="width:630px; height:310px; max-width:100%">
						</div>
						<div class="item">
							<img src="images/5_1.png" alt="photo 4" style="width:630px; height:310px; max-width:100%">
						</div>
					</div>
				</div>	
			</div>
			<div class="col-sm-12">
				<p id="text_about" style="padding-bottom:3%">Мы стремимся стать лидером в области поставок химических реагентов для буровых растворов, наращивая номенклатуру и объём поставляемых материалов. Для удобства наших партнёров были созданы склады в городах Пыть-Ях и Нягань, что позволило существенно оптимизировать логистическую составляющую. Компания ООО «Рос-Альянс» не просто реализует профильную продукцию, но и оказывает полный комплекс услуг по ее доставке и хранению.</p>
			</div>
		</div>
	</div>
</div>