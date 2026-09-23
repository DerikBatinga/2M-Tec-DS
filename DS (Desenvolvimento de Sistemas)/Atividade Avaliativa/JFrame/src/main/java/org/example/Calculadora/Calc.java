package org.example.Calculadora;

public class Calc {
    static double plus(double n, double m){ return n + m; }
    static double minus(double n, double m){ return n - m; }
    static double mult(double n, double m){ return n * m; }
    static double div(double n, double m) { return m != 0 ? n/m : 0;}
    static double sqrt(double n, double m){ return Math.sqrt(n+m); }
}
