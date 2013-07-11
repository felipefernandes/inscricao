$(document).ready(function() {

	//$('input[placeholder], textarea[placeholder]').placeholder();

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
	  }
	}).blur();


	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
	    var input = $(this);
	    if (input.val() == input.attr('placeholder')) {
	      input.val('');
	    }
	  })
	});


	$("#curso_1opcao").bind("change", function () 
	{
		$("#turno1").slideDown(); //exibe opcoes de turno

		var opcao = $(this).val();

		switch(opcao) {
			case "TV" :
				removeItensCurso1();
				$('#curso_1opcao_turno').append($('<option>', { value: '10', text: 'Tarde (17h às 18h30) - 5ª feiras' })); 							

				$('#conhecimentos').slideUp();
				$('#conhecimentos_especificos').slideUp();

				break;

			case "TI" :
				removeItensCurso1();				

	        	$('#curso_1opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
	        	$('#curso_1opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' })); 							
				$('#curso_1opcao_turno').append($('<option>', { value: '3', text: 'Noite (18h às 20h30) - 4ª e 6ª feiras' }));

				$('#conhecimentos').slideDown();
				$('#conhecimentos_especificos').slideDown();

				break;

			case "IB" :
				removeItensCurso1();

				$('#curso_1opcao_turno').append($('<option>', { value: '6',  text: 'Manhã (8h30 às 10h) - 2ª e 4ª feiras' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '4',  text: 'Manhã (10h15 às 11h45) - 2ª e 4ª feiras' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '11', text: 'Tarde (13h às 14h30) - 2ª e 4ª feiras' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '12', text: 'Tarde (14h40 às 16h10) - 2ª e 4ª feiras' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '13', text: 'Tarde (16h15 às 17h45) - 2ª e 4ª feiras' }));
				$('#curso_1opcao_turno').append($('<option>', { value: '7',  text: 'Noite (18h às 19h30) - 3ª e 5ª feiras' }));

				$('#conhecimentos').slideUp();
				$('#conhecimentos_especificos').slideUp();

				break;

			case "VI" :

	        	$('#curso_1opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
	        	$('#curso_1opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' }));				

	        	$('#curso_1opcao_turno').append($('<option>', { value: '14', text: 'Manhã (8h30 às 12h) - sábados' }));
	        	$('#curso_1opcao_turno').append($('<option>', { value: '15', text: 'Tarde (14h às 17h30) - sábados' }));

	        	$('#conhecimentos').slideDown();
	        	$('#conhecimentos_especificos').slideDown();

				break;

			default :
				removeItensCurso1();

				if (opcao === "AD" || opcao === "WD" || opcao === "DG") {
					$('#curso_1opcao_turno').append($('<option>', { value: '8', text: 'Manhã (8h30 às 12h) - 4ª e 6ª feiras' }));
		        	$('#curso_1opcao_turno').append($('<option>', { value: '9', text: 'Tarde (14h às 17h30) - 4ª e 6ª feiras' }));	
				} 
				else {
		        	$('#curso_1opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
		        	$('#curso_1opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' }));
				}	        

	        	$('#conhecimentos').slideDown();
	        	$('#conhecimentos_especificos').slideDown();        	
		}
	});

	function removeItensCurso1() {
		$("#curso_1opcao_turno option[value='1']").remove(); //remove    
		$("#curso_1opcao_turno option[value='2']").remove(); //remove
		$("#curso_1opcao_turno option[value='3']").remove(); //remove
		$("#curso_1opcao_turno option[value='4']").remove(); //remove
		$("#curso_1opcao_turno option[value='5']").remove(); //remove
		$("#curso_1opcao_turno option[value='6']").remove(); //remove
		$("#curso_1opcao_turno option[value='7']").remove(); //remove
		$("#curso_1opcao_turno option[value='8']").remove(); //remove
		$("#curso_1opcao_turno option[value='9']").remove(); //remove	
		$("#curso_1opcao_turno option[value='10']").remove(); //remove
		$("#curso_1opcao_turno option[value='11']").remove(); //remove
		$("#curso_1opcao_turno option[value='12']").remove(); //remove
		$("#curso_1opcao_turno option[value='13']").remove(); //remove	
		$("#curso_1opcao_turno option[value='14']").remove(); //remove	
		$("#curso_1opcao_turno option[value='15']").remove(); //remove	
	}


	$("#curso_2opcao").bind("change", function () 
	{
		$("#turno2").slideDown(); //exibe opcoes de turno

		var opcao = $(this).val();

		switch(opcao) {
			case "TV" :
				removeItensCurso2();
				$('#curso_2opcao_turno').append($('<option>', { value: '10', text: 'Tarde (17h às 18h30) - 5ª feiras' })); 							

				$('#conhecimentos').slideUp();
				$('#conhecimentos_especificos').slideUp();

				break;

			case "TI" :
				removeItensCurso2();				

	        	$('#curso_2opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
	        	$('#curso_2opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' })); 							
				$('#curso_2opcao_turno').append($('<option>', { value: '3', text: 'Noite (18h às 20h30) - 4ª e 6ª feiras' }));
				break;

			case "IB" :
				removeItensCurso2();

				$('#curso_2opcao_turno').append($('<option>', { value: '6',  text: 'Manhã (8h30 às 10h) - 2ª e 4ª feiras' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '4',  text: 'Manhã (10h15 às 11h45) - 2ª e 4ª feiras' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '11', text: 'Tarde (13h às 14h30) - 2ª e 4ª feiras' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '12', text: 'Tarde (14h40 às 16h10) - 2ª e 4ª feiras' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '13', text: 'Tarde (16h15 às 17h45) - 2ª e 4ª feiras' }));
				$('#curso_2opcao_turno').append($('<option>', { value: '7',  text: 'Noite (18h às 19h30) - 3ª e 5ª feiras' }));

				break;


			case "VI" :

	        	$('#curso_2opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
	        	$('#curso_2opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' }));				

	        	$('#curso_2opcao_turno').append($('<option>', { value: '14', text: 'Manhã (8h30 às 12h) - sábados' }));
	        	$('#curso_2opcao_turno').append($('<option>', { value: '15', text: 'Tarde (14h às 17h30) - sábados' }));

	        	$('#conhecimentos').slideDown();
	        	$('#conhecimentos_especificos').slideDown();

				break;

			default :
				removeItensCurso2();

				if (opcao === "AD" || opcao === "WD" || opcao === "DG") {
					$('#curso_2opcao_turno').append($('<option>', { value: '8', text: 'Manhã (8h30 às 12h) - 4ª e 6ª feiras' }));
		        	$('#curso_2opcao_turno').append($('<option>', { value: '9', text: 'Tarde (14h às 17h30) - 4ª e 6ª feiras' }));	
				} 
				else {
		        	$('#curso_2opcao_turno').append($('<option>', { value: '1', text: 'Manhã (8h30 às 12h) - 3ª e 5ª feiras' }));
		        	$('#curso_2opcao_turno').append($('<option>', { value: '2', text: 'Tarde (14h às 17h30) - 3ª e 5ª feiras' }));
				}	        

	        	$('#conhecimentos').slideDown();
	        	$('#conhecimentos_especificos').slideDown(); 
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
		$("#curso_2opcao_turno option[value='6']").remove(); //remove
		$("#curso_2opcao_turno option[value='7']").remove(); //remove
		$("#curso_2opcao_turno option[value='8']").remove(); //remove
		$("#curso_2opcao_turno option[value='9']").remove(); //remove		
		$("#curso_2opcao_turno option[value='10']").remove(); //remove
		$("#curso_2opcao_turno option[value='11']").remove(); //remove
		$("#curso_2opcao_turno option[value='12']").remove(); //remove
		$("#curso_2opcao_turno option[value='13']").remove(); //remove
		$("#curso_2opcao_turno option[value='14']").remove(); //remove
		$("#curso_2opcao_turno option[value='15']").remove(); //remove
	}



    $("#dt_nasc").blur(function() 
    {
	 	var idade = calculaIdade( $(this).val() );
		
		if( idade < 18 ) {
			$('#responsavel').slideDown();
		}

		if (idade < 13 ) {
			if ($('#curso_1opcao').val() != 'IB' && $('#curso_2opcao').val() != 'IB') {
				alert("Prezado(a) candidato(a), sua inscrição não pode ser realizada. Você está fora dos critérios de idade e/ou escolaridade");
				window.location.href = document.referrer;				
			}
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