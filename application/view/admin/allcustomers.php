<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>LIST OF ORDERS</h1>
        <div class="well">
            <div><table class="center" style="width: 100%">
                <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td>Customer Name</td>
                    <td>Date</td>
                    <td>Weight (Kg)</td>
                    <td>Total Price (MYR)</td>
                    <td>Services</td>
                    <td>Items</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order) { ?>
                    <tr>
                        <td><?php echo UserModel::getUserByID($order->customerid)->name; ?></td>
                        <td><?php echo $order->date; ?></td>
                        <td><?php echo $order->weight; ?></td>
                        <td><?php echo round($order->totalprice, 2); ?></td>
                        <td><?php echo $order->services; ?></td>
                        <td><?php echo $order->items; ?></td>
                        <td>
                            <form id="process" method="post">
                                <input name="orderId" type="hidden" value="<?php echo $order->orderid; ?>">
                                <button onclick="document.process.submit()">Process</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table></div>
        </div>
        <h3>Total orders: <?php echo sizeof($orders); ?></h3>
    </div>
</div>

</body>