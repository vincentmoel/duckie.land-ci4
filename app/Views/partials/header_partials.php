<?php 

$uri = new \CodeIgniter\HTTP\URI();
$uri = current_url(true);
  // 'first-heading'


?>

<header class="header">
    <div class="hdr-topline hdr-topline--dark js-hdr-top">
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-9 hdr-topline-left">
                    <div class="custom-text custom_text_2">
                        <div class="custom-text-item " onclick='window.open("https://bscscan.com/token/0x7a9c8d33963aecca9a821802adfaf5bd9392351f")'>
                            <span>Smart Contract <span style="color:cyan;">$MMETA</span> : </span> 029348 ...
                            20492034
                        </div>
                    </div>
                    <div class="custom-text custom_text_2">
                        <div class="custom-text-item "><i class="fas fa-copy custom-hover" onclick="copyclipboard()" onmouseout="outFunc()">
                                <span class="tooltiptext" id="myTooltip">Copy to clipboard</span></i></div>
                    </div>
                    <div class="custom-text custom_text_2">
                        <button class="cstm__buy__mmeta" data-toggle="modal" data-target="#buymmetaModal">BUY</button>
                    </div>
                    <div class="cs__20">|</div>
                    <div class="custom-text custom_text_1">
                        <div class="custom-text-item" onclick="window.open('https://www.certik.com/projects/duckie-land')">
                            <span style="margin-right:10px;">Audited By : </span>
                            <img src="https://duckie.land/assets/images/partner/sandbox.svg" alt="" class="cstm__img">
                        </div>
                    </div>
                    <div class="custom-text custom_text_1">
                        <div class="custom-text-item" onclick="window.open('https://github.com/solidproof/projects/blob/main/Duckieland/SmartContract_Audit_Solidproof_Duckieland.pdf')">
                            <img src="https://duckie.land/assets/images/partner/dinoland.svg" alt="" class="cstm__img">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl align-items-center navbar-editable">
                <a class="site-logo site-title site-editable" href="https://duckie.land/"><img src="https://duckie.land/assets/images/duckie-land-logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                <span class="site-logo-tagline site-editable fs-17-im" style="bottom: -30px !important;">Decentralized Autonomous Organization</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                        <li class="<?= ($uri->getSegment(1) == "") ? 'active' : '' ; ?>">
                            <a href="/">Home</a>
                        </li>
                        <li class="<?= ($uri->getSegment(1) == "staking") ? 'active' : '' ; ?>">
                            <a href="/staking">Staking</a>
                        </li>
                        <li class="menu-about menu_has_children ">
                            <a class="menu-about">Access</a>

                            <div class="dropdown-menu about">
                                <span class="dropdown-item" onclick='window.location.href="/game-test"'>Game Test</span>
                                <span class="dropdown-item" onclick='window.location.href="/ino"'>INO</span>
                                <span class="dropdown-item" onclick='window.location.href="/ilo"'>ILO</span>
                                <span class="dropdown-item" onclick='window.location.href="/iio"'>IIO</span>
                                <span class="dropdown-item" onclick='window.location.href="/voting"'>Voting</span>
                                <span class="dropdown-item" onclick='window.location.href="/proposal"'>Proposal</span>
                            </div>

                        <li>
                            <a href="/ranking">Ranking</a>
                        </li>
                        <li class="menu-about menu_has_children ">
                            <a class="menu-about">Services</a>

                            <div class="dropdown-menu about">
                                <span class="dropdown-item" onclick='window.location.href="/duckie-starter"'>Duckie Starter</span>
                                <span class="dropdown-item" onclick='window.location.href="/duckie-bridge"'>Duckie Bridge</span>
                                <span class="dropdown-item" onclick='window.location.href="/duckie-morph"'>Duckie Morph</span>
                                <span class="dropdown-item" onclick='window.location.href="/duckie-market"'>Duckie Market</span>
                                <span class="dropdown-item" onclick='window.location.href="/duckie-store"'>Duckie Store</span>
                                <span class="dropdown-item" onclick='window.location.href="/duckie-cafe"'>Duckie Cafe</span>
                            </div>

                        <li>


                    </ul>
                    <div class="nav-right m-auto p-2">
                        <a href="#0" class="modal__fire " data-toggle="modal" data-target="#loginModal" style="font-size:18px;">Connect
                            Wallet</a>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header__bottom end -->
</header>