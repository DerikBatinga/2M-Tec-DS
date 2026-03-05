/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.atividade3;
import java.util.Scanner;
/**
 *
 * @author d3
 */
public class Atividade3 {
static void menu(){
   
          System.out.println("===Escolha:===\n1.Acelerar\n2.Freiar\n3.Ligar\n4.Desligar\n5.Trocar marcha\n6.Reduzir marcha\n7.Sair");
}
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
         Carro c1 = new Carro();
        c1.modelo = "Mercedes AMG";
c1.motor = "3.4";
c1.cor = "Prata";

menu();
int escolha = scanner.nextInt();

switch (escolha){
case (1):
c1.acelerar();
break;
case (2):
c1.freiar();
break;
case (3):
c1.ligar();
break;
case (4):
c1.desligar();
break;
case (5):
c1.trocarMarcha();
break;
case (6):
c1.reduzirmarcha();
break;
case (7):
    System.out.println("Saindo da simulação");
    break;
    
default:
     System.out.println("Escolha invalida");
    break;
}

    }
    }

