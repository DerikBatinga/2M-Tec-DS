package org.example;
import javax.swing.*;
import java.awt.*;

public class botaoJanela extends JFrame {
    JButton button1,button2,button3;
    ImageIcon icon2,icon3;
    public botaoJanela(){
        super("Titulo");
        Container tela = getContentPane();
        setLayout(null);

        this.icon2 = new ImageIcon("img/Folder.png");
        this.icon3 = new ImageIcon("img/Folder.png");

        this.button1 = new JButton("Novo");
        this.button2 = new JButton("Abrir",icon2);
        this.button3 = new JButton(icon3);

        this.button1.setBounds(150,60,100,20);
        this.button2.setBounds(150,80,100,20);
        this.button3.setBounds(150,100,100,20);

        tela.add(button1);
        tela.add(button2);
        tela.add(button3);

        setSize(400,250);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    static void main() {
        botaoJanela botoes = new botaoJanela();
        botoes.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}