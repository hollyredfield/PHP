<form action="../controlador/controlador_eliminar.php" method="post">
    <input type="text" name="accion" value="eliminar" hidden>
    <label for="nombre">Nombre a eliminar:</label>
    <input type="text" name="nombre" required><br>
    <label for="apellidos">Apellidos a eliminar:</label>
    <input type="text" name="apellidos" required><br>
    <input type="submit" value="Eliminar">
</form>
