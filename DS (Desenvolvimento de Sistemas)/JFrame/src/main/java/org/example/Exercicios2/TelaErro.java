package org.example.Exercicios2;

import javax.swing.*;
import java.awt.*;

public class TelaErro extends JFrame{
        private JLabel Lerro;
        private JButton Bvoltar;
     public TelaErro(){
            super("Cadastro");
            setLayout(null);
            Container tela = getContentPane();

            this.Lerro = new JLabel("Um erro aconteceu.");

            this.Bvoltar = new JButton("Voltar");

            this.Lerro.setBounds(20,30,300,20);

            this.Bvoltar.setBounds(30,50,100,20);

        this.Bvoltar.addActionListener(e-> dispose());

            tela.add(Lerro);tela.add(Bvoltar);

            setSize(160,120);
            setVisible(true);
            setLocationRelativeTo(null);
        }
    }