<?php 
require_once 'core/init.php';
if(!is_logged_in()){
	header('Location: login.php');
}

include 'includes/head.php';
include 'includes/navigation.php';

$userQ = $db -> query("SELECT * FROM users WHERE id ={$user_id}");
$userEmail = mysqli_fetch_assoc($userQ)['email'];

$txnQ = "SELECT * FROM transactions WHERE email = '{$userEmail}' ORDER BY id";
$txninfo = $db -> query($txnQ);
?>

<!-- inventory -->
<div class="col-md-12">
	<h3 class="text-center">Order Infomation</h3>
	<table class="table table-condensed table-bordered table-striped">

		<thead>
			<th>Full Name</th>
			<th>Email</th>
			<th>Order ID</th>
			<th>Sub Total</th>
			<th>Tax</th>
			<th>Grand Total</th>
			<th>Date</th>

		</thead>
		<tbody>
			<?php while($txn = mysqli_fetch_assoc($txninfo)): ?>
				<tr >
					<th><?=$txn['full_name'];?></th>
					<th><?=$txn['email'];?></th>
					<th><?=$txn['charge_id'];?></th>
					<th><?=$txn['sub_total'];?></th>
					<th><?=$txn['tax'];?></th>
					<th><?=$txn['grand_total'];?></th>
					<th><?=$txn['txn_date'];?></th>
				</tr>
			<?php endwhile; ?>
		</tbody> 
	</table>
</div>

<?php  include 'includes/footer.php'; ?>