function avisoMaterial(){
		//alert('ATEN��O:\n\nDiretoria de Material atender� normalmente nos dias 27 e 28 (segunda e ter�a-feira) nos seguintes hor�rios:\n\nsegunda-feira, das 8 �s 12 horas e das 14 �s 18 horas,\nj� na ter�a-feira, das 13 �s 18 horas. \n\n');
}

function erroCertificado(){
		//alert('ATEN��O:\n\nNa pagina a seguir, caso apare�a a mensagem\n\n\"H� um problema no certificado de seguran�a do site.\"\n\nclique no link \n\n\"Continuar neste site (n�o recomendado).\"');
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