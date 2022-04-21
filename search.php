<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KTWebsite">
    <title>KTWebsite</title>
    <link rel="shortcut icon" href="/img/ktwebsite.JPG" type="image/x-icon">
    <noscript>
        You need to enable JavaScript to display this page!
    </noscript>
    <!-- CSS 1-->
    <style>
        .Header {
            padding: 10px;
            height: 100px;
            margin: 0;
            background-color: black;
            color: white;
            text-align: center;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        ktselection {
            align-items: center;
            margin: 30px;
            text-align: center;
        }
        ktselection2 {
            align-items: center;
            margin: 30px;
            width: 73.5px;
            text-align: center;
        }
        .BoxPicture {
            height: 100px;
            margin: 0;
            display: flex;
            margin-right: 70px;
        }
        .Picture2 {
            margin: 30px;
            height: 35px;
        }
        .Picture3 {
            margin: 27px;
            height: 40px;
        }
        .Selection {
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: black;
            font-family: 'whitneybold';
        }
        .Selection2 {
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: black;
            font-family: 'whitneybold';
        }
        .Selection3 {
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: black;
            font-family: 'whitneybold';
        }
        .Selection4 {
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: black;
            font-family: 'whitneybold';
        }
        .Selection5 {
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            background-color: black;
            font-family: 'whitneybold';
        }
    </style>
    <!-- CSS 2-->
    <style>
            .Footer {
                padding: 10px;
                height: 200px;
                margin: 0;
                background-color: black;
                color: white;
                font-family: 'whitneybold';
                display: flex;
            }

            .FooterKTWebsite{
                margin: 10px;
                margin-right: 5%;
                width: 17%;
            }

            .FooterKTWebsite2{
                margin: 15px;
                margin-right: 3%;
            }
            
            .KTWebsiteIMGFooter {
                height: 150px;
                margin: 0;
            }
            .KTWebsiteTextFooter {
                font-family: 'whitneybold';
                font-weight: bold;
                font-size: 17px;
                text-align: left;
            }

            #otherbox {
                font-family: 'whitneybold', Tahoma, Geneva, Verdana, sans-serif;
                background-color: white;
                border: 1px grey solid;
                padding: 5px;
                width: 270px;
                position: fixed;
                top: 70px;
                right: 170px;
                text-align: center;
                color: black;
                float: left;
            }

            #other {
                cursor: pointer;
            }

            #selectionBox {
                padding: 0;
                margin: 0;
                margin-bottom: 13px;
                text-align: left;
            }

            .text {
                color: black;
                text-decoration: none;
                font-size: 20px;
            }

            #support {
                cursor: pointer;
            }

            ::-webkit-scrollbar {
                width: 10px;
                border-radius: 5px;
            }

            ::-webkit-scrollbar-thumb {
                background: black;
                border-radius: 10px;
            }

            .partner-apps {
                text-align: center;
                font-family: 'whitneybold';
                justify-content: center;
                align-items: center;
                margin-bottom: 10%;
            }

            .partner-apps#description {
                color: grey;
                font-size: 15px;
                margin-bottom: 5%;
                text-decoration: none;
            }

            .FooterKTWebsite3 {
                color: grey;
                display: flex;
                margin: 5%;
                font-size: 13px;
                width: auto;
                flex: auto;
                flex-wrap: wrap;
            }

            #FooterKTWebsite3Text{
                margin-bottom: 0;
                margin-top: 0;
                margin-right: 15%;
                display: flex;
                text-decoration: none;
            }

            .FooterKTWebsite4 {
                color: grey;
                margin-top: 10%;
                font-size: 13px;
                width: auto;
            }

            #FooterKTWebsite4Text{
                margin-bottom: 0;
                margin-left: 5%;
                margin-right: 0;
                text-align: left;
                display: flex;
                text-decoration: none;
            }

            .a {
                color: grey;
                text-decoration: none;
            }

            .submitSearch {
                cursor: pointer;
            }

            @font-face {
                font-family: "Whitney Bold";
                src: url('/fonts/whitneybold-webfont.woff2') format('woff2'),
                     url('/fonts/whitneybold-webfont.woff') format('woff');
            }

            @font-face {
                font-family: "Whitney";
                src: url('/fonts/whitney_medium-webfont.woff') format('woff'),
                     url('/fonts/whitney_medium-webfont.woff2') format('woff2');
            }
    </style>
    <style>
        .PageSearch {
            padding: 3%;
            display: flex;
        }

        input[type=text] {
                font-family: 'whitneybold';
                font-size: 0.7cm;
                float: left;
                border-radius: 3px;
                border: 2px black solid;
                background-color: white;
                color: black;
                padding: 2%;
                width: 24cm;
                font-weight: bold;
            }

            #submit {
                font-family: 'whitneybold';
                font-size: 0.7cm;
                float: left;
                border-radius: 3px;
                border: 2px black solid;
                background-color: black;
                color: white;
                padding: 5px 7px;
                margin-left: 5px;
                font-weight: bold;
                align-items: center;
                justify-content: center;
            }

            #submit:hover {
                color: grey
            }

            .text-decoration {
                text-decoration: none;
                color: black;
            }

            .SearchItems {
                padding: 4%;
                padding-top: 0;
                font-family: Whitney;
            }
    </style>
