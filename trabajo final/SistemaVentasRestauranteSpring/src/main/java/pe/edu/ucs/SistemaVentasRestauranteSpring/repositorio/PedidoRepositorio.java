package pe.edu.ucs.SistemaVentasRestauranteSpring.repositorio;

import org.springframework.data.jpa.repository.JpaRepository;
import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Pedido;

public interface PedidoRepositorio extends JpaRepository<Pedido, Long> {
}
