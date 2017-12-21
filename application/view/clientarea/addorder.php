<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>ADD NEW ORDER</h1>
        <div class="container">
            <form id="order-form" action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="weight">Weight (Kg)</label>
                    </div>
                    <div class="col-75">
                        <input name="weight" value="1" type="number" id="weight" min="1" step=".10" onchange="calculate()" required autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Service Type</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox" id="dryclean" name="service[]" value="dryclean" onchange="calculate()">
                        <label for="dryclean">Dry Clean</label>
                        <input type="checkbox" id="wash" name="service[]" value="wash" onchange="calculate()" checked>
                        <label for="wash">Wash</label>
                        <input type="checkbox" id="iron" name="service[]" value="iron" onchange="calculate()">
                        <label for="iron">Iron</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Item Type</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox" id="shirt" name="item[]" value="shirt" onchange="calculate()" checked>
                        <label for="shirt">Shirt</label>
                        <input type="checkbox" id="jeans" name="item[]" value="jeans" onchange="calculate()">
                        <label for="jeans">Jeans</label>
                        <input type="checkbox" id="suit" name="item[]" value="suit" onchange="calculate()">
                        <label for="suit">Suits</label>
                        <input type="checkbox" id="bedsheet" name="item[]" value="bedsheet" onchange="calculate()">
                        <label for="bedsheet">Bed Sheets</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Pickup Time</label>
                    </div>
                    <div class="col-75">
                        <input name="date" type="date" required onchange="calculate()">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="cost">Estimated Cost (MYR)</label>
                    </div>
                    <div class="col-75">
                        <input name="cost" type="number" step=".10" id="cost" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25 pull-right btn-container">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Order">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script type="application/javascript" src="<? echo URL; ?>js/costestimator.js"></script>