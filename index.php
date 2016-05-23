<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru-RU">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Windows</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/main-gum.css">
    <link type="text/css" rel="stylesheet" href="css/main-rasik.css">
    <link type="text/css" rel="stylesheet" href="css/main-rasik-fix.css">
    <!-- <link rel="icon" href="/favicon.ico" type="image/x-icon" /> -->
    <script>
        <?php 
            $referer =      isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; 
            $utm_source =   isset($_GET['utm_source']) ?    $_GET['utm_source'] : '';
            $utm_medium =   isset($_GET['utm_medium']) ?    $_GET['utm_medium'] : '';
            $utm_campaign = isset($_GET['utm_campaign']) ?  $_GET['utm_campaign'] : '';
            $block =        isset($_GET['block']) ?         $_GET['block'] : '';
            $utm_term =     isset($_GET['utm_term']) ?      $_GET['utm_term'] : '';
            $utm_content =  isset($_GET['utm_content']) ?   $_GET['utm_content'] : '';
            $position =     isset($_GET['position']) ?      $_GET['position'] : '';
            $keyword =      isset($_GET['keyword']) ?       $_GET['keyword'] : '';

            echo "var referer='".$referer."';";
            echo "var utm_source='".$utm_source."';";
            echo "var utm_medium='".$utm_medium."';";
            echo "var utm_campaign='".$utm_campaign."';";
            echo "var block='".$block."';";
            echo "var utm_term='".$utm_term."';";
            echo "var utm_content='".$utm_content."';";
            echo "var position='".$position."';";
            echo "var keyword='".$keyword."';";

            if (($keyword == 'балкон') OR ($keyword == 'лоджия')) $main_bg = 'bg-s-how-many-big.jpg';
                else $main_bg = 'bg-s-main.jpg';
         ?>
    </script>
 
</head>

