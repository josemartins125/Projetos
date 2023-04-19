import java.util.ArrayList;

public class FizBuzz {

    public static void main(String[] args) {

        System.out.println(fizzBuzz(1));
        System.out.println(fizzBuzz(2));
        System.out.println(fizzBuzz(3));
        System.out.println(fizzBuzz(4));
        System.out.println(fizzBuzz(5));
        System.out.println(fizzBuzz(6));
        System.out.println(fizzBuzz(7));
        System.out.println(fizzBuzz(8));
        System.out.println(fizzBuzz(9));
        System.out.println(fizzBuzz(10));

    }


    public static String fizzBuzz(int n) {
        String res = "";
        if (n % 3 == 0) {
            res += "Fizz";
        }
        if (n % 5 == 0) {
            res += "Buzz";
        }
        if (res == "") {
            res = Integer.toString(n);
        }
        return res;
    }

}