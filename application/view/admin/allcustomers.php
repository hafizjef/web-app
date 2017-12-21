<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>LIST OF CUSTOMERS</h1>
        <div class="well">
            <div><table class="center" style="width: 100%">
                <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td>Customer Name</td>
                    <td>Username</td>
                    <td>Email Address</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td><?php echo $customer->name; ?></td>
                        <td><?php echo $customer->username; ?></td>
                        <td><?php echo $customer->email; ?></td>
                        <td><?php echo $customer->phonenumber; ?></td>
                        <td><?php echo $customer->address; ?></td>
                        <td>
                            <form id="process" method="post">
                                <input name="userId" type="hidden" value="<?php echo $customer->userid; ?>">
                                <button class="delete" onclick="document.process.submit()">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table></div>
        </div>
        <h3>Total customers: <?php echo sizeof($customers); ?></h3>
    </div>
</div>

</body>