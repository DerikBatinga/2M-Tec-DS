package org.example.Calculadora;

import java.awt.event.ActionListener;

public class btnEvent {

    CalcJframe calcJframe;

    public btnEvent(CalcJframe frame) {
        this.calcJframe = frame;
    }

    ActionListener pl = e -> calc("plus");
    ActionListener mi = e -> calc("minus");
    ActionListener mu = e -> calc("mult");
    ActionListener di = e -> calc("div");
    ActionListener sq = e -> calc("sqrt");

    private void calc(String op) {
        try {
            double  n1 = Double.parseDouble(calcJframe.getTnum1()),
                    n2 = Double.parseDouble(calcJframe.getTnum2()),
                    res = 0;

            switch (op) {
                case "plus"  -> res = Calc.plus(n1, n2);
                case "minus" -> res = Calc.minus(n1, n2);
                case "mult"  -> res = Calc.mult(n1, n2);
                case "div"   -> res = Calc.div(n1, n2);
                case "sqrt"  -> res = Calc.sqrt(n1, n2);
            }

           calcJframe.setResult(res);

        } catch (NumberFormatException e) {
            calcJframe.setRes("Invalid number!");
        }
    }
}