package pe.edu.ucs.SistemaVentasRestauranteSpring.modelo;

import jakarta.persistence.*;

@Entity
public class Plato {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String nombre;
    private double precio;

    // Getters y Setters
    public Long getId() { return id; }

    public void setId(Long id) { this.id = id; }

    public String getNombre() { return nombre; }

    public void setNombre(String nombre) { this.nombre = nombre; }

    public double getPrecio() { return precio; }

    public void setPrecio(double precio) { this.precio = precio; }
}
