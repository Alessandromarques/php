/**
 * 
 */
function mascaraData(campoData)
{
	  var data = campoData.value;
	  if (data.length == 2)
	  {
	      data = data + '/';
          document.forms[0].DtMovimento.value = data;
          return true;              
      }
      if (data.length == 5)
      {
          data = data + '/';
	      document.forms[0].DtMovimento.value = data;
	      return true;
	  }
}

function valida(form)
{
    
	if(document.querySelector("#teCategoria_idCategoria").value == ""){
		window.alert("Preencha o campo categoria");
		return false;
	}
	
	if(document.querySelector("#FgTipo").value == ""){
		window.alert("Preencha o campo tipo");
		return false;
	}
	
	if(form.DtMovimento.value==""){
		window.alert("Preencha o campo data");
		form.DtMovimento.focus();
		return false;
	}
	
	if(form.DsDescricao.value==""){
		window.alert("Preencha o campo descrição");
		form.DsDescricao.focus();
		return false;
	}
	
	if(form.NuValor.value==""){
		window.alert("Preencha o campo valor");
		form.NuValor.focus();
		return false;
	}
	
	if(document.querySelector("#FgStatus").value==""){
		window.alert("Preencha o campo Status");
		return false;
	}else{
		return true;
	}	
}