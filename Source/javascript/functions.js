function submitform()
{
    document.getElementById("uitloggen").submit();
}


    function filltabledata(data){
        var jsonObj = JSON.parse(data);
        var tables = $("#tableprods");
        for(var i=0;i<jsonObj.length;i++){
            tables.append('<tr class="tablerow" id="tablerow'+jsonObj[i]["ID"]+'">\n\
                    <td><img width="48" height="48px" src="css/prodphotos/'+jsonObj[i]["Foto"]+'"/></td>\n\
                    <td><a href="./pages/productpage.php?id='+jsonObj[i]['ID']+'">'+jsonObj[i]["Naam"]+'</a></td>\n\
                    <td>'+jsonObj[i]["Prijs"]+'</td>\n\
                    <td><img src="css/images/winkelwagen.png"/></td></td></tr>');
        }
    }
    
    function fillpage(data){
        var jsonObj = JSON.parse(data);
        var tables = $("#tablepage");
        for(var i=0;i<jsonObj.length;i++){
           tables.append('<tr><td>PC4U ID:</td><td>'+jsonObj[i]["ID"]+'</td></tr>\n\
                    <tr><td>Afbeelding:</td><td><img width="150" height="150px" src="../css/prodphotos/'+jsonObj[i]["Foto"]+'"/></td></tr>\n\
                    <tr><td>Merk:</td><td>'+jsonObj[i]['Merk']+'</td></tr>\n\
                    <tr><td>Naam:</td><td> '+jsonObj[i]["Naam"]+'</td></tr>\n\
                    <tr><td>Prijs:</td><td>&#8364;'+jsonObj[i]["Prijs"]+'</td></tr>\n\
                    <tr><td>Omschrijving:</td><td>'+jsonObj[i]["Omschrijving"]+'</td></tr>\n\
                    <tr><td>Type:</td><td>'+jsonObj[i]["Typenaam"]+'</td></tr>\n\
                    <tr><td>Schermdiagonaal:</td><td>'+jsonObj[i]['Schermdiagonaal']+'</td></tr>\n\
                    <tr><td>Resolutie:</td><td>'+jsonObj[i]['SchermX']+'x'+jsonObj[i]['SchermY']+'</td></tr>\n\
                    <tr><td>Gewicht:</td><td>'+jsonObj[i]['Gewicht']+'kg</td></tr>\n\
                    <tr><td>Geheugen:</td><td>'+jsonObj[i]['Geheugen']+'</td></tr>\n\
                    <tr><td>CPU Model:</td><td>'+jsonObj[i]['CPU']+'</td></tr>\n\
                    <tr><td>CPU Snelheid:</td><td>'+jsonObj[i]['CPUSpeed']+'</td></tr>\n\
                    <tr><td>GPU Model:</td><td>'+jsonObj[i]['GPU']+'</td></tr>');
        }
    }
     ajax("http://localhost/webshop/classes/Productclass.php?type="+getURLParameter("type"),filltabledata);
     ajax("http://localhost/webshop/classes/Productclass.php?id="+getURLParameter("id"),fillpage);




function validatePostcode() {
    
    
        var pc = document.getElementById("postcode").value;
        pc.toUpperCase();
        var hn = document.getElementById("straatnummer").value;
ajax("http://api.postcodedata.nl/v1/postcode/?postcode=" + pc +
                "&streetnumber=" + hn + "&ref=domeinnaam.nl&type=json.txt",filldata);
      
function filldata(data){
    
       var jsonObj = JSON.parse(data);
            if (jsonObj["status"] === "error") {
                document.getElementById("straatnaam").value = "Adres niet gevonden.";
                document.getElementById("woonplaats").value = "Adres niet gevonden.";

            } else {
                document.getElementById("woonplaats").value = jsonObj['details'][0]['city'];
                document.getElementById("straatnaam").value = jsonObj['details'][0]['street'];

            }
}
         



    
}
function validateCreation()
{
    var name = document.getElementById("naam");
    var email = document.getElementById("email");
    var username = document.getElementById("username");
    var password = document.getElementById("wachtwoord");
    var passwordagain = document.getElementById("wachtwoordconfirm");
    var streetnumber = document.getElementById("straatnummer");
    var postcode = document.getElementById("postcode");
    var birthday = document.getElementById("geboortedatum");
    var woonplaats = document.getElementById("woonplaats");
    var straatnaam = document.getElementById("straatnaam");
    var a = 0;
    if (name.value == "") {
        name.style.borderColor = "red";
        a = 1;
    }else{
        name.style.borderColor = "green";
    }
    if (password.value == "") {
        password.style.borderColor = "red";
        a = 1;
    }else{
        password.style.borderColor = "green";
    }
    if (passwordagain.value != password.value || passwordagain.value=="" ) {
        passwordagain.style.borderColor = "red";
        a = 1;
    }else{
        passwordagain.style.borderColor = "green";
    }
    if (birthday.value == "") {
        birthday.style.borderColor = "red";
        a = 1;
    } else{
        birthday.style.borderColor = "green";
    }
    if (postcode.value == "") {
        postcode.style.borderColor = "red";
        a = 1;
    } else {
        postcode.style.borderColor = "green";
    }
    if (username.value == "") {
        username.style.borderColor = "red";
        a = 1;
    } else {
        username.style.borderColor = "green";
    }
    if (validateEmail(email.value) == false || email.value == "") {
        email.style.borderColor = "red";
        a = 1;
    } else {
        email.style.borderColor = "green";
    }
    if (isNaN(streetnumber.value) || streetnumber.value == "") {
        streetnumber.style.borderColor = "red";
        a = 1;
    } else {
        streetnumber.style.borderColor = "green";
    }
    if (woonplaats.value=="Adres niet gevonden." || straatnaam.value=="Adres niet gevonden.") {
        straatnaam.style.borderColor = "red";
        woonplaats.style.borderColor = "red";
        a = 1;
    } else if(woonplaats.value!="" || straatnaam.value!="") {
        streetnumber.style.borderColor = "green";
        woonplaats.style.borderColor = "green";
    }
    if (a == 1) {
        return false;
    } else if (a == 0) {
        return true;
    }
}
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}

function exists(){
   
    if(getURLParameter("exists")){
        alert("Gebruiker bestaat al");
    }
}

function ajax(url,callback){


        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
            callback(xmlhttp.responseText);
            }
           

        };

        xmlhttp.open("GET", url, true);
        xmlhttp.send();
}

