<?php

// Translated into Russian by InquisitorEA. All rights reserved © 2010-2011

// Общее
$LNG['index']                        = 'Главная';
$LNG['register']                     = 'Зарегистрироваться';
$LNG['forum']                        = 'Форум';
$LNG['send']                         = 'Отправить';
$LNG['menu_index']                   = 'Главная';
$LNG['menu_news']                    = 'Новости';
$LNG['menu_rules']                   = 'Правила';
$LNG['menu_agb']                     = 'Положения';
$LNG['menu_pranger']                 = 'Заблокированные';
$LNG['menu_top100']                  = 'Зал славы';
$LNG['menu_disclamer']               = 'Контакты';
$LNG['uni_closed']                   = '(отключена)';

// Восстановление пароля
$LNG['lost_empty']                   = 'Вы должны заполнить все поля!';
$LNG['lost_not_exists']              = 'Аккаунта с таким адресом электронной почты не существует!';
$LNG['lost_mail_title']              = 'Новый пароль';
$LNG['mail_sended']                  = 'Ваш новый пароль успешно отправлен на Вашу электронную почту %s!';

// Стандартное
$LNG['server_infos']                 = array(
	"Создайте экономическую и военную инфраструктуру.",
	"Исследуйте новейшие технологии.",
	"Ведите войны против других империй.",
	"Создавайте альянсы и ведите переговоры с другими императорами.",
	"Постройте непобедимый флот или планетарную оборону.",
);

$LNG['login_error_1']                = 'Неправильный логин или пароль!';
$LNG['login_error_2']                = 'Кто-то вошёл в игру через ваш аккаунт с другого компьютера!';
$LNG['login_error_3']                = 'Ваша сессия завершена!';
$LNG['screenshots']                  = 'Скриншоты';
$LNG['universe']                     = 'Вселенная';
$LNG['chose_a_uni']                  = 'Выбрать...';

// lostpassword.tpl
$LNG['lost_pass_title']              = 'Восстановление пароля';

// index_body.tpl
$LNG['user']                         = 'Логин';
$LNG['pass']                         = 'Пароль';
$LNG['remember_pass']                = 'Запомнить';
$LNG['lostpassword']                 = 'Забыли пароль?';
$LNG['welcome_to']                   = 'Добро пожаловать в';
$LNG['server_description']           = '<strong>%s</strong> - это <strong>стратегический космический симулятор в реальном времени</strong> Сражайтесь с <strong>тысячами игроков</strong> во всём мире <strong>одновременно</strong>, чтобы стать лучшим. Для этого вам понадобится обычный браузер.';
$LNG['server_register']              = 'Регистрация';
$LNG['server_message']               = 'Присоединяйтесь и станьте частью невероятного мира';
$LNG['login']                        = 'Вход';
$LNG['disclamer']                    = 'Контакты';
$LNG['login_info']                   = 'Я принимаю <a onclick="ajax(\'?page=rules&amp;\'+\'getajax=1&amp;\'+\'lang=%1$s\');" style="cursor:pointer;">Правила</a> и <a onclick="ajax(\'?page=agb&amp;\'+\'getajax=1&amp;\'+\'lang=%1$s\');" style="cursor:pointer;">Положения</a>';

// reg.php - Регистрация
$LNG['register_closed']              = 'Регистрация закрыта!';
$LNG['register_at']                  = 'Регистрация в ';
$LNG['reg_mail_message_pass']        = 'Вам осталось активировать аккаунт';
$LNG['reg_mail_reg_done']            = 'Добро пожаловать в %s!';
$LNG['invalid_mail_adress']          = 'Недействительный адрес электронной почты!';
$LNG['empty_user_field']             = 'Вы не ввели логин!';
$LNG['password_lenght_error']        = 'Пароль должен состоять из неменее 6 символов!';
$LNG['user_field_no_alphanumeric']   = 'Логин может содержать только алфавитно-цифровые символы!';
$LNG['user_field_no_space']          = 'Логин не может содержать пробелы!';
$LNG['planet_field_no']              = 'Вы не ввели название планеты!';
$LNG['planet_field_no_alphanumeric'] = 'Название планеты может содержать только алфавитно-цифровые символы!';
$LNG['planet_field_no_space']        = 'Название планеты не может содержать пробелы!';
$LNG['terms_and_conditions']         = 'Я принимаю <a href="index.php?page=rules">Правила</a> и <a href="index.php?page=agb">Положения</a>!';
$LNG['user_already_exists']          = 'Выбранный логин уже существует!';
$LNG['mail_already_exists']          = 'Введённый адрес электронной почты уже существует!';
$LNG['wrong_captcha']                = 'Неверный защитный код!';
$LNG['different_passwords']          = 'Пароль не совпадает!';
$LNG['different_mails']              = 'Е-мейл не совпадает!';
$LNG['welcome_message_from']         = 'Администрация';
$LNG['welcome_message_sender']       = 'Администрация';
$LNG['welcome_message_subject']      = 'Добро пожаловать';
$LNG['welcome_message_content']      = 'Добро пожаловать в %s! Для начала постройте шахту металла. Для этого пройдите в меню Постройки и нажмите Строить справа от изображения шахты металла. Теперь у Вас есть некоторое время, чтобы узнать больше об игре. Помощь новичкам: на нашем <a href=\"http://2moons.cc/" target=\"_blank\">Форуме</a>. Теперь постройка Вашего месторождения должна быть завершена. Так как месторождения ничего не производят без энергии, Вы должны построить солнечную электростанцию, вернитесь в меню Постройки, и выберите строить солнечную электростанцию. Чтобы видеть все виды кораблей, оборонных сооружений, зданий и исследований, которые есть в игре, Вам нужно пройти в меню Технологии. Теперь Вы можете начать завоевание вселенной. Удачи!';
$LNG['newpass_smtp_email_error']     = 'Произошла ошибка при отправке пароля на Вашу электронную почту. Ваш пароль: ';
$LNG['reg_completed']                = 'Спасибо за регистрацию! Вы получите письмо на электронную почту с ссылкой на активацию аккаунта. Иногда письмо попадает в спам!';
$LNG['planet_already_exists']        = 'Планета уже существует!';

