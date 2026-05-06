package org.example.Calculadora;

import javax.swing.*;
import java.awt.*;
import java.awt.event.KeyEvent;

public class JFrames extends JFrame {
    JLabel Lnum1,Lnum2;
    static JLabel result;
    static JTextField Tnum1, Tnum2;
    static JButton plus, minus, mult, div, sqrt;
    ImageIcon plusIcon, minusIcon, multIcon, divIcon, sqrtIcon;

    public JFrames() {
        Event event = new Event();
        super("Calculadora");
        Container screen = getContentPane();
        setLayout(null);

        Lnum1 = new JLabel("First Number");
        Lnum2 = new JLabel("Second Number");
        result = new JLabel("");

        Tnum1 = new JTextField();
        Tnum2 = new JTextField();

        plusIcon = new ImageIcon("img/pluss.png");
        minusIcon = new ImageIcon("img/minuss.png");
        multIcon = new ImageIcon("img/multplicationn.png");
        divIcon = new ImageIcon("img/divisionn.png");
        sqrtIcon = new ImageIcon("img/square-roott.png");

        plus = new JButton(plusIcon);
        minus = new JButton(minusIcon);
        mult = new JButton(multIcon);
        div = new JButton(divIcon);
        sqrt = new JButton(sqrtIcon);

        plus.addActionListener(event.pl);
        minus.addActionListener(event.mi);
        mult.addActionListener(event.mu);
        div.addActionListener(event.di);
        sqrt.addActionListener(event.sq);

        plus.setMnemonic(KeyEvent.VK_1);
        minus.setMnemonic(KeyEvent.VK_2);
        mult.setMnemonic(KeyEvent.VK_3);
        div.setMnemonic(KeyEvent.VK_4);
        sqrt.setMnemonic(KeyEvent.VK_5);

        Lnum1.setBounds(20, 20, 100, 20);
        Lnum2.setBounds(260, 20, 100, 20);
        result.setBounds(220, 140, 120, 20);

        Lnum1.setFont(new Font("Arial", 1, 13));
        Lnum2.setFont(new Font("Arial", 1, 12));
        result.setFont(new Font("Arial", 1, 13));

        Tnum1.setBounds(20, 40, 225, 20);
        Tnum2.setBounds(260, 40, 245, 20);

        plus.setBounds(20, 90, 95, 30);
        minus.setBounds(120, 90, 95, 30);
        mult.setBounds(220, 90, 95, 30);
        div.setBounds(320, 90, 95, 30);
        sqrt.setBounds(420, 90, 95, 30);

        screen.add(Lnum1);screen.add(Lnum2); screen.add(result);
        screen.add(Tnum1);screen.add(Tnum2);
        screen.add(plus);screen.add(minus);screen.add(mult);screen.add(div);screen.add(sqrt);

        setSize(540,220);
        setVisible(true);
        setLocationRelativeTo(null);
    }
}