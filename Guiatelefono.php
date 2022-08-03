<?php
echo '<html>
    <head>
        <tittle>GuiaTelefono</tittle>
    <head/head>
    <body>
        <form method="POST">
            <label>nombre: </label> <input type="text" name="nombre">
            <br>
            <label>Telefono: </label><input type="text" name="Telefono">
            <br>
            <button type="submit">Agregar</button>
        </form>
    </body>
</html>';

function add(){
    $nom = $_POST['nombre'];
    $tel = $_POST['Telefono'];

    $persona = array(
        "name" => $nom,
        "phone" => $tel
    );
    echo $contactos;
    $contactos = array($persona);
    echo $contactos;
    echo'<u1>
    <li type"circle">' .$contactos[0]["name"]. '</li>
    <li type"circle">' .$contactos[0]["phone"]. '</li>
</u1>';
}

echo add();