</head>
<body id="body">
    <div id="page">
        <!-- KTWebsite Header -->
        <div class="Header">
            <a href="home.html">
                <img src="/img/ktwebsite.JPG" class="BoxPicture" style="float: left;" title="KTWebsite">
            </a>
            <a href="home.html">
                <ktselection class="Selection" style="font-family: Whitney;">Home</ktselection>
            </a>
            <a href=ktmuzik.html>
                <ktselection class="Selection2" style="font-family: Whitney;">KTMuZik</ktselection>
            </a>
            <a href=ktmuzik-plus.html>
                <ktselection class="Selection3" style="font-family: Whitney;">KTMuZik+</ktselection>
            </a>
            <a href=ktfilm.html>
                <ktselection class="Selection4" style="font-family: Whitney;">KTFilm</ktselection>
            </a>
            <a href=chill-music.html>
                <ktselection2 class="Selection5" style="font-family: Whitney;">chill music</ktselection2>
            </a>
            <img src="/img/other.PNG" class="Picture2" style="float: right;" title="Other" id="other">
            <img src="/img/support.PNG" class="Picture3" style="float: right;" title="Support" id="support" onclick="window.location='help.html';">
        </div>
	<!-- Content -->
    <div class="PageSearch">
        <form action="search.php" method="get" style="display: flex;">
            <input type="text" placeholder="Search..." style="font-family: Whitney;"name="search" id="search" value="<?php echo $_GET["search"]; ?>" required>
            <button type="submit" id="submit" class="submitSearch" style="font-family: Whitney;">Search</button>
        </form>
    </div>
    <div class="SearchItems">
        <a href="home" class="text-decoration">
            <h2 style="font-family: Whitney Bold;">Why do people love this website?</h2>
            <p style="margin: 0; padding-top: 1%;"><strong>We like KTWebsite, it gives us a relax time.</strong></p>
        </a>
    </div>
	<!-- Other -->
        <div id="otherbox" style="display: none;">
            <div id="selectionBox">
                <a href="about" class="text" style="font-family: Whitney;">About</a>
            </div>
            <div id="selectionBox">
                <a href="profile" class="text" style="font-family: Whitney;">Your Profile</a>
            </div>
            <div id="selectionBox">
                <a href="notifications" class="text" style="font-family: Whitney;">Notifications</a>
            </div>
            <div id="selectionBox">
                <a href="account-settings" class="text" style="font-family: Whitney;">Account Settings</a>
            </div>
            <hr>
            <div id="selectionBox">
                <a href="ktmuzik" class="text" style="font-family: Whitney;">KTMuZik</a>
            </div>
            <div id="selectionBox">
                <a href="ktmuzik-plus" class="text" style="font-family: Whitney;">KTMuZik+</a>
            </div>
            <div id="selectionBox">
                <a href="ktfilm" class="text" style="font-family: Whitney;">KTFilm</a>
            </div>
            <div id="selectionBox">
                <a href="chill-music" class="text" style="font-family: Whitney;">chill music</a>
            </div>
        </div>
        <!-- KTWebsite Footer -->
        <div class="Footer">
            <div class="FooterKTWebsite">
                <img src="/img/ktwebsite.JPG" class="KTWebsiteIMGFooter" float=left title="KTWebsite">
                <h3 class="KTWebsiteTextFooter" style="font-family: Whitney Bold;">KTWebsite 2021 ©</h3>
            </div>
            <div class="FooterKTWebsite2">
                <div class="partner-apps" style="font-family: Whitney Bold;">
                    PARTNERS
                </div>
                <div class="partner-apps" id="description" style="cursor: not-allowed;font-family: Whitney;">median</div>
                <div class="partner-apps" id="description" style="cursor: not-allowed;font-family: Whitney;">DevJS</div>
                <div class="partner-apps" id="description" style="cursor: not-allowed;font-family: Whitney;">DevHTML</div>
                <div class="partner-apps" id="description" style="cursor: not-allowed;font-family: Whitney;">DevPy</div>
                <div class="partner-apps" id="description" style="cursor: not-allowed;font-family: Whitney;">Cyprus</div>
            </div>
            <div class="FooterKTWebsite2">
                <div class="partner-apps" style="font-family: Whitney Bold;">
                    LEGAL
                </div>
                <div class="partner-apps" id="description">
                    <a href="./quadruple-verse/ktwebsite/legals/terms-and-conditions.html" class="a" style="font-family: Whitney;">Terms and Conditions</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="muzik-community-guidelines.html" class="a" style="font-family: Whitney;">MuZik Community Guidelines</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="film-community-guidelines.html" class="a" style="font-family: Whitney;">Film Community Guidelines</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="./quadruple-verse/ktwebsite/legals/privacy-policy.html" class="a" style="font-family: Whitney;">Privacy Policy</a>
                </div>
            </div>
            <div class="FooterKTWebsite2">
                <div class="partner-apps" style="font-family: Whitney Bold;">
                    OTHERS
                </div>
                <div class="partner-apps" id="description">
                    <a href="settings.html" class="a" style="font-family: Whitney;">Settings</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="faq.html" class="a" style="font-family: Whitney;">FAQ</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="contact.html" class="a" style="font-family: Whitney;">Contact Us</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="members/card/index.html" class="a" style="font-family: Whitney;">Members Card</a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="developer.html" class="a" style="font-family: Whitney;"></a>
                </div>
                <div class="partner-apps" id="description">
                    <a href="status.ktwebsite.net" class="a" style="font-family: Whitney;">Status</a>
                </div>
            </div>
            <div class="FooterKTWebsite2">
                <div class="FooterKTWebsite3">
                    <div id="FooterKTWebsite3Text">
                        <a href="https://www.facebook.com/KTWebsite-101624502352257" class="a" style="font-family: Whitney;">Facebook</a>
                    </div>
                    <div id="FooterKTWebsite3Text">
                        <a href="https://www.youtube.com/channel/UC5TlX61P6GCQST36YUj3EJw" class="a" style="font-family: Whitney;">YouTube</a>
                    </div>
                    <div id="FooterKTWebsite3Text">
                        <a href="https://www.instagram.com/ktwebsite/" class="a" style="font-family: Whitney;">Instagram</a>
                    </div>
                    <div id="FooterKTWebsite3Text">
                        <a href="https://www.tiktok.com/@ktwebsite" class="a" style="font-family: Whitney;">TikTok</a>
                    </div>
                    <div id="FooterKTWebsite3Text">
                        <a href="https://twitter.com/ktwebsite2021" class="a" style="font-family: Whitney;">Twitter</a>
                    </div>
                </div>
                <div class="FooterKTWebsite4">
                    <p id="FooterKTWebsite4Text" style="font-family: Whitney;">KTWebsite 2022 ©<br> All rights reserved.</p>
                    <span id="FooterKTWebsite4Text" style="font-family: Whitney;"><br>Version </span><span id="FooterKTWebsite4Text" style="font-family: Whitney Bold;">Cyprus 100</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const body = document.getElementById("body");
    const targetDiv = document.getElementById("otherbox");
    const btn = document.getElementById("other");
    btn.onclick = function () {
        if (targetDiv.style.display !== "block") {
            targetDiv.style.display = "block";
            body.style.overflow = "hidden";
        } else {
            targetDiv.style.display = "none";
            body.style.overflow = "scroll";
            body.style.overflowX = "hidden";
        }
    };
</script>
</html>