<body id="top">
    <div id="stickyheader" class="">
        <div class="container">
            <div class="row">
                <div class="b-logo hidden-xs">
                    <a href="#top" class="logo"><img src="images/logo.png" alt=""></a>
                </div>
                <ul>
                    <li><a href="#to-windows">Об окнах</a></li>
                    <li><a href="#to-balk">Балкон под ключ</a></li>
                    <li><a href="#to-reviews">Отзывы</a></li>
                    <li><a href="#to-about">О нас</a></li>
                    <li><a href="#to-contacts">Контакты</a></li>
                </ul>
                <div class="tel hidden-xs">
                    <p><a href="tel:+8212562888">8 (8212) 562 888</a></p>
                    <p><a href="tel:+89087142368">8 (908) 714 23 68</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="s-header section">
        <div class="b_info">
            <div class="container">
                <div class="logo"></div>
                <div class="title">Производство и продажа пластиковых окон
                    <div class="sub-title hidden-xs hidden-sm">Осуществляем доставку и монтаж пластиковых окон в г. Сыктывкаре и по области</div>
                </div>
                <div class="info-tel">
                    <div class="time">Горячая линия <span>10:00-19:00 </span></div>
                    <div class="tel">
                        <p><a href="tel:+8212562888">8 (8212) 562 888</a></p>
                        <p><a href="tel:+89087142368">8 (908) 714 23 68</a></p>
                    </div>
                </div>
                <button type="button" class="btn btn-blue open-form">Закажи обратный звонок</button>
            </div>
        </div>
    </div>
    <div class="s-main-top section 11" style="background-image: url(images/<?php echo $main_bg; ?>);">
        <div class="s-commercial visible-xs">
            <div class="container">
                <div class="row">
                    <div class="s-commercial_top">
                        <div class="s-commercial_top_title">Увеличьте Вашу квартиру до <span>8 м2</span></div>
                        <p>благодаря <span>балкону под ключ <br></span> от производителя.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-top-title hidden-xs">
            <div class="container">
                <div class="s-top-title-txt">
                    Тепло и тишина у Вас дома через 2 дня
                    <br><span class="text_1">благодаря </span><span class="text_2"><i>пластиковым окнам</i></span>
                    <span class="text_1"> от производителя.</span>
                </div>
            </div>
        </div>
        <div class="s-bullets_top mob section">
            <div class="container">
                <div class="b-bullets">
                    <div class="item"><i class="icon item1"></i><span>Официальный договор</span></div>
                    <div class="item"><i class="icon item2"></i><span>Гарантия-5 лет.</span></div>
                    <div class="item"><i class="icon item3"></i><span>Рассрочка на 3 месяца, кредит</span></div>
                    <div class="item"><i class="icon item4"></i><span>Приезд замерщика в день обращения.</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="s-stock section">
                        <div class="text attention-top"><span>Акция</span></div>
                        <div class="title">Закажи окно сейчас и получи:</div>
                        <div class="b-stock-list">
                            <div class="item"><i class="icon item1"></i><span>демонтаж</span></div>
                            <div class="item"><i class="icon item2"></i><span>подъем на этаж</span></div>
                            <div class="item"><i class="icon item3"></i><span>доставку</span></div>
                            <div class="item"><i class="icon item4"></i><span>вывоз мусора</span></div>
                        </div>
                        <div class="text attention-bottom"><span>БЕСПЛАТНО!</span></div>
                    </div>
                    <div class="b-counter">
                        <div class="title">До получения скидки:</div>
                        <div class="digits">
                            <div class="digit digit-hour">2</div>
                            <div class="digit digit-min">59</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="s-discount section">
                        <div class="text">
                            <span class="text_0">Получите бесплатный расчет</span>
                            <span class="text_1">всего за 1 минуту</span>
                            <span class="text_2">+ скидку 1000 рублей</span>
                        </div>
                        <p>если наш менеджер не свяжется с Вами в течение 3-х минут.</p>
                    </div>
                    <div class="s-form-1 section">
                        <div class="b-form ">
                            <div class="items">
                                <div class="item item-2">
                                    <form class="f-get-calc">
                                        <input type="text" class="required " name="name" placeholder="Введите Ваше имя">
                                        <input type="text" class="required f-tel" name="tel" placeholder="Введите Ваш телефон">
                                        <button type="submit" class="btn send-btn btn-animation">Получить бесплатный расчет</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-bull section">
        <div class="container">
            <div class="b-bull-wrap">
                <div class="b-bull-list owl-carousel">
                    <div class="item i_1">
                        <div class="title">Минимальная цена</div>
                        <div class="icon i_1"></div>
                        <div class="txt">Благодаря собственному производству <span>удерживаем минимальную цену на рынке</span></div>
                    </div>
                    <div class="item i_2">
                        <div class="title">Доверие</div>
                        <div class="icon i_2"></div>
                        <div class="txt">Мы работаем <span>свыше 15 лет.</span> И более <span>15545 окон и балконов</span> установлены в Сыктывкаре и области</div>
                    </div>
                    <div class="item i_3">
                        <div class="title">Качество</div>
                        <div class="icon i_3"></div>
                        <div class="txt">Производство на высокотехнологичном <span>турецком </span>оборудовании с <span>5</span> ступенчатой системой проверки качества</div>
                    </div>
                    <div class="item i_4">
                        <div class="title">Гарантии</div>
                        <div class="icon i_4"></div>
                        <div class="txt">Работаем <span>по официальному договору </span>с гарантией сроков. Вся <span>продукция сертифицирована.</span>
                        </div>
                    </div>
                    <div class="item i_5">
                        <div class="title">Монтаж</div>
                        <div class="icon i_5"></div>
                        <div class="txt">Установка окон <span>строго по ГОСТ.</span> Собственных <span>10 монтажных бригад </span>славянской внешности <span>с опытом свыше 5 лет</span></div>
                    </div>
                    <div class="item i_6">
                        <div class="title">Сервис</div>
                        <div class="icon i_6"></div>
                        <div class="txt">Благодаря собственному производству <span>удерживаем минимальную цену на рынке</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-types section bg-kirpichi">
        <div class="container">
            <div class="s-title">Типы оконных изделий</div>
            <img src="images/blue_line.png" alt="blue-line">
            <div class="b-types-wrap">
                <div class="b-types-list owl-carousel">
                    <div class="item">
                        <div class="title">ДВУХСТВОРЧАТОЕ ОКНО</div>
                        <div class="img i_1"></div>
                        <div class="price">от 1000<i class="rub"></i></div>
                        <button type="submit" class="btn btn-small btn-open-calc">Получить расчет</button>
                    </div>
                    <div class="item">
                        <div class="title">ТРЕХСТВОРЧАТОЕ ОКНО</div>
                        <div class="img i_2"></div>
                        <div class="price">от 1000<i class="rub"></i></div>
                        <button type="submit" class="btn btn-small btn-open-calc">Получить расчет</button>
                    </div>
                    <div class="item">
                        <div class="title">БАЛКОН ПОД КЛЮЧ</div>
                        <div class="img i_3"></div>
                        <div class="price">от 1000<i class="rub"></i></div>
                        <button type="submit" class="btn btn-small btn-open-calc">Получить расчет</button>
                    </div>
                    <div class="item">
                        <div class="title">БАЛКОННЫЙ БЛОК</div>
                        <div class="img i_4"></div>
                        <div class="price">от 1000<i class="rub"></i></div>
                        <button type="submit" class="btn btn-small btn-open-calc">Получить расчет</button>
                    </div>
                    <div class="item">
                        <div class="title">НЕСТАНДАРТНЫЕ
                            <br> КОНСТРУКЦИИ</div>
                        <div class="img i_5"></div>
                        <div class="price">от 1000<i class="rub"></i></div>
                        <button type="submit" class="btn btn-small btn-open-calc">Получить расчет</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-hello section" id="to-windows">
        <div class="container">
            <div class="s-title">Познакомьтесь ближе<span class="small">с будущим окном и балконом</span></div>
            <div id="owl-hello" class="owl-carousel nav-tabs">
                <div class="owl-itm itm-1 ">
                    <a data-toggle="tab" href="#panel-hello-1" class="active hello-open-more">
                        <div class="b-tit"><span>Профиль Exprof</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Подробнее</div>
                    </a>
                </div>
                <div class="owl-itm itm-2 ">
                    <a data-toggle="tab" href="#panel-hello-2" class="hello-open-more">
                        <div class="b-tit"><span>Фурнитура Roto NT</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Подробнее</div>
                    </a>
                </div>
                <div class="owl-itm itm-3 ">
                    <a data-toggle="tab" href="#panel-hello-3" class="hello-open-more">
                        <div class="b-tit"><span>Стеклопакет</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Подробнее</div>
                    </a>
                </div>
                <div class="owl-itm itm-4 ">
                    <a data-toggle="tab" href="#panel-hello-4" class="hello-open-more">
                        <div class="b-tit"><span>Подоконник</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Подробнее</div>
                    </a>
                </div>
                <div class="owl-itm itm-5 ">
                    <a data-toggle="tab" href="#panel-hello-5" class="hello-open-more">
                        <div class="b-tit"><span>Откосы</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Подробнее</div>
                    </a>
                </div>
            </div>
            <div class="b-hello-more tab-content">
                <div id="panel-hello-1" class="panel-hello tab-pane fade in active">
                    <ul class="b-hello-icons">
                        <li><span>100%<br>экологичный</span></li>
                        <li><span>Устойчивость к<br>морозу (до -250)</span></li>
                        <li><span>Теплоизоляция<br>на 98%</span></li>
                        <li><span>Гарантия<br>10 лет</span></li>
                        <li><span>Шумоизоляция<br>98%</span></li>
                    </ul>
                    <div class="b-txt">
                        <div class="b-title">описание</div>
                        Профиль EXPROF Practica относятся к сегменту общедоступных трехкамерных систем, выпускаются с протянутым уплотнителем TPE. Все штапики производятся с посткоэкструдированным уплотнением из мягкого пвх. В комплектацию входит широкий ассортимент всех необходимых вспомогательных профилей.
                    </div>
                    <div class="b-tech-wrap">
                        <div class="row">
                            <div class="hidden-xs col-sm-4">
                                <div class="b-img"></div>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="b-title b-title-tech">характеристики:</div>
                                <ul class="b-tech">
                                    <li>Количество камер <strong>3</strong></li>
                                    <li>Базовая ширина <strong>58 мм</strong></li>
                                    <li>Монтажная глубина (рамы) <strong>58 мм</strong></li>
                                    <li>Класс по толщине лицевых стенок <strong>A</strong></li>
                                    <li>Класс по климатич. условиям <strong>I (M)</strong></li>
                                    <li>Долговечность профилей <strong>60 лет</strong></li>
                                    <li>Сопр. теплопер. (профиль+арм-е) <strong>0,70</strong></li>
                                    <li>Удаление оси фурнитурного паза <strong>9 мм</strong></li>
                                    <li>Максимальная толщина стеклопакета <strong>36 мм</strong></li>
                                    <li>Внутрипрофильный доступ воздуха <strong>нет</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-hello-2" class="panel-hello tab-pane fade in">
                    <div class="b-txt">
                        <div class="b-title">Фурнитура ROTO NT (ГЕРМАНИЯ)
                            <span class="sub">Простота и легкость открывания</span>
                            <span class="small">с надежностью <span>на 15 лет - 60 000 циклов открывания</span></span>
                        </div>
                    </div>
                    <div class="b-tech-wrap">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="txt">
                                    <p>Фурнитура Roto NT производится только на собственных заводах в Германии.</p>
                                    <p>Все элементы фурнитуры проходят проверку качества в испытательных центрах Рото на высокотехнологичном оборудовании и соответствуют требованиям норм RAL и DIN.</p>
                                    <p>Все элементы оконной фурнитуры Roto NT для окон покрыты новаторским покрытием RotoSil Nano, обеспечивающим максимальную защиту от коррозии на 500%.</p>
                                    <p>С помощью специальной ручки с замком, Вы cможете блокировать её поворот и переход окна из откинутого положения в открытое.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="b-img"></div>
                                <ul>
                                    <li>Микропроветривание подарит Вам свежий воздух без сквозняков!</li>
                                    <li>Ваш ребенок сможет откинуть створку, но не сможет её открыть.</li>
                                    <li>Фурнитура соответствует 3 классу противовзломности в соответствии с международными нормами.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-hello-3" class="panel-hello tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-title">Собственное производство стеклопакета
                            <span class="sub">Гарантия 5 лет.</span>
                        </div>
                        <div class="img"><img src="images/s-hello-img-3-steklopaket.jpg"></div>
                        <div class="btn-wrap">
                            <div class="btn btn-flat-blue" data-toggle="collapse" data-target="#target-open-table">Посмотреть таблицу с характеристиками</div>
                        </div>
                        <div id="target-open-table" class="collapse"><img src="images/s-hello-img-3-table.jpg" alt=""></div>
                        <div class="txt">У нас собственное производство стеклопакета по уникальной технологии: расстояние между стеклами фиксируется при помощи специальных распорок – дистанционных рамок, которые представляют собой полые алюминиевые трубки прямоугольного сечения с небольшими отверстиями, расположенными со стороны воздушной камеры пакета.
                            <span class="btn btn-open-more" data-toggle="collapse" data-target="#target-open-3-more">Подробное описание</span>
                        </div>
                        <div id="target-open-3-more" class="text-more collapse">Дистанционные рамки режутся на определенную длину, после чего внутрь засыпается влагопоглотитель «молекулярное сито». Подготовленные рамки собираются в прямоугольные заготовки, после чего на торцевую поверхность заготовок наносится герметик первого слоя – «бутиловый шнур», который к тому же является весьма прочным клеем. Готовые рамки с нанесенным герметиком помещают между стекол, после чего всю конструкцию опрессовывают. Таким образом, получается прототип стеклопакета, на торцевую поверхность которого наносится герметик второго рода (полисульфид или полиуритан). Далее стеклопакет необходимо просушить в течение 24 часов, после чего он считается готовым.</div>
                    </div>
                </div>
                <div id="panel-hello-4" class="panel-hello tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-title">подоконник
                            <span class="sub">Прочность и долговечность на 50 лет!</span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="txt">
                                    <p><strong>Пластиковые подоконники имеют целый ряд преимуществ.</strong></p>
                                    <p>В процессе эксплуатации на пластиковых подоконниках не образуются царапины, они не желтеют, так как не впитывают влагу, пыль и грязь, устойчивы к воздействию ультрафиолетового излучения, негативному воздействию микроорганизмов, едких и кислотосодержащих веществ, не расслаиваются, сохраняя первоначальную привлекательность, не требуют специального ухода.</p>
                                    <p>Стандартный цвет пластикового подоконника – белый. По Вашему желанию подоконник может быть различного цвета. Цветной пластиковый подоконник будет красивым элементом декора Вашего дома или квартиры </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="img"><img src="images/s-hello-img-4.jpg"></div>
                                <ul>
                                    <li>Превосходная теплоизоляция</li>
                                    <li>Противопожарны (не горят)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-hello-5" class="panel-hello tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-title">ПЛАСТИКОВЫЕ ОТКОСЫ
                            <span class="sub">Защита от шума, холода, снижение теплопотерь на 25%</span>
                        </div>
                        <div class="txt">
                            <img src="images/s-hello-img-5.jpg" alt="">
                            <p>Замена старого деревянного окна новым пластиковым нередко сопряжена с демонтажем оконных откосов и их заменой.</p>
                            <p>За счёт воздушной прослойки между откосом и стеной, пластиковые откосы обладают высокими, теплосберегающими свойствами!</p>
                            <p>Легки в уборке: достаточно просто протереть влажной тряпкой поверхность откоса и все!</p>
                            <p>В процессе монтажа наших окон мы используем фирменные откосы с оригинальными деталями. Стоимость пластиковых откосов на стандартное окно дешевле на 15%, по сравнению с оштукатуренными откосами.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-get-calc section">
        <div class="container">
            <div class="row">
                <div class="title"><span>Получите </span>расчет онлайн
                    <br>по своим размерам за<span> 5 секунд</span></div>
                <div class="img hiddan-xs"></div>
                <form class="f-get-calc f-calc-second">
                    <div class="inp">
                        <input type="text" class="required input_small" name="width" id="height" placeholder="Высота">
                    </div>
                    <div class="inp">
                        <input type="text" class="required input_small" name="height" id="width" placeholder="Длина">
                    </div>
                    <div class="inp">
                        <input type="text" class="required input_small" name="height" id="m2" placeholder="Кв. м.">
                    </div>
                    <input type="text" class="required f-tel" name="tel" placeholder="Ваш телефон">
                    <button type="submit" class="btn send-btn btn-animation">Получить бесплатный расчет</button>
                </form>
                <div class="today"><span class="br">За сегодня мы рассчитали уже</span>
                    <span class="c_yellow">17 </span><span class="c_blue">окон и </span><span class="c_yellow">5 </span><span class="c_blue">балконов</span></div>
            </div>
        </div>
    </div>
    <div class="s-services section">
        <div class="container">
            <div class="s-title">Наш спектр услуг</div>
            <img src="images/yellow_line.png" alt="yellow-line">
            <div class="b-services-wrap">
                <div class="b-services-list owl-carousel">
                    <div class="item">
                        <div class="title">Остекление
                            <br> квартир
                        </div>
                        <div class="line"></div>
                        <div class="img i_1"></div>
                    </div>
                    <div class="item">
                        <div class="title">Балкон и лоджии
                            <br>под ключ</div>
                        <div class="line"></div>
                        <div class="img i_2"></div>
                    </div>
                    <div class="item">
                        <div class="title">Остекление дач,веранд
                            <br>и загородных домов</div>
                        <div class="line"></div>
                        <div class="img i_3"></div>
                    </div>
                    <div class="item">
                        <div class="title">Установка офисных
                            <br>перегородок
                        </div>
                        <div class="line"></div>
                        <div class="img i_4"></div>
                    </div>
                    <div class="item">
                        <div class="title">Установка
                            <br>жалюзи
                        </div>
                        <div class="line"></div>
                        <div class="img i_5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-reviews section" id="to-reviews">
        <div class="container">
            <div class="s-title">Наши работы и отзывы</div>
            <div class="b-reviews-wrap">
                <div class="b-reviews-list owl-carousel">
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_1"></div>
                            <div class="name">Олег</div>
                            <div class="feedback_txt hidden-xs">“Для того, чтобы балкон выглядел красиво и было тепло заказал обшивку балкона, в Интернете наткнулся на объявление по обшивке балкона, да еще попал на акцию «Утепление балкона в подарок!», сомнений не было просто позвонить и заказать именно в компании Арсенал Окна, в результате ребята сделали все быстро и качественно, а главное, что не пришлось ехать в офис, заключать договор, все прошло дома, плюс дали гарантию 5 лет.”</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_1"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li>- уличная обшивка виниловым сайдингом,
                                </li>
                                <li>- установка пластиковых рам "П-образных"
                                </li>
                                <li>- дополнительная створка сбоку
                                </li>
                                <li>- обшивка внутри (ПВХ панелями)
                                </li>
                                <li>- отделка балконного выхода
                                </li>
                                <li>- устройство пола из фанеры,
                                </li>
                                <li>- установка отливов
                                </li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>- москитная сетка, утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>53 000 руб.</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_2"></div>
                            <div class="name">Аня</div>
                            <div class="feedback_txt hidden-xs">“Я ветеран ВОВ и труженик тыла, моя мечта всегда была остеклить и обшить балкон, но все врем то руки не доходили, то думала денег много надо, после серии выходов статей в газетах от компании Арсенал Окна, стала задумываться серьезнее, что надо мечту свою осуществить, да еще и появилась акция Утепление в подарок!, + рассрочка беспроцентная, что так важно нам пенсионерам. Работой ребят я очень довольна, 2 Сергей все делали, я даже и не думала, что молодежь еще осталась такая чуткая и работоспособная, огромная благодарность ”.</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_2"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li> - установка алюминиевых рам "Г-образных" в 1 стекло без выноса
                                </li>
                                <li>- дополнительная створка </li>
                                <li>- внутренняя обшивка (ПВХ панелями)</li>
                                <li>- отделка балконного выхода </li>
                                <li>- установили 2 шкафчика из алюминия</li>
                                <li>- постелили линолеум заказчика.</li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>- москитная сетка, утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>59 500 руб.</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_3"></div>
                            <div class="name">Антон</div>
                            <div class="feedback_txt hidden-xs">Совсем устарели мои деревянные рамы, решил обновить, проверил предложения в интернете нескольких компаний, понравилось предложение Арсенал Окна, производство в городе, значит и сроки от производства до установки минимальные, так и получилось, работы провели качественно и быстро, не было недочетов, гарантию предоставили.</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_3 hidden"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li>- установка пластиковых рам в одно стекло на лоджию 6м, без внутренней обшивки и отделки балконного выхода </li>
                                <li>- установка юбки 30 см под рамами.</li>
                                <li>- по краям лоджии стекло поменяли на с эндвич-панель, для дальнейшей установки шкафчиков
                                </li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>- москитная сетка, утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>31 500 руб.</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_4"></div>
                            <div class="name">Василий</div>
                            <div class="feedback_txt hidden-xs">Совсем устарели мои деревянные рамы, решил обновить, проверил предложения в интернете нескольких компаний, понравилось предложение Арсенал Окна, производство в городе, значит и сроки от производства до установки минимальные, так и получилось, работы провели качественно и быстро, не было недочетов, гарантию предоставили.</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_4"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li>- Установка балконного блока с подоконником и порогом в кирпичном доме,</li>
                                <li>- отделка откосов сэндвич-панелями</li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>- москитная сетка, утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>19 000 руб.</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_5"></div>
                            <div class="name">Лилия</div>
                            <div class="feedback_txt hidden-xs">Стояли старые деревянные рамы, захотелось внести в интерьер новизну и красоту, что и сделала с компанией Арсенал Окна, после прочтения интересных статей в газетах города, монтажники быстро замеряли, быстро изготовили и быстро поставили, как я думала сроки будут «резиновые», а нет, все прошло в сжатые сроки, я получила то, что задумала, теперь сижу на балконе, как в новой комнате и любуюсь на работу.</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_5"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li>- установили 2 шкафчика из алюминия, был сделан вынос прямо и вбок.</li>
                                <li>- обшивка уличной стороны виниловым сайдингом
                                </li>
                                <li>- установка пластиковых рам "Г-образных" в 1 стекло</li>
                                <li>- внутренняя обшивка ПВХ панелями белыми глянцевыми и отделка балконного выхода</li>
                                <li>- по краям балкона стекло поменяли на сэндвич-панель
                                </li>
                                <li>- установили 2 шкафчика из алюминия, был сделан вынос прямо и вбок.</li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>- москитная сетка, утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>55 500 руб.</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 b_feedback">
                            <div class="avatar av_6"></div>
                            <div class="name">Даша</div>
                            <div class="feedback_txt hidden-xs">Я искала оконную компанию для того, для установки окон на балкон, чтобы было дома было тепло, уютно , а красота чтобы была не только внутри , но и снаружи, чего и добилась с компанией Арсенал окна, которых нашла в газетах, плюсом этой компании стало скорое время от производства до установки, ждать долго не пришлось, качество и четкость работ . Огромное спасибо ребятам !</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 b_done">
                            <div class="img i_6 hidden"></div>
                            <div class=" b_done_title">Что было сделано:</div>
                            <ul>
                                <li> - уличная обшивка виниловым сайдингом
                                </li>
                                <li>- установка алюминиевых рам в одно стекло с выносом вперед, без внутренней обшивки и отделки балконного выхода</li>
                                <li>- установка отливов</li>
                            </ul>
                            <div class="gift">
                                <div class="title">В подарок :</div>
                                <p>утепление балкона Урсой.</p>
                                <div class="price">Цена: <span>27 500 руб.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-balk section" id="to-balk">
        <div class="container">
            <div class="s-title">Балкон и лоджии<span class="br-xs">под ключ</span></div>
            <div id="owl-balk" class="owl-carousel nav-tabs">
                <div class="owl-itm itm-1">
                    <a data-toggle="tab" href="#panel-balk-1" class="active balk-open-more">
                        <div class="b-tit"><span>Теплое</span><span class="br-sm">остекление</span><span class="small visible-xs">- экономия на 25% и дополнительные от&nbsp;5&nbsp;м2 площади </span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span>Производится на основе ПВХ-профилей (EXPROF Practica ). Высокая герметичность обеспечит надежное сохранение тепла и защиту от влаги и прочих погодных неприятностей, превращая балкон или лоджию в дополнительное жилое пространство, где можно обустроить уютный мини-кабинет, комнату отдыха, библиотеку или зимний сад.</span></div>
                </div>
                <div class="owl-itm itm-2">
                    <a data-toggle="tab" href="#panel-balk-2" class="balk-open-more">
                        <div class="b-tit"><span>Холодное</span><span class="br-sm">остекление</span><span class="small visible-xs">- экономия на 25% и дополнительные от&nbsp;5&nbsp;м2 площади </span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span>Производится на основе легких алюминиевых конструкций . Они отлично защитят балкон или лоджию от пыли, грязи, осадков, но не сделают их теплыми. Имеют раздвижную систему открывания, что дополнительно экономит, пространство.</span></div>
                </div>
                <div class="owl-itm itm-3">
                    <a data-toggle="tab" href="#panel-balk-3" class="balk-open-more">
                        <div class="b-tit"><span>Внешняя</span><span class="br-sm">обшивка</span><span class="small visible-xs">- придания эстетичного внешнего вида, защиты от грязи, пыли, ветра и осадков </span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span>Отделка сайдингом, пожалуй, самый популярный вариант внешней отделки балконов и лоджий. Во многом благодаря продолжительной и безупречной службе данного материала. Разнообразие цветовых решений позволяет сделать балкон или лоджию оригинальными.</span></div>
                </div>
                <div class="owl-itm itm-4">
                    <a data-toggle="tab" href="#panel-balk-4" class="balk-open-more">
                        <div class="b-tit"><span>Внутренняя</span><span class="br-sm">отделка</span><span class="small visible-xs">утепление и уникальный облик за<br>1 день</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span><ul><li>отделка вагонкой (пластиковой или деревянной)</li><li>утепление стен и потолка</li><li> утепление и настил пола</li></ul></span></div>
                </div>
                <div class="owl-itm itm-5">
                    <a data-toggle="tab" href="#panel-balk-5" class="balk-open-more">
                        <div class="b-tit"><span>Монтаж</span><span class="br-sm">крыши</span><span class="small visible-xs">по собственной системе монтажа, <strong class="br">с гарантией 5 лет</strong></span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span>Крыша балкона, изготовленная из профлиста, отлично подходит для нашего капризного климата, поскольку способна противостоять сильным морозам, высокой влажности, большому количеству осадков и не подвергается коррозии. Этот материал, при всех своих преимуществах, отличается невысокой  стоимостью. </span></div>
                </div>
                <div class="owl-itm itm-6">
                    <a data-toggle="tab" href="#panel-balk-6" class="balk-open-more">
                        <div class="b-tit"><span>Увеличение</span><span class="br-sm">комнаты</span><span class="small visible-xs">Дополнительные от 3 кв.м площади комнаты</span></div>
                        <div class="b-img visible-xs"></div>
                        <div class="btn btn-blue visible-xs">Описание</div>
                    </a>
                    <div class="owl-itm-desc"><span>За счет демонтажа балконного блока, осуществляется небольшая перепланировка, позволяющая увеличить площадь квартиры на 10-15% и использовать её с максимальной пользой. На место подоконника, чаще всего, устанавливают столешницу, шкафчик или полки, а дверной попросту проем остается открытым.</span></div>
                </div>
            </div>
            <div id="owl-balk-nav"></div>
            <div class="b-balk-more tab-content hidden-xs">
                <div id="panel-balk-1" class="panel-balk tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-txt-title">Теплое остекление
                            <br>теплоизоляция балкона или лоджии на 98%</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <p>Производится на основе ПВХ-профилей (EXPROF Practica ). Высокая герметичность обеспечит надежное сохранение тепла и защиту от влаги и прочих погодных неприятностей, превращая балкон или лоджию в дополнительное жилое пространство, где можно обустроить уютный мини-кабинет, комнату отдыха, библиотеку или зимний сад.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-balk-2" class="panel-balk tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-txt-title">Холодное остекление - экономия на 25%
                            <br>и дополнительные от 5 м2 площади</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <p>Производится на основе легких алюминиевых конструкций . Они отлично защитят балкон или лоджию от пыли, грязи, осадков, но не сделают их теплыми. Имеют раздвижную систему открывания, что дополнительно экономит ,пространство.</p>
                                    <p>Идеально подойдут для использования в качестве летней веранды, места для хранения вещей в виде дополнительной кладовки или сушки белья.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-balk-3" class="panel-balk tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-txt-title">Внешняя обшивка балкона - придание эстетичного внешнего вида, защиты от грязи, пыли, ветра и осадков</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                                <div class="b-txt-img itm-2"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <p>Отделка сайдингом, пожалуй, самый популярный вариант внешней отделки балконов и лоджий.</p>
                                    <p>Во многом благодаря продолжительной и безупречной службе данного материала.</p>
                                    <p> Разнообразие цветовых решений позволяет сделать балкон или лоджию оригинальными.</p>
                                    <p>Профлист обладает приятным внешним видом и, благодаря разнообразию цветовых решений, станет украшением Вашего балкона или Вашей лоджии с внешней стороны.</p>
                                    <p>Будучи выполненным из оцинкованной стали, он не ржавеет и обладает высокой надежностью.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-balk-4" class="panel-balk tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-txt-title">Внутренняя отделка балконов и лоджий
                            <br>утепление и уникальный облик за 1 день</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <ul>
                                        <li>отделка вагонкой (пластиковой или деревянной)</li>
                                        <li>утепление стен и потолка</li>
                                        <li>утепление и настил пола</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-balk-5" class="panel-balk tab-pane fade in ">
                    <div class="b-txt">
                        <div class="b-txt-title">УСТРОЙСТВО КРЫШИ НАД БАЛКОНОМ ИЛИ ЛОДЖИЕЙ
                            <br>по собственной системе монтажа, с гарантией 5 лет</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <p>Крыша балкона, изготовленная из профлиста, отлично подходит для нашего капризного климата, поскольку способна противостоять сильным морозам, высокой влажности, большому количеству осадков и не подвергается коррозии. </p>
                                    <p>Этот материал, при всех своих преимуществах, отличается невысокой стоимостью.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-balk-6" class="panel-balk tab-pane fade in active">
                    <div class="b-txt">
                        <div class="b-txt-title">УВЕЛИЧЕНИЕ КОМНАТЫ ЗА СЧЕТ БАЛКОНА ИЛИ ЛОДЖИИ
                            <br>Дополнительные от 3 кв.м площади комнаты</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-txt-img"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="b-txt-desc">
                                    <div class="b-title"><span>Описание:</span></div>
                                    <p>За счет демонтажа балконного блока, осуществляется небольшая перепланировка, позволяющая увеличить площадь квартиры на 10-15% и использовать её с максимальной пользой. </p>
                                    <p>На место подоконника, чаще всего, устанавливают столешницу, шкафчик или полки, а дверной попросту проем остается открытым.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-form-2 section">
        <div class="b-form section">
            <div class="container">
                <div class="title"><span class="br">Получить бесплатный</span> расчет <span class="c_yellow">за 1 минуту</span></div>
                <div class="items">
                    <div class="item item-2">
                        <form class="f-get-calc">
                            <input type="text" class="required " name="name" placeholder="Введите Ваше имя">
                            <input type="text" class="required f-tel" name="tel" placeholder="Введите Ваш телефон">
                            <button type="submit" class="btn send-btn btn-animation">Получить бесплатный расчет</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-main-form section">
        <div class="container">
            <div class="b-main-form-header">
                <div class="txt-wrap">
                    <div class="tit">Закажите балкон под ключ
                        <br><span>и получите утепление стоимостью</span></div>
                    <div class="gift"><span>5000 рублей </span>в ПОДАРОК</div>
                </div>
                <img src="images/gift.jpg" alt="gift">
            </div>
            <div class="b-form blu_bg">
                <div class="title hidden-xs">Получите бесплатный расчет
                    <span>всего за 1 минуту</span></div>
                <div class="items">
                    <div class="item item-2">
                        <form class="f-get-calc">
                            <input type="text" class="required " name="name" placeholder="Ваше имя">
                            <input type="text" class="required f-tel" name="tel" placeholder="Ваш телефон">
                            <button type="submit" class="btn send-btn btn-animation">Получить бесплатный расчет</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tit_bottom">За сегодня мы рассчитали уже
                <span class="txt_1">5<span class="txt_2"></span> балконов</span>
            </div>
        </div>
    </div>
    <div class="s-about section" id="to-about">
        <div class="container">
            <div class="s-title">Несколько слов о нашей компании</div>
            <div class="image"></div>
            <p>Посмотрите короткое видео о нашем производстве</p>
            <div class="b-about">
                <div class="b-about-wideo itm">
                    <iframe src="https://www.youtube.com/embed/dC3_0srY0Rs" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="b-about-txt itm">
                    <ul>
                        <li>Ежедневно выпускаем до 50 кв.м. металлопластиковых изделий в смену</li>
                        <li>Высокотехнологичная автоматическая линия «Elumatec» (Турция), включающее автоматический пильно-обрабатывающий комплекс SCHIRMER (Германия)</li>
                        <li>5 уровневый контроль качества, </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="s-sert section">
        <div class="screw screw-top"></div>
        <div class="container">
            <div class="s-title">наши сертификаты</div>
            <div class="b-sert-wrap">
                <div class="b-sert owl-carousel">
                    <div class="item"><a href="images/sert-1.jpg" class="fancybox" rel="group3"><img src="images/sert-min-1.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-2.jpg" class="fancybox" rel="group3"><img src="images/sert-min-2.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-3.jpg" class="fancybox" rel="group3"><img src="images/sert-min-3.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-4.jpg" class="fancybox" rel="group3"><img src="images/sert-min-4.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-5.jpg" class="fancybox" rel="group3"><img src="images/sert-min-5.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-6.jpg" class="fancybox" rel="group3"><img src="images/sert-min-6.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-7.jpg" class="fancybox" rel="group3"><img src="images/sert-min-7.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-8.jpg" class="fancybox" rel="group3"><img src="images/sert-min-8.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-9.jpg" class="fancybox" rel="group3"><img src="images/sert-min-9.jpg" alt=""></a></div>
                    <div class="item"><a href="images/sert-0.jpg" class="fancybox" rel="group3"><img src="images/sert-min-0.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-adv section">
        <div class="container">
            <div class="s-title">7 преимуществ заказать окно у нас</div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 hidden-xs">
                    <div class="b_image"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="b-adv-wrap">
                        <ul class="b-adv-list owl-carousel">
                            <li class="item i_1"><span>Выезд замерщик в день обращения</span></li>
                            <li class="item i_2"><span>Заключение договора на дому <a href="javascript: void();" class="btn-open-dog">(скачать договор)</a></span></li>
                            <li class="item i_3"><span>Гарантия 5 лет</span></li>
                            <li class="item i_4"><span>Рассрочка до 3 месяцев, кредит</span></li>
                            <li class="item i_5"><span>Замерщик заходит в дом в одноразовых тапочках и предоставляет образцы профилей</span></li>
                            <li class="item i_6"><span>Тех поддержка 7дней в неделю и всегда доброжелательные менеджеры</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-how-many section">
        <div class="container">
            <div class="tit">437 объектов
                <br>
                <span>по г. Сывтывкару и области за 2016 год</span>
            </div>
            <div class="b-how-many-list-wrap-wrap">
                <div id="how-many-slider-img-prev" class="hidden-xs"></div>
                <div id="how-many-slider-img-next" class="hidden-xs"></div>
                <div id="how-many-slider-desc" class="hidden-xs"></div>
                <div class="b-how-many-list-wrap">
                    <div class="b-how-many-list owl-carousel">
                        <div class="itm">
                            <a href="images/b-how-many-01.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-01.jpg"></a>
                            <div class="description">Коммунистическая 48а. Лоджия ПВХ без обшивки, не стандартные створки. ПО бокам закрыли сэндвич-панелью, что бы в дальнейшем сделать шкафчик</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-02.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-02.jpg"></a>
                            <div class="description">Октябрьский проспект 3. Уже с жалюзи</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-03.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-03.jpg"></a>
                            <div class="description">Фото не очень, т.к монтажник без формы А вообще это Водопьянова 5, была установлена ПВХ конструкция в 3 стекла, т.к. выход на балкон собирались убирать и соединять комнату с балконом </div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-04.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-04.jpg"></a>
                            <div class="description">Октябрьский проспект 3 очень необычная лоджия, т.к. сбоку еще есть окошко. Застеклили в 3стекла и сделали обшивку ПВХ панелями. В дальнейшем повесили вертикальные жалюзи</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-05.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-05.jpg"></a>
                            <div class="description">Коммунистическая 48а Алюминиевая лоджия обшивка внутри деревянной вагонкой, по краям закрыли сэндвичем, что бы сделать шкафчик в дальнейшем</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-07.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-07.jpg"></a>
                            <div class="description">было сделано остекление ПВХ конструкцией в 1 стекло. Сделана обшивка внутри балкона и жалюзи, что бы лишний свет не мешал смотреть телевизор</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-08.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-08.jpg"></a>
                            <div class="description">Алюминиевый балкон. Пока без обшивки. В процессе работы, уже поставили подоконник и рамы, делается утепление передней и боковых панелей</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-09.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-09.jpg"></a>
                            <div class="description">Опять Водопьянова 5. Фото сделано вечером, после завершения работы. Вот так выглядит эта не стандартная лоджия. Так же была выложена кирпичная кладка, для того, что бы придать такой вид</div>
                        </div>
                        <div class="itm">
                            <a href="images/b-how-many-10.jpg" class="fancybox" rel="group2"><img src="images/b-how-many-10.jpg"></a>
                            <div class="description">А это вид застекленного и обшитого балкона. Вещи, как и у многих хранятся именно здесь, но, за счет двух больших шкафчиков, не создается свалка. Зимой на таком балконе очень комфортно находиться за счет хорошего утепления</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-map section" id="to-contacts">
        <div class="b-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=9uV4btuNMtOuIYxFBWXdIBMjz_1r__mF&width=100%&height=670&lang=ru_RU&sourceType=constructor&scroll=true"></script>
        </div>
        <div class="b-map-adr-wrap">
            <div class="container">
                <div class="b-map-adr">
                    <div class="b-adr-img hidden-xs"></div>
                    <div class="b-adr">
                        <div class="b-adr-wrap-adr">
                            <div class="title">Наши контактные данные</div>
                            <div class="b-adr-item adr">г. Сыктывкар ул. Маегова
                                <br>д. 18, кв. 51</div>
                            <div class="b-adr-item tel">8 (8212) 562 888
                                <br>8 (908) 714 23 68</div>
                            <div class="b-adr-item mail">teplodom@mail.ru</div>
                            <p>БИК 048702640</p>
                            <p>ОГРН 316110100051883</p>
                            <p>ИНН 110119361356</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-footer-form section">
        <div class="b-form s-form-3">
            <div class="container">
                <div class="title">Остались вопросы? Задайте их менеджеру</div>
                <div class="items">
                    <div class="item item-2">
                        <form class="f-get-calc">
                            <input type="text" class="required " name="name" placeholder="Введите Ваше имя">
                            <input type="text" class="required f-tel" name="tel" placeholder="Введите Ваш телефон">
                            <button type="submit" class="btn send-btn btn-animation">Заказать звонок</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-footer-info section visible-xs">
        <div class="b_info">
            <div class="container">
                <div class="logo"></div>
                <div class="title">Производство и продажа пластиковых окон</div>
                <div class="info-tel">
                    <div class="time">Горячая линия <span>10:00-19:00 </span></div>
                    <div class="tel">
                        <p><a href="tel:+8212562888">8 (8212) 562 888</a></p>
                        <p><a href="tel:+89087142368">8 (908) 714 23 68</a></p>
                    </div>
                </div>
                <button type="button" class="btn btn-blue">Закажи обратный звонок</button>
                <div class="logo_company"></div>
                <div class="wrap-s-pol_conf_card">
                    <a class="pol_conf fancybox" href="#politic">Политика конфиденциальности</a>
                    <div class="card">Карта СБЕРБАНК 5469 2800 1147 3346</div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-footer-info-pl section hidden-xs">
        <div class="b_info">
            <div class="container">
                <div class="wrap_logo-title b-footer-itm">
                    <div class="logo"></div>
                    <div class="title">Производство и продажа пластиковых окон</div>
                </div>
                <div class="b_rekv hidden-xs hidden-sm b-footer-itm">
                    <p>БИК 048702640</p>
                    <p>ОГРН 316110100051883</p>
                    <p>ИНН 110119361356</p>
                </div>
                <div class="wrap-s-pol_conf_card b-footer-itm">
                    <div class="b-footer-adr hidden-xs hidden-sm">Юр. адрес : г. Сыктывкар ул. Маегова д. 18, кв. 51</div>
                    <a class="pol_conf fancybox" href="#politic">Политика конфиденциальности</a>
                    <div class="card">Карта СБЕРБАНК 5469 2800 1147 3346</div>
                </div>
                <div class="b-footer-tel b-footer-itm">
                    <div class="info-tel ">
                        <div class="tel">
                            <p><a href="tel:+8212562888">8 (8212) 562 888</a></p>
                            <p><a href="tel:+89087142368">8 (908) 714 23 68</a></p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-blue open-form">Закажи обратный звонок</button>
                </div>
            </div>
        </div>
    </div>
    <div class="dark"></div>
    <div class="popup">
        <div class="popup-wrap">
            <form class="form-popup">
                <div class="f-title">Оставьте свои контакты,
                    <br>чтобы заказать обратный звонок</div>
                <div class="f-body">
                    <input type="text" class="" name="name" placeholder="Имя">
                    <input type="text" class="required f-tel" name="tel" placeholder="Телефон">
                    <button type="submit" class="btn send-btn">Заказать звонок</button>
                </div>
                <div class="closepopup">&#10006;</div>
            </form>
            <form class="form-popup-calc">
                <div class="f-title">Оставьте свои контакты,
                    <br>чтобы получить расчет</div>
                <div class="f-body">
                    <input type="text" class="" name="name" placeholder="Имя">
                    <input type="text" class="required f-tel" name="tel" placeholder="Телефон">
                    <button type="submit" class="btn send-btn">Получить расчет</button>
                </div>
                <div class="closepopup">&#10006;</div>
            </form>
            <form class="form-popup-dog">
                <div class="f-title">Оставьте свои контакты,
                    <br>чтобы получить образец договора</div>
                <div class="f-body">
                    <input type="text" class="" name="email" placeholder="Email">
                    <input type="text" class="required f-tel" name="tel" placeholder="Телефон">
                    <button type="submit" class="btn send-btn open-dog">Получить договор</button>
                </div>
                <div class="closepopup">&#10006;</div>
            </form>
            <!-- Попап ошибки отправки писем из формы попапа -->
            <div class="popup-error">
                <p>Ошибка!</p>
                <p>Заполните все поля в форме</p>
                <button class="btn ok-btn">ОК</button>
            </div>
            <!-- Попап успешной отправки писем из акционной формы -->
            <div class="popup-success">
                <p>Спасибо!</p>
                <p>Наш специалист скоро свяжется с Вами!</p>
                <button class="btn ok-btn">ОК</button>
            </div>
            <div class="popup-success-dog">
                <p>Скачать</p>
                <p><a href="dogovor_okna_arsenal.docx">образец&nbsp;договора.</a></p>
                <button class="btn ok-btn">ОК</button>
            </div>
        </div>
    </div>
    <div class="polit-popup" id="politic">
        <div class="txt">
            <h3>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h3>
            <p>Соблюдение Вашей конфиденциальности важно нас. По этой причине, мы разработали Политику Конфиденциальности, которая описывает, как мы используем и храним Вашу информацию. Пожалуйста, ознакомьтесь с нашими правилами соблюдения конфиденциальности и сообщите нам, если у вас возникнут какие-либо вопросы.</p>
            <h4>Сбор и использование персональной информации</h4>
            <p>Под персональной информацией понимаются данные, которые могут быть использованы для идентификации определенного лица либо связи с ним.</p>
            <p>От вас может быть запрошено предоставление вашей персональной информации в любой момент, когда вы связываетесь с нами. </p>
            <p>Ниже приведены некоторые примеры типов персональной информации, которую мы можем собирать, и как мы можем использовать такую информацию.</p>
            <h4>Какую персональную информацию мы собираем</h4>
            <ul>
                <li><span>•</span>Когда вы оставляете заявку на бесплатный урок, мы можем собирать различную информацию, включая ваши имя, номер телефона, адрес электронной почты и т.д.</li>
            </ul>
            <h4>Как мы используем вашу персональную информацию</h4>
            <ul>
                <li><span>•</span>Собираемая нами персональная информация позволяет нам связываться с нами и сообщать об уникальных предложениях, акциях и других мероприятиях и ближайших событиях. </li>
                <li><span>•</span>Время от времени, мы можем использовать вашу персональную информацию для отправки важных уведомлений и сообщений. </li>
                <li><span>•</span>Мы также можем использовать персональную информацию для внутренних целей, таких как проведения аудита, анализа данных и различных исследований в целях улучшения услуг предоставляемых нами и предоставления Вам рекомендаций относительно наших услуг.</li>
                <li><span>•</span>Если вы принимаете участие в розыгрыше призов, конкурсе или сходном стимулирующем мероприятии, мы можем использовать предоставляемую вами информацию для управления такими программами.</li>
            </ul>
            <h4>Раскрытие информации третьим лицам</h4>
            <p>Мы не раскрываем полученную от Вас информацию третьим лицам. </p>
            <h4>Исключения</h4>
            <p>В случае если необходимо — в соответствии с законом, судебным порядком, в судебном разбирательстве, и/или на основании публичных запросов или запросов от государственных органов на территории РФ — раскрыть вашу персональную информацию. Мы также можем раскрывать информацию о вас если мы определим, что такое раскрытие необходимо или уместно в целях безопасности, поддержания правопорядка, или иных общественно важных случаях.</p>
            <p>В случае реорганизации, слияния или продажи мы можем передать собираемую нами персональную информацию соответствующему третьему лицу – правопреемнику.</p>
            <h4>Защита персональной информации</h4>
            <p>Мы предпринимаем меры предосторожности — включая административные, технические и физические — для защиты вашей персональной информации от утраты, кражи, и недобросовестного использования, а также от несанкционированного доступа, раскрытия, изменения и уничтожения.</p>
            <h4>Соблюдение вашей конфиденциальности на уровне компании</h4>
            <p>Для того чтобы убедиться, что ваша персональная информация находится в безопасности, мы доводим нормы соблюдения конфиденциальности и безопасности до наших сотрудников, и строго следим за исполнением мер соблюдения конфиденциальности.</p>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/owl/assets/owl.carousel.min.css" media="screen" />
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bx/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
