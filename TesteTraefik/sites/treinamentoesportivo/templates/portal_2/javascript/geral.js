function avisoMaterial(){
		//alert('ATENÇÃO:\n\nDiretoria de Material atenderá normalmente nos dias 27 e 28 (segunda e terça-feira) nos seguintes horários:\n\nsegunda-feira, das 8 às 12 horas e das 14 às 18 horas,\njá na terça-feira, das 13 às 18 horas. \n\n');
}

function erroCertificado(){
		//alert('ATENÇÃO:\n\nNa pagina a seguir, caso apareça a mensagem\n\n\"Há um problema no certificado de segurança do site.\"\n\nclique no link \n\n\"Continuar neste site (não recomendado).\"');
}

function IEHover(varSessao) {
    var navItems = document.getElementById(varSessao).getElementsByTagName("li");

    for (var i=0; i<navItems.length; i++) {
        if(navItems[i].className == "submenu") {
            navItems[i].onmouseover=function() { this.className += " over"; }
            navItems[i].onmouseout=function() { this.className = "submenu"; }
        }
    }

}