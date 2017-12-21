<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>MY ORDER LIST</h1>
        <div class="well">
            <div><table class="center" style="width: 100%">
                <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td>Date</td>
                    <td>Weight (Kg)</td>
                    <td>Total Price (MYR)</td>
                    <td>Services</td>
                    <td>Items</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order) { ?>
                    <tr>
                        <td><?php echo $order->date; ?></td>
                        <td><?php echo $order->weight; ?></td>
                        <td><?php echo round($order->totalprice, 2); ?></td>
                        <td><?php echo $order->services; ?></td>
                        <td><?php echo $order->items; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table></div>
        </div>
    </div>
</div>

</body>