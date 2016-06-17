	</div>





	<footer class="text-center" id="footer">
	&copy; CopyRight 2016 moss'shop -> Quanlity Tees <a href="../tutorial/admin/index.php"> admin</a>

	</footer>


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
					alert("error message from detailsmodal ajax.");
				}
			});
		};

		function update_cart(mode,edit_id, edit_size){
			var data = {"mode":mode, "edit_id":edit_id, "edit_size":edit_size};
			jQuery.ajax({
				url: '/tutorial/admin/parsers/update_cart.php',
				method: 'post',
				data: data,
				success: function(){
					 location.reload();
				},
				error: function(){
					alert("somtthing wrong iwth updata cart ajax");
				}
			});
		}

		function add_to_cart(){
			
			jQuery('#modal_errors').html("");
			var size = jQuery('#size').val();
			var quantity = jQuery('#quantity').val();
			var available = jQuery('#available').val();
			var error = '';
			var data=jQuery('#add_product_form').serialize();
			

			if(size == '' || quantity == '' || quantity <= 0){
				error += '<p class="text-danger text-center">You must choose a size and quantity.</p>';
				jQuery('#modal_errors').html(error);
				return ;
			}else if(quantity > available){
				error +='<p class="text-danger text-center">There are only '+available+' available.</p>';
				jQuery('#modal_errors').html(error);
				return;
			}else{
				jQuery.ajax({
					url : '/tutorial/admin/parsers/add_cart.php',
					method : 'post',
					data: data,
					success: function(){
						
						location.reload();
					},
					error: function(){
						alert("something in add to cart ajax went wrong");
					}
				});
			}
		};

	</script>
</body>
</html>