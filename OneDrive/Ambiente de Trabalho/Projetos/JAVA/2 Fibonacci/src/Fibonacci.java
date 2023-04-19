public class Fibonacci {

    public static long verify(int n){
        if (n < 0){
            throw new IllegalArgumentException("Exception no numero " + n);
        }
        return executar(n);
    }

    public static long executar(int n){
        if(n < 2){//se o valor for 1
            return n;
        }
        return executar(n-2) + executar(n-1);

    }

    public static void apresentar(int n){
        try {
            System.out.println(verify(n));
        }catch (IllegalArgumentException ex) {
            System.out.println("Ex: " + ex.toString());
        }

    }

}
