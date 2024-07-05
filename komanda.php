<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Команда юристов и адвокатов Кургана</title>
    <meta name="description" property="og:description"
        content="Мы - команда профессиональных юристов и адвокатов Курганской области, все наши специалисты имеют большой стаж работы и опыт решения различных ситуаций и споров.">
    <meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:title" content="Команда юристов и адвокатов Кургана" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://юрист45.рф/komanda" />
    <link rel="canonical" href="https://юрист45.рф/komanda" />
    <meta name="imagetoolbar" content="no">
    <meta name="msthemecompatible" content="no">
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link href="css/kernel_main/kernel_main.css?152042467544417" type="text/css" rel="stylesheet">
    <link href="css/kernel_socialservices/kernel_socialservices.css?1520424615512" type="text/css" rel="stylesheet">
    <link
        href="css/template_83943bfab5bae145e83fccc6a8e55f26/template_83943bfab5bae145e83fccc6a8e55f26.css?1520424615451015"
        type="text/css" data-template-style="true" rel="stylesheet">
    <link href="bitrix/panel/main/popup.min.css?149849325520704" type="text/css" data-template-style="true"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

    <?php
    include("sm/include/connect.php");
    $result17 = DB::Query("SELECT * FROM site", $link);
    $row17 = mysqli_fetch_array($result17);
    echo '
    <meta property="og:image" content="https://юрист45.рф/img/' . $row17["img1"] . '" />
    ';
    ?>
</head>

<body>

    <?php
    include('include/header.php');
    echo '
    <main class="main__container">
    <section class="subheader1">
        <div class="content-center">
            <div class="subheader__text">
                <div class="breadcrumbs bem">
                    <ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                    <h1 class="breadcrumbs__item" id="breadcrumbs__item1">' . $row17["text7"] . '</h1>
                </div>
                <h1 class="breadcrumbs__item3 is-hide-desktop">' . $row17["text7"] . '</h1>
            </div>
        </div>
    </section>
    <main class="main__content">
        <div class="content-center content-area">
            <section class="team js-team">
                <div class="team__container team-js-inner" data-specialization="" data-office="" data-request="">
    ';

    $result25 = DB::Query("SELECT * FROM komanda", $link);
    while ($row25 = mysqli_fetch_array($result25)) {
        echo '
        <div class="team__item js-team-item" itemscope itemtype="https://schema.org/Profile">
            <div class="team__item-img">
                <a href="specialist?id=' . $row25["id"] . '" class="team__hidden-link">
                    <img src="img/komanda/' . $row25["img1"] . '" alt="' . $row25["name"] . '" title="' . $row25["name"] . '" itemprop="image">
                </a>
            </div>
            <div class="team__item-right">
                <div class="team__name">
                    <a href="specialist?id=' . $row25["id"] . '" class="team__hidden-link" itemprop="name">' . $row25["name"] . '</a>
                </div>
                <meta itemprop="description" content="' . $row25["opisanie"] . '">
                <div class="team__about"></div>
                <a href="specialist?id=' . $row25["id"] . '" class="team__arrow icon-arrow1 is-hide-mobile"></a>
                <div class="team__competence-caption">Основные направления профессиональной компетенции:</div>
                <ul class="team__competence-list">' . $row25["napr"] . '</ul>
                <a href="specialist?id=' . $row25["id"] . '" class="team__arrow icon-arrow1 is-hide-desktop"></a>
            </div>
        </div>
        ';
    }

    echo '
                </div>
            </section>
        </div>
    </main>
    ';

    include('include/footer.php');
    ?>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#imgLoad").hide(); // Скрываем прелоадер
    });

    var num = 8; //чтобы знать с какой записи вытаскивать данные

    $(function() {
        $("#load div").click(function() { // Выполняем если по кнопке кликнули
            $("#imgLoad").show(); // Показываем прелоадер

            $.ajax({
                url: "include/actionkom.php", // Обработчик
                type: "GET", // Отправляем методом GET
                data: {
                    "num": num
                },
                cache: false,
                success: function(response) {
                    if (response ==
                        0
                    ) { // Смотрим ответ от сервера и выполняем соответствующее действие
                        alert("Больше нет записей");
                        $("#imgLoad").hide();
                    } else {
                        $("#content").append(response);
                        num = num + 6;
                        $("#imgLoad").hide();
                    }
                }
            });
        });
    });
    </script>

</body>

</html>