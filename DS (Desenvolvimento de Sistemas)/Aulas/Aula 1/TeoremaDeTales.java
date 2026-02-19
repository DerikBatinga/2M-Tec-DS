package com.mycompany.teoremadetales;
import java.util.Scanner;

/**
 *
 * @author d3
 */
public class TeoremaDeTales {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
       System.out.println("Digite o valor do primeiro cateto ao quadrado:");
       float cateto1 = scanner.nextFloat();
       
       System.out.println("Digite o valor do segundo cateto ao quadrado:");
       float cateto2 = scanner.nextFloat();
       
       float hipotenusa = cateto1 + cateto2;
       System.out.println("Resultado:"+hipotenusa);
    }
}
