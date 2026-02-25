package com.mycompany.dobrodeumnumero;

import javax.swing.JOptionPane;
/**
 *
 * @author d3
 */
public class DobroDeUmNumero {

    public static void main(String[] args) {
        //valor numero tem que ser inicializado para passar o valor
        int numero = 0;
        //chamando o metodo e passando o valor nulo
        digitarValor(numero);      
    }
    static void digitarValor(int n){
        //pedidno o valor para dobrar
       n = Integer.parseInt(JOptionPane.showInputDialog(null,"Digite o valor a ser dobrado:"));
         //chamando o metodo e passando o valor adquirido
       dobrar(n);
    }
    
    static void dobrar(int n){
      //dobrando o valor
    int temp = n * 2;
      //mostrando o valor dublado
    JOptionPane.showMessageDialog(null,"Dobro:" + temp);
    }
}
