package com.mycompany.figurasgeograficas;
import javax.swing.JOptionPane;
/**
 *
 * @author d3
 */
public class FigurasGeograficas {
    public static void main(String[] args) {
        Geometricos f = new Geometricos();
        f.forma = JOptionPane.showInputDialog("Digite a forma que deseja:\nQuadrado\nCirculo\nRetangulo");
            switch (f.forma) {
                case "Quadrado":
                  JOptionPane.showMessageDialog(null,f.quadrado);
                 break;
                case "Circulo":
                  JOptionPane.showMessageDialog(null,f.circulo);
                 break;
                case "Retangulo":
                  JOptionPane.showMessageDialog(null,f.retangulo);
                 break;
                default:
                  JOptionPane.showMessageDialog(null,"Numero inserido invalido!");
                 break;
            }
    }
  }