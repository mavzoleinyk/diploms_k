jQuery(document).ready(function($) {
	$('select[name="cat-document"]').on('change', function () {
		$('#document_calk .name_document select').prop('selectedIndex', 0);     
		$('.but_rezalt').hide();   
		$('.rezalc_block').hide();
	});
	
	$('.name_document select').on('change', function () {
		$('.but_rezalt').show();     
	});
	
	var price_doc_xlxs = {
			"Диплом специалиста":			{"СССР до 1996": 15000, "с отличием 1997-2003": 19000, "1997-2003": 17000, "2004-2008": 17000, "2009-2010": 18000, "2011-2013": 18000, "с 2014 года (МПФ 2014)": 25000, "с 2014 года (МПФ 2013)": 27000, "с 2014 года (Киржачская типография)" : 25000 },
			"Диплом бакалавра": 				{"СССР до 1996": 20000, "1997-2003": 21000, "2004-2008": 21000, "2009-2010": 20000, "2011-2013": 20000, "с 2014 года (МПФ 2014)": 25000, "с 2014 года (МПФ 2013)": 27000,"с 2014 года (Киржачская типография)" : 25000 },
			"Диплом магистра": 					{"СССР до 1996": 20000, "1997-2003": 21000, "2004-2008": 21000, "2009-2010": 20000, "2011-2013": 20000, "с 2014 года (МПФ 2014)": 25000, "с 2014 года (МПФ 2013)": 27000,"с 2014 года (Киржачская типография)" : 25000 },
			"Диплом техникума": 				{"до 1996": 14000, "1997-2003": 15000, "2004-2008": 15000, "2009-2010": 16000, "2011-2013": 17000, "с 2014" : 19000 },
			"Диплом колледжа": 				{"до 1996": 14000, "1997-2003": 15000, "2004-2008": 15000, "2009-2010": 16000, "2011-2013": 17000, "с 2014" : 19000, "с отличием 1997-2013": 19000},
			"Диплом ПТУ": 						{"1993-2006": 14000, "2007-2013" : 16000 },
			"Свидетельство о браке":		{"СССР": 20000, "с 1998 по настоящее время" : 19000 },
			"Свидетельство о разводе":	{"с 1998 по настоящее время" : 19000 },
			"Свидетельство о рождении":	{"с 1998 по настоящее время" : 19000 },
			"Свидетельство о смерти":		{"с 1998 по настоящее время" : 19000 },
			"Справка вызов на сессию":	{"любой" : 6000 },
			"Архивная справка":				{"любой" : 6000 },
			"Справка об обучении":			{"любой" : 6000 },
			"Академсправка":					{"любой" : 13000 },
			"Аттестат за 9 классов" : 		{ "РСФСР (СССР)": 15000, "1993-1997":15000 , "1998-2006" :15000  , "2007-2009": 17000, "2010-2013": 17000,  "c 2014" :18000},
			"Аттестат за 11 классов" : 		{"РСФСР (СССР)": 16000, "1993-1997":14000 , "1998-2006": 14000 , "2007-2009" : 16000, "2010-2013": 17000, "c 2014": 18000},
			"Диплом кандидата наук" : 		{"любой" : 29000 },
			"Диплом доктора наук" : 		{"любой" : 29000 },
			"Удостоверение интернатуры":{"любой" : 14000 },
			"Ординатура":							{"любой" : 14000 },
			"Медицинский сертификат специалиста": {"2006-2012" : 14000, "2013 - по настоящее время" : 15000 },
			"Свидетельство о повышении квалификации": {"1996-2010" : 16000 },
			"Удостоверение повышение квалификации": {"1996-2009" : 15000, "2010-по настоящее время" : 17000 },
			"Удостоверение краткосрочное повышение квалификации": {"1996-2009" : 15000, "2010-2014" : 17000 },
			"Приложение к диплому": 		{"1997-2013 " : 9000, "2014-2015 (формат А3)" : 12000 },
			"ЕГЭ": 		{"до 2013" : 15000},
			"Диплом о дополнительном к высшему": 		{"любой" : 19000},
			"Диплом о профессиональной переподготовке": 		{"любой" : 19000}
			
		}
	var price_dostavka ={
		"1-2 дня": {"Россия": 1000, "Страны СНГ": 2000, "Др. зарубежье": 3000},
		"3-5 дней": {"Россия": 0, "Страны СНГ": 1000, "Др. зарубежье": 2000},
		"до 10 дней": {"Россия": 0, "Страны СНГ": 1000, "Др. зарубежье": 2000},
	}
	
	$( ".calc_doc" ).click(function() {
		var rez_titile_doc = $('.name_document div:not(.wpcf7cf-hidden) select option:selected').text();
		var rez_god_vudachi =  $('.god-vydachi div:not(.wpcf7cf-hidden) select option:selected').text();
		var rez_srok_izgotovleniya =  $('.srok-izgotovleniya select option:selected').text();
		var rez_dostavka =  $('.dostavka select option:selected').text();
		var rez_gorod_dostavki =  $('.gorod-dostavki input').val();
		var rez_cena = 0;
		
		var name_doc,  cur_price;
				
		rez_cena = price_doc_xlxs[rez_titile_doc][rez_god_vudachi]; 
		dostavka_cena = price_dostavka[rez_srok_izgotovleniya][rez_dostavka];
		suma_doc = rez_cena+dostavka_cena;
		
		$('#rez_titile_doc').html(rez_titile_doc);
		$('.rez_god_vudachi span').html(rez_god_vudachi);
		$('.rez_srok-izgotovleniya span').html(rez_srok_izgotovleniya);
		$('.rez_dostavka span').html(rez_dostavka);
		$('.rez_gorod-dostavki span').html(rez_gorod_dostavki);
		$('.rez_cena span').html(suma_doc);
		
		$('#form_from_calc input[name="rez_titile_doc"]').val(rez_titile_doc);
		$('#form_from_calc input[name="rez_god_vudachi"]').val(rez_god_vudachi);
		$('#form_from_calc input[name="rez_srok_izgotovleniya"]').val(rez_srok_izgotovleniya);
		$('#form_from_calc input[name="rez_dostavka"]').val(rez_dostavka);
		$('#form_from_calc input[name="rez_gorod_dostavki"]').val(rez_gorod_dostavki);
		$('#form_from_calc input[name="suma_doc"]').val(suma_doc);
		
		$('.rezalc_block').show();
	});
	
	$("a[href='#zakaz_doc_true']").click(function() { 
		name_vuz = $(this).parent().parent().parent().parent().parent().parent().find('.vc_row:first-child p').text();
		$(this).parent().addClass('this_form');
		$('.popmake .wpcf7-form input[name="name-doc"]').val(name_vuz);
	});
});