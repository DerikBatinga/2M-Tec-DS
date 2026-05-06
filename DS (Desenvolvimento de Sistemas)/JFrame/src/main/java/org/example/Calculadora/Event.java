package org.example.Calculadora;

import java.awt.event.ActionListener;

public class Event {

    ActionListener pl = e -> calc("plus");
    ActionListener mi = e -> calc("minus");
    ActionListener mu = e -> calc("mult");
    ActionListener di = e -> calc("div");
    ActionListener sq = e -> calc("sqrt");

    private void calc(String op) {
        try {
            double  n1 = Double.parseDouble(JFrames.Tnum1.getText()),
                    n2 = Double.parseDouble(JFrames.Tnum2.getText()),
                    res = 0;

            switch (op) {
                case "plus"  -> res = Calc.plus(n1, n2);
                case "minus" -> res = Calc.minus(n1, n2);
                case "mult"  -> res = Calc.mult(n1, n2);
                case "div"   -> res = Calc.div(n1, n2);
                case "sqrt"  -> res = Calc.sqrt(n1, n2);
            }

            JFrames.result.setVisible(true);
            JFrames.result.setText("The result is: " + res);

        } catch (NumberFormatException e) {
            JFrames.result.setVisible(true);
            JFrames.result.setText("Invalid Number!");
        }
    }
}