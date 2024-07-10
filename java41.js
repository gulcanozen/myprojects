// JavaScript Document
var dizi = new Array();
dizi[0]="Pazartesi";
dizi[1]="Salı";
dizi[2]="Çarşamba";
dizi[3]="Perşembe";
dizi[4]="Cuma";
dizi[5]="Cumartesi";
dizi[6]="Pazar";


var renkler = new Array("kırmızı", "sarı", "mavi", "mor", "siyah", "yeşil");
document.write("günler dizisi" +dizi.length+ "  tane elemana sahiptir"); 
document.write("<br>");
for (var i=0; i<dizi.length; i++){
	if (i == dizi.length - 1){ 
		document.write(dizi[i]);
		}else{
	
	document.write(dizi[i] + "-");
	}
}

var ogrenciler = new Array();
ogrenciler[0] = new Array("cansu", "gökhan", "gülcan", "kürşat");
ogrenciler[1] = new Array("136", "317", "366", "1551");
ogrenciler[2] = new Array("K", "E", "K", "E");
ogrenciler[3] = new Array("1987", "1985", "2003", "2005");
document.write("<br>");

document.write(ogrenciler[0][0] + " " + ogrenciler[1][0] + " " +  ogrenciler[2][0] + " " + ogrenciler[3][0]);

document.write("<table border='1' align='center' width='400'>");
document.write("<tr class='ilk_satir'>");
document.write("<td>Adı</td><td>Numarası</td><td>Cinsiyeti</td><td>Doğum Yılı</td>");
document.write("</tr>");
for(i = 0; i< Object.keys(ogrenciler).length; i++){
	document.write("<tr>");
	for (var j = 0; j<ogrenciler[0].length; j++){
		document.write("<td>");
		   document.write(ogrenciler[j][i]);
		document.write("</td>");
	    }
	document.write("</tr>");
		}
		document.write("</table>");
		
var sayilar = new Array("1", "2", "3", "4", "5");

//push dizinin sonuna eleman ekler
sayilar.push("6","7");
document.write(sayilar);

//pop dizinin son elemanını siler
sayilar.pop();
document.write("<br>" + sayilar);

//unshift dizinin başına istediğimiz sayıda eleman ekler
sayilar.unshift("-1", "0");
document.write("<br>" + sayilar);

//splice dizinin istediğimiz yerine eleman ekler
sayilar.splice(4,0,"a", "b");
document.write("<br>" + sayilar);

//splice dizinin istediğimiz yerinden istediğimiz kadar eleman siler
sayilar.splice(6, 2);
document.write("<br>" + sayilar);

//indexof dizideki bir elemanın indexini bulur
var indis = sayilar.indexOf("2");
document.write("<br> 2 sayısının indis numarası:" + indis);

//reverse dizinin tüm elemanlarını tersine çevirir
sayilar.reverse();
document.write("<br>" + sayilar);


//sort dizi elemanlarını sıralar
sayilar.sort();
document.write("<br>" + sayilar);

/*function tablo_olustur(){
	
	document.write("<table border='1' width='300' height='200'>");
		for(i=0; i<2; i++){
			document.write("<tr>");
			for (j=0; j<2; j++){
			document.write("<td>Gülcan</td>");
			}
			document.write("</tr>");
		}
	   document.write("</table>");
	}
tablo_olustur();*/


function tablo_olustur(satir, sutun){
	
	document.write("<table border='1' width='300' height='200'>");
		for(i=0; i<satir; i++){
			document.write("<tr>");
			for (j=0; j<sutun; j++){
			document.write("<td>Gülcan</td>");
			}
			document.write("</tr>");
		}
	   document.write("</table>");
	}
//tablo_olustur(30, 14);
var s1 = prompt("Lütfen satır sayısını giriniz");
var s2 = prompt("Lütfen sütun sayısını giriniz");
tablo_olustur(s1, s2);

function art_bul(a, b, c){
	
	var toplam =0;
	toplam = (toplam + a + b + c)/3;
	return toplam;
	}
document.write(art_bul(3,4,5) * art_bul(3,4,5));
document.write("<p>");


function kuvvet(c, d){
	var sonuc = 1 ;
	for (i=0; i<d; i++){
	
		sonuc = sonuc * c ;
		}
	return sonuc;
	}
document.write(kuvvet(7,5));


