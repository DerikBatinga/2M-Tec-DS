package com.mycompany.menucalculadora;
/**
 *
 * @author d3
 */
public class Calculadora {
    
    private double numero01;
    private double numero02;
    private double resultado;
    
    public Calculadora(){
      this(0,0,0);
    }
    public Calculadora(double numero01, double numero02, double resultado){
  
    this.numero01 = numero01;
    this.numero02 = numero02;
    this.resultado = resultado;
    
    }
    
    public double getNumero01(){ return numero01; }
    
    public void setNumero01(double numero01){ this.numero01 = numero01; }
    
    public double getNumero02(){ return numero02; }
    
    public void setNumero02(double numero02){ this.numero02 = numero02; }
    
    public double getResultado(){ return resultado; }
    
    public void setResultado(double resultado){
     this.resultado = resultado;
    }
    
    public void somar (){
     setResultado(this.getNumero01() + this.getNumero02());
    }
    
    public void subtracao (){
     setResultado(this.getNumero01() - this.getNumero02());
    }
     
    public void multiplicacao(){
     setResultado(this.getNumero01() * this.getNumero02());
    }
    
    public void divisao(){
     setResultado(this.getNumero01() / this.getNumero02());
    }
    
    public void sair(){
     System.exit(0);
    }
}
