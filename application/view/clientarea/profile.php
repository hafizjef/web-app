<body>
    <div class="flex-grid">
        <div class="col centerh">
            <h1><?php echo strtoupper($user->username); ?> USER PROFILE</h1>
            <div class="container">
                <form id="edit-profile-form" action="updateprofile" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-75">
                            <input name="username" type="text" id="username" value="<?php echo $user->username; ?>" disabled>
                            <input name="userid" type="hidden" value="<?php echo $user->userid; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-75">
                            <input name="name" type="text" id="name" value="<?php echo $user->name; ?>" minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="col-75">
                            <input name="email" type="email" id="email" value="<?php echo $user->email; ?>" maxlength="50" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col-75">
                            <input name="phone" type="text" id="phone" value="<?php echo $user->phonenumber; ?>" maxlength="10" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="address">Address</label>
                        </div>
                        <div class="col-75">
                            <textarea name="address" id="address" maxlength="200" minlength="3" required><?php echo $user->address; ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-25">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-75">
                            <input name="password" type="password" id="password" placeholder="Verify Password" minlength="8" maxlength="80" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25 pull-right btn-container">
                            <input type="reset" value="Reset">
                            <input type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>