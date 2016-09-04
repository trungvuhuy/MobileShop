	Array.prototype.addItem=function(item){
		this[this.length]=item;
	};

	Array.prototype.indexOf=function(value){
		for (var i=0;i<this.length;i++){
			if (this[i]==value) 
				return i;
		};
		return-1;
	};

	String.prototype.startsWith=function(value){
		return (this.substr(0,value.length)==value);
	};

	String.prototype.endsWith=function(value){
		var L1=this.length;
		var L2=value.length;
		if (L2>L1) return false;
		return (L2==0||this.substr(L1-L2,L2)==value);
	};

	String.prototype.remove=function(start,length){
		var s='';
		if (start>0) 
			s=this.substring(0,start);
		if (start+length<this.length) 
			s+=this.substring(start+length,this.length);
		return s;
	}

	// matches zip codes
	String.prototype.isZipCode=function(){
		return this.search(/\d{5}(-\d{4})?/)!=-1;
	}

	// matches $17.23 or $14,281,545.45 or ...
	String.prototype.isCurrency=function(){
		return this.search(/\$\d{1,3}(,\d{3})*\.\d{2}/)!=-1;
	}

	// matches 5:04 or 12:34 but not 75:83
	String.prototype.isTime=function(){
		return this.search(/^([1-9]|1[0-2]):[0-5]\d$/)!=-1;
	}

	//matches Email Address
	String.prototype.isEmail=function(){
		return this.search(/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/)!=-1;
	}

	// matches phone ###-###-####
	String.prototype.isUSPhone=function(){
		return this.search(/^\(?\d{3}\)?\s|-\d{3}-\d{4}$/)!=-1;
	}

	// matches International Phone Number
	String.prototype.isInternationalPhone=function(){
		return this.search(/^\d(\d|-){7,20}/)!=-1;
	}

	// matches Date xx/xx/xxxx
	String.prototype.isDate=function(){
		return this.search(/^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-./])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/)!=-1;
		//^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$
	}
	// matches IP Address
	String.prototype.isIPAddress=function(){
		return this.search(/^((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.){3}(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])$/)!=-1;
	}

	// matches State Abbreviation
	String.prototype.isState=function(){
		return this.search(/^(AK|AL|AR|AZ|CA|CO|CT|DC|DE|FL|GA|HI|IA|ID|IL|IN|KS|KY|LA|MA|MD|ME|MI|MN|MO|MS|MT|NB|NC|ND|NH|NJ|NM|NV|NY|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VA|VT|WA|WI|WV|WY)$/i)!=-1;
	}

	// matches Social Security Number
	String.prototype.isSSN=function(){
		return this.search(/^\d{3}\-\d{2}\-\d{4}$/)!=-1;
	}

	// matches Visa Credit Card
	String.prototype.isVisaCC=function(){
		return this.search(/^4[0-9]{15}$/)!=-1;
	}

	// matches Mastercard Credit Card
	String.prototype.isMasterCC=function(){
		return this.search(/^5[1-5]{1}[0-9]{14}$/)!=-1;
	}

	// matches Discover Credit Card
	String.prototype.isDiscoverCC=function(){
		return this.search(/^6011[0-9]{12}$/)!=-1;
	}

	// matches AMEX Credit Card
	String.prototype.isAMEXCC=function(){
		return this.search(/^3[47]{1}[0-9]{13}$/)!=-1;
	}

	// matches Credit Card
	String.prototype.isCreditCard=function(){
		return this.search(/^[0-9]{15,16}$/)!=-1;
	}

	// matches Numeric
	String.prototype.isNumeric=function(){
		return this.search(/(^-?\d\d*\.\d*$)|(^-?\d\d*$)|(^-?\.\d\d*$)/)!=-1;
	}

	// matches Integer
	String.prototype.isInteger=function(){
		return this.search(/(^-?\d\d*$)/)!=-1;
	}

	// matches Empty
	String.prototype.isEmpty=function(){
		return this.length==0;
	}

	// rightTrim
	String.prototype.rightTrim=function(){
		return this.replace(/^([\w\W]*)(\b\s*)$/,'$1');
	}

	// leftTrim
	String.prototype.leftTrim=function(){
		return this.replace(/^(\s*)(\b[\w\W]*)$/,'$2');
	}

	// trimAll
	String.prototype.trimAll=function(){
		this.replace(/^(\s*)$/,'');
		return this.replace(/^(\s*)([\W\w]*)(\b\s*$)/,'$2');
	}
	// Validate domain
	String.prototype.isDomainname=function(){
		return this.search(/^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/)!=-1;
	}

	// Compare string
	String.prototype.equals=function(arg){
		return (this.toString()==arg.toString());
	}

	document.addLoadEvent = function(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		}else{
			window.onload = function() {
				if (oldonload) {
					oldonload();
				}
				func();
			}
		}
	}

	var Browser=function(){
		var uAgent=navigator.userAgent.toLowerCase();
		this.isIE=uAgent.indexOf("msie")!=-1;
		this.isGecko=!this.IsIE;
		this.isNetscape=uAgent.indexOf("netscape")!=-1;
		this.platform=navigator.platform;
	}

	function id_check(obj,chk_obj_name){
		if(obj.checked)
			check_all(chk_obj_name);
		else
			check_none(chk_obj_name);
	}
	
	function check_all(chk_obj_name){
		var chk=document.getElementsByName(chk_obj_name);
		var len=chk.length;
		for(var i=0;i<len;i++)
			chk[i].checked=true;
	}

	function check_none(chk_obj_name){
		var chk=document.getElementsByName(chk_obj_name);
		var len=chk.length;
		for(var i=0;i<len;i++)
			chk[i].checked=false;
	}
	
	function delete_selected(chk_obj_name){
		var chk=document.getElementsByName(chk_obj_name);
		var len=chk.length;
		var checked=false;
		for(var i=0;i<len;i++)
			if(chk[i].checked) checked=true;
		if(checked)
			return confirm('Are you sure delete selected items?');
		else
			return true;
	}

	function removeAll(select_obj){
		var len=select_obj.length;
		while(len){
			select_obj.remove(len-1);
			len=select_obj.length;
		}
	}

	function remove(select_obj,index){
		select_obj.remove(index);
	}

	function add(select_obj,text,value){
		nOption=new Option();
		nOption.text=text;
		nOption.value=value;
		len=select_obj.length;
		select_obj.options[len]=nOption;
	}

	function addAll(select_obj,arr_text,arr_value){
		len=select_obj.length;
		vlen=(arr_value.length<arr_text.length)?arr_value.length:arr_text.length;
		for(var i=0;i<vlen;i++){
			nOption=new Option();
			nOption.text=arr_text[i];
			nOption.value=arr_value[i];
			select_obj.options[len+i]=nOption;
		}
	}

	function l2rAll(obj_l,obj_r){
		var len=obj_l.length;
		var arr_value=new Array()
		var arr_text=new Array()
		for(var i=0;i<len;i++){
			arr_value[i]=obj_l.options[i].value;
			arr_text[i]=obj_l.options[i].text;
		}
		removeAll(obj_l);
		addAll(obj_r,arr_text,arr_value);
	}

	function l2r(obj_l,obj_r){
		var len=obj_l.length;
		var arr_index=new Array();
		for(var i=0;i<len;i++){
			if(obj_l.options[i].selected)
				arr_index.push(i);
		}
		len=arr_index.length;
		while(len){
			l=arr_index[len-1]
			value=obj_l.options[l].value;
			text=obj_l.options[l].text;
			remove(obj_l,l);
			add(obj_r,text,value);
			len--;
		}
	}
	
	function getAllValue(select_obj){
		var len=select_obj.length;
		var str_value='';
		while(len){
			value=select_obj.options[len-1].value;
			str_value=str_value+value+'--';
			len--;
		}
		return str_value;
	}

	function getSelectedValue(select_obj){
		var len=select_obj.length;
		var str_value='|';
		while(len){
			if(select_obj.options[len-1].selected){
				value=select_obj.options[len-1].value;
				str_value=str_value+value+'|';
			}
			len--;
		}
		return str_value;
	}

	function isZipCode(string){
		// Check for correct zip code
		return (string.search(/(^\d{5}$)|(^\d{5}-\d{4}$)/) != -1);
		/*reZip = new RegExp(/(^\d{5}$)|(^\d{5}-\d{4}$)/);
		if (!reZip.test(string)) {
			return false;
		}
		return true;*/
	}

	function isEmail(string) {
		return (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1);
	}

	function getQueryString(){
		var query = window.location.search.substring(1);
		return query;
	}

	function getQueryVariable(variable) {
		var query = window.location.search.substring(1);
		var vars = query.split("&");
		for (var i=0;i<vars.length;i++) {
			var pair = vars[i].split("=");
			if (pair[0] == variable) {
				return pair[1];
			}
		} 
		return '';
	}

	var Page=function(){
		document.write('<form name="frm_change_page"  id="frm_change_page"method="post" action="" style="margin-bottom:0;margin-top:0">');
		document.write('<input type="hidden" name="view" value="">');
		document.write('<input type="hidden" name="id" value="">');
		document.write('</form>');
	}
	
	Page.prototype.change_page=function(target,view,id){
		form=document.getElementById('frm_change_page');
		form.action=target;
		form.view.value=view;
		form.id.value=id;
		form.submit();
	}

	function to_day(day){
		var i=parseInt(day);
		switch(i){
			case 0:
				return "SUNDAY";
				break;
			case 1:
				return "MONDAY";
				break;
			case 2:
				return "TUESDAY";
				break;
			case 3:
				return "WEDNESDAY";
				break;
			case 4:
				return "THURSDAY";
				break;
			case 5:
				return "FRIDAY";
				break;
			case 6:
				return "SATURDAY";
				break;
		}
		return "";
	}

	function to_month(mon){
		var i=parseInt(mon);
		switch(i){
			case 0:
				return "JANUARY";
				break;
			case 1:
				return "FEBRUARY";
				break;
			case 2:
				return "MARCH";
				break;
			case 3:
				return "APRIL";
				break;
			case 4:
				return "MAY";
				break;
			case 5:
				return "JUNE";
				break;
			case 6:
				return "JULY";
				break;
			case 7:
				return "AUGUST";
				break;
			case 8:
				return "SEPTEMBER";
				break;
			case 9:
				return "OCTOBER";
				break;
			case 10:
				return "NOVEMBER";
				break;
			case 11:
				return "DECEMBER";
				break;
		}
		return "";
	}

	function show_date(){
		var today=new Date();
		day=today.getDay();
		date=today.getDate();
		month=today.getMonth();
		year=today.getFullYear();
		return to_day(day) + " " + date + ", " + to_month(month) + " " + year;
	}
	
	function show_date_today(){
		var today=new Date();
		day=today.getDay();
		date=today.getDate();
		month=today.getMonth();
		year=today.getFullYear();
		return day + "/" + date + "/" + month + "/" + year;
	}

	function messageWindow(title, msg){
		var width="300", height="125";
		var left = (screen.width/2) - width/2;
		var top = (screen.height/2) - height/2;
		var styleStr = 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbar=no,resizable=no,copyhistory=yes,width='+width+',height='+height+',left='+left+',top='+top+',screenX='+left+',screenY='+top;
		var msgWindow = open("","msgWindow", styleStr);
		var head = '<head><title>'+title+'</title></head>';
		var body = '<center>'+msg+'<br><p><form><input type="button" value="   OK   " onClick="self.close()"></form>';
		msgWindow.document.write(head + body);
	}

	function isInteger(integer_value) {
		if (integer_value.length == 0)
			return true;

		var decimal_format = ".";
		var check_char;

		check_char = integer_value.indexOf(decimal_format);
		if (check_char < 1)
			return isNumber(object_value);
		else
			return false;
	}

	function isNumber(object_value) {
		if (object_value.length == 0)
			return true;
		
		var start_format = " .+-0123456789";
		var number_format = " .0123456789";
		var check_char;
		var decimal = false;
		var trailing_blank = false;
		var digits = false;
		
		check_char = start_format.indexOf(object_value.charAt(0));
		if (check_char == 1)
			decimal = true;
		else if (check_char < 1)
			return false;
		 
		for (var i = 1; i < object_value.length; i++)	{
			check_char = number_format.indexOf(object_value.charAt(i))
			if (check_char < 0) {
				return false;
			} else if (check_char == 1)	{
				if (decimal)
					return false;
				else
					decimal = true;
			} else if (check_char == 0) {
				if (decimal || digits)	
				trailing_blank = true;
			}	else if (trailing_blank) { 
				return false;
			} else {
				digits = true;
			}
		}	

		return true;
	}

	function numberRange(object_value, min_value, max_value) {
		if (min_value != null) {
			if (object_value < min_value)
				return false;
		}

		if (max_value != null) {
			if (object_value > max_value)
				return false;
		}

		return true;
	}

	function checkRange(object_value, min_value, max_value) {
		if (object_value.length == 0)
			return true;

		if (!isNumber(object_value))
			return false;
		else
			return (numberRange((eval(object_value)), min_value, max_value));	

		return true;
	}

	function checkDay(checkYear, checkMonth, checkDay) {
		maxDay = 31;
		
		if (checkMonth == 4 || checkMonth == 6 ||	checkMonth == 9 || checkMonth == 11) {
			maxDay = 30;
		} else if (checkMonth == 2)	{
			if (checkYear % 4 > 0)
				maxDay =28;
			else if (checkYear % 100 == 0 && checkYear % 400 > 0)
				maxDay = 28;
			else
				maxDay = 29;
		}
		
		return checkRange(checkDay, 1, maxDay); 
	}

	function isDateString(date_str){
		if (date_str.length == 0)
		  return true;

		isplit = date_str.indexOf('/');
		if (isplit == -1)	{
			isplit = object_value.indexOf('-');
		}
		if (isplit == -1 || isplit == date_str.length)
			return false;
		sDay = date_str.substring(0, isplit);
		
		monthSplit = isplit + 1;
		isplit = date_str.indexOf('/', monthSplit);
		if (isplit == -1)	{
			isplit = date_str.indexOf('-', monthSplit);
		}
		if (isplit == -1 ||  (isplit + 1 )  == date_str.length)
			return false;
		sMonth = date_str.substring((sDay.length + 1), isplit);
		
		sYear = date_str.substring(isplit + 1);
		
		if (!isInteger(sMonth)) 
			return false;
		else if (!checkRange(sMonth, 1, 12)) 
			return false;
		else if (!isInteger(sYear)) 
			return false;
		else if (!checkRange(sYear, 0, null)) 
			return false;
		else if (!isInteger(sDay)) 
			return false;
		else if (!checkDay(sYear, sMonth, sDay)) 
			return false;
		else
			return true;
	}

	function check_usphone(phonenumber,useareacode){
		if(!useareacode)
			useareacode=1;
		if((phonenumber.match('/^[ ]*[(]{0,1}[ ]*[0-9]{3,3}[ ]*[)]{0,1}[]{0,1}[ ]*[0-9]{3,3}[ ]*[]{0,1}[ ]*[0-9]{4,4}[ ]*$/')==null)
							&&((useareacode!=1)
							&&(phonenumber.match('/^[ ]*[0-9]{3,3}[ ]*[-]{0,1}[ ]*[0-9]{4,4}[ ]*$/')==null)))
			return false;
		return true;
	}
