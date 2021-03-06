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
    <meta name='description' content='Půjčky & Konsolidace | Konsolidační kalklulačka'>
    <link rel="stylesheet" href="style.css">
    <title>NIKOLA BARTONÍČKOVÁ - Snížení současných závazků</title>

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
    <!--*********************** pujckyPAGE *************************-->
    <section id="pujcky" class="sekce">
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

                <h2 class="h2_puj aniHeader">Půjčky & Konsolidace</h2>
                
                <div class="row_from_tablet pc_reverse_row">
                    <!-- left box -->
                    <div class="sekce_from_tablet_half">
                        <div class="hypo_img_1 aniHeroImg">
                            <img src="img/pujcky1.jpg" alt="peníze" class="pc_mob_only_bl">
                            <img src="img/pujcky1_t.jpg" alt="peníze" class="tab_only_bl">
                        </div>
                    </div>
                    <!-- right part -->
                    <div class="sekce_from_tablet_half">
                        <p class="part2_text aniHypoList">
                            Spotřebitelské úvěry jsou typické tím, že se jedná o půjčku/ky pro jednotlivce při maximálním 
                            horizontu splatnosti 120 měsíců za účelem nákupu (spotřebního zboží, automobilu, vybavení domácnosti atp. 
                            <br><br>
                            Setkávám se ale stále s tím, že si lidé tyto peníze půjčují zbytečně draze.
                             <br><br>
                             Informujte se proto pravidelně se svým finančním poradcem ohledně nejnižšího úroku 
                             na trhu a místo zbytečně drahého přeplácení na úrocích směřujte uspořené peníze do rezerv.
                        </p>
                    </div>
                   

                </div>
              

            </div>
            <div class="fringe"></div>
            <!-- menu -->
            <div class="pink_cover">
                <div class="hmbg">
                    <span onclick="openNav()">
                        <img src="img/hmbg.svg" alt="logo">
                    </span>
                </div>
            </div>
            <!-- end menu -->
        </div>

    </section>
     <!--*********************** konsolidace kalkulacka *************************-->
     <section class="sekce hypo_part2">
        <div class="container">
            <div class="fringe"></div>
                <div class="main" id="splatkomer">
                    <div class="row_from_tablet aniKalkul">
                        <!-- left box -->    
                        <div class="sekce_from_tablet_half bg_lightgreen kroky4_header_box">
                            <div>
                                <h3><span class="kroky4">KONSOLIDAČNÍ KALKULÁTOR</span><br><br></h3>
                                <!-- 1 pujcka -->
                                <div class="splatkomer konsolidomer" id="pujcka_1">
                                    <!-- <form action=""> -->
                                    <!-- <h4 class="pujcka_header">1. PŮJČKA</h4> -->
                                        <div class="input_div">
                                            <p class="popisky">SOUČET ZŮSTATKŮ VŠECH ÚVĚRŮ</p>
                                            <p class="placeholder">Kč</p>
                                            <input type="number" id="konsol_jistina" class="input" required>
                                        </div>
                                        <div class="input_div">
                                            <p class="popisky">EMAIL</p>
                                            <p class="placeholder white">.</p>
                                            <input type="email" id="konsol_email" class="input" required>
                                        </div>
                                        <div class="input_div">
                                            <p class="popisky">MOBIL</p>
                                            <p class="placeholder white">.</p>
                                            <input type="number" id="konsol_mobil" class="input" required>
                                        </div>
                                        <div class="row checkbox_box">
                                            <input type="checkbox" id="konsol_souhlas" class="checkbox" required>
                                            <label for="konsol_souhlas">Souhlasím s použitím osobních údajů pro <a href="gdpr.php" class="bold">marketingové účely</a></label>
                                        </div>
                                </div> 
                            </div>     
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                
                                <div class="button_div part2_button ">
                                    <button class="green_button" onclick="konsolidomer()" >KONSOLIDUJ</button>
                                </div>
                                <!-- </form> -->
                                <!-- <h3><span class="kroky4">HYPOTEČNÍ KALKULACKA</span><br><br></h3> -->
                                
                                <div class="result_box konsol_box">
                                    
                                    <div class="konsul_result" id="result" >
                                        <p id="kolik"></p> <br>
                                        <h4 id="konsul_splatka"></h4>
                                    </div>
                                </div>
                                <!-- <p class="instrukce mobile_hide">Vyplňte jfdk khdlfjhdkf lah fkf flgkadljfd hfdl jhlakej lglkdjflakfkja</p> -->
                                
    
                            
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="row_from_tablet aniKalkul"> -->
                    <!-- left box -->    
                    <!-- <div class="sekce_from_tablet_half bg_pink kroky4_header_box">
                        <h3><span class="kroky4">KALKULACKA</span><br>
                            K projití před koupí nemovitosti pomocí hypotéky</h3>
                    </div> -->
                    <!-- right part -->
                    <!-- <div class="kroky4_text_box_cont">
                        <div class=" kroky4_text_box bg_white">
                            <br><br>
                            <p>Hledejte intenzivně svou nemovitost a konzultujte se svým poradcem: <br><br></p>
                          
                        
                        </div>
                    </div>

                  

                </div>
                <div class="button_div part2_button aniButtonKalkul">
                    <button class="green_button">SPOCITEJ</button>
                </div> -->
            <div class="fringe"></div>
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
                        <form action="mailto:helena.kmochova@4fin.cz" method="post" enctype="text/plain"  name="EmailTestForm">
                            <label for="jmeno">Jméno</label><br>
                            <input type="text" id="jmeno" name="name" placeholder="Jméno" required><div class="required"></div>
                            <label for="cislo">Mobil</label><br>
                            <input type="number" id="cislo" name="mobil" placeholder="Telefonní číslo" required><div class="required"></div>
                            <label for="eadresa">Email</label><br>
                            <input type="email" id="adresa"  name="mail" placeholder="E-mail" required><div class="required"></div>
                            <label for="zprava">Text zprávy</label><br>
                            <textarea name="zprava" id="" rows="10" placeholder="Text zprávy"></textarea>
                            <br>
                            <input type="submit" value="ODESLAT" class="submit">
                        </form>
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
            // PUJCKY HERO
            var heroTimeline = gsap.timeline();
            heroTimeline.from('.aniHeader', {duration: 0.7, y: 60, ease: "power1", opacity: 0})
                        .from('.aniHeroImg', {duration: 0.5, y: 60, ease: "power4",  opacity: 0})
                        .from('.aniHypoList', {duration: 0.5, y: 60, ease: "power1", opacity: 0})
            // PUJCKY KALKULACKA
            generalEaseIn('.aniKalkul');
            generalEaseIn('.aniButtonKalkul');
            // KONTAKT
            generalEaseIn('.aniKontakt')
            generalEaseIn('.aniContactBg')
            generalEaseIn('.aniContact')

            // konsolidator
            var actualPujcka, newPujcka, tatoPujcka, plusIcon, minusIcon
            actualPujcka = 1;

            function pridatPujcku(newPujcka, plusIcon, minusIcon){
                $(newPujcka).fadeIn(250);
                $(plusIcon).hide();
                $(minusIcon).show();
            };
            function odstranitPujcku(tatoPujcka, plusIcon, minusIcon){
                $(tatoPujcka).hide();
                $(plusIcon).show();
                $(minusIcon).hide();
            }
            // pridatPujcku('#pujcka_2');

            

            function generalPridatPujcku(actualPujcka){
                if (actualPujcka == 1){
                    pridatPujcku('#pujcka_2', '#plus_1', '#minus_1');
                } else if (actualPujcka == 2){
                    pridatPujcku('#pujcka_3', '#plus_2', '#minus_2');
                } else if (actualPujcka == 3){
                    pridatPujcku('#pujcka_4', '#plus_3', '#minus_3');
                } else if (actualPujcka == 4){
                    pridatPujcku('#pujcka_5', '#plus_4', '#minus_4');
                };
            }

            function generalOdstranitPujcku(actualPujcka){
                if (actualPujcka == 1){
                    odstranitPujcku('#pujcka_1', '#plus_1', '#minus_1');
                } else if (actualPujcka == 2){
                    odstranitPujcku('#pujcka_2', '#plus_2', '#minus_2');
                } else if (actualPujcka == 3){
                    odstranitPujcku('#pujcka_3', '#plus_3', '#minus_3');
                } else if (actualPujcka == 4){
                    odstranitPujcku('#pujcka_4', '#plus_4', '#minus_4');
                } else if (actualPujcka == 5){
                    odstranitPujcku('#pujcka_5', '#plus_5', '#minus_5');
                }
            }
    </script>

</body>
</html>