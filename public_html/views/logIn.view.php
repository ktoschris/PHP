<?php require 'partials/masterhead.php' ?>

    <?php require 'partials/navbar.php'; ?>

        <div class="container">
            <h2>Zaloguj się</h2>
            <form class="" action="/logmein" method="post">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="User Name">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>

        <center> <a href="/logmeout">Log Out</a> </center>

    <?php require 'partials/footer.php'; ?>