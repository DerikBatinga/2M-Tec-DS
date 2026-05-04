package org.example.Calculadora;

public class Calc {
    static double plus(double n, double m){ return n + m; }
    static double minus(double n, double m){ return n - m; }
    static double mult(double n, double m){ return n * m; }
    static double div(double n, double m) {
        if (m == 0 || n == 0){
            return(0.0);
        }
        else{
            return (n/m);
        }
    }
    static double sqrt(double n, double m){ return Math.sqrt(n+m); }
}
