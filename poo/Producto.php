<?php


class Producto
{

    private string $nombre;
    protected float $precio;
    protected string $categoria;
    protected bool $estaPublicado;
    protected int $puntuacion;

    public function __construct(string $nombre, float $precio, $categoria, $estaPublicado, $puntuacion)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->estaPublicado = $estaPublicado;
        $this->puntuacion = $puntuacion;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function isEstaPublicado(): string
    {
        return $this->estaPublicado ? "Está publicado" : "No publicado";
    }

    public function setEstaPublicado(bool $estaPublicado): void
    {
        $this->estaPublicado = $estaPublicado;
    }

    public function getPuntuacion(): int
    {
        return $this->puntuacion;
    }

    public function setPuntuacion(int $puntuacion): void
    {
        $this->puntuacion = $puntuacion;
    }

    public function printHTML(): void
    {
        ?>

        <div>
            <p><?= $this->nombre ?></p>
            <p><?= $this->precio ?></p>
            <p><?= $this->categoria ?></p>
            <p><?= $this->isEstaPublicado() ?></p>
            <p><?= $this->puntuacion ?></p>
        </div>

        <?php
    }
}

