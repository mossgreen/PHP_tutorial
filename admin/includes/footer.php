	</div>

	<br><br>

	<script type="text/javascript">
		function updateSizes(){
			var sizeString = '';
			for(var i =1; i <= 12; i++){
				if(jQuery('#size'+i) != ''){
					sizeString += jQuery('#size' + i).val() + ':' + jQuery('#qty' +1).val()+',';
				}
			}
			jQuery('#sizes').val(sizeString);
		}


		function get_child_options(){
			var parentID = jQuery('#parent').val();
			jQuery.ajax({
				url: '/tutorial/admin/parsers/child_categories.php',
				type: 'POST',
				data:{parentID:parentID},
				success: function(data){
					jQuery('#child').html(data);
				},
				error: function(){
					alert("some thing wrong with the child options.")
				},	

			});
		}
		jQuery('select[name="parent"]').change(get_child_options);

	</script>

	<footer class="col-md-12 text-center" id="footer">&copy; CopyRight 2013-2015 moss'shop</footer>
</body>
</html>