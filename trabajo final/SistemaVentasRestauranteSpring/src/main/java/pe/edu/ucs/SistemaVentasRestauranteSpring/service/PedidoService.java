package pe.edu.ucs.SistemaVentasRestauranteSpring.service;

import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Pedido;
import java.util.List;

public interface PedidoService {
    void guardarPedido(Pedido pedido);
    List<Pedido> listarPedidos();
}
