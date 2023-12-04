<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<input type="text" id="num">
<button onclick="Chk_num()">check</button>
<h2 id="Show">SHOW</h2>

<script>
    function Chk_num(){
        var n=['I', 'IV', 'V', 'IX', 'X', 'XL', 'L', 'XC', 'C', 'CD', 'D', 'CM', 'M'];
			var v=[1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];
			x = parseInt($('#num').val());
			y = '';
			for(i=12; i>=0; ) {
                if( v[i]<=x ) {
					y += n[i];
					x -= v[i];
					console.log(y);

				} else {
					i--;
					k = 0;
				}
            }

        $("#Show").html(y);
    }
</script>

