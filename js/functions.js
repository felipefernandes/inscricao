$(document).ready(function() {

	$('input[placeholder], textarea[placeholder]').placeholder();

	$("#curso_1opcao").bind("change", function () 
	{
		$("#turno1").slideDown(); //exibe opcoes de turno

		var opcao = $(this).val();

		switch(opcao) {
			case "TI" :
				removeItensCurso1();				

	        	$('#curso_1opcao_turno').append($('<option>', { value: '1', text: 'Manhã' }));
	        	$('#curso_1opcao_turno').append($('<option>', { value: '2', text: 'Tarde' })); 							
				$('#curso_1opcao_turno').append($('<option>', { value: '3', text: 'Noite' }));
				break;

			case "IB" :
				removeItensCurso1();

				$('#curso_1opcao_turno').append($('<option>', { value: '4', text: 'Tarde 13h30 às 15h' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '5', text: 'Tarde 15h30 às 17h' }));
				break;

			default :
				removeItensCurso1();

	        	$('#curso_1opcao_turno').append($('<option>', { value: '1', text: 'Manhã' }));
	        	$('#curso_1opcao_turno').append($('<option>', { value: '2', text: 'Tarde' }));
		}
	});

	function removeItensCurso1() {
		$("#curso_1opcao_turno option[value='1']").remove(); //remove    
		$("#curso_1opcao_turno option[value='2']").remove(); //remove
		$("#curso_1opcao_turno option[value='3']").remove(); //remove
		$("#curso_1opcao_turno option[value='4']").remove(); //remove
		$("#curso_1opcao_turno option[value='5']").remove(); //remove		
	}


	$("#curso_2opcao").bind("change", function () 
	{
		$("#turno2").slideDown(); //exibe opcoes de turno

		var opcao = $(this).val();

		switch(opcao) {
			case "TI" :
				removeItensCurso2();

	        	$('#curso_2opcao_turno').append($('<option>', { value: '1', text: 'Manhã' }));
	        	$('#curso_2opcao_turno').append($('<option>', { value: '2', text: 'Tarde' })); 							
				$('#curso_2opcao_turno').append($('<option>', { value: '3', text: 'Noite' }));
				break;

			case "IB" :
				removeItensCurso2();

				$('#curso_2opcao_turno').append($('<option>', { value: '4', text: 'Tarde 13h30 às 15h' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '5', text: 'Tarde 15h30 às 17h' }));
				break;

			default :
				removeItensCurso2();

	        	$('#curso_2opcao_turno').append($('<option>', { value: '1', text: 'Manhã' }));
	        	$('#curso_2opcao_turno').append($('<option>', { value: '2', text: 'Tarde' }));
		}

        if ($(this).val() == $("#curso_1opcao").val()) {
        	alert('Infelizmente você não pode escolher a mesma opção de curso duas vezes.');
        	$(this).val('');
        	$(this).focus();
        	$("#turno2").slideUp();
        }

    });

	function removeItensCurso2() {
		$("#curso_2opcao_turno option[value='1']").remove(); //remove    
		$("#curso_2opcao_turno option[value='2']").remove(); //remove
		$("#curso_2opcao_turno option[value='3']").remove(); //remove
		$("#curso_2opcao_turno option[value='4']").remove(); //remove
		$("#curso_2opcao_turno option[value='5']").remove(); //remove				
	}



    $("#dt_nasc").blur(function() 
    {
	 	var idade = calculaIdade( $(this).val() );
		
		if( idade < 18 ) {
			$('#responsavel').slideDown();
		}

    });

    $("#escolaridade_periodo").bind("change", function() 
    {
    	if(($(this).val() == "fund_ok") || ($(this).val() == "medio_ok") || ($(this).val() == "superior_ok")) 
    	{
    		$("#escolaridade_sobre").slideUp();
    	} else {
			$("#escolaridade_sobre").slideDown();    		
    	}
    });

    $("#comunicacao").bind("change", function() 
    {
    	if($(this).val() == "8") 
    	{
    		$("#comunicacao_outro").slideDown();
    	} else {
    		$("#comunicacao_outro").slideUp();
    	}

    });

    $("#internet").bind("change", function() 
    {
    	if($(this).val() == "1") {
    		$("#internet_sim").slideDown();
    		$("#internet_nao").slideUp();
    	} else {
    		$("#internet_sim").slideUp();
    		$("#internet_nao").slideDown();    		
    	}
    });

    $("#internet_acesso").bind("change", function() 
    {
    	if($(this).val() == "13") {
    		$("#internet_outro").slideDown();
    	} else {
    		$("#internet_outro").slideUp();
    	}
    });

    $("#conhecimentos_info").bind("change", function() 
    {
    	if($(this).val() == "9") {
    		$("#conhecimentos_info_outro").slideDown();
    	} else {
    		$("#conhecimentos_info_outro").slideUp();
    	}
    });

    $("#atividade_social").bind("change", function() 
    {
    	if($(this).val() != "3") {
    		$("#atividade_social_nome").slideDown();
    	} else {
    		$("#atividade_social_nome").slideUp();
    	}
    });    

	$("#cep").blur(function() 
	{
		if($('#cep').val() != "") {
		    var value = $('#cep').val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		    var intRegex = /^\d+$/;
		    if(!intRegex.test(value)) {
		        alert("O campo aceita apenas números. Por favor, preencha novamente.");
		        $('#cep').val("");
		        $('#cep').focus();
		    }
		}	
	});

	$("#email").blur(function() 
	{
		if(!isValidEmailAddress($(this).val())) {
			alert("Digite um endereço de email válido.")
			$(this).val("");
			$(this).focus();
		}
	});


	$("#tel_fixo").blur(function() 
	{
		if($('#tel_fixo').val() != "") {
		    var value = $('#tel_fixo').val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		    var intRegex = /^\d+$/;
		    if(!intRegex.test(value)) {
		        alert("O campo aceita apenas números. Por favor, preencha novamente.");
		        $('#tel_fixo').val("");
		        $('#tel_fixo').focus();
		    }
		}	
	});

	$("#tel_cel").blur(function() 
	{
		if($('#tel_cel').val() != "") {
		    var value = $('#tel_cel').val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		    var intRegex = /^\d+$/;
		    if(!intRegex.test(value)) {
		        alert("O campo aceita apenas números. Por favor, preencha novamente.");
		        $('#tel_cel').val("");
		        $('#tel_cel').focus();
		    }
		}	
	});	






    // ENVIA O FORMULARIO
    $("#formularioInscricao").submit(function() {

		//alert("formEnviado!");
    	
    });

    




function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};


/**
* jQuery CalculaIdade v1.0.0 - http://wborbajr.blogspot.com/jquery.CalculaIdade.php
*
* Copyright (c) 2008 Waldir Borba Junior (stilbuero.de)
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
*
* Usando calculaIdade().
*
* @exemplo
*
* $('#campos_formulario').val( $().calculaIdade( "dd/mm/yyyy" ) );
*
* $('#campos_formulario').val( $().calculaIdade( "dd/mm/yy" ) );
*
* @desc Calcula a idade de uma data informada e retorno no formato 99 a 99 m -
*            #ERR# - se a data informada  nao estiver correta
*
*/

 function calculaIdade ( dataNascimento ) {
	 var hoje = new Date();	 
	 var arrayData = dataNascimento.split("/");	 
	 var retorno = "#ERR#";
	 
	 if (arrayData.length == 3) {
	  // Decompoem a data em array
	  var ano = parseInt( arrayData[2] );
	  var mes = parseInt( arrayData[1] );
	  var dia = parseInt( arrayData[0] );
	  
	  // Valida a data informada
	  if ( arrayData[0] > 31 || arrayData[1] > 12 ) {
	   return retorno;
	  }  
	  
	  ano = ( ano.length == 2 ) ? ano += 1900 : ano;

	  // Subtrai os anos das duas datas
	  var idade = ( hoje.getYear()+1900 ) - ano;

	  // Subtrai os meses das duas datas
	  var meses = ( hoje.getMonth() + 1 ) - mes;
	  
	  // Se meses for menor que 0 entao nao cumpriu anos. Se for maior sim ja cumpriu
	  idade = ( meses < 0 ) ? idade - 1 : idade;    

	  meses = ( meses < 0 ) ? meses + 12 : meses;      

	  retorno = ( idade );  
	 }   

	 return retorno;
 };  

});