<?php
/*
 * Template Name: Yangco E&E Gallery
 */
	get_header("mobile");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Talk academyのドミトリーを見る</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 style="background-color:#fff;padding:15px !important;border-radius:8px;border:1px solid #333;">Yangco Center</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1 col-xs-12 col-md-10">
			<?= listGalleryImage('yangco-gallery'); ?>
		</div>
	</div>
	<div class="row">
                <div class="col-xs-12">
                        <h2 style="background-color:#fff;padding:15px !important;border-radius:8px;border:1px solid #333;">E&E Center</h2>
                </div>
        </div>
	<div class="row">
		<div class="col-md-offset-1 col-xs-12 col-md-10">
			<?= listGalleryImage('ene-gallery'); ?>
		</div>
	</div>
</div>
<div class="row">
<div style="background-color: rgb(37,109,56); padding: 20px 0; color: #fff">
        <div class="container">
                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://talk-academy.jp/official-pickup-dates/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">公式団体ピックアップ</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                航空券を予約する前に、Talk Academy 公式団体ピックアップ日を確認！
                                </p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://talk-academy.jp/experiences/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">留学体験談</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                TALK Academyでの留学体験談を読む
                                </p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <a href="http://3d.jesolution.co.jp/canitalk/talk_yangco/" style="background-color: transparent; border-radius: 10px; border: 1px solid #fff; padding: 10px;display:block;color:#fff;text-align:center;">学校施設 3D写真</a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                <p style="line-height: 40px;">
                                3D写真を使った学校施設の詳細を見る
                                </p>
                        </div>
                </div>
        </div>
</div>
</div>
<?php
	get_footer("mobile");
