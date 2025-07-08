package pe.edu.ucs.SistemaVentasRestauranteSpring.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Pedido;
import pe.edu.ucs.SistemaVentasRestauranteSpring.repositorio.PedidoRepositorio;

import java.util.List;

@Service
public class PedidoServiceImpl implements PedidoService {

    @Autowired
    private PedidoRepositorio pedidoRepositorio;

    @Override
    public void guardarPedido(Pedido pedido) {
        pedidoRepositorio.save(pedido);
    }

    @Override
    public List<Pedido> listarPedidos() {
        return pedidoRepositorio.findAll();
    }
}
