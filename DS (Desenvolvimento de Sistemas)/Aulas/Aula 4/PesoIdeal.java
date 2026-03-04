package com.mycompany.pesoideal;
import javax.swing.JOptionPane;
/**
 *
 * @author d3
 */
public class PesoIdeal {
    
static double calcularPesoIdeal(String s,double altura){
    switch (s){
        case "m":
         double calculoM = (72.7*altura) - 58;
         return calculoM;
         
        case "f":
          double calculoF = (62.1*altura) - 44.7;
          return calculoF;
          
        default:
           JOptionPane.showMessageDialog(null,"Sexo nao encontrado!\nPor favor, digite m (masculino) ou f (feminino)");
         return 1;
    }
}
    public static void main(String[] args) {
       String sexo = JOptionPane.showInputDialog("Digite o seu sexo (m/f)");
       double h = Float.parseFloat(JOptionPane.showInputDialog("Digite a sua altura:"));
   
       double resultado = calcularPesoIdeal(sexo,h);
       JOptionPane.showMessageDialog(null,"O seu peso ideal em KG e:"+resultado);
       
    }
}
