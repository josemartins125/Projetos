package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

public abstract class Utente {
    protected String nome;

    public Utente(String nome) {
        this.nome = nome;
    }

    public String getNome() {
        return nome;
    }
}
