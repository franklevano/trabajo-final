package pe.edu.ucs.SistemaVentasRestauranteSpring.repositorio;

import org.springframework.data.jpa.repository.JpaRepository;
import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Plato;

public interface PlatoRepository extends JpaRepository<Plato, Long> {
}
