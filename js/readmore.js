 $('document').ready(function()
    {       
        //default value
        var paragraph = $('.para').hide(); //by default paragraph is hidden
        var readlessbtn = $('#readlessbtn'); //read less button properties
        var readmorebtn = $('#readmore'); //read more button properties
        readlessbtn.hide(); //by default read less button is hide
        //when click on read more button
        $(readmorebtn).click(function(){
          paragraph.show(); //show hidden paragraph
          readlessbtn.show(); //show read less button on bottom
          readmorebtn.hide(); //now hide read more button
        });
        
        
        //when click on read less btn
        $(readlessbtn).click(function(){
            paragraph.hide(); //hide paragraph
            readlessbtn.hide(); //hide read less button
            readmorebtn.show(); //show read more button
        });
    });