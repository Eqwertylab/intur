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
      <li><a href="">Подобрать тур</a></li>
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

        <section class="section order">
          
          <div class="container">
            <header class="section_head">Профессиональный <br>подбор тура специалистами</header>

            <div class="row">

              <form class="col-sm-12 col-md-10 col-lg-10 center-block">

                <div class="row">

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

                <div class="row">

                  <div class="col-sm-6">
                    <input type="text" class="control __date_from" name="date_from" placeholder="Дата отправления">
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

                <div class="row">

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

                <div class="row">

                  <div class="col-sm-12">

                    <textarea name="more_info" id="" class="control" placeholder="В этом поле укажите ваши пожелания и вопросы в свободном формате"></textarea>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-12 center-text">

                    <input type="submit" class="btn" value="Найти">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </main>
    </div>
    <footer class="footer"></footer>
  </div>
  <div class="curtain" id="curtain"></div>
  <script src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>