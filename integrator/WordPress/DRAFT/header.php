<html <?php language_attributes(); ?>>
<title><?php  bloginfo('name'); wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
<body <?php body_class(); ?> >
<nav>
    <?php
    $args = array(
        'theme_location' => 'primary',
        'menu_class'=>'',
        'container'=>'',
        'container_class'=>''

    );
    wp_nav_menu($args);
    ?>
    <?php get_search_form(); ?>
/////////////////////////////////////////////////////////////////////////////////////////////////

<header class="mainHeader">
      <div class="container">
        <div class="row">
          <div class="col-1-tp col-3-m logo">
            <h1><a class="logo__link" href="/"><img src="images/logo.png" title="PROJECT TITLE" alt="This is theme title"/></a></h1>
          </div>
          <div class="col-5-m col-10-tp col-9-d headerSectionDivider">
            <svg class="icon hamburger">
              <use xlink:href="#menu"></use>
            </svg>
            <nav class="lightMenu" role="navigation">
              <ul class="lightMenu__list">
                <li class="lightMenu__item "><a href="dispanser.html">Диспанцеризация</a></li>
                <li class="lightMenu__item "><a href="pay.html">Платные услуги</a></li>
                <li class="lightMenu__item "><a href="docs.html">Документы</a></li>
                <li class="lightMenu__item "><a href="2SIDERBARINNER-docs.html">Мед работникам</a></li>
                <li class="lightMenu__item "><a href="pacients.html">Пациентам</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-4-m col-1-tp col-2-d">
            <div class="row">
              <div class="col-12-tp col-12-m col-6-d headerSectionDivider js-trigger" data-action="search">
                <div class="headerSection">
                  <svg class="icon headerIcon searchIcon">
                    <use xlink:href="#magnify"></use>
                  </svg>
                </div>
              </div>
              <div class="col-6-d headerSectionDivider js-trigger visible-d visible-dl" data-action="xRayView">
                <div class="headerSection">
                  <svg class="icon headerIcon">
                    <use xlink:href="#eye"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12-m col-12-tp searchCtn">
            <div class="searchWrapper">
              <input class="ove-cardRegInput headerSearch" type="text" placeholder="Это плейсхолдер"/>
            </div>
          </div>
        </div>
        <div class="col-12-tp hidden">
          <div class="x-rayBlock">
            <div class="ButoonFont-size minimumFont content-center"><span>Размер текста 10px</span></div>
            <div class="Med ButoonFont-size mediumFont content-center"><span>Размер текста 24px</span></div>
            <div class="Max ButoonFont-size maximumFont content-center"><span>Размер текста 64px