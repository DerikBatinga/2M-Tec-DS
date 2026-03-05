/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.atividade3;

/**
 *
 * @author d3
 */
public class Carro {
   
 int aceleração = 0, ligado = 0, marcha = 0;

String modelo,motor, cor;

void ligar(){
 if(ligado == 1){
     System.out.println("Seu carro já está ligado!");
 return;
}

 System.out.println("Carro ligado!");
 aceleração++;
}

void desligar(){
 if(ligado == 0){
     System.out.println("Seu carro já está desligado!");
return;
 }

    System.out.println("Carro desligado!");
ligado--;
}


void acelerar(){
if(aceleração == 5){
 System.out.println("Seu pé está afundado no acelerador!");
return;
 }

System.out.println("Acelerando...!");
aceleração++;
}


void freiar (){

if(aceleração == 0){
 System.out.println("Seu carro já está parado!");
return;
 }

 System.out.println("Freio acionado!");
aceleração--;
}

void trocarMarcha(){
if(marcha == 6){
 System.out.println("Seu carro já está na última marcha!");
return;
}

 System.out.println("Marcha acrescentada!");
marcha++;
}

void reduzirmarcha(){
if(marcha == 0){
 System.out.println("Sua marcha está no neutro");
return;
}

 System.out.println("Marcha reduzida!");
marcha--;
}
}