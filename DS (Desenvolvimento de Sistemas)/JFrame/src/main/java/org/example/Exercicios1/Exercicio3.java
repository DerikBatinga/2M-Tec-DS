package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;

public class Exercicio3 extends JFrame {
    JLabel catetoA, catetoB, resultado;
    JTextField tCatetoA, tCatetoB;
    JButton calcular;

    public Exercicio3() {
        super("Teorema de Pitágoras");
        setLayout(null);
        Container tela = getContentPane();

        catetoA = new JLabel("Cateto a:");
        catetoB = new JLabel("Cateto b:");
        resultado = new JLabel("Hipotenusa:");

        tCatetoA = new JTextField();
        tCatetoB = new JTextField();

        calcular = new JButton("Calcular");

        catetoA.setBounds(20, 20, 80, 30);
        catetoB.setBounds(20, 60, 80, 30);

        tCatetoA.setBounds(100, 20, 80, 30);
        tCatetoB.setBounds(100, 60, 80, 30);

        calcular.setBounds(20, 100, 160, 30);
        resultado.setBounds(20, 140, 250, 30);

        calcular.addActionListener(e -> {
            try {
                double a = Double.parseDouble(tCatetoA.getText()),
                       b = Double.parseDouble(tCatetoB.getText()),
                       c = Math.sqrt((a * a) + (b * b));

                resultado.setText("Hipotenusa : " + c);
            } catch (NumberFormatException ex) {
                resultado.setText("Insira valores válidos");
            }
        });

        tela.add(catetoA);
        tela.add(catetoB);
        tela.add(tCatetoA);
        tela.add(tCatetoB);
        tela.add(calcular);
        tela.add(resultado);

        setSize(250, 250);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        Exercicio3 ex = new Exercicio3();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}