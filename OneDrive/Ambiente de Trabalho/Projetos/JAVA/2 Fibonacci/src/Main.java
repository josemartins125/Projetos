import javax.xml.stream.FactoryConfigurationError;

public class Main {

  public static void main(String[] args) {
      Fibonacci.apresentar(0);
      Fibonacci.apresentar(1);
      Fibonacci.apresentar(2);
      Fibonacci.apresentar(3);
      Fibonacci.apresentar(4);
      Fibonacci.apresentar(5);
      System.out.println("_________________");

      Fibonacci.apresentar(5);
      Fibonacci.apresentar(0);
      Fibonacci.apresentar(-10);
      Fibonacci.apresentar(40);
      Fibonacci.apresentar(45);

      System.out.println("_________________");

      for (int i = 5; i < 20 ; i++) {
          Fibonacci.apresentar(i);
      }
 }

}

