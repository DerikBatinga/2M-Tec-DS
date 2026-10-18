package com.mycompany.figurasgeometricas2;
import javax.swing.JOptionPane;

/**
 *
 * @author d3
 */
public class FigurasGeometricas2 {

    public static void main(String[] args) {
        Geometricos2 n = new Geometricos2();
        n.forma = JOptionPane.showInputDialog("Digite a forma que deseja:\nQuadrado\nCirculo\nRetangulo");
            switch (n.forma) {
                case "Quadrado":
                  JOptionPane.showMessageDialog(null,n.quadrado());
                 break;
                case "Circulo":
                  JOptionPane.showMessageDialog(null,n.circulo());
                 break;
                case "Retangulo":
                  JOptionPane.showMessageDialog(null,n.retangulo());
                 break;
                default:
                  JOptionPane.showMessageDialog(null,"Numero inserido invalido!");
                 break;
            }
    }
}
