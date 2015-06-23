<!DOCTYPE html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Интур - Главная</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,300italic,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar_mob">
    <ul class="menu_mob">
      <li><a href="">Главная</a></li>
      <li class="active"><a href="">Подобрать тур</a></li>
      <li><a href="">О нас</a></li>
      <li><a href="">Статьи</a></li>
      <li><a href="">Контакты</a></li>
    </ul>
  </aside>
  <div class="wrapper">
    <div class="layout">

      <header class="header_mob visible-xs">
        
        <div class="page_title">Заголовок</div>

        <div class="nav_mob_toggle" id="nav_mob_toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <a href="" class="logo_mob"></a>  
      </header>

      <header class="header hidden-xs">
        <div class="container">
          <a href="#" class="logo"></a>

          <ul class="menu">
            <li><a href="">Главная</a></li>
            <li><a href="">Подобрать тур</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="">Статьи</a></li>
            <li><a href="">Контакты</a></li>
          </ul>
        </div>
      </header>

      <main class="main">

        <section class="slider_hot" id="slider_hot">

          <div class="container">
            <div class="row">
              <div class="col-sm-11 col-md-9 col-lg-7 center-block slider_hot_toggle">
                
                <div class="select_country_wrap">
                  <select name="" id="select_country" class="select_country">
                    <option value="Испания">Испания</option>
                    <option value="Франция">Франция</option>
                    <option value="Чехия">Чехия</option>
                  </select>
                </div>
                
                <div class="shgroup_wrapp">
                  
                  <div class="shgroup" data-country="Испания" data-image="img/slides/spain.jpg" data-image-mob="img/slides/spain-mob.jpg" >

                    <div class="shgroup_item">
                      <div class="shgroup_city">Барселона</div>
                      <div class="shgroup_date">19.06 - 30.06</div>
                      <div class="shgroup_price">23 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Мадрид</div>
                      <div class="shgroup_date">20.07 - 05.08</div>
                      <div class="shgroup_price">26 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Севилья</div>
                      <div class="shgroup_date">30.09 - 15.10</div>
                      <div class="shgroup_price">24 000 р.</div>
                    </div>
                  </div>

                  <div class="shgroup" data-country="Франция" data-image="img/slides/france.jpg" data-image-mob="img/slides/france-mob.jpg" >

                    <div class="shgroup_item">
                      <div class="shgroup_city">Париж</div>
                      <div class="shgroup_date">19.06 - 30.06</div>
                      <div class="shgroup_price">23 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Марсель</div>
                      <div class="shgroup_date">20.07 - 05.08</div>
                      <div class="shgroup_price">26 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Лион</div>
                      <div class="shgroup_date">30.09 - 15.10</div>
                      <div class="shgroup_price">24 000 р.</div>
                    </div>
                  </div>

                  <div class="shgroup" data-country="Чехия" data-image="img/slides/praga.jpg" data-image-mob="img/slides/praga-mob.jpg" >

                    <div class="shgroup_item">
                      <div class="shgroup_city">Прага</div>
                      <div class="shgroup_date">19.06 - 30.06</div>
                      <div class="shgroup_price">23 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Брно</div>
                      <div class="shgroup_date">20.07 - 05.08</div>
                      <div class="shgroup_price">26 000 р.</div>
                    </div>

                    <div class="shgroup_item">
                      <div class="shgroup_city">Карловы Вары</div>
                      <div class="shgroup_date">30.09 - 15.10</div>
                      <div class="shgroup_price">24 000 р.</div>
                    </div>
                  </div>
                </div>

                <ul class="direction_nav" id="direction_nav">
                  <li class="prev" data-direction="prev"></li>
                  <li class="next" data-direction="next"></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="section order" id="order_form_wrap">
          
          <div class="container">
            <header class="section_head">Профессиональный <br>подбор тура специалистами</header>

            <div class="row">

              <form class="col-sm-12 col-md-10 col-lg-10 center-block" id="order_form">

                <div class="row form_row">

                  <div class="col-sm-6">
                    <select name="place_from" id="" class="control __place_from">
                      <option value="Оренбург">Оренбург</option>
                      <option value="Уфа">Уфа</option>
                      <option value="Самара">Самара</option>
                      <option value="Казань">Казань</option>
                    </select>
                  </div>

                  <div class="col-sm-6">
                    <select name="place_to" id="" class="control __place_to">
                      <option value="Турция">Турция</option>
                      <option value="Египет">Египет</option>
                      <option value="Греция">Греция</option>
                      <option value="Испания">Испания</option>
                      <option value="Россия">Россия</option>
                      <option value="Австрия">Австрия</option>
                      <option value="Андорра">Андорра</option>
                      <option value="Болгария">Болгария</option>
                      <option value="Вьетнам">Вьетнам</option>
                      <option value="Доминиканская">Доминиканская Республика</option>
                      <option value="Израиль">Израиль</option>
                      <option value="Индия">Индия</option>
                      <option value="Индонезия">Индонезия</option>
                      <option value="Иордания">Иордания</option>
                      <option value="Камбоджа">Камбоджа</option>
                      <option value="Китай">Китай</option>
                      <option value="Куба">Куба</option>
                      <option value="Маврикий">Маврикий</option>
                      <option value="Мальдивы">Мальдивы</option>
                      <option value="Марокко">Марокко</option>
                      <option value="Мексика">Мексика</option>
                      <option value="ОАЭ">ОАЭ</option>
                      <option value="Сейшелы">Сейшелы</option>
                      <option value="Сингапур">Сингапур</option>
                      <option value="Таиланд">Таиланд</option>
                      <option value="Танзания">Танзания</option>
                      <option value="Тунис">Тунис</option>
                      <option value="Шри-Ланка">Шри-Ланка</option>
                    </select>
                  </div>
                </div>

                <div class="row form_row">

                  <div class="col-sm-6">
                    <input type="text" id="date_from" class="control __date_from" name="date_from" placeholder="Дата отправления">
                  </div>
                  
                  <div class="col-sm-6">
                    <select name="date_to" id="" class="control __date_to">
                      <option value="1 ночь">1 ночь</option>
                      <option value="2 ночи">2 ночи</option>
                      <option value="3 ночи">3 ночи</option>
                      <option value="4 ночи">4 ночи</option>
                      <option value="5 ночей">5 ночей</option>
                      <option value="6 ночей">6 ночей</option>
                      <option value="7 ночей">7 ночей</option>
                      <option value="8 ночей">8 ночей</option>
                      <option value="9 ночей">9 ночей</option>
                      <option value="10 ночей">10 ночей</option>
                      <option value="11 ночей">11 ночей</option>
                      <option value="12 ночей">12 ночей</option>
                      <option value="13 ночей">13 ночей</option>
                      <option value="14 ночей">14 ночей</option>
                      <option value="15 ночей">15 ночей</option>
                      <option value="16 ночей">16 ночей</option>
                      <option value="17 ночей">17 ночей</option>
                      <option value="18 ночей">18 ночей</option>
                      <option value="19 ночей">19 ночей</option>
                      <option value="20 ночей">20 ночей</option>
                      <option value="21 ночь">21 ночь</option>
                      <option value="22 ночи">22 ночи</option>
                      <option value="23 ночи">23 ночи</option>
                      <option value="24 ночи">24 ночи</option>
                      <option value="25 ночей">25 ночей</option>
                      <option value="26 ночей">26 ночей</option>
                      <option value="27 ночей">27 ночей</option>
                      <option value="28 ночей">28 ночей</option>
                      <option value="29 ночей">29 ночей</option>
                      <option value="30 ночей">30 ночей</option>
                    </select>
                  </div>
                </div>

                <div class="row form_row">

                  <div class="col-sm-6">
                    <select name="count" id="" class="control __count">
                      <option value="1 человек">1 человек</option>
                      <option value="2 человека">2 человека</option>
                      <option value="3 человека">3 человека</option>
                      <option value="4 человека">4 человека</option>
                      <option value="5 человек">5 человек</option>
                      <option value="6 человек">6 человек</option>
                      <option value="7 человек">7 человек</option>
                      <option value="8 человек">8 человек</option>
                      <option value="9 человек">9 человек</option>
                      <option value="10 человек">10 человек</option>
                      <option value="11 человек">11 человек</option>
                      <option value="12 человек">12 человек</option>
                      <option value="13 человек">13 человек</option>
                      <option value="14 человек">14 человек</option>
                      <option value="15 человек">15 человек</option>
                      <option value="16 человек">16 человек</option>
                    </select>
                  </div>
                  
                  <div class="col-sm-6">
                    <select name="econom" id="" class="control __econom">
                      <option value="Бюджет">Бюджет</option>
                      <option value="Стандарт">Стандарт</option>
                      <option value="VIP">VIP</option>
                    </select>
                  </div>
                </div>

                <div class="row form_row">

                  <div class="col-sm-12">

                    <textarea name="more_info" id="" class="control" placeholder="В этом поле укажите ваши пожелания и вопросы в свободном формате"></textarea>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-12 center-text">
                    <input type="hidden" name="name" id="name">
                    <input type="hidden" name="contacts" id="contacts">
                    <input type="submit" class="btn" value="Найти">
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <div id="dialog_form_wrapper" title="Ваши контакты">
            <form id="dialog_form">
              <fieldset>
                <div class="dform_row">
                  <label for="name" class="dform_label">Имя</label>
                  <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all dcontrol">
                </div>
                <div class="dform_row">
                  <label for="contacts" class="dform_label">Телефон или email</label>
                  <input type="text" name="contacts" id="contacts" class="text ui-widget-content ui-corner-all dcontrol">
                </div>
           
                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
              </fieldset>
            </form>
          </div>

          <div id="dialog_answer_wrapper" title="Спасибо за обращение!">   
            <p>Ваша заявка принята в работу. Мы свяжемся с вами сразу после подбора тура.</p>
          </div>

        </section>

        <section class="section team">

          <div class="container">
            
            <header class="section_head">Которые знают толк в отдыхе</header>

            <div class="row">
              <div class="col-md-12 col-md-11 center-block">

                <div class="row team_list center-text">

                  <div class="col-sm-4 team_item">
                    <img src="img/team/people1.jpg" alt="" class="team_photo center-block">
                    <header class="team_header">Корнилова Елена</header>
                    <p class="team_desc">Путешествовала в Египет, Турцию, ОАЭ, Китай и Японию. Мне всегда нравилось изучать культуру и историю восточных стран. С радостью расскажу какие места следует посетить, чтобы вы сделали своё путешествие еще более запоминающимся.</p>
                  </div>

                  <div class="col-sm-4 team_item">
                    <img src="img/team/people2.jpg" alt="" class="team_photo">
                    <header class="team_header">Шеповалов Макс</header>
                    <p class="team_desc">Индия, ГОА, Южная Африка, Куба и Австралия - я там был! Это удивительные страны, посещение которых вызавало у меня ощущение будто я попал на другую планету! Мне нравится общаться с местными жителями и узнавать интересные местах о которых не пушут в путеводителях.</p>
                  </div>

                  <div class="col-sm-4 team_item">
                    <img src="img/team/people3.jpg" alt="" class="team_photo">
                    <header class="team_header">Свиридова Анна</header>
                    <p class="team_desc">Европа моя любовь! Начилось всё с Франции в Париже на незабываемый новый год. После этого я с большим удовольствием побывала в Испании, Италии и Праге.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section service">
          
          <div class="container">
            <header class="section_head">И вместе способны на всё!</header>
            
            <div class="service_list">
              
              <div class="service_item __line_1">
                <span class="service_desc __left">
                  Бронирование и подбор тура в любую точку мира
                </span>
                <span class="service_desc __right">
                  Дополнительные виды страхования туристов 
                </span>
              </div>
              
              <div class="service_item __line_2">
                <span class="service_desc __left">
                  Туры по России
                </span>
                <span class="service_desc __right">
                  Продажа билетов на концерты, шоу, культурные мероприятия в стране отдыха 
                </span>
              </div>
              
              <div class="service_item __line_3">
                <span class="service_desc __left">
                  Морские круизы
                </span>
                <span class="service_desc __right">
                  Бронирование автомобилей и трансферов по миру 
                </span>
              </div>
              
              <div class="service_item __line_4">
                <span class="service_desc __left">
                  Бронирование отелей, апартаментов, вилл по всему миру
                </span>
                <span class="service_desc __right">
                  Бронирование помещений для профедения конференций, семинаров, деловых встреч
                </span>
              </div>

              <div class="service_item __line_5">
                <span class="service_desc __left">
                  Продажа авиа и ж/д билетов
                </span>
                <span class="service_desc __right">
                  Подарочные сертификаты 
                </span>
              </div>

              <div class="service_item __line_6">
                <span class="service_desc __left">
                  Оформление визы
                </span>
                <span class="service_desc __right">
                  Туры в рассрочку 
                </span>
              </div>

              <div class="service_item __line_7">
                <span class="service_desc __left">
                  Помощь в оформлении загран. паспорта 
                </span>
                <span class="service_desc __right">
                  Возможность оплаты по безналичному расчету
                </span>
              </div>

              <img src="img/earth.png" alt="" class="earth">
            </div>
          </div>
        </section>
      </main>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-5">
            <div class="row">
              <div class="col-lg-2 visible-lg">
                <a href="" class="logo-footer"></a>
              </div>
              <div class="col-md-12 col-lg-10">
                <header class="fo_header">8(3532)71-14-66</header>
                <p>г.Оренбург, ул. М.Горького 25</p>
                <p><a href="">Показать на карте</a></p>
                <p>№ регистрации в реестре турагенств: <br>AB1234567890</p>
                <p>№ регистрации в роспортребнадзоре: <br>РБ1234567890</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 hidden-xs">
            <header class="fo_header">Это интересно</header>
            <ul class="fo_list">
              <li class="fo_item">
                <a href="">
                  Курорт недели Занзибар - это целый архипилаг с одноименным островом 
                </a>
              </li>
              <li class="fo_item">
                <a href="">
                  В какую страну можно поехать на бюджетный пляжный отдых
                </a>
              </li>
              <li class="fo_item">
                <a href="">
                  Где в Греции самые лучшие пляжи
                </a>
              </li>
              <li class="fo_item">
                <a href="">
                  Сколько стоит аренда виллы на Халкидиках
                </a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3 hidden-xs">
            <header class="fo_header">Мы в соцсетях</header>
            <ul class="soc">
              <li class="soc_item __vk"><a href=""></a></li>
              <li class="soc_item __od"><a href=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="curtain" id="curtain"></div>
  <script src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/jquery-ui/datepicker-ru.js"></script>
  <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/jquery-validation/dist/localization/messages_ru.min.js"></script>
  <script src="js/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>