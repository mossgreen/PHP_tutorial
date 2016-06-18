	</div>

	<br><br>

	<script>
		function updateSizes(){
			var sizeString = '';
			for(var i =1; i <= 12; i++){
				if(jQuery('#size'+i).val() != ''){
					sizeString += jQuery('#size'+i).val()+':'+jQuery('#qty'+i).val()+':'+jQuery('#threshold'+i).val()+',';
				}
			}
			jQuery('#sizes').val(sizeString);
		}


		function get_child_options(selected){
			if(typeof selected === 'undefined'){
				var selected = '';
			}
			var parentID = jQuery('#parent').val();
			jQuery.ajax({
				url: '../../tutorial/admin/parsers/child_categories.php',
				type: 'POST',
				data:{parentID:parentID, selected:selected},
				success: function(data){
					jQuery('#child').html(data);
				},
				error: function(){
					alert("some thing wrong with the child options.")
				},	

			});
		}
		jQuery('select[name="parent"]').change(function(){
			get_child_options();
		});

	</script>

	<footer class="col-md-12 text-center" id="footer">&copy; CopyRight 2013-2015 moss'shop</footer>
</body>
</html>