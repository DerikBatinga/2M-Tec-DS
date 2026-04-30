//
// Source code recreated from a .class file by IntelliJ IDEA
// (powered by Fernflower decompiler)
//
package org.example;

import java.awt.Color;
import java.awt.Component;
import java.awt.Container;
import java.awt.Font;
import java.awt.LayoutManager;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

public class primeiraJanela extends JFrame {
    JLabel titulo;

    JLabel rotulo1,rotulo2,rotulo3,rotulo4,rotulo5,rotulo6,rotulo7;
    JTextField texto1,texto2,texto3,texto4,texto5,texto6,texto7;

    public primeiraJanela() {
        super("Formulário de cadastro");
        Container tela = this.getContentPane();
        tela.setBackground(Color.lightGray);
        this.setLayout((LayoutManager)null);
        this.titulo = new JLabel("Cadastro do cliente");
        this.rotulo1 = new JLabel("Nome");
        this.rotulo2 = new JLabel("CPF");
        this.rotulo3 = new JLabel("RG");
        this.rotulo4 = new JLabel("Endereço");
        this.rotulo5 = new JLabel("Cidade");
        this.rotulo6 = new JLabel("Estado");
        this.rotulo7 = new JLabel("CEP");
        this.texto1 = new JTextField();
        this.texto2 = new JTextField();
        this.texto3 = new JTextField();
        this.texto4 = new JTextField();
        this.texto5 = new JTextField();
        this.texto6 = new JTextField();
        this.texto7 = new JTextField();
        this.titulo.setBounds(170, 20, 200, 20);
        this.titulo.setForeground(Color.red);
        this.titulo.setFont(new Font("Arial", 1, 18));
        this.rotulo1.setBounds(50, 50, 100, 10);
        this.rotulo2.setBounds(50, 100, 100, 10);
        this.rotulo3.setBounds(50, 150, 100, 10);
        this.rotulo4.setBounds(50, 200, 100, 10);
        this.rotulo5.setBounds(50, 250, 100, 10);
        this.rotulo6.setBounds(50, 300, 100, 10);
        this.rotulo7.setBounds(50, 350, 100, 10);
        this.texto1.setBounds(50, 65, 300, 20);
        this.texto2.setBounds(50, 115, 75, 20);
        this.texto3.setBounds(50, 165, 50, 20);
        this.texto4.setBounds(50, 215, 300, 20);
        this.texto5.setBounds(50, 265, 250, 20);
        this.texto6.setBounds(50, 315, 200, 20);
        this.texto7.setBounds(50, 365, 50, 20);
        tela.add(this.titulo);
        tela.add(this.rotulo1);
        tela.add(this.rotulo2);
        tela.add(this.rotulo3);
        tela.add(this.rotulo4);
        tela.add(this.rotulo5);
        tela.add(this.rotulo6);
        tela.add(this.rotulo7);
        tela.add(this.texto1);
        tela.add(this.texto2);
        tela.add(this.texto3);
        tela.add(this.texto4);
        tela.add(this.texto5);
        tela.add(this.texto6);
        tela.add(this.texto7);
        this.setSize(500, 500);
        this.setVisible(true);
        this.setLocationRelativeTo((Component)null);
    }

    void main() {
        primeiraJanela janela = new primeiraJanela();
        janela.setDefaultCloseOperation(3);
    }
}
