$(document).ready(function() {
	
	var soma = 0,
		valor = 0,
		cadigo = 0,
		produto = '',
		produtos = {
				"01":{"nome":"LASANHA"},
				"02":{"nome":"LAS. FRANGO 4Q"},
				"03":{"nome":"LAS. BRÓCOLIS"},
				"04":{"nome":"LAS. FILÉ"},
				"05":{"nome":"LAS. CAMARÃO"},
				"06":{"nome":"CANELONE"},
				"07":{"nome":"CAN. FRANGO 4Q"},
				"08":{"nome":"RONDELLE"},
				"09":{"nome":"CONCHA NOZES/ESP."},
				"10":{"nome":"CONCHA FRANGO DEF"},
				"11":{"nome":"EMP. FRANGO"},
				"12":{"nome":"EMP. CAMARÃO"},
				"13":{"nome":"QUEIJO RALADO"},
				"14":{"nome":"BIFE"},
				"15":{"nome":"FRANGO PARMEG."},
				"16":{"nome":"ALMONDEGAS"},
				"17":{"nome":"TATU RECHEADO"},
				"18":{"nome":"FILÉ PARMEG/4Q"},
				"19":{"nome":"PIZZAS"},
				"20":{"nome":"NHOQUE"},
				"21":{"nome":"CAPELETI"},
				"22":{"nome":"RAVIOLE"},
				"23":{"nome":"TORTEI"},
				"24":{"nome":"BRODO"},
				"25":{"nome":"MACARRÃO"},
				"26":{"nome":"MOLHOS"},
				"27":{"nome":"MOLHO FUNGHI"},
				"28":{"nome":"LAS. 4Q C/ PRES"},
				"29":{"nome":"CAN. QUEIJO E PRES."},
				"30":{"nome":"NHOQUE VERDE"},
				"31":{"nome":"FRANGO 4Q"},
				"32":{"nome":"FILÉ AO FUNGHI"},
				"33":{"nome":"NHOQUE RECHEADO"},
				"36":{"nome":"MOLHO 4 QUEIJOS"},
				"37":{"nome":"EMP. PALMILTO/LEGUMES"},
				"43":{"nome":"LAS. BOL. C/ PRES"},
				"46":{"nome":"LAS./ CAN BOLONHESA"},
				"50":{"nome":"MOLHO BOLONHESA"},
				"52":{"nome":"MOLHO PESTO"},
				"53":{"nome":"MOLHO DE CARNE"},
				"70":{"nome":"TORTA DE MARACUJÁ"},
				"71":{"nome":"TORTA DE LIMÃO"},
				"72":{"nome":"SORVETE DE CAFÉ"},
				"73":{"nome":"TORTA DE CHOCOLATE"}
			};
	
	$('#produto').bind('keypress', function(e) {
		
		var code = (e.keyCode ? e.keyCode : e.which);
		if(code == 13 || code == 9) {
			
			valor = $('#produto').val().substr(-6,3) + '.' + $('#produto').val().substr(-3,2);
			valor = parseFloat( valor, 10 );
			
			soma += valor;
	
			soma = Math.round(soma*100)/100;
			
			codigo = $('#produto').val().substr(-10,2);
			produto = produtos[codigo] != undefined ? produtos[codigo]['nome'] : 'Produto sem código';
	
			$('#valor_produto').val( 'R$ ' + valor);
			$('#total').val( 'R$ ' + soma);
	
			$('#produto').val('');
			
			$('#lista_produtos').prepend($("<option/>", {
				value: codigo,
				text: produto
			}));

		}
	}).keydown(function(e) {
		if(e.which == 17 || e.which == 74) {
			e.preventDefault();
		}
	});
	
	$('#produto').focus();
	
});
