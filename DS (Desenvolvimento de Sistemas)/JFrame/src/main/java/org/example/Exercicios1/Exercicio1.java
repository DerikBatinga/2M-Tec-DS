package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class Exercicio1 extends JFrame {
    JLabel ln1, ln2, ln3, ln4, resultado;
    JTextField tn1, tn2, tn3, tn4;
    JButton calcular;

    public Exercicio1() {
        super("Cálculo de Média");
        setLayout(null);
        Container tela = getContentPane();

        ln1 = new JLabel("Nota 1:");
        ln2 = new JLabel("Nota 2:");
        ln3 = new JLabel("Nota 3:");
        ln4 = new JLabel("Nota 4:");

        tn1 = new JTextField();
        tn2 = new JTextField();
        tn3 = new JTextField();
        tn4 = new JTextField();

        calcular = new JButton("Calcular Média");

        resultado = new JLabel("Média: ");

        ln1.setBounds(20, 20, 100, 30);
        ln2.setBounds(20, 60, 100, 30);
        ln3.setBounds(20, 100, 100, 30);
        ln4.setBounds(20, 140, 100, 30);

        tn1.setBounds(100, 20, 50, 30);
        tn2.setBounds(100, 60, 50, 30);
        tn3.setBounds(100, 100, 50, 30);
        tn4.setBounds(100, 140, 50, 30);

        calcular.setBounds(20, 180, 150, 30);

        resultado.setBounds(20, 220, 200, 30);

        calcular.addActionListener(e -> {
            try {

            double media = (
                            Double.parseDouble(tn1.getText()) +
                            Double.parseDouble(tn2.getText()) +
                            Double.parseDouble(tn3.getText()) +
                            Double.parseDouble(tn4.getText())
                            ) / 4;
            resultado.setText("Média: " + media);
            } catch (NumberFormatException ex) {
                resultado.setText("Insira um valor válido");
            }
        });

        tela.add(ln1);
        tela.add(ln2);
        tela.add(ln3);
        tela.add(ln4);
        tela.add(tn1);
        tela.add(tn2);
        tela.add(tn3);
        tela.add(tn4);
        tela.add(calcular);
        tela.add(resultado);

        setSize(300, 350);
        setVisible(true);
        setLocationRelativeTo(null);
    }
    public static void main(String[] args) {
        Exercicio1 ex = new Exercicio1();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); }
}