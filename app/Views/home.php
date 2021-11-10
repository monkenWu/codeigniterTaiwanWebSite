<?= $this->extend('layouts/app') ?>

<?= $this->section('headerAssets') ?>
<style>
header {
    background-color: white;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section id="spotlight-outer">
    <div id="spotlight-inner">
        <div id="spotlight-title" class="animated fadeInDown">CodeIgniter
            <div id="spotlight-version">4</div>
        </div><!--spotlight title ende-->
        <div id="spotlight-note" class="animated fadeInDown">功能強勁的小巧框架</div>

        <div class="clr"></div>

        <div id="slogan-text" class="animated fadeInDown">
            CodeIgniter 是一個輕量且功能強勁的 PHP 框架，它內建簡單優雅的程式庫，可以幫助應用程式開發人員建立完整功能的 Web 應用程式</a>
        </div> <!--slogan-note ends here-->

        <div id="spotlight-button-holder" class="animated fadeInDown">
            <a href="/user_guide/index.html" id="spotlight-link">了解更多</a>
        </div><!--spotlight-button-ends here-->

        <div id="github-scores" class="animated fadeInDown">
            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                        <img src="/assets/icons/spotlight-github-stars.png" />
                        <div class="github-data">
                            <span class="boldy700">Star</span> <?= $stargazers_count ?>
                        </div>
                    </div>
                </div>
            </a>

            <a href="https://github.com/codeigniter4/CodeIgniter4" class="github-link" target="_blank">
                <div class="githubs">
                    <div class="github-icon">
                        <img src="/assets/icons/spotlight-github-fork.png" />
                        <div class="github-data">
                            <span class="boldy700">Fork</span> <?= $forks_count ?>
                        </div>
                    </div>
                </div>
            </a>
        </div><!--github scores ends-->
    </div><!--spotlight-inner ende-->
</section><!--spotlight-outer ende-->

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">

        <div class="clr"></div>

        <div class="section-title">為什麼選擇 CodeIgniter？ </div>
        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/star-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">輕量的框架</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter 4 下載大小為 1.2MB ，外加 6MB 的使用手冊。
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/speed-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">卓越的效能</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter 的效能表現始終優於大多數競爭對手。
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why-rows ende-->

        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/paper-plane-02b.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">簡單不繁瑣的解決方案</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter 鼓勵你使用 MVC 設計模式，但你不必全盤接納，選擇最適合你的開發模式。
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/security-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">強大的安全保障</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        我們十分重視安全性，內建了 CSRF 與 XSS 攻擊的防護。並在框架第四代中增加了語境敏感性跳脫與 CSP 功能。
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why-rows ende-->

        <div class="clr"></div>

        <div class="why-rows">
            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/book-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">清晰的使用手冊</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        使用手冊包含了介紹、教學、「如何使用」的指南，以及框架內建元件的參考文件。
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->

            <div class="ci-features-box">
                <div class="ci-features-box-icon">
                    <img src="/assets/icons/configuration-02a.png" />
                </div><!--ci-features-box-icon ends here-->
                <div class="ci-features-box-text-area">
                    <div class="ci-features-box-title">簡單零設定</div>
                    <div class="clr"></div>
                    <div class="ci-features-box-text">
                        CodeIgniter 大部分的設定已預設完畢，您只需要連接資料庫即可！
                    </div><!--ci-features-box-text ends here-->
                </div><!--ci-features-box-text ends here-->
            </div><!--ci-feature-box ends here-->
        </div><!--why rows ende-->

        <div class="clr"></div>
    </div><!--features-inner ends here-->

</section>

<div class="clr"></div>

<section id="important-links-outer">
    <div id="important-links-inner">
        <a href="/download" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">下載頁面</span>
                <br />
                    閱覽所有已發佈版本
                <br /><br />
                <img src="/assets/icons/download.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="/user_guide/index.html" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">清晰的使用文件</span>
                <br />
                閱讀教學
                <br /><br />
                <img src="/assets/icons/documentation.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://forum.codeigniter.com/" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">取得資源 & 討論事務</span>
                <br />
                進入討論區
                <br /><br />
                <img src="/assets/icons/forum.png" />
            </div> <!--important-link-boxes ends here-->
        </a>

        <a href="https://github.com/codeigniter4/CodeIgniter4" class="important-link">
            <div class="important-link-boxes">
                <span class="boldy600 dark">錯誤排除 & 新的特性</span>
                <br />
                閱覽 Github
                <br /><br />
                <img src="/assets/icons/github.png" />
            </div> <!--important-link-boxes ends here-->
        </a>
        <div class="clr"></div>
    </div><!--important-links-inner ende-->
</section> <!--important-links-inner ende-->

<div class="clr"></div>

<div class="clr"></div>

<?= $this->endSection() ?>

