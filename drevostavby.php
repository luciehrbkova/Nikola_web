<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FHKCHCHJBZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FHKCHCHJBZ');
    </script>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon1.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="img/link.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="110">
    <!-- describtion-->
    <meta name='description' content='Pohodlné financování výstavby moderních dřevostaveb, nízkoenergetických domů či rekreačních objektů.'> 
    <link rel="stylesheet" href="stylesheet.css?v=1.1">
    <title>NIKOLA BARTONÍČKOVÁ - Dřevostavby</title>

</head>


<body>
     <!-- MENU -->
     <div id="mySidenav" class="sidenav">
        <div class="footer">
            <div class="container">
                <div class="fringe"></div>
                <div class="main">
                    
                    <div class="footer_container">
    
                        <div class="footer_box">
                            <div class="footer_line"></div>
                            <span class="footer_header">MENU</span>
                            <ul>
                                <li onclick="closeNav()"><a href="index.php">Domů</a></li>
                                <li onclick="closeNav()"><a href="index.php#services">Služby</a></li>
                                <li onclick="closeNav()"><a href="index.php#about">O mně</a></li>
                                <li onclick="closeNav()"><a href="index.php#spojenci">Spojenci</a></li>
                                <li onclick="closeNav()"><a href="index.php#reference">Reference</a></li>
                                <li onclick="closeNav()"><a href="index.php#contact">Kontakt</a></li>
                            </ul>
                        </div>
                        <div class="footer_box list2">
                            <div class="footer_line"></div>
                            <span class="footer_header">SLUŽBY</span>
                            <ul>
                                <li><a href="hypoteky.php">Hypotéky</a></li>
                                <li><a href="pojisteni.php">Zajištění příjmu & majetku</a></li>
                                <li><a href="investice.php">Tvorba rezerv</a></li>
                                <li><a href="pujcky.php">Půjčky & Konsolidace</a></li>
                            </ul>
                        </div>
                        <div class="footer_box list3">
                            <div class="footer_line"></div>
                            <span class="footer_header"><br></span>
                            <ul>
                                <li><a href="cookies.php">Cookies</a></li>
                                <li><a href="gdpr.php">Ochrana osobních údajů (GDPR)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="fringe">
                    <div class="menu_div">
                        <span onclick="closeNav()"><img src="img/cross.png" alt="zavřít" class="cross_icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!--*********************** rezervy PAGE *************************-->
       <section id="drevostavby" class="sekce">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <!-- logo -->
                <div class="hero_top">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                    </div>
                </div>
                <!-- end logo -->

                <h2 class="h2_rez aniHeader">Dřevostavby</h2>
                

                <div class="row_from_tablet tb_pc_reverse_row pad_bot">
                    <!-- left box -->
                    <div class="sekce_from_tablet_half">
                        <div class="hypo_img_1 aniHeroImg">
                            <img src="img/drevo.jpg" alt="Dřevostavba" >
                        </div>
                    </div>
                    <!-- right part -->
                    <div class="sekce_from_tablet_half aligncont_sp_around">
                        <!-- <div class="aligncont_sp_around"> -->
                            <p class="part2_text aniHypoList">
                            Výstavby moderních dřevostaveb, nízkoenergetických domů, případně i rekreačních objektů umí dnes banky financovat standardně, jako klasické rodinné domy, a to až do 90 % LTV. 
                            <br><br>
                            Je třeba mít jasně stanovený plán na rozpočet stavebních materiálů a zařizovacích prvků, včetně projektové dokumentace a stavebního povolení, což jsou jedny z podmínek, které banky požadují k čerpání finančních prostředků.
                            <br><br>
                            Přikláním se obecně u výstaveb k takovým bankám, které umí čerpat při jednotlivých tranších finanční prostředky nad aktuální hodnotu nemovitosti, což Vám zajistí včas nemovitost dovést ke kolaudaci.
                            <br><br>
                            Neváhejte se obrátit, ukážu Vám jak na to :)
                            <br><br>
                            Nikola Bartoníčková
                            </p>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="fringe"></div>
            <!-- menu -->
            <div class="pink_cover">
                <div class="hmbg">
                    <span onclick="openNav()">
                        <img src="img/hmbg.svg" alt="menu">
                    </span>
                </div>
            </div>
            <!-- end menu -->
        </div>


    </section>
   
    
    <!--*********************** CONTACT *************************-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <h2 class="top_layer aniKontakt">Kontakt</h2>
                <div class="bg_white cont_cont row_from_tablet aniContactBg">
                    <div class="contact_container aniContact">
                        <?php
                            $url = "index.php#finalMessage";
                            include'contact.php';
                        ?>
                    </div>
                    <div class="map_contactdata aniContact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.655259546002!2d14.
                        440297115609647!3d50.092741020955835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470
                        b94bc6a8b5901%3A0xe6bfb36220f7bd9f!2zUG9ixZllxb5uw60gMjAsIDE4NiAwMCBLYXJsw61uLCDEjGVza28!5e0
                        !3m2!1scs!2suk!4v1589711147314!5m2!1scs!2suk" title="Adresa kanceláře" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <div class="contact_container_data contact_data">
                            <div class="email_box">
                                <div class="email_item">
                                    <div class="icon_phone"><img src="img/icon_t.png" alt="mobil"></div>
                                    <p>+420 776 276 555</p>
                                </div>
                                <div class="email_item">
                                    <div class="icon_phone"><img src="img/icon_e.png" alt="email"></div>
                                    <p>nikola.bartonickova@4fin.cz</p>
                                </div>
                            </div>
                            <div class="email_box">
                                <div class="email_item">
                                    <div class="icon_phone"><img src="img/icon_a.png" alt="adresa"></div>
                                    <p>Pobřežní 20 <br>Praha 8, 186 00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fringe"></div>
        </div>

    </section>
    <!--*********************** FOOTER *************************-->
    <section class="footer">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                
                <div class="footer_container">

                    <div class="footer_box">
                        <span class="footer_header">MENU</span>
                        <ul>
                            <li><a href="index.php">Domů</a></li>
                            <li><a href="index.php#services">Služby</a></li>
                            <li><a href="index.php#about">O mně</a></li>
                            <li><a href="index.php#spojenci">Spojenci</a></li>
                            <li><a href="index.php#reference">Reference</a></li>
                            <li><a href="index.php#contact">Kontakt</a></li>
                        </ul>
                    </div>
                    <div class="footer_box list2">
                        <span class="footer_header">SLUŽBY</span>
                        <ul>
                            <li><a href="hypoteky.php">Hypotéky</a></li>
                            <li><a href="pojisteni.php">Zajištění příjmu & majetku</a></li>
                            <li><a href="investice.php">Tvorba rezerv</a></li>
                            <li><a href="pujcky.php">Půjčky & konsolidace</a></li>
                        </ul>
                    </div>
                    <div class="footer_box list3">
                        <span class="footer_header"><br></span>
                        <ul>
                            <li><a href="cookies.php">Cookies</a></li>
                            <li><a href="gdpr.php">Ochrana osobních údajů (GDPR)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="madeby"><p>
                    Created by <a href="https://lucieweb.dev/">Lucie</a> & <a href="https://www.instagram.com/martinnovotny_design/">Martin</a></p>
                </div>
                 </div>
            <div class="fringe"></div>
        </div>

    </section>
    <!-- js -->
    <script src="myScript.js"></script>
    <!-- or jquery online version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- greensock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/PixiPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
            // EASI IN FUNCTION UP
            var easeUpItem, valueStripe;
            function generalEaseIn(easeUpItem){
                gsap.from(easeUpItem, {
                scrollTrigger: {
                    trigger: easeUpItem,
                    toggleActions: "play none none none",
                    start: "top 70%",
                    duration: 0.7,
                    // markers: true,
                },
                opacity: 0,
                y: 60, 
                // stagger: 0.4
                });
            };
             // INVESTICE HERO
             var heroTimeline = gsap.timeline();
            heroTimeline.from('.aniHeader', {duration: 0.7, y: 60, ease: "power1", opacity: 0})
                        .from('.aniHeroImg', {duration: 0.5, y: 60, ease: "power4",  opacity: 0})
                        .from('.aniHypoList', {duration: 0.5, y: 60, ease: "power1", opacity: 0})
            // INVESTICE OTAZKY
            generalEaseIn('.aniOtazka1');
            generalEaseIn('.aniOtazka2');
            generalEaseIn('.aniOtazka3');
            // KONTAKT
            generalEaseIn('.aniKontakt')
            generalEaseIn('.aniContactBg')
            generalEaseIn('.aniContact')
    </script>

</body>
</html>