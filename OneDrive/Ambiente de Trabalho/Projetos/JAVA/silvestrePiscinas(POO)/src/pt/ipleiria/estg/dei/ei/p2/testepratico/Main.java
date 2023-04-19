package pt.ipleiria.estg.dei.ei.p2.testepratico;

import pt.ipleiria.estg.dei.ei.p2.testepratico.modelo.*;

public class Main {
    public Main() {
        for (Piscina piscina : GestorInstanciaFerias.INSTANCIA.getPiscinas()) {
            System.out.println(piscina);
        }

        PiscinaGatos piscinaGatos1 = new PiscinaGatos(10000,27, "Alcool", 25);
        Pessoa pessoa1 = new Pessoa("Pedro Jorge");
        Pessoa pessoa2 = new Pessoa("Fernando Mendes");

        Gato gato1 = new Gato("Tareco");
        Cao cao1 = new Cao("Xata");
        System.out.println(piscinaGatos1.getLitrosDeAgua());
        piscinaGatos1.adicionarLitrosDeAgua(500);
        System.out.println(piscinaGatos1.getLitrosDeAgua());


        piscinaGatos1.adicionar(gato1);
        System.out.println(piscinaGatos1.getUtente());
        piscinaGatos1.adicionar(pessoa2);
        System.out.println(piscinaGatos1.getUtente());
        piscinaGatos1.adicionar(pessoa1);
        System.out.println(piscinaGatos1.getUtente());

    }

    public static void main(String[] args) {
        new Main();
    }
}
