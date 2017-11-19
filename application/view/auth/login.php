<body>
<div class="flex-grid">
    <div class="col center">
        <h1>USER LOGIN</h1>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="password" required>
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
                    <div class="col-25 pull-right">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>