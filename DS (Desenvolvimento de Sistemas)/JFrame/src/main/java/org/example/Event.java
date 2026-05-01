package org.example;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.*;

public class Event extends JFrame{
    JLabel Lnum1, Lnum2, result;
    JTextField Tnum1,Tnum2;
    JButton plus,minus,mult,div,sqrt;
    ImageIcon plusIcon,minusIcon,multIcon,divIcon,sqrtIcon;

    public Event(){
        super("Calculadora");
        Container screen = getContentPane();
        setLayout(null);

        this.Lnum1 = new JLabel("First Number");
        this.Lnum2 = new JLabel("Second Number");
        this.result = new JLabel("");

        this.Tnum1 = new JTextField();
        this.Tnum2 = new JTextField();

        this.plusIcon = new ImageIcon("img/plus.png");
        this.minusIcon = new ImageIcon("img/free_icons/PNG/minus.png");
        this.multIcon = new ImageIcon("img/famfamfam/icons/disk_multiple.png");
        this.divIcon = new ImageIcon("img/division.png");
        this.sqrtIcon = new ImageIcon("img/square-root.jpg");

        this.plus = new JButton(plusIcon);
        this.minus = new JButton(minusIcon);
        this.mult = new JButton(multIcon);
        this.div = new JButton(divIcon);
        this.sqrt = new JButton(sqrtIcon);

        this.plus.setMnemonic(KeyEvent.VK_1);
        this.minus.setMnemonic(KeyEvent.VK_2);
        this.mult.setMnemonic(KeyEvent.VK_3);
        this.div.setMnemonic(KeyEvent.VK_4);
        this.sqrt.setMnemonic(KeyEvent.VK_5);

        this.Lnum1.setBounds(20,20,100,20);
        this.Lnum2.setBounds(260,20,100,20);
        this.result.setBounds(220,140,120,20);

        this.Lnum1.setFont(new Font("Arial",1,13));
        this.Lnum2.setFont(new Font("Arial",1,12));
        this.result.setFont(new Font("Arial",1,13));

        this.Tnum1.setBounds(20,40,225,20);
        this.Tnum2.setBounds(260,40,245,20);

        this.plus.setBounds(20,90,95,30);
        this.minus.setBounds(120,90,95,30);
        this.mult.setBounds(220,90,95,30);
        this.div.setBounds(320,90,95,30);
        this.sqrt.setBounds(420,90,95,30);

        plus.addActionListener(new ActionListener(){
              public void actionPerformed(ActionEvent e){
                  int
                          n1 = Integer.parseInt(Tnum1.getText()),
                          n2 = Integer.parseInt(Tnum2.getText()),
                          pl = n1+n2;

                  result.setVisible(true);
                  result.setText("The result is:"+pl);
              }
        }
        );
        minus.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        int
                                n1 = Integer.parseInt(Tnum1.getText()),
                                n2 = Integer.parseInt(Tnum2.getText()),
                                pl = n1-n2;

                        result.setVisible(true);
                        result.setText("The result is:"+pl);
                    }
                }
        );
        mult.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        double
                                n1 = Integer.parseInt(Tnum1.getText()),
                                n2 = Integer.parseInt(Tnum2.getText()),
                                pl = n1*n2;
                        result.setVisible(true);
                        result.setText("The result is:"+pl);
                    }
                }
        );
        div.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        double
                                n1 = Integer.parseInt(Tnum1.getText()),
                                n2 = Integer.parseInt(Tnum2.getText()),
                                pl = n1/n2;
                        result.setVisible(true);
                        result.setText("The result is:"+pl);
                    }
                }
        );
        sqrt.addActionListener(
                new ActionListener(){
                    public void actionPerformed(ActionEvent e){
                        double
                                n1 = Integer.parseInt(Tnum1.getText()),
                                n2 = Integer.parseInt(Tnum2.getText()),
                                pl = Math.sqrt(n1+n2);

                        result.setVisible(true);
                        result.setText("The result is:"+pl);
                    }
                }
        );
        screen.add(Lnum1);screen.add(Lnum2); screen.add(result);
        screen.add(Tnum1);screen.add(Tnum2);
        screen.add(plus);screen.add(minus);screen.add(mult);screen.add(div);screen.add(sqrt);

        setSize(540,220);
        setVisible(true);
        setLocationRelativeTo(null);
    }

    static void main() {
        Event app = new Event();
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}
