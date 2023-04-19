public class Torre {

    private char nome;
    private int[] baseEDiscos;
    private int numeroDiscos;

    public Torre(char nome, int tamanhoMaximo) {
        this.nome = nome;
        baseEDiscos = new int[tamanhoMaximo+1];
        baseEDiscos[0] = tamanhoMaximo * 3;
        numeroDiscos = 0;
    }

    public void preencherComDiscos(){
        for (int i = 1; i < baseEDiscos.length; i++) {
            baseEDiscos[i] = baseEDiscos.length - i;
        }
        numeroDiscos = baseEDiscos.length - 1;
    }

    public void moverDisco(Torre destino){
        /*int disco = baseEDiscos[numeroDiscos];
        this.baseEDiscos[numeroDiscos] = 0;
        destino.baseEDiscos[destino.numeroDiscos + 1] = disco;
        numeroDiscos--;
        destino.numeroDiscos++;*/

        if (numeroDiscos == 0) {
            throw new NoSuchFieldException("Torre de origem vazia");
        }
        if (destino.numeroDiscos == destino.baseEDiscos.length -1 ) {

        }

        destino.baseEDiscos[++destino.numeroDiscos] = baseEDiscos[numeroDiscos];
        baseEDiscos[numeroDiscos--] = 0;

    }

    public String toString(){
        return String.valueOf(nome);
    }

}
