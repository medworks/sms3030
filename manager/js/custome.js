$(document).ready(function(){

//*****************active menu
	var href=window.location.href;
	var first=href.lastIndexOf("/")+1;
	var last=href.lastIndexOf(".php")+3;
	var lenght=last-first;
	if(href.indexOf("seenregres")>0){
      jQuery('ul.mainNav li.reseller').addClass('active');
    }
    if(href.indexOf("lineregs")>0){
      jQuery('ul.mainNav li.lines').addClass('active');
    }
    href=href.substr(first,lenght+1);
    $("ul.mainNav li a").each(function(){
    	var linkhref=$(this).attr("href");
    	var linklast=linkhref.lastIndexOf(".php")+3;
    	linkhref=linkhref.substr(0,linklast+1);
		if(linkhref == href){
		  	$(this).addClass("active");
			$(this).parents("ul.mainNav > li").addClass("active");
		}
     });

//*****************textarea animate

    $(document).ready(function(){
	    $('textarea.animatedTextArea').autosize();    
	});

});