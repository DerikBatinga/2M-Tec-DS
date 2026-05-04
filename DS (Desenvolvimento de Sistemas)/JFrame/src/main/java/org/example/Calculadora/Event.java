package org.example.Calculadora;

public class Event {
    public Event {
        JFrame jframe = new JFrame();
        
        jframe.plus.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        double
                                n1 = Integer.parseInt(jframe.Tçnum1.getText()),
                                n2 = Integer.parseInt(jframe.Tnum2.getText()),
                                pl = Calc.plus(n1, n2);

                        jframe.result.setVisible(true);
                        jframe.result.setText("The result is:" + pl);
                    }
                }
        );
        jframe.minus.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        double
                                n1 = Integer.parseInt(jframe.Tnum1.getText()),
                                n2 = Integer.parseInt(jframe.Tnum2.getText()),
                                pl = Calc.minus(n1, n2);

                        jframe.result.setVisible(true);
                        jframe.result.setText("The result is:" + pl);
                    }
                }
        );
        jframe.mult.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        double
                                n1 = Integer.parseInt(jframe.Tnum1.getText()),
                                n2 = Integer.parseInt(jframe.Tnum2.getText()),
                                pl = Calc.mult(n1, n2);

                        jframe.result.setVisible(true);
                        jframe.result.setText("The result is:" + pl);
                    }
                }
        );
        jframe.div.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        double
                                n1 = Integer.parseInt(jframe.Tnum1.getText()),
                                n2 = Integer.parseInt(jframe.Tnum2.getText()),
                                pl = Calc.div(n1, n2);

                        jframe.result.setVisible(true);
                        jframe.result.setText("The result is:" + pl);
                    }
                }
        );
        jframe.sqrt.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        double
                                n1 = Integer.parseInt(jframe.Tnum1.getText()),
                                n2 = Integer.parseInt(jframe.Tnum2.getText()),
                                pl = Calc.sqrt(n1, n2);

                        jframe.result.setVisible(true);
                        jframe.result.setText("The result is:" + pl);
                    }
                }
        );
    }
}