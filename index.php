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
                    <select name="place_from" id="" class="control">
                      <option value="Оренбург">Оренбург</option>
                      <option value="Уфа">Уфа</option>
                      <option value="Самара">Самара</option>
                      <option value="Казань">Казань</option>
                    </select>
                  </div>

                  <div class="col-sm-6">
                    <select name="place_to" id="" class="control">
                      <option value="Оренбург">Оренбург</option>
                      <option value="Уфа">Уфа</option>
                      <option value="Самара">Самара</option>
                      <option value="Казань">Казань</option>
                    </select>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-6">
                    <input type="text" class="control" name="date_from">
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" class="control" name="date_to">
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