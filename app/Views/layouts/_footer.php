<footer id="footer-outer">
    <div id="footer-inner">
        <div id="footer-inner-left">
            <a href="/policies" class="footer-menu-item" >政策</a>
            <a href="/the-fine-print" class="footer-menu-item" >附屬細則</a>
            <a href="/security-disclosures" class="footer-menu-item" >安全揭露</a>
            <a href="/news" class="footer-menu-item">最新消息</a>
            <a href="/discuss" class="footer-menu-item" >討論區</a>
            <a href="/contribute" class="footer-menu-item" >貢獻</a>
            <a href="/download" class="footer-menu-item" >下載</a>
            <a href="https://codeigniter.com/" class="footer-menu-item" >Codeigniter官方</a>
        </div><!--footer-inner-left ends here-->

        <div id="footer-inner-right">
            <a href="https://github.com/codeigniter4/CodeIgniter4" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-github-red-03.png" />
                        <br />
                        <span class="data">
						GitHub
					</span>
                    </div>
                </div>
            </a>

            <a href="https://forum.codeigniter.com" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-forum-red-03.png" />
                        <br />
                        <span class="data">
						論壇
					</span>
                    </div>
                </div>
            </a>

            <a href="https://codeigniterchat.slack.com/" target="_blank">
                <div class="links-icons">
                    <div class="icon">
                        <img src="/assets/icons/footer-slack-red-03.png" />
                        <br />
                        <span class="data">
						Slack
						頻道
					</span>
                    </div>
                </div>
            </a>
        </div><!--footer-inner-right ends here-->
    </div><!--footer-inner ends here-->

</footer>

<div class="clr"></div>

<div id="footer-copyrights">
    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
        open source licence.<br>
        CodeIgniter台灣 由高雄師範大學軟體工程與管理學系 SDPM 實驗室譯製與維護<br>
        "CodeIgniter台灣" is an independent and has not been authorized, sponsored, or otherwise approved by CodeIgniter Foundation.
    </p>

   
    <img id="scroll-to-top" src="/assets/icons/ci-footer.png"/>

</div>
<!-- SCRIPTS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $('#menu-toggle button').click(function(){
        $("#top-menu").slideToggle("slow");
    });

    $('#scroll-to-top').click(function(){
        $("html").animate({ scrollTop: 0 }, "slow");
    });
</script>
