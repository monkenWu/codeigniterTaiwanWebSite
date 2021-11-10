<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
    <div id="content-inner">
        <div id="contribute-heart-holder">
            <img src="/assets/icons/heart.png" id="contribute-heart"/>
            <p>貢獻至 CodeIgniter</p>
        </div><!--heart ends here-->

        <div class="clr"></div>

        <div id="inner-page-opening-text">
            <p>
                CodeIgniter 是一個社群驅動開發的專案，接受來自社群的程式碼與使用手冊的貢獻。這些貢獻以提出問題或拉取請求的形式在 GitHub 上的
                <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">CodeIgniter 儲存庫</a>
                中提交。
            </p>

            <p>
                發出問題是一種快速指出 BUG 的方法，如果你在 CodeIgniter 或使用手冊中發現了錯誤，那麼請你先檢查幾件事：
            </p>

            <ul>
                <li>是否從未有人針對這個錯誤發出問題</li>
                <li>這個問題是否已經被修復了（查看分支或尋找已經被關閉的問題）</li>
                <li>這個問題是不是淺顯到你可以自己解決？</li>
                <li>如果你不確定是因為使用方法不正確，或真的發現了 BUG ，煩請先至論壇上<a href="https://forum.codeigniter.com/forum-30.html" target="_blank" class="link-primary">詢問</a>。
                </li>
            </ul>
            <p>
                問題回報是非常用的方法，但快速有效的方法是透過 fork 主儲存庫並提交修改到你的副本中，再回到 GitHub 發送拉取請求（這需要你使用 Git 版本控制系統）。
            </p>
        </div><!--inner-page-opening-text ends here-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">CodeIgniter 4</div>
            <p>
                CodeIgniter 4 有自己的
                <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">Github 儲存庫</a>。
                因為它與 CodeIgniter 3 有十分大的差距，所以我們希望將它們分開。
            </p>
            <p>
                CodeIgniter 4 路線圖在我們的論壇上進行了解釋，要完成的工作在存儲庫問題中有詳細說明。

                CodeIgniter 4的路線圖已經在
                <a href="http://forum.codeigniter.com/forum-28.html"　target="_blank" class="link-primary">我們的論壇</a>
                上說明了，預定的工作項目也在
                <a href="https://github.com/codeigniter4/CodeIgniter4/issues"　target="_blank" class="link-primary">儲存庫的問題</a>
                中詳細說明了。
            </p>
        </div><!--contribute boxes ende-->

        <div class="clr"></div>

        <div class="warning">
            <p>
                安全問題應該透過電子郵件告知我們的安全團隊，而不是在論壇上提出或在 Github 發出問題，謝謝！關於這個問題，你可以了解負責任的披露（Responsible disclosure）。
            </p>
        </div><!--warning ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Not a Programmer?</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Testers</div>
                <p>
                    We always need feedback on what works and what does not! Most of the development effort is going into Version 3,
                    so that is where the need is greatest. If you find something that is definitely a bug, and you are a Github user,
                    please create a new "issue". If you are not a Github user, or if you are unsure if you have found a bug, then start
                    a new thread in the CodeIgniter forum <a href="https://forum.codeigniter.com/forum-19.html" target="_blank" class="link-primary">Issues section</a>!
                </p>
                <p>
                    CodeIgniter 4 has its own <a href="https://forum.codeigniter.com/forum-30.html" target="_blank" class="link-primary boldy600">support subforum</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Writers</div>
                <p>
                    Every project needs good documentation! The CodeIgniter user guide is part of the <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank" class="link-primary">Github project</a> (mentioned above),
                    and there is always room for more tutorials.
                </p>
                <p>
                    CodeIgniter 4's user guide is part of its own <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank" class="link-primary">repository</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Evangelists</div>
                <p>
                    The word needs to be spread about good and worthy projects, which we think CodeIgniter is :) You can help by being active
                    in the forums, answering questions, and by spreading the word inside your developer or user community.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Moderators</div>
                <p>
                    The forum can always use moderators, to make sure that discussions/threads stay on topic, and to weed out the
                    inappropriate users or comments!
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Designers</div>
                <p>
                    Suggestions and help with our website, User Guide, and forum design are always welcome! We are working on themes
                    for each of these, which will be shared in their own Github repository.
                </p>
            </div><!--inner-page-text-sub-box ende-->

        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">{coderSection}</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Coders</div>
                <p>
                    If you would like to get involved in helping to build the next version of CodeIgniter, join us on <a href="https://github.com/codeigniter4/" target="_blank" class="link-primary">Github</a>!
                    A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms
                    to our <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst" target="_blank"> style guide</a>,
                    that it is properly documented, and that you use the
                    <a href="https://nvie.com/posts/a-successful-git-branching-model/" target="_blank" class="link-primary">Git-Flow branching model</a>.
                </p>
                <p>
                    CodeIgniter 3 equivalent link: its <a href="https://github.com/bcit-ci/CodeIgniter/" target="_blank" class="link-primary boldy600">repository</a>.
                </p>
            </div><!--inner-page-text-sub-box ende-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">Reviewers</div>
                <p>
                    Every project needs a core group of developers, familiar with the project standards and conventions,
                    to review proposed enhancements and fixes. We have been really fortunate with our group of reviewers so far,
                    and hope to recruit a few more.
                </p>
            </div><!--inner-page-text-sub-box ende-->
        </div><!--inner-page-text-box ende-->

        <div class="clr"></div>

		<?php if (isset($contributors)): ?>

        <div class="inner-page-text-box">
            <div class="inner-page-text-box-title">Acknowledging Our Top Contributors</div>
            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3</div>

                <?= $this->setData(['heroes' => $contributors['framework3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 3 Translations</div>

                <?= $this->setData(['heroes' => $contributors['translations3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4</div>

                <?= $this->setData(['heroes' => $contributors['framework4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">CodeIgniter 4 Translations</div>

                <?= $this->setData(['heroes' => $contributors['translations4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">our Original Website</div>

                <?= $this->setData(['heroes' => $contributors['website3']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

            <div class="clr"></div>

            <div class="inner-page-text-sub-box">
                <div class="inner-page-text-sub-box-title">our Revised Website</div>

                <?= $this->setData(['heroes' => $contributors['website4']])->include('layouts/_heroes') ?>

            </div><!--inner-page-text-sub-box ends here-->

        </div><!--inner-page-text-box ende-->

		<?php endif; ?>

    </div><!--content-inner ends here-->
</section><!--section ende-->


    <div class="clr"></div>

<?= $this->endSection() ?>
