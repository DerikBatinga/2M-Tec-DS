package org.example.Exercicios3;

import org.example.Exercicios1.Exercicio1;

import javax.swing.*;
import java.awt.*;

public class Triangulo extends JFrame{
    private JLabel l1, l2, l3, resultado;
    private JTextField t1, t2, t3;
    private JButton verificar;

    public Triangulo() {
        super("Verificador de Triângulo");
        setLayout(null);
        Container tela = getContentPane();

        this.l1 = new JLabel("Lado 1:");
        this.l2 = new JLabel("Lado 2:");
        this.l3 = new JLabel("Lado 3:");

        this.t1 = new JTextField();
        this.t2 = new JTextField();
        this.t3 = new JTextField();

        this.verificar = new JButton("Verificar Tipo");
        this.resultado = new JLabel("Tipo: ");

        this.l1.setBounds(20, 20, 60, 30);
        this.l2.setBounds(20, 60, 60, 30);
        this.l3.setBounds(20, 100, 60, 30);

        this.t1.setBounds(80, 20, 80, 30);
        this.t2.setBounds(80, 60, 80, 30);
        this.t3.setBounds(80, 100, 80, 30);

        this.verificar.setBounds(20, 140, 140, 30);
        this.resultado.setBounds(20, 180, 200, 30);

        this.verificar.addActionListener(e -> {
            try {
                double lado1 = Double.parseDouble(t1.getText()),
                        lado2 = Double.parseDouble(t2.getText()),
                        lado3 = Double.parseDouble(t3.getText());

                if (lado1 == lado2 && lado2 == lado3) {
                    this.resultado.setText("Triângulo Equilátero");
                } else if (lado1 != lado2 && lado1 != lado3 && lado2 != lado3) {
                    this.resultado.setText("Triângulo Escaleno");
                } else {
                    this.resultado.setText("Triângulo Isósceles");
                }
            } catch (NumberFormatException ex) {
                this.resultado.setText("Insira valores válidos");
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
        Triangulo ex = new Triangulo();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); }
}

