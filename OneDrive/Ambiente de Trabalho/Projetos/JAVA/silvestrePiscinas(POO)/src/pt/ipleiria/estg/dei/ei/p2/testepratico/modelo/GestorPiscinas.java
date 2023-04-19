package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;

import java.util.LinkedList;

public class GestorPiscinas<TUtentes extends Utente> {
    private LinkedList<TUtentes> tUtentes;

    public GestorPiscinas() {
        this.tUtentes = new LinkedList<>();
    }

    public void adicionar(TUtentes tUtentes){
        this.tUtentes.add(tUtentes);
        System.out.print(this.tUtentes);
    }

    public void remover(TUtentes tUtentes){
        this.tUtentes.remove(tUtentes);
    }

    public LinkedList<TUtentes> getTUtentes() {
        return tUtentes;
    }
}
