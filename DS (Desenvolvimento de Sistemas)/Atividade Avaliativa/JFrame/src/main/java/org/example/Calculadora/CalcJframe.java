package org.example.Calculadora;


import javax.swing.*;
import java.awt.*;
import java.awt.event.KeyEvent;

public class CalcJframe extends JFrame {
    private JLabel Lnum1,Lnum2, res;
    private JTextField Tnum1, Tnum2;
    private JButton plus, minus, mult, div, sqrt;
    private ImageIcon plusIcon, minusIcon, multIcon, divIcon, sqrtIcon;

    public CalcJframe() {
        super("Calculadora");
        btnEvent event = new btnEvent(this);
        Container screen = getContentPane();
        setLayout(null);

        Lnum1 = new JLabel("First Number");
        Lnum2 = new JLabel("Second Number");
        res = new JLabel("");
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
        res.setBounds(210, 140, 135, 20);

        Lnum1.setFont(new Font("Arial", 1, 13));
        Lnum2.setFont(new Font("Arial", 1, 12));
        res.setFont(new Font("Arial", 1, 13));

        Tnum1.setBounds(20, 40, 225, 20);
        Tnum2.setBounds(260, 40, 245, 20);

        plus.setBounds(20, 90, 95, 40);
        minus.setBounds(120, 90, 95, 40);
        mult.setBounds(220, 90, 95, 40);
        div.setBounds(320, 90, 95, 40);
        sqrt.setBounds(420, 90, 95, 40);

        screen.add(Lnum1);screen.add(Lnum2); screen.add(res);
        screen.add(Tnum1);screen.add(Tnum2);
        screen.add(plus);screen.add(minus);screen.add(mult);screen.add(div);screen.add(sqrt);

        setSize(540,220);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    public void setResult(double r) {res.setText("Result: " + r);}

    public String getTnum1() {return Tnum1.getText();}

    public void setTnum1(JTextField tnum1) {Tnum1 = tnum1;}

    public String getTnum2() {return Tnum2.getText();}

    public void setTnum2(JTextField tnum2) {Tnum2 = tnum2;}

    public JLabel getRes() {return res;}

    public void setRes(String resu) {res.setText(resu);}
}