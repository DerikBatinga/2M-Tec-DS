package com.mycompany.exerciciodelta;

import java.util.Scanner;

/**
 *
 * @author d3
 */
public class ExercicioDelta {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite o valor de A:");
        double a = scanner.nextDouble();

        System.out.println("Digite o valor de B:");
        double b = scanner.nextDouble();

        System.out.println("Digite o valor de C:");
        double c = scanner.nextDouble();

        double delta = Math.pow(b, 2) - 4 * a * c;

        double baskaraPositivo = (-b + Math.sqrt(delta)) / (2 * a);
        double baskaraNegativo = (-b - Math.sqrt(delta)) / (2 * a);

        System.out.println("Resultado positivo:" + baskaraPositivo);
        System.out.println("Resultado negativo:" + baskaraNegativo);
    }
}
