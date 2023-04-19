public class TorresDeHanoi {

    public static void main(String[] args) {
        int discos = 3;
        hanoi(discos, 'A', 'B', 'C');
    }

    private static void hanoi(int discos, char origem, char auxiliar, char destino) {

        if (discos > 0) {
            hanoi(discos-1, origem, destino, auxiliar); //origem para o auxiliar(n-1 discos)
            System.out.printf("Mover do %s para o %s\n", origem, destino);// movimento da origem para o destino
            hanoi(discos-1,auxiliar, origem, destino);  //auxiliar para o destino (n-1 discos)
        }
    }

}
