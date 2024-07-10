// JavaScript Document
var sayi1 = 50; // integer
var metin="Bugün Pazartesi" //string
var mantik=true; //boolean
var ondalik = 32.78; // float
document.write(sayi1);
var sayi2=100;
sayi2 = "yüz";
alert(sayi2);

var sayi3 = sayi1 + ondalik;
document.write("<br>");
document.write(sayi3);
var deger1 = metin + sayi1;
document.write(deger1);
var deger2 = mantik + sayi2;
document.write("<br>");
document.write(deger2);
var deger3 = sayi1 + mantik;
document.write("<br>");
document.write(deger3);
var deger4 = mantik - sayi2;
document.write("<br>");
document.write(deger4);
var deger5 = sayi1 - mantik;
document.write("<br>");
document.write(deger5);


var ad = "Gülcan";
var soyad = "Özen";
document.write("<br>"+ad + " " + soyad+"<br>");

var s1 = 20;
var s2 = 30;
document.write(s1-s2 + "<br>");
document.write(s1*s2 + "<br>");
document.write(s1/s2 + "<br>");
document.write(s2 % s1 + "<br>");
s1++;
document.write(s1++ + "<br>");
s2--;
s2 = s2 - 1;
document.write(s2-- + "<br>");
s2*=7;
s2 = s2 + 7;
document.write(s2 + "<br>");

var no1 = 345;
var no2 = 121;
var no3 = 345;
var no4 = 93;
document.write("<br>");
document.write(no1 > no2);
document.write("<br>");
document.write(no1 < no2);
document.write("<br>");
document.write(no1 >= no2);
document.write("<br>");
document.write(no1 <= no2);
document.write("<br>");
document.write(no1 == no2);
document.write("<br>");
document.write(no1 != no2);
document.write("<br>");
document.write(no1 == no3 && no2 > no4); // true
document.write("<br>");
document.write(no1 == no3 && no2 < no4); // false
document.write("<br>");
document.write(no1 == no3 || no2 > no4); // true
document.write("<br>");
document.write(no1 == no3 || no2 < no4); // true
document.write("<br>");
document.write(!(no1 == no2)); // true 
document.write("<br>");
document.write(no1*4+8-(no1+no2)/no4);
document.write("<br>");

