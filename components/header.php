<div class="div header">
    <section class="flex">
        <a href="home.php" class="logo><img src=" image/logo.jpg" width="130></a>
        <nav class=" navbar">
            <a href="home.php">home</a>
            <a href="application.php">application</a>
            <a href="login.php">signin</a>
            <a href="appoinment.php">appointment</a>
            <a href="donation.php">donation</a>
            </nav>
            <form action="search_service.php" method="post" class="search_form">
                <input type="text" name="search_service" placeholder="search service..." required maxlength="100">

                <button type="submit" class="bx bx-search-alt-2" name="search_service_btn"></button>
            </form>
            <div class="icons">
                <div id="menu-btn" class="bx bx-menu"></div>
                <div id="search-btn" class="bx bx-search-alt-2"></div>
                <div id="user-btn" class="bx bx-user"></div>
            </div>
            <div class="profile" style="background-image: none;">
                <?php
                if (isset($_COOKIE['user_id']))
                    //user logged in, show dashboard 

                ?>
    </section>
</div>