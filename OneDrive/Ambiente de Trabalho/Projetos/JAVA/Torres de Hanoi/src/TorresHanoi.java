public class TorresHanoi {

    public static void verify(int numeroDiscos, char origem, char auxiliar, char destino){
        if (numeroDiscos < 1) {
            throw new IllegalArgumentException("Exception no numero " + numeroDiscos + " tem de ser > 0");
        }
        executar(numeroDiscos, origem, auxiliar, destino);
    }


    public static void executar(int numeroDiscos, char origem, char auxiliar, char destino){

        if(numeroDiscos == 1){
            System.out.println("Movido disco de torre " + origem + " para " + destino);
            return;
        }
        executar(numeroDiscos-1,origem,destino,auxiliar);
        //executar(1,origem,auxiliar,destino);
        System.out.println("Movido disco de torre " + origem + " para " + destino);
        executar(numeroDiscos-1,auxiliar,origem,destino);
    }

    public static void apresentar(int numeroDiscos) {
        System.out.println("Torres de hanoi nivel " + numeroDiscos);
        System.out.println("==============================");
        try {
            verify(numeroDiscos, 'A', 'B', 'C');
        }catch (IllegalArgumentException ex) {
            System.out.println(ex.getMessage());
        }

    }
}
