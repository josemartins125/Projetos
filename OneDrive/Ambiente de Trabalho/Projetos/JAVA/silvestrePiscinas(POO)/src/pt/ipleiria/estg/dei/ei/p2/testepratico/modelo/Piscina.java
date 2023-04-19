package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

import java.util.LinkedList;

public class Piscina <TUtente>{

    private long maxAgua;

    private long litrosDeAgua;

    protected GestorPiscinas gestorPiscinas;

    protected LinkedList<Utente> utente;


    public Piscina(long maxAgua, long litrosDeAgua) {
        this.maxAgua = maxAgua;
        this.litrosDeAgua = litrosDeAgua;
        this.utente= new LinkedList<>();
        gestorPiscinas = new GestorPiscinas();
    }

    public LinkedList<Utente> getUtente() {
        return gestorPiscinas.getTUtentes();
    }

    public void adicionarLitrosDeAgua(long litrosDeAgua){
        litrosDeAgua += this.litrosDeAgua;
        if (litrosDeAgua > maxAgua) {
            return;
        }

        this.litrosDeAgua = litrosDeAgua;
    }

    public void removerLitrosDeAgua(long litrosDeAgua) {
        litrosDeAgua = this.litrosDeAgua - litrosDeAgua;
        if (litrosDeAgua < 0) {
            return;
        }

        this.litrosDeAgua = litrosDeAgua;
    }

    public void esvaziar(){
        litrosDeAgua = 0;
    }

    public void encher(){
        litrosDeAgua = maxAgua;
    }

    public long getMaxAgua() {
        return maxAgua;
    }

    public long getLitrosDeAgua() {
        return litrosDeAgua;
    }

    public void adicionar(Pessoa pessoa) {
        gestorPiscinas.adicionar(pessoa);
    }

    public void remover(Pessoa pessoa) {
        gestorPiscinas.remover(pessoa);
    }
}
