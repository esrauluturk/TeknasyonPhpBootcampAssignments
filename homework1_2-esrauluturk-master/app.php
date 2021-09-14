<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

$guess=(int)$guess; //Tip donusumu

if($gender=="female"){ //Cinsiyet kadinsa
  $femaleBMR=447.593 + (9.247 * $weight) + (3.098 * $height)-(4.330 * $age);//Kadin gunluk BMR ihtiyaci hesaplanir
  echo "BMR: " . $femaleBMR."\n"; //BMR ekrana bastirilir.
  //Tahmin degeri ile karsilastirma
  if($femaleBMR < $guess){
    echo "Tahmin değerinden düşük";
  }else if($femaleBMR==$guess){
    echo "Tahmin değerine eşit";  
  }else{
    echo "Tahmin değerinden büyük";  
  }
 }
 
 else{ //Cinsiyet erkekse
  $maleBMR=88.362 + (13.397 * $weight) + (4.799 * $height)-(5.677 * $age);//Erkek gunluk BMR ihtiyaci hesaplanir
  echo "BMR: ".$maleBMR."\n" ; //BMR ekrana bastirilir
  //Tahmin degeri ile karsilastirma
  if($maleBMR<$guess){
    echo "Tahmin değerinden düşük";
  }else if($maleBMR==$guess){
    echo "Tahmin değerine eşit";  
  }else{
    echo "Tahmin değerinden büyük";  
  }
}

/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */
