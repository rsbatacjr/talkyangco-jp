<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="content-language" content="jp">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style type="text/css">
      html {
        margin: 0 !important;
      }
    </style>
    <script type="text/javascript" src="<?php echo THEME_URI ?>/js/jquery.min.js"></script>
      <script type="text/javascript">
  	var adminajax = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

      </script>
</head>
	<body>
    <div id="floating-menu" class="hidden hidden-xs hidden-sm">
      <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-8">
                <a id="logo" class="navbar-brand" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important;position:absolute; top: 1px;left:1px"></a>
                <ul class="nav navbar-nav">
                  <li class="dropdown-submenu">
                    <a href="http://talk-academy.jp/about-us/">紹介</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/about-us/">About TALK</a></li>
                      <li><a href="http://talk-academy.jp/greetings/">あいさつ</a></li>
                      <li><a href="http://talk-academy.jp/strengths/">TALKの良さ</a></li>
                      <li><a href="http://talk-academy.jp/location/">TALKの場所</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/procedure/">過程</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/procedure/">手順</a></li>
                      <li><a href="http://talk-academy.jp/about-preparation/">準備するもの</a></li>
                      <li><a href="http://talk-academy.jp/faqs/">FAQ</a></li>
                      <li><a href="http://talk-academy.jp/medical-and-insurance/">保険について</a></li>
                      <li><a href="http://talk-academy.jp/way-to-baguio/">バギオへの行き方</a></li>
                      <li><a href="http://talk-academy.jp/campaigns/">キャンペーン</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/tuition-fee/">入学費</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/tuition-fee/">授業料</a></li>
                      <li><a href="http://talk-academy.jp/dormitory-type/">お部屋タイプ</a></li>
                      <li><a href="http://talk-academy.jp/miscellaneous-fee/">多種多様な料金設定</a></li>
                      <li><a href="http://talk-academy.jp/ielts-official-test-dates/">IELTS  公式テスト日程</a></li>
                      <li><a href="http://talk-academy.jp/toeic-official-test-dates/">TOEIC  公式テスト日程</a></li>
                      <li><a href="http://talk-academy.jp/philippine-holiday/">祝日</a></li>
                      <li><a href="http://talk-academy.jp/official-pickup-dates/">ピックアップサービス日程</a></li>
                      <li><a href="http://talk-academy.jp/refund-policy/">返金について</a></li>
                      <li><a href="http://talk-academy.jp/online-registration/">E-Application(Register now)</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/more-about-talk">コースについて</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/yangco-esl/">ESL 421, 521, 611</a></li>
                      <li><a href="http://talk-academy.jp/ielts/">Intensive IELTS</a></li>
                      <li><a href="http://talk-academy.jp/toiec/">Intensive TOEIC</a></li>
                      <li><a href="http://talk-academy.jp/power-speaking/">パワースピーキング</a></li>
                      <li><a href="http://talk-academy.jp/job-ready/">ワーキングホリデー</a></li>
                      <li><a href="http://talk-academy.jp/family-esl/">Family ESL</a></li>
                      <li><a href="http://talk-academy.jp/online-consultation/">Contact Us</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/philippine-language-study-plan">留学プラン</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/toeic-test/">TOEIC Test</a></li>
                      <li><a href="http://talk-academy.jp/ielts-test/">IELTS Test</a></li>
                      <li><a href="http://talk-academy.jp/intensive-speaking/">パワースピーキング</a></li>
                      <li><a href="http://talk-academy.jp/short-term-study/">短期間留学(1~3週間)</a></li>
                      <li><a href="http://talk-academy.jp/long-term-study/">長期間留学</a></li>
                      <li><a href="http://talk-academy.jp/best-price/">手ごろな費用</a></li>
                      <li><a href="http://talk-academy.jp/philippines-and-other-countries/">総合コース</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/notice/">コミュニティ</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.jp/notice/">注意</a></li>
                      <li><a href="http://talk-academy.jp/experiences/">生徒の経験談</a></li>
                      <li><a href="http://talk-academy.jp/meals/">TALKの食事</a></li>
                      <li><a href="http://talk-academy.jp/inside-philippine/">学校外</a></li>
                      <li><a href="http://talk-academy.jp/best-students-and-teachers/">優秀な生徒と教師</a></li>
                      <li><a href="http://talk-academy.jp/travels/">トラベルs</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                  <div class="search-lens">
                    <span class="fa fa-search"></span>
                    <div class="floating-search-tb hidden">
                      <div id="desktop-search" class="input-group">
                        <form action="/" method="get" role="search">
                          <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                          <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                              <i class="fa fa-search"></i>
                          </span>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
		<div class="container-fluid">
      <header>
          <div id="weblinks">
            <div class="container">
              <a href="" style="border: 1px solid #fff; padding: 3px 5px; font-size: 12px; border-radius: 3px">AGENCY</a>&nbsp;&nbsp;
              <a href="http://talk-academy.jp">JPN</a>
              <a href="http://talk-academy.tw">TW</a>
              <a href="http://talk-academy.cn">CN</a>
              <a href="http://talk-academy.kr">KOR</a>
              <a href="#">VN</a>
            </div>
          </div>
          <div class="container">
                  <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                      <a id="logo" class="navbar-brand visible-xs" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important; margin-bottom: 25px;"></a>
                      <div class="hidden-xs row" style="position: absolute; top: 16px;">
                        <div class="container">
                        <div class="col-xs-12 col-md-8">
                          <div id="login-box" class="hidden">
                            <hr style="margin-top: 5px;">
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                          <div id="quick-links">
                            <a href="http://talk-academy.jp/wp-content/uploads/2017/08/Brochure-1700519KR.pdf" target="_blank">パンフレット等</a> | <a href="http://talk-academy.jp/wp-content/uploads/2017/08/KOREA-TALK-OT-170329.pdf" target="_blank">オリエンテーション</a> | <a href="http://talk-academy.jp/online-consultation/">Contact Us</a>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="visible-xs" style="padding-top: 20px;">
                        <form action="/" method="get" role="search">
                            <input name="s" type="text" class="form-control" style="float: left;" />
                            <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                <i class="fa fa-search"></i>
                            </span>
                          </form>
                      </div>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-xs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse-xs">
                      <ul class="nav navbar-nav">
                        <li class="mobile-dropdown">
                        <span data-toggle="collapse" data-target="#first-mobile-menu">紹介</span>
                          <ul id="first-mobile-menu" class="collapse">
                            <li><a href="http://talk-academy.jp/about-us/">About TALK</a></li>
                            <li><a href="http://talk-academy.jp/greetings/">あいさつ</a></li>
                            <li><a href="http://talk-academy.jp/strengths/">TALKの良さ</a></li>
                            <li><a href="http://talk-academy.jp/location/">TALKの場所</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#second-mobile-menu">過程</span>
                            <ul id="second-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.jp/procedure/">手順</a></li>
                              <li><a href="http://talk-academy.jp/about-preparation/">準備するもの</a></li>
                              <li><a href="http://talk-academy.jp/faqs/">FAQ</a></li>
                              <li><a href="http://talk-academy.jp/medical-and-insurance/">保険について</a></li>
                              <li><a href="http://talk-academy.jp/way-to-baguio/">バギオへの行き方</a></li>
                              <li><a href="http://talk-academy.jp/campaigns/">캠페인</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#third-mobile-menu">Registration</span>
                            <ul id="third-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.jp/tuition-fee/">Registration</a></li>
                              <li><a href="http://talk-academy.jp/dormitory-type/">お部屋タイプ</a></li>
                              <li><a href="http://talk-academy.jp/miscellaneous-fee/">Misc Fee</a></li>
                              <li><a href="http://talk-academy.jp/ielts-official-test-dates/">IELTS Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.jp/toeic-official-test-dates/">TOEIC Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.jp/philippine-holiday/">Philippines Holiday</a></li>
                              <li><a href="http://talk-academy.jp/official-pickup-dates/">ピックアップサービス日程</a></li>
                              <li><a href="http://talk-academy.jp/refund-policy/">返金について</a></li>
                              <li><a href="http://talk-academy.jp/online-registration/">E-Application(Register now)</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fourth-mobile-menu">Talk's Know-how</span>
                            <ul id="fourth-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.jp/yangco-esl/">ESL 421, 521, 611</a></li>
                              <li><a href="http://talk-academy.jp/ielts/">IELTS</a></li>
                              <li><a href="http://talk-academy.jp/toiec/">TOEIC</a></li>
                              <li><a href="http://talk-academy.jp/power-speaking/">パワースピーキング</a></li>
                              <li><a href="http://talk-academy.jp/job-ready/">ワーキングホリデー</a></li>
                              <li><a href="http://talk-academy.jp/family-esl/">Family ESL</a></li>
                              <li><a href="http://talk-academy.jp/online-consultation/">Contact us</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fifth-mobile-menu">留学プラン</span>
                            <ul id="fifth-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.jp/toeic-test/">TOEIC Exam</a></li>
                              <li><a href="http://talk-academy.jp/ielts-test/">IELTS Exam</a></li>
                              <li><a href="http://talk-academy.jp/intensive-speaking/">パワースピーキング</a></li>
                              <li><a href="http://talk-academy.jp/short-term-study/">短期間留学(1~3週間)</a></li>
                              <li><a href="http://talk-academy.jp/long-term-study/">長期間留学</a></li>
                              <li><a href="http://talk-academy.jp/best-price/">手ごろな費用</a></li>
                              <li><a href="http://talk-academy.jp/philippines-and-other-countries/">総合コース</a></li>
                            </ul>
                          </li>
                        <li class="mobile-dropdown">
                          <span data-toggle="collapse" data-target="#sixth-mobile-menu">コミュニティ</span>
                          <ul id="sixth-mobile-menu" class="collapse">
                            <li><a href="http://talk-academy.jp/notice/">注意</a></li>
                            <li><a href="http://talk-academy.jp/experiences/">生徒の経験談</a></li>
                            <li><a href="http://talk-academy.jp/meals/">TALKの食事</a></li>
                            <li><a href="http://talk-academy.jp/inside-philippine/">学校外</a></li>
                            <li><a href="http://talk-academy.jp/best-students-and-teachers/">優秀な生徒と教師</a></li>
                            <li><a href="http://talk-academy.jp/travels/">トラベルs</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="collapse navbar-collapse hidden-xs" id="example-navbar-collapse">
                      <div class="col-xs-12 col-sm-12 col-md-8">
                      <a id="logo" class="navbar-brand" style="position:absolute;top: -55px; left: -40px;" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png"></a>

                        <ul class="nav navbar-nav">
                          <li class="dropdown-submenu">
                            <a href="/about-us/">紹介</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.jp/about-us/">About TALK</a></li>
                              <li><a href="http://talk-academy.jp/greetings/">あいさつ</a></li>
                              <li><a href="http://talk-academy.jp/strengths/">TALKの良さ</a></li>
                              <li><a href="http://talk-academy.jp/location/">TALKの場所</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu">
                            <a href="/procedure/">過程</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.jp/procedure/">手順</a></li>
                              <li><a href="http://talk-academy.jp/about-preparation/">準備するもの</a></li>
                              <li><a href="http://talk-academy.jp/faqs/">FAQ</a></li>
                              <li><a href="http://talk-academy.jp/medical-and-insurance/">保険について</a></li>
                              <li><a href="http://talk-academy.jp/way-to-baguio/">バギオへの行き方</a></li>
                              <li><a href="http://talk-academy.jp/campaigns/">キャンペーン</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu">
                            <a href="/tuition-fee/">入学費</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.jp/tuition-fee/">授業料</a></li>
                              <li><a href="http://talk-academy.jp/dormitory-type/">お部屋タイプ</a></li>
                              <li><a href="http://talk-academy.jp/miscellaneous-fee/">多種多様な料金設定</a></li>
                              <li><a href="http://talk-academy.jp/ielts-official-test-dates/">IELTS Official Dates</a></li>
                              <li><a href="http://talk-academy.jp/toeic-official-test-dates/">TOEIC Official Dates</a></li>
                              <li><a href="http://talk-academy.jp/philippine-holiday/">Philippines Holiday</a></li>
                              <li><a href="http://talk-academy.jp/official-pickup-dates/">ピックアップサービス日程</a></li>
                              <li><a href="http://talk-academy.jp/refund-policy/">返金について</a></li>
                              <li><a href="http://talk-academy.jp/online-registration/">E-Application(Register now)</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu">
                            <a href="/more-about-talk">コースについて</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.jp/yangco-esl/">ESL 421, 521, 611</a></li>
                              <li><a href="http://talk-academy.jp/ielts/">IELTS</a></li>
                              <li><a href="http://talk-academy.jp/toiec/">TOEIC</a></li>
                              <li><a href="http://talk-academy.jp/power-speaking/">パワースピーキング</a></li>
                              <li><a href="http://talk-academy.jp/job-ready/">ワーキングホリデー</a></li>
                              <li><a href="http://talk-academy.jp/family-esl/">Family ESL</a></li>
                              <li><a href="http://talk-academy.jp/online-consultation/">Contact us</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu">
                            <a href="/philippine-language-study-plan">留学プラン</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.jp/toeic-test/">TOEIC Test</a></li>
                              <li><a href="http://talk-academy.jp/ielts-test/">IELTS Test</a></li>
                              <li><a href="http://talk-academy.jp/intensive-speaking/">パワースピーキング</a></li>
                              <li><a href="http://talk-academy.jp/short-term-study/">短期間留学(1~3週間)</a></li>
                              <li><a href="http://talk-academy.jp/long-term-study/">長期間留学</a></li>
                              <li><a href="http://talk-academy.jp/best-price/">手ごろな費用</a></li>
                              <li><a href="http://talk-academy.jp/philippines-and-other-countries/">総合コース</a></li>
                            </ul>
                          </li>
                        <li class="dropdown-submenu">
                          <a href="/notice/">コミュニティ</a>
                          <ul class="dropdown-menu">
                            <li><a href="http://talk-academy.jp/notice/">注意</a></li>
                            <li><a href="http://talk-academy.jp/experiences/">生徒の経験談</a></li>
                            <li><a href="http://talk-academy.jp/meals/">TALKの食事</a></li>
                            <li><a href="http://talk-academy.jp/inside-philippine/">学校外</a></li>
                            <li><a href="http://talk-academy.jp/best-students-and-teachers/">優秀な生徒と教師</a></li>
                            <li><a href="http://talk-academy.jp/travels/">トラベル</a></li>
                          </ul>
                        </li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="row">
                          <div class="search-lens">
                            <span class="fa fa-search"></span>
                            <div class="floating-search-tb hidden">
                              <div class="input-group">
                                <form action="/" method="get" role="search">
                                    <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                                    <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                        <i class="fa fa-search"></i>
                                    </span>
                                  </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
              </div>
      </header>
