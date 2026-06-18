package org.example.Exercicios3;
import javax.swing.*;
import java.awt.*;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class Gravidade extends JFrame {
    private JLabel peso, selecionar, resultado;
    private JTextField Tpeso;
    private JButton calcularPeso;
    private JRadioButton mercurio, venus, marte, jupiter, saturno, urano;
    List<JRadioButton> JRadio = new ArrayList<>();
    private ButtonGroup grupoPlanetas;

    public Gravidade() {
        super("Gravidade");
        Container tela = getContentPane();
        setLayout(null);

        this.peso = new JLabel("Digite o peso em KG");
        this.selecionar = new JLabel("Digite o peso em KG");
        this.resultado = new JLabel("");

        this.Tpeso = new JTextField();

        this.calcularPeso = new JButton("Calcular");

        this.mercurio = new JRadioButton("Mercurio");
        this.venus = new JRadioButton("Venus");
        this.marte = new JRadioButton("Marte");
        this.jupiter = new JRadioButton("Jupiter");
        this.saturno = new JRadioButton("Saturno");
        this.urano = new JRadioButton("Urano");
        Collections.addAll(JRadio,mercurio,venus,marte,jupiter,saturno,urano);
        grupoPlanetas = new ButtonGroup();

        grupoPlanetas.add(mercurio);
        grupoPlanetas.add(venus);
        grupoPlanetas.add(marte);
        grupoPlanetas.add(jupiter);
        grupoPlanetas.add(saturno);
        grupoPlanetas.add(urano);

        this.peso.setBounds(20, 20, 140, 30);
        this.Tpeso.setBounds(20,60,120,30);
        this.resultado.setBounds(20,140,120,30);
        this.selecionar.setBounds(170, 20, 140, 30);
        this.calcularPeso.setBounds(20, 100, 120, 30);

        this.mercurio.setBounds(170, 60, 80, 30);
        this.venus.setBounds(170, 80, 80, 30);
        this.marte.setBounds(170, 100, 80, 30);
        this.jupiter.setBounds(170, 120, 140, 30);
        this.saturno.setBounds(170, 140, 200, 30);
        this.urano.setBounds(170, 160, 200, 30);

        this.calcularPeso.addActionListener(e->{
            try {
            if (mercurio.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 0.37;
                resultado.setText("Resultado:"+v);
            }
            if (venus.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 0.88;
                resultado.setText("Resultado:"+v);
            }
            if (marte.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 0.38;
                resultado.setText("Resultado:"+v);
            }
            if (jupiter.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 2.64;
                resultado.setText("Resultado:"+v);
            }
            if (saturno.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 1.15;
                resultado.setText("Resultado:"+v);
            }
            if (urano.isSelected()){
                double v = (Double.parseDouble(Tpeso.getText()) / 10) * 1.17;
                resultado.setText("Resultado:"+v);
            }}
            catch (Exception ex) {
                throw new RuntimeException(ex);
            }
        });


        tela.add(peso); tela.add(selecionar); tela.add(resultado);
        tela.add(Tpeso);
        tela.add(calcularPeso);
        for (JRadioButton a:JRadio){tela.add(a);}

        setSize(300,280);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    static void main() {
        Gravidade ex = new Gravidade();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}