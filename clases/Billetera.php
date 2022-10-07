<?php
class Usuario
{

    // COPIAMOS Y PEGAMOS Y MODIFICAMOS TODO LO  DE LA CLASE USUARIO.PHP



    protected $id;
    protected $fecha_operacion;
    protected $monto;
    protected $metodo_pago;
    protected $usuario_id;
    protected $establecimiento_id;

    public function __construct($fecha_operacion, $monto, $metodo_pago, $usuario_id,$establecimiento_id, $id = null)
    {
        $this->id = $id;
        $this->monto = $monto;
        $this->metodo_pago = $metodo_pago;
        $this->fecha_operacion = $fecha_operacion;
        $this->usuario_id = $usuario_id;
        $this->establecimiento_id =$establecimiento_id;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getFechaOperacion() {return $this->fecha_operacion;}
    public function getMonto() {return $this->monto;}
    public function getMetodoPago() {return $this->metodo_pago;}
    public function getNombreApellido() {return "$this->monto $this->metodo_pago";}
    public function getUsuario_id() {return $this->usuario_id;}
    public function getEstablecimiento_id() {return $this->establecimiento_id;}

    /**
     * Actualiza los datos del fecha_operacion. (Esto es un comentario "estandarizado",
     * pero no tiene efecto en el código).
     *
     * @param string $nombre_fecha_operacion El nuevo nombre de fecha_operacion.
     * @param string $nombre         El nombre de pila del fecha_operacion.
     * @param string $apellido       El apellido del fecha_operacion
     * @param string $saldo          El saldo del fecha_operacion
     *
     * @return null
     */
    public function setDatos($nombre_fecha_operacion, $monto, $apellido, $usuario_id, $establecimiento_id)
    {
        $this->fecha_operacion = $nombre_fecha_operacion;
        $this->monto = $monto;
        $this->apellido = $apellido;
        $this->usuario_id = $usuario_id;
        $this->establecimiento_id = $establecimiento_id;
    }
}





