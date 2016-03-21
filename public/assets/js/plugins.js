     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+(i+1)+"</td><td><input name=currentdata["+i+"]['course_code'] type='text' placeholder='Ex CSE-327' class='form-control input-md'  /> </td><td><input  name=currentdata["+i+"]['course_title'] type='text' placeholder='Course Title'  class='form-control input-md'></td><td><input  name=currentdata["+i+"]['course_credit'] type='text' placeholder='Credit Hr'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
