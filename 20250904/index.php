<form action="login.php" method="post">
    <label for="usuario">Login</label><br>
    <input type="text" name="usuario" id="usuario" required><br><br>

    <label for="senha">Senha</label><br>
    <input type="password" name="senha" id="senha" required><br><br>

    <input type="submit" value="Entrar">
</form>

<?php
// Exibe mensagem de erro, se existir
if (isset($_GET['msg'])) {
    echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>