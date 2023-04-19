public class FindPerimeter {

    public static void main(String[] args) {

        System.out.println(findPerimeter(6, 8));
        System.out.println(findPerimeter(5, 2));
        System.out.println(findPerimeter(20, 10));
        //falta a condicao
    }


    public static long findPerimeter(int side1, int side2){


        return 2 * (side1 + side2);
    }



}
