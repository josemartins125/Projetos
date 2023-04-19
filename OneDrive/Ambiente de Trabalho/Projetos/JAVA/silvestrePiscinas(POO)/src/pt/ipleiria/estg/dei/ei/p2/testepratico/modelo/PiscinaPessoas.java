package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

public class PiscinaPessoas extends Piscina implements PiscinaComTemperatura{

    private GestorTemperatura gestorTemperatura;

    public PiscinaPessoas(long maxAgua, long litrosDeAgua, long temperatura) {
        super(maxAgua, litrosDeAgua);

        gestorTemperatura = new GestorTemperatura(temperatura);
    }

    @Override
    public void setTemperatura(long temperatura) {
        gestorTemperatura.setTemperatura(temperatura);
    }
}
