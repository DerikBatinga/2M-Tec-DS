package org.example;

import javax.swing.*;
import java.awt.*;

public class passwordField extends JFrame{
    JLabel rotulo;
    JPasswordField senha;

    public passwordField(){
     super("JPasswordField");
        Container password = getContentPane();
        setLayout(null);

        this.rotulo = new JLabel("Senha:");
        this.senha = new JPasswordField();

        this.rotulo.setBounds(25,10,70,20);
        this.senha.setBounds(25,50,150,30);

        password.add(rotulo);
        password.add(senha);

        setSize(200,200);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    static void main() {
        passwordField password = new passwordField();
        password.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}
