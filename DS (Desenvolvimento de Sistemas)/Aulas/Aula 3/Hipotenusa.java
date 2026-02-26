package com.mycompany.hipotenusa;

import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */
public class Hipotenusa {

    public static void main(String[] args) {
       float base= Integer.parseInt(JOptionPane.showInputDialog(null,"Digite o valor da base:"));
       float altura = Integer.parseInt(JOptionPane.showInputDialog(null,"Digite a altura :"));
      
       double resultado = hipotenusaCalculo(base, altura);
       JOptionPane.showMessageDialog(null,"Resultado:"+resultado);
    }
    
    static double hipotenusaCalculo(float b, float a){
        double bQuadrado = Math.pow(b,2);
        double aQuadrado = Math.pow(a,2);
        double hipotenusa = bQuadrado + aQuadrado;
        
    return hipotenusa;
    }
}
