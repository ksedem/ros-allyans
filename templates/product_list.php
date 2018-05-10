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
<div class="container-fluid" id="shadow">
	<div class="row">
		<div class="col-sm-12">
			<div id="choice">
				<div class="var_choice">
					<a href="index.php?page=product" id="var_choice_a">Группы</a>
				</div>
				<div class="var_choice">
					<a href="index.php?page=product_list" id="var_choice_a">Список</a>
				</div>	
			</div>
		</div>
	</div>
	<div class="pr_details" id="barit">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Барит, как утяжелитель для буровых растворов предназначен для повышения плотности буровых растворов на водной и на углеводородной основе при осуществлении бурения разнообразных скважин. Баритовый концентрат относится к классу инертных веществ, не обладает радиоактивностью, безвреден для человеческого организма и окружающей среды.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Барит расфасовывается в МКР (мягкий полимерный контейнер 1 т).</p>
	</div>
	<div class="pr_details" id="microcalcit">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Микрокальцит используется в качестве карбонатного утяжелителя буровых растворов (для повышения плотности растворов на нефтяной основе при бурении нефтяных и газовых скважин), при этом размер частиц может варьироваться от 5 мкм до 1 мм.</p>
		<p class="pr_details_text">По сравнению с другими наполнителями (каолины, силикаты, кремнеземы) карбонат кальция выгодно отличается высокой белизной. Именно благодаря этим свойствам мрамор молотый занимает одно из ведущих мест по популярности среди наполнителей. Микрокальцит является экологически чистым наполнителем и может использоваться без ограничений.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Микрокальцит расфасовывается в МКР (мягкий полимерный контейнер 1 т).</p>
	</div>
	<div class="pr_details" id="kaliy">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Является ингибитором гидратации глин, который предотвращает разрушение стенок скважины. Может использоваться как истинный раствор для глушения скважин. Экологически безопасен.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Калий хлористый расфасовывается в МКР (мягкий полимерный контейнер 800 кг).</p>
	</div>
	<div class="pr_details" id="glina">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Органофильный структурообразователь буровых растворов на углеводородной основе, предназначенный для регулирования структурно-механических свойств буровых растворов на углеводородной основе, используемых при бурении в сложных геологических условиях и для вскрытия продуктивных пластов глубоких скважин с забойными температурами до 140 С°.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Органофильная глина упаковывается в мешки по 25 кг.</p>
	</div>
	<div class="pr_details" id="krakhmal">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Модифицированный крахмал для бурения получают путём термической обработки кукурузного крахмала на вальцовой сушилке с применением химических реагентов.</p>
		<p class="pr_details_text">Модифицированный крахмал предназначается для применения в нефтегазовой промышленности для регулирования фильтрации буровых растворов и стабилизации технологических идкостей,применяемых при строительстве и капитальном ремонте скважин.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Модифицированный крахмал расфасовывается в МКР (мягкий полимерный контейнер 1 т).</p>
	</div>
	<div class="pr_details" id="ksantan">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Ксантановая камедь используется для регулирования реологических свойств растворов при бурении, сделанных на основе воды. Она дает возможность повысить вязкость раствора даже при малой концентрации, камедь обеспечивает его удерживающие и выносящие характеристики.</p>
		<p class="pr_details_text">Она выступает в качестве основного компонента структурообразователя в ингибирующих растворах при бурении продуктивных пластов, а в особенности горизонтальных и наклонных участков скважин. Эффективность реагента сохраняется и в растворах с повышенной жесткостью из-за большой концентрации минеральных веществ.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Ксантановая камедь расфасовывается в бумажные мешки по 25 кг.</p>
	</div>
	<div class="pr_details" id="celluloza">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Полианионная целлюлоза ПАЦ-В и ПАЦ-Н предназначена для снижения фильтрации и стабилизации технологических жидкостей, используемых для бурения и ремонта нефтяных и газовых скважин.</p>
		<p class="pr_details_text">Полианионная целлюлоза в качестве понизителя фильтрации эффективна как в пресных, так и в насыщенных по хлориду натрия растворах.</p>
		<p class="pr_details_text">ПАЦ-Н используется для снижения фильтрации буровых растворов без изменения реологических свойств. ПАЦ-В используется для регулирования фильтрации и вязкости буровых растворов.</p>
		<p class="pr_details_text">Полианионная целлюлоза характеризуется более высокой термо- и солестойкостью относительно стандартной карбоксиметилцеллюлозы.</p>	
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Полианионная целлюлоза расфасовывается в полипропиленовые мешки с полиэтиленовыми вкладышами по 20 кг.</p>
	</div>
	<div class="pr_details" id="bik_natr">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Бикарбонат натрия NaHCO<sub>3</sub> — белый порошок. Получается в результате пропускания двуокиси углерода через насыщенный раствор карбоната натрия.</p>
		<p class="pr_details_text">Применяется для противодействия загрязнения цементом бентонитовых буровых растворов на водной основе. Концентрации от 1 до 14 кг/м.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Бикарбонат натрия упаковывается в 25 кг многослойные бумажные мешки.</p>
	</div>
	<div class="pr_details" id="grafit">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Графит представляет собой темно-серый кристаллический порошок, имеющий слабый металлический блеск. Химический состав порошка зависит от метода его производства, а также от степени чистоты исходных материалов. В зависимости от технологии флюс может использоваться в виде жидкости, пасты или порошка.</p>
		<p class="pr_details_text">Рекомендуется к применению на газовых месторождениях как противоприхватная добавка к буровому раствору при подготовке ствола к спуску обсадных колонн.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Графит расфасовывается в полипропиленовые и бумажные мешки весом 20-30 кг.</p>
	</div>
	<div class="pr_details" id="izvest">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Сильная щелочь, представляет собой порошок белого цвета. Мало растворима в воде. На воздухе активно взаимодействует с СО<sub>2</sub> , образуя карбонат кальция СаСО<sub>3</sub>. Поэтому при длительном хранении на воздухе активность извести резко снижается.</p>
		<p class="pr_details_text">Хорошие результаты получают при обработке известью БР, потерявших восприимчивость к химическим реагентам.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Известь гашеная поставляется в многослойных мешках номинальным весом 20 или 25 кг.</p>
	</div>
	<div class="pr_details" id="natr_edk">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Представляет собой бесцветную непрозрачную кристаллическую массу плотностью 2,13 г/см<sup>3</sup>, полностью растворяется в воде. Концентрации от 0,6 до 11 кг/м<sup>3</sup>. Большие добавки NaOH (0,5-0,8%) могут привести к повышению вязкости и водоотдачи.</p>
		<p class="pr_details_text">Применяется в химической, газовой, металлургической, нефтехимической промышленности. Для обезжиривания и обработки оборудования и тары на предприятиях пищевой промышленности (молокозаводы, масложировые комбинаты, ликероводочные предприятия, табачные фабрики и т.п.). В текстильной, стекольной, резинотехнической и в других отраслях.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Обычно поставляется в многослойных бумажных или пластиковых мешках весом 25 кг.</p>
	</div>
	<div class="pr_details" id="poliakrilamid">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Полиакриламид, в следствие высокой адсорбционной способности на глинистой поверхности, обладает смазочными и противосальниковыми характеристиками. Кроме того, плотная фильтрационная корка, образующаяся на стенках скважины в присутствии реагента, способствует сохранению устойчивости ствола скважины, предотвращению его осыпей и обвалов.</p>
		<p class="pr_details_text">Полимер полиакриламид прошел санитарно-эпидемиологическую экспертизу и допущен к использованию в России в качестве компонента бурового раствора. Реагент неопасен, экологически безвреден, в соответствии с ГОСТ 12.1.007.87 относится к группе малоопасных веществ.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Полиакриламид расфасовывается в бумажные мешки по 25 кг.</p>
	</div>
	<div class="pr_details" id="asphalt">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Данный реагент представляет собой частично водорастворимый многофункциональный реагент на битуминозной основе.</p>
		<p class="pr_details_text">Стабилизирует пласты глинистых сланцев, блокирует трещины ствола скважины, предотвращает осыпи и обвалы стенок скважин, а также набухание (гидратацию) глинистых сланцев. Понижает показатель фильтрации(водоотдачу) бурового раствора при высоких температурах и давлениях. Значительно улучшает смазывающие свойства бурового раствора (снижает липкость фильтрационной корки). Не требуется использование эмульгаторов для соответствующего перемешивания. Контролируемая растворимость в воде и нефти, что обеспечивает великолепные химические и физические характеристики. Экологически безопасен.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Сульфированный асфальт расфасовывается в полипропиленовые мешки с полиэтиленовыми вкладышами по 23 кг.</p>
	</div>
	<div class="pr_details" id="poliakrilat">
		<div class="close">&#10006;</div>
		<p class="pr_details_text">Модифицированный сополимер на основе высокомолекулярного полиакриламида, диспергированный в органическом растворителе. Эмульсия светло-серого цвета. Плотность, кг/м<sup>3</sup> -1030 – 1040. Полностью растворим в пресной воде. Термостойкость до 175<sup>o</sup>С.</p>
		<p class="pr_details_text">Применяется как полимер для бурения в качестве масло-вытесняющего агента, в частности – для добычи полезных ископаемых (нефти) из месторождений. Реагент улучшает свойства раствора, регулирует вязкость, снижает степень водопроницаемости, улучшает водоснабжение.</p>
		<img src="images/truck.png" alt="truck" style="width:13%; height:10%; margin-left:4%; margin-top:3%; margin-right:2%; float:left">
		<p class="pr_details_text">Поставка продукции потребителю производится ж/д и авто транспортом.</p>
		<p class="pr_details_text">Обычно поставляется в многослойных бумажных мешках весом 25 кг.</p>
	</div>
	<div id="page_about" class="row">
		<div class="col-sm-6">
			<ul id="prod_list_ul">
				<li class="prod_list_item" id="barit_li">Барит</li>
				<li class="prod_list_item" id="bik_natr_li">Бикарбонат натрия</li>
				<li class="prod_list_item" id="grafit_li">Графит</li>
				<li class="prod_list_item" id="izvest_li">Известь гидратная</li>
				<li class="prod_list_item" id="kaliy_li">Калий хлористый</li>
				<li class="prod_list_item" id="ksantan_li">Ксантановая камедь</li>
				<li class="prod_list_item" id="microcalcit_li">Микрокальцит</li>
				<li class="prod_list_item" id="krakhmal_li">Модифицированный крахмал</li>
				<li class="prod_list_item" id="natr_edk_li">Натрий едкий гранулированный</li>			
				<li class="prod_list_item" id="glina_li">Органофильная глина</li>
				<li class="prod_list_item" id="poliakrilamid_li">Полиакриламид</li>
				<li class="prod_list_item" id="poliakrilat_li">Полиакрилат натрия</li>
				<li class="prod_list_item" id="celluloza_li">Полианионная целлюлоза</li>
				<li class="prod_list_item" id="asphalt_li">Сульфированный асфальт</li>
			</ul>
		</div>
		<div class="col-sm-6">
			<img src="images/wall.png" alt="photo" style="width:400px; height:780px; margin-left:20%; max-width:100%;">
		</div>
	</div>
</div>