// registry_form.tpl
$LNG['server_message_reg']           = 'Присоединяйтесь и станьте частью невероятного мира';
$LNG['register_at_reg']              = 'Регистрация в ';
$LNG['uni_reg']                      = 'Вселенная';
$LNG['user_reg']                     = 'Логин';
$LNG['pass_reg']                     = 'Пароль';
$LNG['pass2_reg']                    = 'Подтвердить пароль';
$LNG['email_reg']                    = 'Электронная почта';
$LNG['email2_reg']                   = 'Подтвердить электронную почту';
$LNG['planet_reg']                   = 'Название главной планеты';
$LNG['ref_reg']                      = 'Привлечён игроком';
$LNG['lang_reg']                     = 'Язык';
$LNG['register_now']                 = 'Регистрация';
$LNG['captcha_reg']                  = 'Слова с картинки';
$LNG['accept_terms_and_conditions']  = 'Я принимаю <a href="index.php?page=rules">Правила</a> и <a href="index.php?page=agb">Положения</a>';
$LNG['captcha_reload']               = 'Обновить';
$LNG['captcha_help']                 = 'Помощь';
$LNG['captcha_get_image']            = 'Визуальная CAPTCHA';
$LNG['captcha_reload']               = 'Новая CAPTCHA';
$LNG['captcha_get_audio']            = 'Звуковая CAPTCHA';
$LNG['user_active']                  = 'Аккаунт %s активирован!';

