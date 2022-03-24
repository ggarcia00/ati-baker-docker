function IEHoverPseudo() {

    var navItems = document.getElementById("nivel-0").getElementsByTagName("li");

    for (var i=0; i<navItems.length; i++) {
        if(navItems[i].className == "submenu") {
            navItems[i].onmouseover=function() { this.className += " over"; }
            navItems[i].onmouseout=function() { this.className = "submenu"; }
        }
    }

}

function sendGoogleForm(bAnon) {

    var L_strMailboxPlease_Message = "Favor preencher o campo Busca.";
    var L_strValidMailbox_Message  = "O campo Busca contém caracter invalido.";
    var L_SessionTimedOut_Message  = "3 - Your session has timed out.  If you wish to continue, you will need to log back on.";

    if (!bAnon)
    {
        if (document.GoogleForm.q.value=="")
        {
            alert(L_strMailboxPlease_Message )
            document.GoogleForm.q.focus()
        }
        else if (((document.GoogleForm.q.value.indexOf("\\") != -1)  ||
                 (document.GoogleForm.q.value.indexOf("/")   != -1)) ||
                 (document.GoogleForm.q.value.indexOf(";")   != -1))
        {
            alert(L_strValidMailbox_Message)
        }
        else
        {
            document.GoogleForm.submit();
        }
    }
    else
    {
        document.GoogleForm.q.value="";
        document.GoogleForm.submit();
    }
}


function alinhamento(){
    var w=document.body.clientWidth;
    var calc = w-document.all['alinha'].offsetWidth;
    alinha.style.left=calc/2
}


function hideshow(which){
    if (!document.getElementById)
        return
    if (which.style.display=="block")
        which.style.display="none"
    else
        which.style.display="block"
}

/********************funções para barra de navegação********************/

var timer;

        function clickButtonBarra(id){
            if (timer != undefined) return;

            var tamanhoC = document.getElementById("container").offsetHeight;

            elem = document.getElementsByTagName("A");
            for(i=0;i<elem.length;i++){
                if (elem[i].className == "botaoBarraAtiva")
                    elem[i].className = "botaoBarra";
                if (elem[i].className == "botaoBarra")
                    tamanhoC -= elem[i].offsetHeight;
            }

            var inc = Math.round(tamanhoC / 10);

            itemClicado = document.getElementById(id);
            itemClicado.className = "botaoBarraAtiva";

            barra = "";
            elem = document.getElementsByTagName("DIV");
            for(i=0;i<elem.length;i++){
                if ((elem[i].id.substring(0,8) == "Conteudo") && (elem[i].style.display == "block"))
                    barra = elem[i].id;
            }

            if(barra!="" && barra == ("Conteudo" + id)) return;

            timer = setTimeout("timerResizeBarra('"+"Conteudo" + id +"','"+barra+"',0,"+tamanhoC+","+tamanhoC+",10,"+inc+")",10);
        }

        function timerResizeBarra(barraAtiva, barraInativa, alturaAtiva,
                 alturaInativa, tamanhoC, tempo, inc){
            b1 = document.getElementById(barraAtiva);

            if ((alturaAtiva + inc) <= tamanhoC){
                b1.style.height = alturaAtiva + inc;

                if (barraInativa != ""){
                    b2 = document.getElementById(barraInativa);
                    b2.style.height = alturaInativa - inc;
                }

                if (tamanhoC == alturaInativa){
                    if (b1.style.display != "block")
                        b1.style.display = "block";
                    if ((barraInativa != "") && (b2.style.overflow != "hidden"))
                        b2.style.overflow = "hidden";
                }

                timer = setTimeout("timerResizeBarra('"+barraAtiva+"','"+barraInativa+"',"+(alturaAtiva + inc)+","+(alturaInativa - inc)+","+tamanhoC+","+tempo+","+inc+")",tempo);
            }else{
                b1.style.height = tamanhoC;
                if (barraInativa != ""){
                    b2 = document.getElementById(barraInativa);
                    b2.style.height = 0;
                    b2.style.display = "none";
                }

                b1.style.overflow = "auto";

                clearTimeout(timer);
                timer = undefined;
            }
        }

        window.onload = function(){

            elem = document.getElementsByTagName("A");
            for(i=0;i<elem.length;i++){
                if (elem[i].className == "botaoBarra"){
                    clickButtonBarra(elem[i].id);
                    return;
                }
            }

            // Preloading de imagens
            preloader();

        }

        window.onresize = function(){

            if (navigator.appName.indexOf("Microsoft") != -1){
                tamanhoC = document.body.offsetHeight-4;
            }else{
                tamanhoC = window.innerHeight;
            }

            elem = document.getElementsByTagName("A");
            for(i=0;i<elem.length;i++){
                if ((elem[i].className == "botaoBarra") || (elem[i].className == "botaoBarraAtiva"))
                    tamanhoC -= elem[i].offsetHeight;
            }

            elem = document.getElementsByTagName("DIV");
            for(i=0;i<elem.length;i++){
                if ((elem[i].id.substring(0,8) == "Conteudo") && (elem[i].style.display == "block")){
                    elem[i].style.height = tamanhoC;
                    return;
                }
            }
        }

        function preloader(){
            img1 = new Image();
            img1.src = "botao.jpg";
            img2 = new Image();
            img2.src = "botao_hover.jpg";
            img3 = new Image();
            img3.src = "botaoAtivo.jpg";
            img4 = new Image();
            img4.src = "botaoAtivo_hover.jpg";
            img5 = new Image();
            img5.src = "fundo.jpg";
        }

/********************funções para barra de navegação********************/

        function visualizar(url) {
           window.open(url,'janela','width=600,height=500,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
        }

        function visualizarmenu(url) {
           window.open(url,'janela','width=600,height=500,toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,resizable=yes');
        }

