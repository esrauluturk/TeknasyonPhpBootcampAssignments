<?php

$age = 25;

if($age >= 0 && $age <= 14){ //0-14 = Çocuk
  echo "Çocuk";
}elseif($age >= 15 && $age <= 24){//15-24 = Genç
  echo "Genç";
}elseif($age >= 25 && $age <= 64){//25-64 = Yetişkin
  echo "Yetişkin";
}elseif($age >= 65){//65+ = Yaşlı
  echo "Yaşlı";
}else{
  echo "0'dan küçük değerler girmeyiniz.";
}

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
