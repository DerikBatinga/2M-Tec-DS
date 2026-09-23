package org.example.Exercicios3;
import javax.swing.*;
import java.awt.*;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Random;

public class PedraPapelTesoura extends JFrame {
    private JLabel title, resultado;
    private JButton jogar;
    private JRadioButton pedra, papel, tesoura;
    List<JRadioButton> JRadio = new ArrayList<>();
    private ButtonGroup grupo;

    public PedraPapelTesoura() {
        super("Gravidade");
        Container tela = getContentPane();
        setLayout(null);

        this.title = new JLabel("Pedra, Papel, Tesoura");
        this.resultado = new JLabel("");

        this.jogar = new JButton("Jogar");

        this.pedra = new JRadioButton("Pedra");
        this.papel = new JRadioButton("Papel");
        this.tesoura = new JRadioButton("Tesoura");
        Collections.addAll(JRadio, pedra, papel, tesoura);
        grupo = new ButtonGroup();

        grupo.add(pedra);
        grupo.add(papel);
        grupo.add(tesoura);

        this.title.setBounds(20, 40, 140, 30);
        this.resultado.setBounds(20,140,120,30);

        this.jogar.setBounds(20, 80, 120, 30);

        this.pedra.setBounds(170, 40, 80, 30);
        this.papel.setBounds(170, 60, 80, 30);
        this.tesoura.setBounds(170, 80, 80, 30);

        this.jogar.addActionListener(e->{
            try {
            Random rand = new Random();
            int randomNUm = rand.nextInt(1,3);

            switch (randomNUm){
                case 1:resultado.setText("Resultado:Pedra");
                    break;

                case 2:resultado.setText("Resultado:Papel");
                    break;

                case 3:resultado.setText("Resultado:Tesoura");
                    break;
            }
                }
            catch (Exception ex) {
                throw new RuntimeException(ex);
            }
        });

        tela.add(title); tela.add(resultado);
        tela.add(jogar);
        for (JRadioButton a:JRadio){tela.add(a);}

        setSize(300,280);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    static void main() {
        PedraPapelTesoura ex = new PedraPapelTesoura();
        ex.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}