<?php 
require_once '../core/init.php';
if(!is_logged_in()){
	header('Location: login.php');
}

include 'includes/head.php';
include 'includes/navigation.php';
?>
<!-- orders to fill -->
<?php 
$txnQuery = "SELECT t.id, t.cart_id, t.full_name, t.description, t.txn_date, t.grand_total, c.items, c.paid, c.shipped FROM transactions t LEFT JOIN cart c ON t.cart_id = c.id WHERE c.paid = 1 AND c.shipped = 0 ORDER BY t.txn_date";

$txnResults = $db -> query($txnQuery);
?>
<div class="col-md-12">
	<h3 class="text-center">Orders To Ship</h3>
	<table class="table table-condensed table-bordered table-striped">
		<thead>
			<th></th>
			<th>Name</th>
			<th>Description</th>
			<th>Total</th>
			<th>Date</th>
		</thead>
		<tbody>
			<?php while($order = mysqli_fetch_assoc($txnResults)): ?>
				<tr>
					<td><a href="orders.php?txn_id=<?=$order['id'];?>" class="btn btn-xs btn-info">Details</td>
					<td><?=$order['full_name'];?></td>
					<td><?=$order['description'];?></td>
					<td><?=money($order['grand_total']);?></td>
					<td><?=pretty_date($order['txn_date']);?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	<div class="row">
		<!-- Sales by month -->
		<?php 
		$thisYr = date("Y");
		$lastYr = $thisYr -1;
		$thisYrQ = $db -> query("SELECT grand_total, txn_date FROM transactions WHERE YEAR(txn_date) ='{$thisYr}'");
		$LastYrQ = $db -> query("SELECT grand_total, txn_date FROM transactions WHERE YEAR(txn_date) ='{$lastYr}'");
		$current = array();
		$last = array();
		$currentTotal = 0;
		$lastTotal = 0;
		while($x = mysqli_fetch_assoc($thisYrQ)){
			$month = date("m", strtotime($x['txn_date']));
			if(!array_key_exists($month,$current)){
				$current[(int)$month] = $x['grand_total'];
			}else{
				$current[(int)$month] += $x['grand_total'];
			}
			$currentTotal += $x['grand_total'];
		}

		while($y = mysqli_fetch_assoc($LastYrQ)){
			$month = date("m", strtotime($y['txn_date']));
			if(!array_key_exists($month,$last)){
				$last[(int)$month] = $y['grand_total'];
			}else{
				$last[(int)$month] += $y['grand_total'];
			}
			$lastTotal += $y['grand_total'];
		}

		?>
		<div class="col-md-4">
			<h3 class="text-center">Sales By Month</h3>
			<table class="table table-condensed table-bordered table-striped">
				<thead>
					<th></th>
					<th><?=$lastYr;?></th>
					<th><?=$thisYr;?></th>
				</thead>
				<tbody>
					<?php for($i = 1; $i <= 12 ;$i++): 
					$dt = DateTime::createFromFormat('!m',$i);
					?>
					<tr>
						<th><?=$dt->format("F");?></th>
						<th><?=(array_key_exists($i, $last))?money($last[$i]):money(0);?></th>
						<th><?=(array_key_exists($i, $current))?money($current[$i]):money(0);?></th>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>
	</div>

	<!-- inventory -->
	<div class="col-md-8"></div>
</div>

</div>
<?php  include 'includes/footer.php'; ?>