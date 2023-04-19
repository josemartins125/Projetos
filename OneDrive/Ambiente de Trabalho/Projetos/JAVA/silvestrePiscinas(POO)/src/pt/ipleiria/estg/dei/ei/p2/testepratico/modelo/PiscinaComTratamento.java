package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

public class PiscinaComTratamento extends Piscina{
    private String tratamento;
    public PiscinaComTratamento(long maxAgua, long litrosDeAgua, String tratamento) {
        super(maxAgua, litrosDeAgua);
        this.tratamento = tratamento;
    }

    public String getTratamento() {
        return tratamento;
    }

    public void setTratamento(String tratamento) {
        this.tratamento = tratamento;
    }
}