// Правила
$LNG['rules_overview']               = "Правила";
$LNG['rules']                        = array(

	"Аккаунты" =>

	"Владельцем аккаунта является владелец почтового адреса, указанного в настройках игры.
	Пользоваться аккаунтом может только один Игрок, но временно разрешается присматривать за чужим аккаунтом (ситтинг).
	Обмен аккаунтами в одной вселенной должен быть произведен с помощью Админимтрации.
	Менять аккаунт можно не чаще, чем один раз в месяц.
	После принятия чужого аккаунта, новый владелец обязан сменить почтовый адрес в течении 12 часов.",

	"Мультоводство" =>

	"В одной вселенной запрещено иметь более одного аккаунта.
	Для возможности играть в одной вселенной двух людям с одинаковым IP адресом, необходимо уведомить об этом Администрацию и создавать второй аккаунт только после получения от Администрации разрешения на создание второго аккаунта.
	Любое пересечение (полёт флота от одного к другому с любым заданием) флотов, а также атака друг друга межпланетными ракетами между Игроками с одинаковыми IP адресами запрещены.
	Любому Игроку может быть отказано в разрешении на игру в одной вселенной двум людям с одинаковым IP адресом.",

	"Ситтинг" =>

	"Ситтинг означает присмотр Игрока за чужим аккаунтом.
	Присмотр за чужим аккаунтом разрешён на период не более 12 часов.
	Отсчёт начинается со времени захода на чужой аккаунт и длится, даже если вы вышли из чужого аккаунта.
	Период досрочно прерывается, если на аккаунт заходит его владелец.
    Во время присмотра разрешено тратить ресурсы на постройки и исследования, а так же уводить флот из-под атаки с заданием Транспорт или Оставить на другую планету или луну владельца аккаунта.
    Все остальные действия на чужом аккаунте запрещены.
	Присматривать за аккаунтом можно при условии, что за ним ещё никто не присматривал в предыдущие 7 дней и при условии, что вы сами не присматривали ни за каким аккаунтом в предыдущие 7 дней.",

	"Прокачка" =>

	"Прокачка запрещена. Нижестоящему в рейтинге Игроку запрещено передавать ресурсы Игроку, стоящему выше в рейтинге.
	Это также относится к скрытым схемам передачи ресурсов, например через разбитие флота Игрока нижестоящего в рейтинге, и последующим сбором поля обломков, Игроком стоящим выше него.
	Торговля между Игроками должна быть завершена в 24 часовой срок.
	Во всех остальных случаях (дележ САБ, помощь в сборе поля обломков, и т. д.) Игроки должны получить разрешение у Администрацию.",

    "Вымогательство ресурсов" =>

	"Вымогательство ресурсов запрещено. В случае вымогательства сообщите об этом Администрации.",

	"Башинг" =>

	"Запрещено атаковать каждую планету или луну более 6 раз за период 24 часа (планета и луна являются самостоятельными единицами и не зависят друг от друга).
	Это не распространяется на неактивных Игроков.
	Задание Уничтожить приравнивается к Атаке.
	Атаки Межпланетными ракетами не учитываются.
	Спам шпионскими зондами запрещён.
	Во время ведения войны между двумя Альянсами ограничение на количество атак снимается (при условии что война была объявлена по всем правилам на форуме).
	После объявления войны необходимо оповестить главу альянса, которому объявляется война, об объявлении войны. Правило башинга снимается по прошествии 24 часов после данного оповещения.",

	"Использование багов и скриптов" =>

	"Использование ошибок игры для получения выгоды, а также сокрытие ошибок от Администрации запрещено.
	Запрещено использование сторонних программ-клиентов.
	Использование автоматических скриптов (ботов) для получения преимущества над другими Игроками также запрещено.",

	"Язык общения" =>

	"Во всех вселенных официальным языком считается русский. Сообщения/страницы альянса/названия игровых единиц, написанные на других языках, в некоторых случаях могут расцениваться как спам, а также могут привести к блокировке аккаунта.",

	"Угрозы и оскорбления, дезинформация" =>

	"Запрещены оскорбления и угрозы, касающиеся расправы в реале над другим Игроком, представителем Администрации или другой персоной, причастной к игре.
	Запрещены любые угрозы в адрес Администрации.
	Запрещено обманывать или дезинформировать Администрацию.",

	"Спам, реклама, порнография, нецензурная речь" =>

	"Спам, реклама, эротические и порнографические материалы в любой форме, а также нецензурная речь в игровых средствах коммуникации запрещены.",

	"Нарушения правил" =>

	"Любое нарушение правил может привести к предупреждению, временной или даже постоянной блокировке аккаунта.
	Администрация определяет тип и длительность наказания и является контактным лицом по вопросам блокировки.
	Оспаривание наказания осуществляется только между закблокированным Игроком и заблокировавшим представителем Администрации.
	Оспаривание должно происходить без эмоций и в деловом тоне.
	Администрация оставляет за собой право не брать во внимание доводы заблокированного Игрока и не вступать в разговор с заблокированным Игроком.",

    "Возмещение убытков" =>

	"Использование сервисов игры производится Игроком по принципу «как есть», то есть Администрация игры не отвечает перед Игроком ни при каких обстоятельствах за любой прямой и/или косвенный ущерб, которые могут быть у Игрока в связи с получением сервиса игры или невозможностью такой сервис получить.",

	"Правила" =>

	"Правила могут меняться. Каждый Игрок обязан постоянно узнавать обновленную информацию.",

);

$LNG['rules_info1']                  = "Правила размещены на <a href=\"%s\" target=\"_blank\">Форуме</a> и на главной странице.";
$LNG['rules_info2']                  = "Данные правила являются частью <a onclick=\"ajax('?page=agb&getajax=1');\" style=\"cursor:pointer;\">Положений</a>, которые также должны соблюдаться!</font>";


