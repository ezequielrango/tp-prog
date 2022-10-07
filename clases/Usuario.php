<?php
class Usuario
{
    protected $id;
    protected $usuario;
    protected $nombre;
    protected $apellido;
    protected $saldo;

    public function __construct($usuario, $nombre, $apellido, $saldo, $id = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->saldo = $saldo;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getUsuario() {return $this->usuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
    public function getSaldo() {return $this->saldo;}

    /**
     * Actualiza los datos del usuario. (Esto es un comentario "estandarizado",
     * pero no tiene efecto en el código).
     *
     * @param string $nombre_usuario El nuevo nombre de usuario.
     * @param string $nombre         El nombre de pila del usuario.
     * @param string $apellido       El apellido del usuario
     * @param string $saldo          El saldo del usuario
     *
     * @return null
     */
    public function setDatos($nombre_usuario, $nombre, $apellido, $saldo)
    {
        $this->usuario = $nombre_usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->saldo = $saldo;
    }
}





