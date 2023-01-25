
        <h1>Bienvenido</h1>
        <a href="../controllers/logout.php">Logout</a>
        <br>
        <h2> Estás dentro. <?php echo $_SESSION['username']; ?></h2>
        <script>
          cambiarTitulo('Bienvenido');
        </script>