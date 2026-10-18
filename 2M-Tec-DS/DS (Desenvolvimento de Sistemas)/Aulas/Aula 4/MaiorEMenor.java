/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.maioremenor;

import javax.swing.JOptionPane;

/**
 *
 * @author d3
 */
public class MaiorEMenor {
    
   static float lerValor(){
      float dado = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor:"));
  
      return dado;
   }
   static void verMaior(float x1, float x2){
       if (x1>x2) {
       JOptionPane.showMessageDialog(null,"O primeiro e maior!\n"+x1);
    }
    else if(x2>x1){
         JOptionPane.showMessageDialog(null,"O segundo e maior!\n"+x2);
    }
    else{
    JOptionPane.showMessageDialog(null,"Ambos sao iguais!");
    }
   }
   
static void diferenca(float a1, float a2){
float calculo = Math.abs(a1-a2);
  JOptionPane.showMessageDialog(null,"A diferença entre eles e:\n"+calculo);
}
    public static void main(String[] args) {
        float n1 = lerValor();
        float n2 = lerValor();
        verMaior(n1,n2);
             
       diferenca(n1,n2);
       
       
    }
}
