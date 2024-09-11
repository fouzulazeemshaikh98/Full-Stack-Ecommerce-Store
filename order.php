<?php
include("header.php");
?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="user-dashboard page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-inline dashboard-menu text-center">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a class="active" href="order.php">Orders</a></li>
					<li><a href="address.php">Address</a></li>
					<li><a href="profile-details.php">Profile Details</a></li>
				</ul>
				<div class="dashboard-wrapper user-dashboard">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th style="padding: 20px 20px;">Order ID</th>
									<th style="padding: 20px 20px;">Date</th>
									<th style="padding: 20px 20px;">Time</th>
									<th style="padding: 20px 20px;">Items</th>
									<th style="padding: 20px 20px;">Status</th>
									<th style="padding: 20px 20px;">Total Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									$query = mysqli_query(Connection(), "select * from orders where u_id = '" . $_SESSION["user_Id"] . "'");
									$converted6 = mysqli_fetch_array($query);
									$_SESSION["r"] = $converted6["p_id"];
									if (mysqli_num_rows($query) > 0) {
										foreach ($query as $data) {
									?>
											<td style="padding: 20px 20px;">
												<?php echo $data["Order_ID"] ?>
											</td>
											<td style="padding: 20px 20px;">
												<?php echo $data["Time"] ?>
											</td>
											<td style="padding: 20px 20px;">
												<?php echo $data["date"] ?>
											</td>
											<td style="padding: 20px 20px;">
												<?php echo $_SESSION["y"] = $data["p_qty"] ?>
											</td>
											<td style="padding: 20px 20px;">
												<span class="label label-danger"><?php echo $data["status"] ?></span>
											</td>
									<?php
										}
									}
									?>
									<?php
									$query2 = mysqli_query(Connection(), "select * from products where Id = '" . $_SESSION["r"] . "'");
									$converted7 = mysqli_fetch_array($query2);
									$_SESSION["p"] = $converted7["p_price"];
									?>
									<td style="padding: 20px 20px;">
										<?php echo $_SESSION["y"] * $_SESSION["p"]  ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include("footer.php");
?>
<!-- Main Menu Section -->