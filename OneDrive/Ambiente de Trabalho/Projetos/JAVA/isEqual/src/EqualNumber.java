public class EqualNumber {

    public static void main(String[] args) {
        System.out.println(isEqual(2,3));
        System.out.println(isEqual(3,3));
        System.out.println(isEqual(2,1));

    }


    public static boolean isEqual(int x, int y){

        if(x == y){
            return true;
        }
        return false;

    }
}
