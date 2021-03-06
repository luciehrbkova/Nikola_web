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
    <meta name='description' content='Jaké účely mohu hypotékou zafinancovat? | Pořízení vlastního bydlení | 4 KROKY, které nepodceňte při nákupu nemovitosti pomocí | Časté otázky'> 
    <link rel="stylesheet" href="style.css">
    <title>NIKOLA BARTONÍČKOVÁ - Financování bydlení</title>

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
    <!--*********************** Hypoteky PAGE *************************-->
    <section id="hypoteky" class="sekce">
        <div class="container">
            <div class="pdf_form_box" id="pdf_form_box">
                <form action="" id="pdf_form" class="pdf_form"  method="POST" enctype="multipart/form-data" name="pdfForm">
                    <div class="row row-right">
                        <div class="closePdf" onclick="hidePdfForm()">
                            <img src="img/cross.png" alt="zavřít" class="cross_icon">
                        </div>
                    </div>
                    <label for="email" class="pdf_label">Email</label><br>
                    <input type="email" class="pdf_input" id="pdf_adresa" name="email" required>
                    <label for="mobil" class="pdf_label">Mobil</label><br>
                    <input type="number" class="pdf_input" id="pdf_cislo" name="mobil"  required>
                    <div class="row">
                        <input type="checkbox" class="checkbox" required>
                        <label for="konsol_souhlas" class="pdf_checkbox_label">Souhlasím s použitím osobních údajů pro <a href="gdpr.php" class="bold">marketingové účely</a></label>
                    </div>
                    <a href="img/procesKoupe.pdf" download="procesKoupe" target="blank"><input type="submit" value="ODESLAT" class="green_button" id="pdf_form_button"></a>
                </form>
            </div>
            <div class="fringe"></div>
            <div class="main">
                <!-- logo -->
                <div class="hero_top">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                    </div>
                </div>
                <!-- end logo -->
                

                <h2 class="h2_header aniHeader">Hypotéky</h2>
                <div class="hypo_part1 row_from_tablet">
                    <div class="sekce_from_tablet_half sekce_header_box hypo_pink_box aniHypo">
                        <h3>Jaké účely mohu
                            hypotékou zafinancovat?</h3>
                    </div>
                    <ul class="sekce_ul sekce_from_tablet_half aniHypoList">
                        <li>koupě bytu / pozemku / rekreačního objektu</li>
                        <li>nákup družstevního podílu</li>
                        <li>nákup investičního bydlení</li>
                        <li>výstavba / přístavba / rekonstrukce rodinného domu</li>
                        <li>vypořádání dědictví</li>
                        <li>vypořádání společného jmění manželů</li>
                        <li>rekonstrukce</li>
                        <li>refinancování</li>
                        <li>refundace</li>
                        <li>neúčelová hypotéka, tzv. americká hypotéka</li>
                    </ul>

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

    <!--*********************** part 2 *************************-->
    <section class="sekce hypo_part2">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <div class="row_from_tablet">
                    <!-- left box -->
                    <div class="sekce_from_tablet_half aligncont_spbetw">
                        <div class="sekce_from_tablet_half sekce_header_box hypo_green_box bg_darkgreen aniHeader2">
                            <h3 class="white">Pořízení vlastního 
                                bydlení</h3>
                        </div>
                            <p class="part2_text aniTextPart2">Pořízení vlastního bydlení patří mezi významný a důležitý krok každého z nás,
                                proto je velmi důležité nastavit hypotéku tak, aby byla každému z Vás ušita přesně na míru, nemluvím jen 
                                o nízkém úroku, splatnosti, nebo zvolené fixaci, ale aby její celkové nastavení ladilo s Vašimi budoucími plány.
                            </p>
                            <a href=""><p class="A_Z pc_only_bl aniAz">Provedu Vás procesem od A-Z!</p></a>
                    </div>
                    <!-- right part -->
                    <div class="sekce_from_tablet_half  aligncont_spbetw">
                        <div class="hypo_img_1 aniImgPart2">
                            <img src="img/hypo1.jpg" alt="interiér">
                        </div>
                        <p class="A_Z pc_hide">Provedu Vás procesem od A-Z!</p>
                    </div>

                </div>
                <div class="button_div part2_button aniButtonPart2">
                    <a href="#contact"><button class="green_button">Napište mi</button></a>
                </div>
                

            </div>
            <div class="fringe"></div>
        </div>

    </section>

     <!--*********************** part 3 - 4kroky *************************-->
     <section class="sekce hypo_part3">
        <div class="container">
            <div class="fringe"></div>
            <div class="main">
                <div class="row_from_tablet aniKroky">
                    <!-- left box -->    
                    <div class="sekce_from_tablet_half bg_pink kroky4_header_box">
                        <h3><span class="kroky4">4 KROKY,</span><br>
                            které nepodceňte při nákupu nemovitosti pomocí hypotéky</h3>
                    </div>
                    <!-- right part -->
                    <div class="kroky4_text_box_cont">
                        <div class=" kroky4_text_box bg_white">
                            <div id="krok_hypo1" class="krok_height">
                                <p>Zrevidujte si svoje Cash Flow, projděte se svým poradcem analýzou pravidelných příjmů
                                     a výdajů a zjistěte, zda Vaše prokazatelné příjmy jsou dostačující pro 
                                     požadovanou výši investičního záměru.</p>
                            </div>
                            <div id="krok_hypo2" class="krok_height">
                                <p>Zbavte se drahých závazků, nebo je splácejte levněji!</p>
                            </div>
                            <div id="krok_hypo3" class="krok_height">
                                <p>Vytvořte si krátkodobou operativní rezervu.<br><br></p>
                            </div>
                            <div id="krok_hypo4" class="krok_height">
                                <p>Hledejte intenzivně svou nemovitost a konzultujte se svým poradcem: <br><br></p>
                                <ul>
                                    <li>vhodnost zástavy (věcná břemena, atp.)</li>
                                    <li>předocenění nemovitosti, zda cena kupní bude akceptovatelná na cenu odhadní většinou bank</li>
                                </ul>
                            </div>

                            
                        
                        </div>
                        <div class="kroky_slider_box">
                            <div class="kroky_slider kroky_slider_selected" onclick="displayStep(1)" id="slider1"><p><span class="slider_number">1</span></p></div>
                            <div class="kroky_slider " onclick="displayStep(2)" id="slider2"><p><span class="slider_number">2</span></p></div>
                            <div class="kroky_slider " onclick="displayStep(3)" id="slider3"><p><span class="slider_number">3</span></p></div>
                            <div class="kroky_slider " onclick="displayStep(4)" id="slider4"><p><span class="slider_number">4</span></p></div>
                        </div>
                    </div>

                  

                </div>
                <!-- button only mobile -->
               
                <div class="button_div part2_button mobile_only_bl aniButtonPart3">
                    <button class="green_button pdf_button" onclick="showPdfForm()">STÁHNOUT ZDARMA</button>
                </div>
                <div class="button_box aniButtonPart3">
                    <div class="button_div">
                        <a href="img/procesKoupe.pdf" download="procesKoupe" target="blank"><button class="green_button">CHCI PORADIT</button></a>
                    </div>
                    <div class="button_div">
                        <button class="green_button pdf_button" onclick="showPdfForm()">STÁHNOUT ZDARMA</button>
                    </div>

                </div>
                <p class="A_Z aniPdf">Proces koupě v PDF</p>
                

            </div>
            <div class="fringe"></div>
        </div>

    </section>


    <!--*********************** Caste otazky *************************-->
    <section class="sekce hypo_part4">
    <div class="container">
        <div class="fringe"></div>
        <div class="main">
            <h2 class="h2_sp aniOtazkaHeader">Časté Otázky</h2>
    
                <!-- 1 otazka *********************************************************-->
                <div class="sekce_header_box align_fl_end hypo_otazky_box hypo_otazky_bg1 question aniOtazka1">
                    <h3>Které příjmy jsou pro banky akceptovatelné?</h3>
                </div>
                <!-- 1 ODPOVED -->
                <div class="row_from_tablet hypo_odpoved_container" id="odpoved1">
                    <ul class="sekce_ul">
                        <li>Příjem ze zaměstnání – nesmíte být ve výpovědní nebo zkušební době a je potřeba bance předložit 3 měsíční výpisy s došlou mzdou</li>
                        <li>Dohoda o provedení práce</li>
                        <li>Dohoda o pracovní činnosti</li>
                        <li>Daňové přiznání – fyzická osoba - OSVČ</li>
                        <li>Daňové přiznání – právnická osoba – s.r.o.</li>
                        <li>Příjem z pronájmu, který není ještě uveden v daňovém přiznání – banky umí započíst až 70 % z čistého nájmu</li>
                        <li>Budoucí příjem z pronájmu</li>
                        <li>Rodičovský příspěvek</li>
                        <li>Přídavky na děti</li>
                        <li>Starobní důchod</li>
                        <li>Invalidní důchod I., II., III. stupně</li>
                        <li>Sirotčí důchod</li>
                        <li>Vdovský důchod</li>
                        <li>Výsluhový příspěvek</li>
                        <li>Odměna pěstouna</li>
                        <li>Výživné/Alimenty</li>
                        <li>Diety</li>
                    </ul>

                </div>
 


                <!-- 2 otazka *********************************************************-->
                <div class="sekce_header_box align_fl_end hypo_otazky_box hypo_otazky_bg2 question aniOtazka2">
                    <h3>Umí banky hypotéku bez dokládání příjmů?</h3>
                </div>
                <!-- 2 ODPOVED -->
                <div class=" hypo_odpoved_container" id="odpoved2">
                    <p>Ano, banky za určitých podmínek umí akceptovat příjem na základě čestného
                         prohlášení a to za cenu vyšší participace vlastních zdrojů nebo vyšší úrokové sazby.
                        <br><br>
                        Také se lze důkladně připravit na předschválený limit cca s ½ ročním předstihem.
                        <br> <br><br>
                    </p>
                    <div class="button_div ">
                        <a href="#contact"><button class="green_button">Osobní schůzka</button></a>
                    </div>
                </div>



                <!-- 3 otazka *********************************************************-->
                <div class="sekce_header_box align_fl_end hypo_otazky_box hypo_otazky_bg3 question aniOtazka3">
                    <h3>7 rad, které je dobré znát!</h3>
                </div>
                
                <!-- 3 ODPOVED -->
                <div id="odpoved3">
                    <!-- 1rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_pink kroky4_header_box bg_rada bg_rada1">
                            <h3><span class="kroky4">LTV – LOAN TO VALUE</span><br>
                                Půjčené peníze oproti hodnotě zástavy/zástav</h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box">
                                <p>Banky poskytují v současné době klientům hypotéky max. do 90% LTV
                                    <br><br>
                                    <span class="bold">Co to vlastně pro mě znamená?</span>
                                    <br> 
                                    „Čím méně si půjčím oproti tomu, co zastavuji, tím je atraktivnější úroková sazba“
                                    <br><br>
                                    Banky rozlišují 3 hlavní úvěrová pásma: 70%, 80% a 90% LTV</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_darkgreen kroky4_header_box bg_rada bg_rada2">
                            <h3 class="white"><span class="kroky4">POMĚR VLASTNÍCH ZDROJŮ</span><br>
                                Vlastními zdroji zafinancuji rozdíl kupní ceny do 100%</h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <br>
                                <p><span class="bold">Co když nemám vlastní zdroje?</span></p>
                                <br>
                                <ul>
                                    <li>Dá se vyřešit další zástavou, třeba rodičů a v čase po částečně zaplacené jistině nemovitost vyvázat</li>
                                    <li>Zafinancovat úvěrem ze stavebního spoření</li>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- 3rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_lightgreen kroky4_header_box bg_rada bg_rada3">
                            <h3 ><span class="kroky4">DSTI – DEBT SERVIS TO INCOME</span><br>
                                Kolik mohu z čistých měsíčních příjmů domácnosti splácet na závazky</h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <p>Většina bank se řídí dalším důležitým parametrem, mezi které právě patří ukazatel DSTI, říká nám, 
                                    že z čistého měsíčního příjmu domácnosti na splácení může jít maximálně 50%<br><br>
                                    <span class="bold">Modelový příklad:</span><br>
                                    Josef má čistý měsíční příjem: 	<br>	  <span class="bold">  25 000 Kč</span><br>
                                    Má leasing na auto, na kterém splácí měsíčně:  <br> <span class="bold">  4 000 Kč</span><br><br>
                                    <span class="bold"> Na měsíční splátku mu zbývá: </span><br>
                                    25000 Kč/2 = 12500 Kč - 4000 Kč (leasing)				<span class="bold">	= 8 500 Kč</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 4rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_pink kroky4_header_box bg_rada bg_rada4">
                            <h3><span class="kroky4">ÚROKOVÁ SAZBA</span><br></h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <p>Úroková sazba, za kterou peníze bance splácíme je důležitým faktorem pro každého z nás. 
                                    Proto je potřeba pohlídat si, aby úrok, který nám banka z počátku prezentuje,
                                     byl zcela transparentní a nebyly za ním schované žádné další nečekané poplatky.
                                    <br><br>
                                    <span class="bold">Jakou sazbu si mohu zvolit?</span></p>
                                <br>
                                <ul>
                                    <li>Pevnou sazbu, známo jako fixní, po zvolenou dobu FIXACE</li>
                                    <li>Floatovou neboli variabilní sazbu, která se řídí tzv. PRIBOREM, který vyhlašuje ČNB</li>
                                    <li>Nebo si mohu zvolit offsetovou hypotéku, kde se Vám započítávají Vaše
                                         úspory oproti zůstatku úvěru a tím snižujete zaplacené úroky na minimum.</li>
                                </ul>
                                <br>
                                <p>
                                    <span class="bold">Mohu si zajistit hypotéku, aniž by neměl zástavu?</span><br>
                                    Ano, banky dnes umí tzv. hypotéky „NARUBY“. Projdete standardním schvalovacím procesem až po 
                                    podpis úvěrové smlouvy za dnešních podmínek a nemovitost můžete hledat třeba až tři roky.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 5rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_darkgreen kroky4_header_box bg_rada bg_rada5">
                            <h3 class="white"><span class="kroky4">FIXACE</span><br>
                                Garance úrokové sazby po zvolené časové období</h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <br>
                                <p>Na jakou dobu fixaci nastavím, po tu dobu mám jistotu neměnné splátky.
                                    <br><br>
                                    Je opět důležité nastavit fixaci tak, aby ladila s Vašimi budoucími plány, př. 
                                    rekonstrukce v čase, sloučení úvěrových závazků, vyvázání zástavy, prodej, atp.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- 6rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_lightgreen kroky4_header_box bg_rada bg_rada6">
                            <h3><span class="kroky4">SPLATNOST</span><br>
                                Čím delší horizont u hypotéky nastavím, tím menší splátka bude</h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <br>
                                <p>Banky umí v současnosti nastavit splatnost na 30 – 40 let, standardně do 70 – 75 
                                    let věku žadatele. Díky tomu, že můžete umořovat každý rok po 12 anuitních splátkách 
                                    až 25 % z výše půjčených peněz může dávat větší smysl natáhnout horizont na co 
                                    nejdelší splatnost a libovolně hypotéku umořovat (s ohledem na aktuální úrokovou sazbu) 
                                    z vytvořených rezerv, potažmo z výnosů z investic připravených na předčasné splacení.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- 7rada******************* -->
                    <div class="row_from_tablet box_7rad">
                        <div class="sekce_from_tablet_half bg_pink kroky4_header_box bg_rada bg_rada7">
                            <h3 ><span class="kroky4">PŘEDČASNÉ SPLÁCENÍ HYPOTÉKY A REZERVACE ÚROKOVÉ SAZBY DOPŘEDU</span></h3>
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <br>
                                <p>Za předčasné umoření hypotéky si dnes některé banky na základě doporučení ČNB mohou účtovat maximálně administrativní náklady. 
                                    Stává se tak dnes, že některé banky si účtují náklady za předčasné splacení minimální, než 
                                    ale takový <span class="bold">KROK</span> uděláte, je nutné vyplnit příslušný formulář 
                                    konkrétní banky a být předem o výši poplatku informován.
                                    
                                    <br><br>
                                    Konzultujte se svým poradcem 2-3 roky před koncem fixace možnost rezervace úrokové sazby na další 
                                    fixační období a buďte právě tak vždy o <span class="bold">KROK</span> napřed před bankou a zaslaným dodatkem obsahující novou
                                     úrokovou sazbu, kde už bývá mnohdy na vyjednávání pozdě.</p>
                                <br>
                            </div>
                        </div>
                    </div>







                </div>
  
        </div>
        <div class="fringe"></div>
    </div>

    </section>

         <!--*********************** part 5 - kalkulacka *************************-->
         <section class="sekce hypo_part3">
            <div class="container">
                <div class="fringe"></div>
                <div class="main" id="splatkomer">
                    <div class="row_from_tablet aniKalkul">
                        <!-- left box -->    
                        <div class="sekce_from_tablet_half bg_lightgreen kroky4_header_box">
                            <div>
                                <h3><span class="kroky4">HYPOTEČNÍ KALKULÁTOR</span><br><br></h3>
                                <div class="splatkomer">
                                    <p class="popisky">VÝŠE ÚVĚRU</p>
                                    <p class="placeholder">Kč</p>
                                    <input type="number" id="castka" class="input">
                                    <p class="popisky">ÚROKOVÁ SAZBA</p>
                                    <p class="placeholder">%</p>
                                    <input type="number" id="urok" class="input">
                                    <p class="popisky">SPLATNOST</p>
                                    <p class="placeholder">let</p>
                                    <input type="number" id="doba" class="input">
                                </div> 
                            </div>

                                
                        </div>
                        <!-- right part -->
                        <div class="kroky4_text_box_cont">
                            <div class=" kroky4_text_box bg_white">
                                <div class="button_div part2_button aniButtonKalkul">
                                    <button class="green_button" onclick="splatkomer()" >SPOCITEJ</button>
                                </div>
                                <!-- <h3><span class="kroky4">HYPOTEČNÍ KALKULACKA</span><br><br></h3> -->

                                    
                                <div class="result_box">
                                    <div class="result" id="result" >
                                        <p id="kolik"></p> <br>
                                        <h4 id="kolik6"></h4>
                                    </div>
                                </div>
                                
                              
                            
                            </div>
                        </div>
                    </div>
                    <!-- <div class="button_div part2_button pc_only_bl aniButtonKalkul ">
                        <button class="green_button" onclick="splatkomer()" >SPOCITEJ</button>
                    </div> -->
                    
    
                </div>
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
                        <form action="mailto:hrbkova.lucka@gmail.com" method="post" enctype="text/plain"  name="EmailTestForm">
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
        // KROKY FUNCTION______________________
        var step1, step2, step3, step4, stepShow;
        var slider1, slider2, slider3, slider4, selectedSlider;
        var selectedStep;
            function generalStep(stepShow, step2, step3, step4){
                $(stepShow).css('display','flex');
                $(step2).hide();
                $(step3).hide();
                $(step4).hide();
            };
            function generalSlider(selectedSlider, slider2, slider3, slider4){
                $(selectedSlider).addClass('kroky_slider_selected');
                $(slider2).removeClass('kroky_slider_selected');
                $(slider3).removeClass('kroky_slider_selected');
                $(slider4).removeClass('kroky_slider_selected');
            }

            function displayStep(selectedStep){
                if (selectedStep == 1){
                    generalStep('#krok_hypo1', '#krok_hypo2','#krok_hypo3', '#krok_hypo4');
                    generalSlider('#slider1', '#slider2', '#slider3', '#slider4');
                } else if (selectedStep == 2){
                    generalStep('#krok_hypo2', '#krok_hypo1','#krok_hypo3', '#krok_hypo4');
                    generalSlider('#slider2', '#slider1', '#slider3', '#slider4');
                } else if (selectedStep == 3){
                    generalStep('#krok_hypo3', '#krok_hypo2','#krok_hypo1', '#krok_hypo4');
                    generalSlider('#slider3', '#slider2', '#slider1', '#slider4');
                } else if (selectedStep == 4){
                    generalStep('#krok_hypo4', '#krok_hypo2','#krok_hypo3', '#krok_hypo1');
                    generalSlider('#slider4', '#slider2', '#slider3', '#slider1');
                };
            };

        // caste otazky
        $(document).ready(function()
        {
            $(".question").click(function()
            {
                $(this).next().toggle("slow");
            });
        });

        // pdf form
        function showPdfForm()
        {
            $("#pdf_form_box").fadeIn();
        }

        function hidePdfForm()
        {
            $("#pdf_form_box").fadeOut();
        }

        gsap.registerPlugin(ScrollTrigger);
            // EASI IN FUNCTION UP
            var easeUpItem;
            function generalEaseIn(easeUpItem){
                gsap.from(easeUpItem, {
                scrollTrigger: {
                    trigger: easeUpItem,
                    toggleActions: "play none none none",
                    start: "top 70%",
                    duration: 0.7,
                    ease: "power1"
                    // markers: true,
                },
                opacity: 0,
                y: 60, 
                // stagger: 0.4
                });
            };
            // HYPO HERO
            var heroTimeline = gsap.timeline();
            heroTimeline.from('.aniHeader', {duration: 0.7, y: 60, ease: "power1", opacity: 0})
                        .from('.aniHypo', {duration: 0.5, y: 60, ease: "power4",  opacity: 0})
                        .from('.aniHypoList', {duration: 0.5, y: 60, ease: "power1", opacity: 0})
            // HYPO PART 2
            generalEaseIn('.aniHeader2');
            generalEaseIn('.aniTextPart2');
            generalEaseIn('.aniImgPart2');
            generalEaseIn('.aniAz');
            generalEaseIn('.aniButtonPart2');
            // HYPO Part 3 - KROKY
            generalEaseIn('.aniKroky');
            generalEaseIn('.aniButtonPart3');
            generalEaseIn('.aniPdf');
            // HYPO OTAZKY
            generalEaseIn('.aniOtazkaHeader');
            generalEaseIn('.aniOtazka1');
            generalEaseIn('.aniOtazka2');
            generalEaseIn('.aniOtazka3');
             // HYPO KALKUL
             generalEaseIn('.aniKalkul');

            // KONTAKT
            generalEaseIn('.aniKontakt');
            generalEaseIn('.aniContactBg');
            generalEaseIn('.aniContact');



    </script>

</body>
</html>