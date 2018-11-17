package example;

import java.util.Scanner;

public class piramidaterbalik {
    public static void main(String[] args) {

        Scanner input = new Scanner (System.in);
        int n;
        System.out.print("Masukkan Tinggi Bintang : ");
        n = input.nextInt();


        int i,j;

        for(i=8; i>=1; i--)
        {

            for(j=1; j<=8-i; j++)

                System.out.print(" ");

            for(j=1; j<2*i; j++)

                System.out.print("*");

            System.out.println("");

        }
        System.out.println("\n\n");

    }

}