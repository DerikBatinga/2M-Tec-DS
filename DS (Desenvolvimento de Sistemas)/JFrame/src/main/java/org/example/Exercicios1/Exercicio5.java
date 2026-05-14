package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;

public class Exercicio5 extends JFrame {
    JLabel lPeso, lAltura, resIMC, resStatus;
    JTextField tPeso, tAltura;
    JButton calcular;

    public Exercicio5() {
        super("Cálculo de IMC");
        setLayout(null);
        Container tela = getContentPane();

        lPeso = new JLabel("Peso (kg):");
        lAltura = new JLabel("Altura (m):");

        tPeso = new JTextField();
        tAltura = new JTextField();

        calcular = new JButton("Calcular IMC");

        resIMC = new JLabel("IMC: ");
        resStatus = new JLabel("Status: ");

        lPeso.setBounds(20, 20, 80, 30);
        lAltura.setBounds(20, 60, 80, 30);

        tPeso.setBounds(100, 20, 80, 30);
        tAltura.setBounds(100, 60, 80, 30);

        calcular.setBounds(20, 100, 160, 30);

        resIMC.setBounds(20, 140, 200, 30);
        resStatus.setBounds(20, 170, 250, 30);

        calcular.addActionListener(e -> {
            try {
                double peso = Double.parseDouble(tPeso.getText()),
                       altura = Double.parseDouble(tAltura.getText()),
                       imc = peso / (altura * altura);

                resIMC.setText("IMC: " + imc);

                if (imc < 18.5) {
                    resStatus.setText("Status: Abaixo do peso");
                }
                else if (imc >= 18.5 && imc <= 24.99) {
                    resStatus.setText("Status: Peso ideal");
                }
                else {
                    resStatus.setText("Status: Está acima do peso ideal");
                }
            } catch (NumberFormatException ex) {
                resIMC.setText("Insira valores válidos");
                resStatus.setText("");
            }
        });

        tela.add(lPeso);
        tela.add(lAltura);
        tela.add(tPeso);
        tela.add(tAltura);
        tela.add(calcular);
        tela.add(resIMC);
        tela.add(resStatus);

        setSize(250, 260);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        Exercicio5 ex = new Exercicio5();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}