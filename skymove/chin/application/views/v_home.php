<h1>Print</h1>
<input type="text" class="form-control" id="TXT">
<button class="btn btn-info" id="Print">Print</button>

<script>
    $('#Print').click(function(){
        $.ajax({
			type:"POST",
	        dataType:"JSON",
	        url:"index.php/home/print_z",
	        data:{'TXT':$('#TXT').val()},
          	success:function(res){
              
            }
		})
    });
    // $("#Print").click(function(){
    //     alert("The paragraph was clicked.");
    // });
</script>

