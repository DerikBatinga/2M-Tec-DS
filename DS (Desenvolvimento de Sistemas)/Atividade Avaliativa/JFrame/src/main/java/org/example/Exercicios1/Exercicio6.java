package org.example.Exercicios1;

import javax.swing.*;
import java.awt.*;

public class Exercicio6 extends JFrame {
    JLabel lCelsius, lFahrenheit, lKelvin;
    JTextField tCelsius, tFahrenheit, tKelvin;
    JButton converter;

    public Exercicio6() {
        super("Conversor de Temperatura");
        setLayout(null);
        Container tela = getContentPane();

        lCelsius = new JLabel("Graus Celsius");
        lFahrenheit = new JLabel("Graus Fahrenheit");
        lKelvin = new JLabel("Graus Kelvin");

        tCelsius = new JTextField();
        tFahrenheit = new JTextField();
        tKelvin = new JTextField();

        tFahrenheit.setEditable(false); //Novo: setEditable false faz uma JTextField não ficar clicavél :o
        tKelvin.setEditable(false);     //Novo: setEditable false faz uma JTextField não ficar clicavél :o

        converter = new JButton("Converte");

        lCelsius.setBounds(30, 30, 120, 30);
        tCelsius.setBounds(160, 30, 100, 30);

        lFahrenheit.setBounds(30, 80, 120, 30);
        tFahrenheit.setBounds(160, 80, 100, 30);

        lKelvin.setBounds(30, 130, 120, 30);
        tKelvin.setBounds(160, 130, 100, 30);

        converter.setBounds(100, 180, 100, 30);

        converter.addActionListener(e -> {
            try {
                double celsius = Double.parseDouble(tCelsius.getText()),
                       fahrenheit = (celsius * 9/5) + 32,
                       kelvin = celsius + 273.15;

                tFahrenheit.setText(String.format("%.2f", fahrenheit));
                tKelvin.setText(String.format("%.2f", kelvin));
            } catch (NumberFormatException ex) {
                tFahrenheit.setText("Valor inválido");
                tKelvin.setText("Valor inválido");
            }
        });

        tela.add(lCelsius);
        tela.add(tCelsius);
        tela.add(lFahrenheit);
        tela.add(tFahrenheit);
        tela.add(lKelvin);
        tela.add(tKelvin);
        tela.add(converter);

        setSize(320, 270);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        Exercicio6 ex = new Exercicio6();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}