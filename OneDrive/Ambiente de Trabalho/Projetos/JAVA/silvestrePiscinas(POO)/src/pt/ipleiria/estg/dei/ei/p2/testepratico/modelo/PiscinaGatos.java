package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

public class PiscinaGatos extends PiscinaComTratamento implements PiscinaComTemperatura{

    private GestorTemperatura gestorTemperatura;

    public PiscinaGatos(long maxAgua, long litrosDeAgua, String tratamento, long temperatura) {
        super(maxAgua, litrosDeAgua, tratamento);

        gestorTemperatura = new GestorTemperatura(temperatura);
    }

    @Override
    public void setTemperatura(long temperatura) {
        gestorTemperatura.setTemperatura(temperatura);
    }
    public void adicionar(Gato gato){
        gestorPiscinas.adicionar(gato);
    }

    public void remover(Gato gato){
        gestorPiscinas.remover(gato);
    }

}
