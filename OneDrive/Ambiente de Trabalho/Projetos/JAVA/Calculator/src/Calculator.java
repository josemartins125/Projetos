public class Calculator {

    public static void main(String[] args) {

        System.out.println(calculadora(1,'+',2));
        System.out.println(calculadora(3,'-',3));
        System.out.println(calculadora(1,'*',2));
        System.out.println(calculadora(2,'*',2));
        System.out.println(calculadora(1,'/',2));

    }

    public static float calculadora(float numero1, char operacao, float numero2){

        switch (operacao){

            case '+': return numero1 + numero2;
            case '-': return numero1 - numero2;
            case '*': return numero1 * numero2;
            case '/': return numero1 / numero2;


        }

        return 0;

    }

}
