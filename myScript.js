

// navigation Menu
function openNav() 
{
    document.getElementById("mySidenav").style.left = "0px";
}
/* Set the width of the side navigation to 0 */
function closeNav() 
{
    document.getElementById("mySidenav").style.left = "100vw";
   
}




// FUNCTION FOR SPLATKOMER
function splatkomer(){
    var castka, urok, doba, splatka, urokZadani, urokPerMont, urokPerMontJedna, kumulUrok;
    // Get the value of inputs
    castka = document.getElementById("castka").value;
    urok = document.getElementById("urok").value;
    doba = document.getElementById("doba").value;

    urokZadani = urok;

    // vypocet procenta z uroku
    urok = urok/100;

    // mesicni urok
    urokPerMont = urok/12;


    // 1.05% z uroku  
    urokPerMontJedna = urokPerMont + 1;

    // pocet let * 12
    doba = doba*12;

    // nasledny urok 
    kumulUrok = urokPerMontJedna ** doba;   

    splatka = castka * urokPerMont * kumulUrok / (kumulUrok - 1);
    
    // zaokrouhleni na cela cisla
    splatka = Math.ceil(splatka);

    if(castka ==="" || urok ==="" || doba ==="")
    {
        document.getElementById("kolik").innerHTML = "Vyplňte prosím požadované údaje.";
        document.getElementById("kolik6").innerHTML = " 0 Kč";
    }
    else
    {
        document.getElementById("kolik").innerHTML = "Odhadovaná měsíční splátka hypotéky při úroku <b>" + urokZadani +" % </b>:";
        document.getElementById("kolik6").innerHTML = splatka + " Kč";
    };   

    var x = document.getElementById("result");
    if (x.style.display ==="none" || x.style.display ==='')
    {
        x.style.display = "block";
    }
    else
    {
        x.style.display = "none";
    }
};