<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>

<section id="content-outer">
    <div id="content-inner">
        <div id="discuss-icon-holder">
            <img src="/assets/icons/forum-new.png" id="discuss-icon"/>
            <p>
                CodeIgniter 是一個社群驅動的開源專案，在社群中提供數種場域讓成員們可以聚集與交流。
            </p>
        </div><!--icon ends here-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                針對安全性的問題應該透過電子郵件向我們的 <a href="mailto:security@codeigniter.com" class="link-reverse">安全團隊</a> 反應，而不是在發表在論壇或在 Github 提出問題，謝謝！
            </p>
        </div><!--warning ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">論壇</div>
            <p>
                論壇是以 MyBB 建立的，主要有五個分類：<br />
            </p>
            <ul>
                <li>一般（最新消息和討論、休息室、活動和區域使用者組）</li>
                <li>使用CodeIgniter（選擇CodeIgniter、安裝和設置、模型-視圖-控制器、程式庫與輔助函數、最佳實踐和一般幫助）</li>
                <li>CodeIgniter 4 (路線圖)、 開發、 功能請求、 支援，以及討論)</li>
                <li>開發（CodeIgniter 3.x、CodeIgniter 2.x 和相關問題）</li>
                <li>外部資源（外掛、工作、了解更多、關注點）</li>
            </ul>
            <p>
                你可以在論壇中尋求幫助或討論你在使用框架上遇到的問題。<br />
                <a href="https://forum.codeigniter.com" class="buttons-reverse" target="_blank">進入論壇</a>
            </p>
            <br /><br />
        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>


        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Slack</div>
            <p>
                CodeIgniter有一個Slack頻道，你可以在這裡與其他成員進行交流。任何人都可以 <a href="https://join.slack.com/t/codeigniterchat/shared_invite/zt-rl30zw00-obL1Hr1q1ATvkzVkFp8S0Q"
                   class="link-primary" target="_blank">註冊</a> ：)
            </p>

            <p>
                <a href="https://codeigniterchat.slack.com/" class="buttons-reverse" target="_blank">Slack</a>
            </p>
            <br /><br />
        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Github</div>
            <p>
                我們持續在 GitHub 上進行開發，更多詳情請參閱貢獻頁面。
            </p>
            <p class="boldy600">
                Github 儲存庫是你可以提出錯誤報告（透過 github issues）的地方，或者是你可以提出強化或修正框架的拉取請求。 Github並不是支援或幫助你的地方，如果你有這方面的需求請使用論壇。
            </p>
            <p>
                關注 Github issues 也可以用來追蹤執行中以及已批准的補強，通常與特定的版本相關。
            </p>
            <p>
                <a href="https://github.com/bcit-ci/CodeIgniter/" class="buttons-reverse" target="_blank">CodeIgniter 3</a>
                <a href="https://github.com/codeigniter4/codeigniter4/" class="buttons-reverse" target="_blank">CodeIgniter 4</a>
            </p>
            <br /><br />
        </div><!--inner-page-text-box ends here-->

        <div class="clr"></div>

    </div><!--content-inner ends here-->
</section><!--section ende-->

<div class="clr"></div>

<?= $this->endSection() ?>
