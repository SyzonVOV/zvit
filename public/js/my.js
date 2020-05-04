
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}


$(document).ready(function() {
$("body").on("click", ".td_select", function(){
  //BaseRecord.start();
  //alert("heli");
});
/* $('td').keydown(function(event){
    if(event.keyCode==13){
	  BaseRecord.start();
  
  };
  alert("heli"); */
/* }); */

$('div[contenteditable]').keydown(function(e) {
    // trap the return key being pressed
    if (e.keyCode === 13) {
        // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
        document.execCommand('insertHTML', false, '<br/>');
        // prevent the default behaviour of return key pressed
        BaseRecord.start();
		$(event.target).parents('tr').nextAll().find('.div_select').first().focus();
                event.preventDefault();
		return false;
		
    }
});

});
var sum=0;
var BaseRecord={
	
start:function() {
	var count =["A43", "A29", "A38"];
for (var i in count) {
     //alert(count[i]);
	 name_coul = "#"+count[i];
   sum+=Number($(name_coul).text());
   //alert(sum);
         }
   $("#A00").text(sum);
},


};