package pe.edu.ucs.SistemaVentasRestauranteSpring.modelo;

import jakarta.persistence.*;

import java.time.LocalDateTime;

@Entity
public class Pedido {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String cliente;

    @ManyToOne
    @JoinColumn(name = "plato_id")
    private Plato plato;

    private int cantidad;
    private double precio;

    // Getters y setters
    public Long getId() { return id; }
    public void setId(Long id) { this.id = id; }

    public String getCliente() { return cliente; }
    public void setCliente(String cliente) { this.cliente = cliente; }

    public Plato getPlato() { return plato; }
    public void setPlato(Plato plato) { this.plato = plato; }

    public int getCantidad() { return cantidad; }
    public void setCantidad(int cantidad) { this.cantidad = cantidad; }

    public double getPrecio() { return precio; }
    public void setPrecio(double precio) { this.precio = precio; }
}
