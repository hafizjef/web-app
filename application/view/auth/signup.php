<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>REGISTER ACCOUNT</h1>
        <div class="container">
            <form id="signup-form" action="" method="post" onsubmit="return verifyBeforeSubmit()">
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" placeholder="Name" minlength="3" maxlength="50" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" placeholder="Login Username" maxlength="30" minlength="3" pattern="([a-zA-Z])\w+" title="Alphabet, number and underscores only" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" placeholder="Email Address" maxlength="50" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="phone" placeholder="Phone Number" maxlength="10" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="password" placeholder="Login Password" minlength="8" maxlength="80" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="verify-password">Confirm Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="verify-password" placeholder="Confirm Login Password" minlength="8" maxlength="80" required>
                    </div>
                </div>
                <div class="row remove-padding">
                    <div class="col-25">
                    </div>
                    <div id="password-verify-status" class="col-75 password-verify">

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                        <textarea id="address" maxlength="200" minlength="3" placeholder="Address line..." required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="pull-right">
                        <a href="<? URL; ?>login">I already have an account</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25 pull-right btn-container">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script type="application/javascript" src="<? echo URL; ?>js/signup.js"></script>