package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

public class GestorTemperatura   {

    private long temperatura;

    public GestorTemperatura(long temperatura) {
        this.temperatura = temperatura;
    }

    public long getTemperatura() {
        return temperatura;
    }

    //estabelecer temperatura
    public void setTemperatura(long temperatura) {
        this.temperatura = temperatura;
    }
}
