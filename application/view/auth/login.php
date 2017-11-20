<body>
<div class="flex-grid">
    <div class="col centerh">
        <h1>USER LOGIN</h1>
        <div class="container">
            <form action="" method="post">
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
                        <label for="password">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="password" placeholder="Login Password" minlength="8" maxlength="80" required>
                    </div>
                </div>
                <div class="row">
                    <div class="pull-right">
                        <a href="<? URL; ?>signup">Don't have any account? Register Here</a>
                    </div>
                </div>
                <div class="row">
                    <div class="pull-right">
                        <a href="<? URL; ?>reset">I forgot my password</a>
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