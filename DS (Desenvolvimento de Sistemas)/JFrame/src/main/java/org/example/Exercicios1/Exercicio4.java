package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;

public class Exercicio4 extends JFrame {
    JLabel l1, l2, l3, resultado;
    JTextField t1, t2, t3;
    JButton verificar;

    public Exercicio4() {
        super("Verificador de Triângulo");
        setLayout(null);
        Container tela = getContentPane();

        l1 = new JLabel("Lado 1:");
        l2 = new JLabel("Lado 2:");
        l3 = new JLabel("Lado 3:");

        t1 = new JTextField();
        t2 = new JTextField();
        t3 = new JTextField();

        verificar = new JButton("Verificar Tipo");
        resultado = new JLabel("Tipo: ");

        l1.setBounds(20, 20, 60, 30);
        l2.setBounds(20, 60, 60, 30);
        l3.setBounds(20, 100, 60, 30);

        t1.setBounds(80, 20, 80, 30);
        t2.setBounds(80, 60, 80, 30);
        t3.setBounds(80, 100, 80, 30);

        verificar.setBounds(20, 140, 140, 30);
        resultado.setBounds(20, 180, 200, 30);

        verificar.addActionListener(e -> {
            try {
                double lado1 = Double.parseDouble(t1.getText()),
                       lado2 = Double.parseDouble(t2.getText()),
                       lado3 = Double.parseDouble(t3.getText());

                if (lado1 == lado2 && lado2 == lado3) {
                    resultado.setText("Triângulo Equilátero");
                }
                else if (lado1 != lado2 && lado1 != lado3 && lado2 != lado3) {
                    resultado.setText("Triângulo Escaleno");
                }
                else {
                    resultado.setText("Triângulo Isósceles");
                }
            } catch (NumberFormatException ex) {
                resultado.setText("Insira valores válidos");
            }
        });

        tela.add(l1);
        tela.add(l2);
        tela.add(l3);
        tela.add(t1);
        tela.add(t2);
        tela.add(t3);
        tela.add(verificar);
        tela.add(resultado);

        setSize(250, 280);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        Exercicio4 ex = new Exercicio4();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}