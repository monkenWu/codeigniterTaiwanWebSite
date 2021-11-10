<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
	<div id="content-inner">
		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">CODEIGNITER <br />
					<span class="version-no">4</span>
				</div>
			</div><!--cv-boxes-version end-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 4 是框架的最新版本，需要 PHP 7.3+（包括 8.0）。</p>

				<p>初始版本發佈於 2020 年 2 月 24 日。最新版本為 <?= $v4name ?>。</p>

				<p>
					你可以使用下方的按鈕下載上述版本的框架，但我們建議你先看看使用手冊中的 <a href="https://codeigniter.tw/user_guide/installation/index.html" class="link-primary" target="_blank">安裝指引</a>，從多種安裝方式中選擇最適合你的：）
				</p>

				<div class="cv-boxes-buttons-area">
					<a href="<?= $v4link ?>" class="buttons-reverse download-buttons" target="_blank">下載框架</a>
					<a href="https://forum.codeigniter.com/forum-28.html" class="buttons-reverse download-buttons" target="_blank">討論版</a>
					<a href="https://github.com/codeigniter4/CodeIgniter4" class="buttons-reverse download-buttons" target="_blank">原始碼</a>
					<a href="https://github.com/codeigniter4/translations" class="buttons-reverse download-buttons" target="_blank">系統語系</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">CODEIGNITER <br />
					<span class="version-no">3</span>
				</div>
			</div><!--cv-boxes-version ende-->
			<div class="cv-boxes-content">
				<p>CodeIgniter 3 是框架的舊版本，需要 PHP 5.6+。</p>

				<p>這個版本主要進行安全性更新方面的維護，最新版本為 <?= $v3name ?>。</p>

				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a href="<?= $v3link ?>" class="buttons-reverse download-buttons" target="_blank">下載框架</a>
					<a href="/userguide3/index.html" class="buttons-reverse download-buttons" target="_blank">線上使用手冊</a>
					<a href="/userguide3.zip" class="buttons-reverse download-buttons" target="_blank">離線使用手冊</a>
					<a href="https://github.com/bcit-ci/CodeIgniter" class="buttons-reverse download-buttons" target="_blank">原始碼</a>
					<a href="https://github.com/bcit-ci/codeigniter3-translations" class="buttons-reverse download-buttons" target="_blank">系統語系</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

	</div><!--content-inner end-->
	</div><!--section end-->

	<div class="clr"></div>

<?= $this->endSection() ?>
