package pe.edu.ucs.SistemaVentasRestauranteSpring.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import pe.edu.ucs.SistemaVentasRestauranteSpring.modelo.Plato;
import pe.edu.ucs.SistemaVentasRestauranteSpring.repositorio.PlatoRepository;

import java.util.List;
import java.util.Optional;

@Service
public class PlatoServiceImpl implements PlatoService {

    @Autowired
    private PlatoRepository platoRepositorio;

    @Override
    public List<Plato> listarPlatos() {
        return platoRepositorio.findAll();
    }

    @Override
    public void guardarPlato(Plato plato) {
        platoRepositorio.save(plato);
    }

    @Override
    public Optional<Plato> buscarPorId(Long id) {
        return platoRepositorio.findById(id);
    }

    @Override
    public void eliminarPlato(Long id) {
        platoRepositorio.deleteById(id);
    }
}
