public class ShuffletheName {

    public static void main(String[] args) {
        System.out.println(nameShuffle("Joao-Almeida"));
        System.out.println(nameShuffle("Joao Camacho"));
        System.out.println(nameShuffle("José Pedro Ribeiro Martins"));
        System.out.println(nameShuffle("Ana Santos"));



    }

    public static String nameShuffle(String s){

        String[] parts = s.split(" ");
        String part1 = parts[0];
        String part2 = parts[1];
        return part2 + " " + part1;

    }


}
