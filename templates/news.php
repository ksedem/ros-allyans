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
<div id="news" class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<p id="header" style="padding-left:6%">НОВОСТИ</p>
			<p id="point_news">31.12.2017 г. ООО "Рос-Альянс" поздравляет всех с наступающим 2018 годом!</p>
			<p id="point_news">10.12.2017 г. Получено благодарственное письмо от ООО "АКРОС". <a id="point_news_a" href="images/letter.pdf" target="_blank">Посмотреть.</a></p>
			<p id="point_news">10.03.2017 г. У нас новый номер телефона офиса: +7 (499) 755-65-57.</p>
			<p id="point_news">20.02.2017 г. Наша компания поставляет материалы для месторождения Требса и Титова (крупнейшее материковое нефтяное месторождение России, расположенное на северо-востоке Ненецкого автономного округа).</p>
			<p id="point_news">10.02.2017 г. Мы начинаем отгрузки химии для Мессояхского месторождения (Мессояхское месторождение расположено на Гыданском полуострове в Тазовском районе Ямало-Ненецкого АО в 340 км к северу от г Новый Уренгой).</p>
			<p id="point_news">20.01.2017 г. Компания ООО "РОС-АЛЬЯНС" осуществила поставку химических реагентов для Тагульского и Сузунского месторождения (Север Красноярского края).</p>
			<p id="point_news">20.12.2016 г. В нашу складскую программу включён Сульфированный асфальт.</p>
			<p id="point_news">04.07.2016 г. Теперь мы можем осуществлять поставку химии с наших складов напрямую до месторождений.</p>
			<p id="point_news">20.06.2016 г. ООО "Рос-Альянс" стал официальным дилером завода ООО "Миньярский карьер".</p>
			<p id="point_news">01.03.2016 г. В нашу складскую программу включён концентрат Баритовый (КБ-3)</p>
			<p id="point_news">12.02.2016 г. На складе сформирован запас Карбоната кальция МК-10,60,130 по 200 тонн каждой фракции.</p>
			<p id="point_news">13.01.2016 г. Открытие складов в Нягани и Пыть-Яхе.</p>
		</div>
	</div>
</div>