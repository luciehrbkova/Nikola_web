<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon1.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="img/link.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="110">
    <!-- describtion-->
    <meta name="description" content='Financování bydlení | Zajištění příjmu a majetku | Snížení současných závazků - "Se mnou jste vždy o krok napřed."'> 
    <link rel="stylesheet" href="style.css">
    <!-- or jquery online version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>NIKOLA BARTONÍČKOVÁ - Hypotéky |Tvorba rezerv |Zajištění příjmu</title>

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
    <!--*********************** HERO PAGE *************************-->
    <section id="hero">
        <div class="container">
            
            <div class="fringe"></div>
            <div class="main">
                <div class="hero_top">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                    </div>
                </div>

                
                <div class="hero_cont_pc">
                    <span class="topkonzul">TOP KONZULTANT V OBLASTI <br></span>
                    <span class="topkonzul">FINANČNÍHO PLÁNOVÁNÍ<br></span>
                
                    <span class="okrok">“Se mnou jste vždy o krok napřed”</span>
              
                    <div class="button_div hero_button">
                        <a href="#contact"><button class="green_button margin_left_0">Napište mi</button></a>
                    </div>
                </div>
                <div class="hero_img">
                    <img src="img/hero_m.jpg" alt="Nikola" class="mobile_only_bl">
                    <img src="img/hero_t.jpg" alt="Nikola" class="tab_only_bl">
                </div>

                <div class="hero_cont">
                    <span class="topkonzul">TOP KONZULTANT V OBLASTI <br>FINANČNÍHO PLÁNOVÁNÍ</span>
                
                    <span class="okrok">“Se mnou jste vždy o krok napřed”</span>
              
                    <div class="button_div hero_button">
                        <button class="green_button">Napište mi</button>
                    </div>
                </div>
                <div class="signature mobile_hide">
                    <img src="img/podpis.png" alt="podpis">
                </div>
            </div>
            <div class="fringe"></div>
            <div class="pink_cover bg_pink">
                <div class="hmbg">
                    <span onclick="openNav()">
                        <img src="img/hmbg.svg" alt="menu">
                    </span>
                </div>
            </div>
        </div>

    </section>

    <!--*********************** SERVICES *************************-->
    <section id="services">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <h2 class="aniSluzby">Služby</h2>
                <div class="services_container">
                    <a href="hypoteky.php"><div class="box_services bg_pink" id="servisOne">
                        <div class="services_box_bg s_bg1"></div>
                        <div class="services_number">01</div>
                        <h3 class="services_header">Financování bydlení</h3>
                        <!-- <h3 class="services_header">Hypotéky</h3> -->
                    </a></div>
                    <a href="pojisteni.php"><div class="box_services bg_lightgreen" id="servisTwo"> 
                        <div class="services_box_bg s_bg4"></div>
                        <div class="services_number">02</div>
                        <h3 class="services_header">Zajištění příjmu & majetku</h3>
                    </a></div>
                    <a href="investice.php"><div class="box_services bg_darkgreen" id="servisThree"> 
                        <div class="services_box_bg s_bg3"></div>
                        <div class="services_number whiteNumber">03</div>
                        <h3 class="services_header white">Rezervy & Soukromá renta</h3>
                    </a></div>
                    <a href="pujcky.php"><div class="box_services bg_pink" id="servisFour"> 
                        <div class="services_box_bg s_bg2"></div>
                        <div class="services_number">04</div>

                        <h3 class="services_header">Snížení současných závazků</h3>
                    </a></div>

                </div>
            </div>
            <div class="fringe"></div>
        </div>

    </section>
    <!--*********************** ABOUT *************************-->
    <section id="about">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <h2 class="text_right mobile_only_bl aniAbout">O Mně</h2>
                <div class="row_from_tablet">
                    <div class="portrait "><img src="img/portrait.jpg" alt="Nikola portrét" class="pc_mob_only_bl"><img src="img/portrait_tab.jpg" alt="Nikola portrét" class="tab_only_bl"></div>
                    <div class="textabout">
                        <h2 class="pc_tab_only_bl duo_header aniAbout"><span class="white_duo_part">O</span> Mně</h2>
                        <p class="aniAboutText">
                            Baví mě dávat smysluplné kousky dohromady v jeden silný celek a finanční plánování je pro mě na míru ušitý koncept, 
                            jak se seberealizovat a zároveň tak pomáhat svým klientům k dosažení jejich cílů.
                            <br><br>
                            V poradenství působím již osmým rokem a za tu dobu jsem se naučila být odborníkem ve světě financí.
                            <br><br>
                            Starám se o více než 130 domácností, zprostředkovala jsem v hypotečních úvěrech více jak 200 000 000 Kč a 
                            ráda se s Vámi podělím o své pečlivě nasbírané zkušenosti.
                        </p>
                        <div class="button_div pc_only_bl">
                            <a href="#contact"><button class="green_button margin_left_0">POTKEJME SE</button></a>
                        </div>

                    </div>
                </div>

                <div class="uspechy_cont row_from_tablet">
                    <div class="uspechy_box row" id="uspechOne">
                        <div class="usp_img"><img src="img/usp1.svg" alt="hypotéky"></div>
                        <div class="usp_text_box"> 
                            <span class="usp_header">250 mil. Kč</span>
                            <span class="usp_text"><p>v hypotékách</p></span>
                        </div>
                    </div>
                    <div class="uspechy_box row" id="uspechTwo">
                        <div class="usp_img"><img src="img/usp2.svg" alt="investice"></div>
                        <div class="usp_text_box">
                            <span class="usp_header">15 mil. Kč</span>
                            <span class="usp_text"><p>v investicích</p></span>
                        </div>
                    </div>
                    <div class="uspechy_box row" id="uspechThree">
                        <div class="usp_img"><img src="img/usp3.svg" alt="klienti"></div>
                        <div class="usp_text_box">
                            <span class="usp_header">130 +</span>
                            <span class="usp_text"><p>spokojených klientů</p></span>
                        </div>
                    </div>
                    <div class="uspechy_box row" id="uspechFour">
                        <div class="usp_img"><img src="img/usp4.svg" alt="nemovitosti"></div>
                        <div class="usp_text_box">
                            <span class="usp_header">10 </span>
                            <span class="usp_text"><p>prodaných nemovitostí</p></span>
                        </div>
                    </div>
                </div>

                <div class="button_div pc_hide ">
                    <button class="green_button">Napište mi</button>
                </div>
                
            </div>
            <div class="fringe"></div>
    </section>
    <div class="values">
    </div>
     <!--*********************** SPOJENCI *************************-->
     <section id="spojenci">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <h2 class="h2_sp aniSpojenci">Moji Spojenci</h2>
                <div class="services_container">
                    <!-- Laura -->
                    <div class="box_spojenci spojenci_bg1" id="spojenecOne">
                        <p><span class="bold">Laura Krafferová</span><br>
                            Osobní Asistentka<br><br>
                            <span class="italic">Laura je má odborná asistentka, která zařizuje veškerou administrativu pro mé klienty, proto je mým nezbytným článkem a velkou podporou pro mé podnikání.</span>

                        </p>
                    </div>
                    <!-- Pavla -->
                    <div class="box_spojenci spojenci_bg2" id="spojenecTwo">
                        <p><span class="bold">Mgr. Pavla Marešová</span><br>
                            Advokát <br><br>
                            <span class="italic"> Paní Marešová mi pomáhá zdokonalovat znalosti v oblasti realitního práva a kontroluje v rámci mé služby pro klienty kupní smlouvy a připravuje tak veškerou právní administrativu.</span>

                        </p>
                        
                    </div>
                    <!-- Petra -->
                    <div class="box_spojenci spojenci_bg3" id="spojenecThree">
                        <p><span class="bold">Mgr. Petra Krůčková</span><br>
                            Realitní makléř<br><br>
                            <span class="italic">Petra je realitní makléřka, která pomáhá mým klientům prodat nemovitost včetně veškerého servisu od kvalitního „home stagingu“ přes prohlídky, až po samotnou koupi.</span>

                        </p>
                    </div>
                   <!-- Josef -->
                    <div class="box_spojenci spojenci_bg4" id="spojenecFour">
                        <p><span class="bold">Ing. Josef Šilhán</span><br>
                            Odhadce <br><br>
                            <span class="italic"> Když mi zavolá klient, že našel tu správnou nemovitost, mám na telefonu odborníka, který se mnou nemovitost zkonzultuje a potvrdí mi, zda cena kupní bude korespondovat s cenou odhadní u většiny bank.</span>

                        </p>
                    </div>

                </div>
                <!-- <div class="button_div">
                    <button class="green_button">CHCI VÍCE INFO</button>
                </div> -->
            </div>
            <div class="fringe"></div>
    </section>
 
    <!--*********************** REFERENCE *************************-->
    <section id="reference">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <h2 class="h2_rf aniReference">Reference</h2>
                <div class="ref_cont row_from_tablet">
                    <div class="ref_img_box mobile_hide">
                        <div class="ref_img_niki"><img src="img/nikiref.jpg" alt="Nikola"></div>
                        <div class="arrow_box row">
                            <img src="img/arrowl.png" alt="vlevo" onclick="previousReference()">
                            <img src="img/arrowr.png" alt="vpravo" onclick="nextReference()">
                        </div>
                    </div>
                    <div class="ref_text_box">
                        <div id="testimonial1">
                            <div class="ref_text_wrap">
                                <p id="reference_text1">Předem upozorňuji, že nepatřím mezi šetřivé lidi, vyloženě co vidím, to koupím. Asi to je pozůstatek ze socialismu, kdy jsem vše hezké viděla jen v časopisech ze zahraničí. Takže vlastně za to nemůžu.
                                        Často jsem dostávala nabídky ohledně investic nebo ohledně toho, že mi někdo poradí, jak se svými penězi nakládat. Neměla jsem nikdy chuť se někomu cizímu  svěřovat ohledně financí. S Nikolou mě seznámil můj přítel a po osobní schůzce, kde mi hned svým jednáním padla do oka spolu spolupracujeme.
                                        Vysvětlila jsem jí, co a jak si představuji a ona mi dala nabídku přímo na tělo. Nikola se chová velice profesionálně, ale to na mě tolik neplatilo. To umí dnes hodně lidí. Ale platí na mě lidský, empatický přístup, smysl pro humor a to vše jsem u Nikoly našla.
                                        </p>
                            </div>
                            <div class="ref_undertext row_from_tablet">
                                <div class="lada_box">
                                    <img src="img/lada1.png" alt="reference Lada" class="lada_img" id="reference_img1">
                                    <span class="lada_name" id="reference_name1">Lada Kuruczová</span>
                                </div>
                                <img src="img/slider1.jpg" alt="prvni" class="img_slider" id="reference_slider1">
                            </div>
                        </div>
                        <div id="testimonial2">
                            <div class="ref_text_wrap">
                                <p id="reference_text2">Během schůzek se sympatickou paní Bartoníčkovou oceňujeme příjemnou atmosféru, kultivované a milé 
                                    vystupování, hluboké odborné znalosti a preciznost. Spolupráce funguje úžasně, paní Bartoníčková dokáže připravit a 
                                    zrealizovat finanční plán přesně podle potřeb klienta. Komunikace je samozřejmostí, všechno je jasně a srozumitelně 
                                    vysvětleno. Velká spokojenost se službou a o starost míň ohledně financí.    
                                    </p>
                            </div>
                            <div class="ref_undertext row_from_tablet">
                                <div class="lada_box">
                                    <img src="img/lada2.png" alt="reference Hájkovi" class="lada_img" id="reference_img2">
                                    <span class="lada_name" id="reference_name2">manželé Hájkovi</span>
                                </div>
                                <img src="img/slider2.jpg" alt="druhá" class="img_slider" id="reference_slider2">
                            </div>
                        </div>
                        <div id="testimonial3">
                            <div class="ref_text_wrap">
                                <p id="reference_text3">S Nikolou se známe již od jejích profesních začátků a mohu posoudit, jak moc ve svém oboru vyrostla a stále se rozvíjí. Na každou schůzku je vždy perfektně připravená, vše mi srozumitelně a podrobně vysvětlí. Plně jí důvěřuji,
                                    náš vztah za dobu, po kterou spolupracujeme, přerostl v přátelství.
                                    </p>
                            </div>
                            <div class="ref_undertext row_from_tablet">
                                <div class="lada_box">
                                    <img src="img/lada3.png" alt="reference Zdeňka" class="lada_img" id="reference_img3">
                                    <span class="lada_name" id="reference_name3">Zdeňka Vaňharová</span>
                                </div>
                                <img src="img/slider3.jpg" alt="třetí" class="img_slider" id="reference_slider3">
                            </div>
                        </div>
                        <div id="testimonial4">
                            <div class="ref_text_wrap">
                                <p id="reference_text4">Se slečnou Nikolou Bartoníčkovou mě pojí finance. Myslím, že jsem se slečnou Nikolou navrcholu, jako na přiložené fotce, vždy pomůže vyřešit finanční problémy, pojistné události aj. Spolupráce prostě super! 
                                    </p>

                            </div>
                            <div class="ref_undertext row_from_tablet">
                                <div class="lada_box">
                                    <img src="img/lada4.png" alt="reference Ivana" class="lada_img" id="reference_img4">
                                    <span class="lada_name" id="reference_name4">Ivana Varhulíková</span>
                                </div>
                                <img src="img/slider4.jpg" alt="čtvrtá" class="img_slider" id="reference_slider4">
                            </div>
                        </div>
                    </div>
                    <div class="arrow_box row mobile_only_bl">
                        <img src="img/arrowl.png" alt="předchozí" onclick="previousReference()">
                        <img src="img/arrowr.png" alt="další" onclick="nextReference()">
                    </div>

                </div>
            </div>
            <div class="fringe"></div>
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
            // SLUZBY
            generalEaseIn('.aniSluzby')
            // ABOUT
            generalEaseIn('.portrait');
            generalEaseIn('.aniAboutText');
            generalEaseIn('.aniAbout');
            // SPOJENCI
            generalEaseIn('.aniSpojenci')
            // REFERENCE
            generalEaseIn('.aniReference')
            generalEaseIn('.ref_img_niki')
            generalEaseIn('.ref_text_box')
            // KONTAKT
            generalEaseIn('.aniKontakt')
            generalEaseIn('.aniContactBg')
            generalEaseIn('.aniContact')



            // EASI IN FUNCTION VALUES
            function valueStripeMotion(valueStripe){
                gsap.from(valueStripe, {
                scrollTrigger: {
                    trigger: valueStripe,
                    toggleActions: "play none none none",
                    start: "top 100%",
                    duration: 0.5,
                    scrub: true,
                    // markers: true,
                },
                x: -200, 
                // stagger: 0.4
                });
            };
            valueStripeMotion('.values');

            // Animace pro 4 po sobe jdouci objekty
            var itemOne, itemTwo, itemThree, itemFour, quaterTrigger;
            function quaterAni(itemOne, itemTwo, itemThree, itemFour, quaterTrigger){
                var quaterTimeline = gsap.timeline();
                quaterTimeline.from(itemOne, {duration: 0.5, y: 20, opacity: 0})
                            .from(itemTwo, {duration: 0.3, y: 20, opacity: 0})
                            .from(itemThree, {duration: 0.3, y: 20, opacity: 0})
                            .from(itemFour, {duration: 0.3, y: 20, opacity: 0});
                ScrollTrigger.create({
                    trigger: quaterTrigger,
                    animation: quaterTimeline,
                    start: "top 90%",
                    // markers: true
                });
            };
            quaterAni('#servisOne', '#servisTwo', '#servisThree', '#servisFour', '#servisOne');
            quaterAni('#uspechOne', '#uspechTwo', '#uspechThree', '#uspechFour', '.uspechy_cont');
            quaterAni('#spojenecOne', '#spojenecTwo', '#spojenecThree', '#spojenecFour', '#spojenecOne');

            // Animace pro hero page
            var heroTimeline = gsap.timeline();
            heroTimeline.from('.hero_img', {duration: 0.7, y: 50, ease: "power1", opacity: 0})
                        .from('.pink_cover', {duration: 0.1, x: 30, ease: "power4",  opacity: 0})
                        .from('.logo', {duration: 0.2, ease: "power3",  opacity: 0})
                        .from('.topkonzul', {duration: 0.2, x: 30, ease: "power1", opacity: 0})
                        .from('.okrok', {duration: 0.2, x: 30, ease: "power3", opacity: 0})
                        .from('.hero_button', {duration: 0.2, x: 30, ease: "power1",  opacity: 0})
                        .from('.signature', {duration: 0.4, ease: "power3", opacity: 0});
   

        // REFERENCE FUNCTION______________________
            var reference1, reference2Show, reference3, reference4;
            var actualReference = 1;
            function generalReference(reference2Show, reference1, reference3, reference4){
                $(reference2Show).delay(250).fadeIn(250);
                $(reference1).fadeOut(250);
                $(reference3).fadeOut(250);
                $(reference4).fadeOut(250);
            };

            function nextReference(){
                if (actualReference == 1){
                    generalReference('#testimonial2', '#testimonial1','#testimonial3', '#testimonial4');
                    // actual
                    actualReference = 2;
                } else if (actualReference == 2){
                    generalReference('#testimonial3', '#testimonial1','#testimonial2', '#testimonial4');
                    // actual
                    actualReference = 3;
                } else if (actualReference == 3){
                    generalReference('#testimonial4', '#testimonial1','#testimonial2', '#testimonial3');
                    // actual
                    actualReference = 4;
                } else if (actualReference == 4){
                    generalReference('#testimonial1', '#testimonial4','#testimonial2', '#testimonial3');
                    // actual
                    actualReference = 1;
                };
            };

            function previousReference(){
                if (actualReference == 1){
                    generalReference('#testimonial4', '#testimonial1','#testimonial3', '#testimonial2');
                    // actual
                    actualReference = 4;
                } else if (actualReference == 4){
                    generalReference('#testimonial3', '#testimonial1','#testimonial2', '#testimonial4');
                    // actual
                    actualReference = 3;
                } else if (actualReference == 3){
                    generalReference('#testimonial2', '#testimonial1','#testimonial4', '#testimonial3');
                    // actual
                    actualReference = 2;
                } else if (actualReference == 2){
                    generalReference('#testimonial1', '#testimonial4','#testimonial2', '#testimonial3');
                    // actual
                    actualReference = 1;
                };
            };   
    </script>

</body>
</html>