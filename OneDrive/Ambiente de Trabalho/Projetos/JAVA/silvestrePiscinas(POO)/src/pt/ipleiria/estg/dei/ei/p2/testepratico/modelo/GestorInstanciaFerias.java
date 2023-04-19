package pt.ipleiria.estg.dei.ei.p2.testepratico.modelo;


import java.util.LinkedList;

public enum GestorInstanciaFerias {
    INSTANCIA;

    private LinkedList<Piscina> piscinas;
    private LinkedList<Cao> caes;
    private LinkedList<Gato> gatos;
    private LinkedList<Pessoa> pessoas;

    GestorInstanciaFerias() {
        caes = new LinkedList<>();
        gatos = new LinkedList<>();
        pessoas = new LinkedList<>();

        caes.add(new Cao("Boby"));
        caes.add(new Cao("Pintarola"));
        caes.add(new Cao("Salsicha"));
        gatos.add(new Gato("Tareco"));
        gatos.add(new Gato("Garfield"));
        gatos.add(new Gato("Riscas"));
        gatos.add(new Gato("Tom"));
        pessoas.add(new Pessoa("Carlos"));
        pessoas.add(new Pessoa("Maria"));
        pessoas.add(new Pessoa("Joaquim"));
        pessoas.add(new Pessoa("Rui"));
        pessoas.add(new Pessoa("Edgar"));
        pessoas.add(new Pessoa("Ana"));
        pessoas.add(new Pessoa("Bela"));
        pessoas.add(new Pessoa("Marco"));
        pessoas.add(new Pessoa("Fernando"));


        piscinas = new LinkedList<>();


    }

    public Piscina getPiscina(int indice) {
        return piscinas.get(indice);
    }

    public LinkedList<Piscina> getPiscinas() {
        return piscinas;
    }
}
