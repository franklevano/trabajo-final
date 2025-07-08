package pe.edu.ucs.SistemaVentasRestauranteSpring.controlador;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;
import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Pedido;
import pe.edu.ucs.SistemaVentasRestauranteSpring.service.PedidoService;
import pe.edu.ucs.SistemaVentasRestauranteSpring.service.PlatoService;

@Controller
@RequestMapping("/pedido")
public class PedidoControlador {

    @Autowired
    private PedidoService pedidoService;

    @Autowired
    private PlatoService platoService;

    @GetMapping("/nuevo")
    public String mostrarFormulario(Model model) {
        model.addAttribute("pedido", new Pedido());
        model.addAttribute("platos", platoService.listarPlatos());
        return "pedido";
    }

    @PostMapping("/guardar")
    public String guardarPedido(@ModelAttribute Pedido pedido) {
        pedidoService.guardarPedido(pedido);
        return "redirect:/pedido/resumen";
    }

    @GetMapping("/resumen")
    public String mostrarResumen(Model model) {
        var lista = pedidoService.listarPedidos();
        model.addAttribute("listaPedidos", lista);

        // Calcular total general
        double totalGeneral = lista.stream()
                .mapToDouble(Pedido::getPrecio)
                .sum();
        model.addAttribute("totalGeneral", totalGeneral);

        return "resumen";
    }
}
