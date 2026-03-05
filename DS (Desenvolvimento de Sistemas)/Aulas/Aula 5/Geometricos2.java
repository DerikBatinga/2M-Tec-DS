package com.mycompany.figurasgeometricas2;

import javax.swing.JOptionPane;

/**
 *
 * @author d3
 */
public class Geometricos2 {
    static final double PI=3.14;
   
    String forma;
     
    static double quadrado(){
     JOptionPane.showMessageDialog(null, "Um quadrado e composto por 4 lados de tamanho igual");
     double resultado;
     
     double lado = Integer.parseInt(JOptionPane.showInputDialog("Digite o valor de um lado:"));
    
     resultado = Math.pow(lado,2);
     return resultado;
    }
    
    static double circulo(){
     JOptionPane.showMessageDialog(null, "Um circulo nao tem lados, ele possui um raio");
     double resultado;
     
     double raio = Integer.parseInt(JOptionPane.showInputDialog("Digite o valor do raio:"));
    
     resultado = (Math.pow(raio,2))*PI;
    return resultado;
    }
        
    static double retangulo(){
     JOptionPane.showMessageDialog(null, "Um retangulo e uma figura geometrica que possui 4 lados, sendo 2 deles (a base) iguais e 2 deles (altura) iguais");
     double resultado;
     
     double base = Integer.parseInt(JOptionPane.showInputDialog("Digite o comprimento da base:"));
     double altura = Integer.parseInt(JOptionPane.showInputDialog("Digite o comprimento da altura:"));
   
     resultado = base*altura;
     return resultado;
    }
}