// Общие положения
$LNG['agb_overview']                 = "Положения";
$LNG['agb']                          = array(

	"Содержание"                     => array(

		"Принятие основных положений является необходимым условием для участия в игре.
		Они распространяются на все предложения со стороны администрации, включая форум и другое содержание, относящееся к игре.",

		"Игра предоставляется бесплатно.
		Таким образом, у игрока нет никаких прав на доступность, предоставление, функциональность или возмещение убытков.
		Кроме того, у игрока нет права на восстановление аккаунта в случае его удаления.",
	),

	"Соглашение"                     => array(

		"Соглашение считается заключённым после завершения регистрации в игре и/или на форуме.",

		"После с регистрации соглашение в любое время может быть разорвано игроком путём удаления учетной записи или отправлением уведомительного письма администрации.
		Удаление учётной записи не может произойти сразу из-за технических  причин.",

		"После удаления учётной записи игрок не имеет право учавствовать в предложениях администрации.
		Администрация оставляет за собой право удалять аккаунты.
		Решение об удалении учётной записи остаётся за администрацией.
		Любые правовые претензии к соглашению не допускаются.",

		"Все права принадлежат администрации.",
	),

	"Содержание/Ответственность"     => "За содержание различных относящихся к игре коммуникативных возможностей отвечают сами игроки. За порнографическое, расистское, оскорбительное или иное, нарушающее действующее законодательство, содержание администрация ответственности не несёт.
	Нарушения могут привести к немедленной блокировке или удалению.
	Удаление такого содержания производится как можно быстрее, но может задерживаться по техническим и/или личным причинам.",

	"Запрещённые вмешательства"      => array(

		"Игрок не имеет право использовать аппаратуру / программное обеспечение или прочие материалы или механизмы в сочетании с веб-сайтом, которые могут мешать фукционированию игры.
		Игроку запрещено предпринимать любые действия, которые могут повлечь за собой усиленную нагрузку на сервер.
		Игроку запрещено манипулировать содержанием, предоставленным администрацией, или иным образом вмешиваться в игру.",

		"Любые типы ботов, скриптов или другие функции автоматизации запрещены.
		В игру можно играть только в браузере. Его функции так же запрещено использовать для получения игрового преимущества.
		Решение, когда программное обеспечение предоставляет игровое преимущество игроку, остаётся за администрацией.",

		"Автоматизированное подключение к учётной записи, независимо от того, отображается ли при этом главная страница или нет, запрещено.",
	),

	"Ограничение использования"      => array(

		"Игрок может иметь только одну учётную запись в каждой вселенной. \"Мультиаккаунты\" без предупреждения могут быть заблокированы или удалены.
		Решение о том, является ли игрок \"мультоводом\" (владельцем нескольких учётных записей), остаётся за администрацией.",

		"Сведения должны соответствовать правилам.",

		"Блокировка может быть временной или перманентной, на усмотрение администрации.
		Кроме того, блокировка может распространяться на все вселенные.
		Решение о том, когда и на какой период игрок блокируется, остаётся за администрацией.",
	),

	"Политика конфиденциальности"    => array(

		"Администрация оставляет за собой право сохранять данные игроков в целях контроля за соблюдением правил, положений и действующего законодательства.
		Сохраняются все требуемые и представленные игроком данные об учётной записи.
		К ним относятся: IP-адреса в сочетании с периодами использования и видами использования, указанный при регистрации адрес электронной почты и другие данные.
		А так же личные данные, хранящиеся на форуме.",

		"Эти данные при определенных обстоятельствах могут быть раскрыты уполномоченным лицам для выполнения уставных обязанностей.
		Кроме того, данные (если необходимо) могут быть выданы третьей стороне при определенных обстоятельствах.",

		"Игрок в любое время может возразить против хранения личных данных, сообщив об этом администрации. При этом игрок теряет все права.",
	),

	"Право собственности на учётную запись"	=> array(

		"Все учётные записи и все виртуальные объекты остаются во владении и собственности администрации.
		Игрок не имеет право собственности на учётную запись.
		Все права принадлежат администрации.
		Передача применения или прочих прав на пользователя никогда не происходит.",

		"Несанкционированная продажа, использование, копирование, распространение, размножение или иное нарушение прав (например, учётную запись) администрации преследуется действующим законодательством.
		Разрешена безвозмездная передача учётной записи, а также игровых ресурсов внутри собственной вселенной в пределах, разрешённых правилами.",
	),

	"Ответственность"       => "Администрация не несёт ответственности за возможный ущерб.
	Ответственность исключена учитывая ущерб, причиненный в результате злого умысла или грубой неосторожности и любой ущерб жизни или здоровью.
	В связи с этим ясно определено, что компьютерные игры могут представлять значительный риск для здоровья.",

	"Изменение положений"   => "Администрация оставляет за собой право изменять или дополнять данные положения в любое время.
	Изменение или дополнение оглашается минимум за неделю до вступления в силу.",
);

// Подключение к Facebook
$LNG['fb_perm']                      = 'Вам запрещён доступ. %s необходимы все права, чтобы войти на свой аккаунт в Facebook.\nТакже можно войти не имея аккаунт в Facebook!';

// Новости
$LNG['news_overview']                = "Новости";
$LNG['news_from']                    = "%s от %s";
$LNG['news_does_not_exist']          = "Нет новостей!";

// Контакты
$LNG['disclamer']                    = "Условия использования";
$LNG['disclamer_name']               = "Имя";
$LNG['disclamer_adress']             = "Адрес";
$LNG['disclamer_tel']                = "Телефон";
$LNG['disclamer_email']              = "Электронная почта";

?>