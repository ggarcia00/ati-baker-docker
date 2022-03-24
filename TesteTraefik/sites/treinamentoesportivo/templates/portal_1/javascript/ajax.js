function executaAjax(varMetodo,varUrl,varDestino,varFuncao,varParametros){

    //verifica se o browser tem suporte a ajax
    function getHTTPObject()
    {

        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
        } catch (e) {
            //alert("Permission UniversalBrowserRead denied.");
        }

        if(window.XMLHttpRequest)
        {
            return new XMLHttpRequest();
        }
        else if(window.ActiveXObject)
        {
            var prefixes = ["MSXML2", "Microsoft", "MSXML", "MSXML3"];

            for(var i = 0; i < prefixes.length; i++)
            {
                try
                {
                    return new ActiveXObject(prefixes[i] + ".XMLHTTP");
                } catch (e) {}
            }
        }
    }


    //Definimos a função que irá ser chamada a cada alteração no processo AJAX. Os diferentes states são:
    //0 Uninitialized = Valor inicial
    //1 Open = Ao executar o comando open() com sucesso.
    //2 Sent = O Objeto completou com sucesso a requisição, mas nenhum dado foi recebeido ainda.
    //3 Receiving = Imediatamente após receber o corpo da resposta. Todos os headers HTTP já foram recebidos.
    //4 Loaded = A transferência dos dados foi concluída.

    function processChange()
    {
        output = document.getElementById(varDestino);

        //enquanto estiver processando...emite a msg de carregando
        if(ajax.readyState == 0) {
            output.innerHTML = "Iniciando...!";
        }
        //enquanto estiver processando...emite a msg de carregando
        if(ajax.readyState == 1) {
            output.innerHTML = "Abrindo...!";
        }
        //enquanto estiver processando...emite a msg de carregando
        if(ajax.readyState == 2) {
            output.innerHTML = "Enviando...!";
        }
        //enquanto estiver processando...emite a msg de carregando
        if(ajax.readyState == 3) {
            output.innerHTML = "Recebendo...!";
        }

        //após ser processado - chama função processXML que vai varrer os dados
        if(ajax.readyState == 4 ) {

           output.innerHTML = "Carregado...!";

           Debug("Texto:"+ajax.responseText,varDebug);

           if (ajax.status == 200) {
               // perfect!
               Debug("Status:"+ajax.status,varDebug);
               /*
               if(!ajax.responseXML.documentElement && ajax.responseStream)
               {
                   ajax.responseXML.load(ajax.responseStream);
                   Debug("XML-1:"+ajax.responseXML,varDebug);
               }
               */
               if(ajax.responseXML){
                    //Debug("XML-2:"+ajax.responseXML,varDebug);
                    Debug("Nome Função:"+varFuncao,varDebug);
                    ListaFuncao(varFuncao);
               }
               else if(ajax.responseText)
               {
                    //Debug("Text-#:"+ajax.responseText,varDebug);
                    Debug("Nome Função:"+varFuncao,varDebug);
                    ListaFuncao(varFuncao);
               }
               else
               {
                   //caso o XML volte vazio, printa a mensagem abaixo
                   output.innerHTML = "--Problema no objeto de resposta--";
               }

           } else {
               // there was a problem with the request,
               // for example the response may be a 404 (Not Found)
               // or 500 (Internal Server Error) response codes
               output.innerHTML = "Erro ao processar ou arquivo não encontrado!\n"+ajax.responseText;
           }
        }
    }


    function consultar()
    {
        ajax = getHTTPObject();
        ajax.onreadystatechange = processChange;
        ajax.open(varMetodo, varUrl, true);

        //ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //ajax.setRequestHeader('Content-Type',"application/x-www-form-urlencoded; charset=iso-8859-1");
        //ajax.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");
        //ajax.setRequestHeader("Cache-Control", "post-check=0, pre-check=0");
        //ajax.setRequestHeader("Pragma", "no-cache");

        //passa o código do inscrito escolhido
        if(varParametros==''){
            varParametros = null;
        }

        Debug("Ajax:"+ajax,varDebug);
        Debug("Metodo:"+varMetodo,varDebug);
        Debug("URL-Busca:"+varUrl,varDebug);
        Debug("Parametros:"+varParametros,varDebug);

        ajax.send(varParametros);

    }
    
    consultar()
}
