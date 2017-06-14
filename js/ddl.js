function configureDropDownLists(ddl1,ddl2) {
	var daman = ['WITEL'];
	var other = ['JHR', 'GNK', 'SMT', 'BOJ', 'MJE', 'MKG', 'SSL', 'MJP',
				 'BMK', 'SMC', 'ABR', 'BDN', 'UNR', 'KDL', 'PUS', 'SKR', 'WITEL']
	
	if(ddl1.value=='daman'){
		ddl2.options.length = 0;
		for (i = 0; i < daman.length; i++) {
			createOption(ddl2, daman[i], daman[i]);
		}
	}else{
		ddl2.options.length = 0;
		for (i = 0; i < other.length; i++) {
			createOption(ddl2, other[i], other[i]);
		}
	}
}

function createOption(ddl, text, value) {
	var opt = document.createElement('option');
	opt.value = value;
	opt.text = text;
	ddl.options.add(opt);
}
