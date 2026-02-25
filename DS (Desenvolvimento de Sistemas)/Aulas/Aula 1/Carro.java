package com.mycompany.carro;
import java.util.Scanner;

/**
 *
 * @author Admin
 */
public class Carro {
   
    public static double carro (int cavalos){
        double velocidade = cavalos * 3.6;
        
        return velocidade;
    }
    
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        System.out.println("Digite a quantidade de cavalos do carro:");
        int cavalos = scanner.nextInt();
        
        if (cavalos == 0){
            System.out.println("Cavalos inderteminados!\n");
            return;
        }
        
        System.out.println("Velocidade" + carro(cavalos));
        
      
    }
}
