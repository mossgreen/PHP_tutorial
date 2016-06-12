	</div>





	<footer class="text-center" id="footer">&copy; CopyRight 2013-2015 moss'shop</footer>


	<script>
		
		jQuery(window).scroll(function(){
			var vscroll = jQuery(this).scrollTop();
			jQuery('#logotext').css({
				"transform" : "translate(0px, "+vscroll/2+"px)"
			});

			jQuery('#back-flower').css({
				"transform" : "translate("+0+vscroll/5+"px, -"+vscroll/12+"px)"
			});

			jQuery('#fore-flower').css({
				"transform" : "translate(0px, -"+vscroll/2+"px)"
			});
		});

		function detailsmodal(id){

			var data = {"id":id};
			jQuery.ajax({
				url: '/tutorial/includes/detailsmodal.php', 
				method: "POST",
				data: data,
				success: function(data){
					
					jQuery('body').append(data);
					jQuery('#details-modal').modal('toggle');
				},
				error: function(){
					alert("error message.");
				}
			});
		};

		function add_to_cart(){
			
			jQuery('#modal_errors').html("");
			var size = jQuery('#size').val();
			var quantity = jQuery('#quantity').val();
			var available = jQuery('#available').val();
			var error = '';
			var data=jQuery('#add_product_form').serialize();

			alert (quantity);
			if(size == '' || quantity == '' || quantity == 0){
				error += '<p class="text-danger text-center">You must choose a size and quantity.</p>';
				jQuery('#modal_errors').html(error);
				return ;
			}else if(quantity > available){
				error +='<p class="text-danger text-center">There are only '+available+' available.</p>';
				jQuery('#modal_errors').html(error);

			}
		};

	</script>
</body>
</html>