package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;

public class Exercicio2 extends JFrame {
    JLabel la, lb, lc, resX1, resX2;
    JTextField ta, tb, tc;
    JButton calcular;

    public Exercicio2() {
        super("Fórmula de Bhaskara");
        setLayout(null);
        Container tela = getContentPane();

        la = new JLabel("Valor de a:");
        lb = new JLabel("Valor de b:");
        lc = new JLabel("Valor de c:");

        ta = new JTextField();
        tb = new JTextField();
        tc = new JTextField();

        calcular = new JButton("Calcular");

        resX1 = new JLabel("x¹: ");
        resX2 = new JLabel("x²: ");

        la.setBounds(20, 20, 100, 30);
        lb.setBounds(20, 60, 100, 30);
        lc.setBounds(20, 100, 100, 30);

        ta.setBounds(100, 20, 80, 30);
        tb.setBounds(100, 60, 80, 30);
        tc.setBounds(100, 100, 80, 30);

        calcular.setBounds(20, 140, 160, 30);

        resX1.setBounds(20, 180, 200, 30);
        resX2.setBounds(20, 210, 200, 30);

        calcular.addActionListener(e -> {
            try {
                double
                        a = Double.parseDouble(ta.getText()),
                        b = Double.parseDouble(tb.getText()),
                        c = Double.parseDouble(tc.getText());

                double delta = (b * b) - (4 * a * c);

                if (delta >= 0) {
                    double x1 = (-b + Math.sqrt(delta)) / (2 * a);
                    double x2 = (-b - Math.sqrt(delta)) / (2 * a);

                    resX1.setText("x¹: " + x1);
                    resX2.setText("x²: " + x2);
                }
                else {
                    resX1.setText("Delta negativo!");
                }
            } catch (NumberFormatException ex) {
                resX1.setText("Insira valores válidos");
                resX2.setText("");
            }
        });

        tela.add(la);
        tela.add(lb);
        tela.add(lc);
        tela.add(ta);
        tela.add(tb);
        tela.add(tc);
        tela.add(calcular);
        tela.add(resX1);
        tela.add(resX2);

        setSize(250, 300);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        Exercicio2 ex = new Exercicio2();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}