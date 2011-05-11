
![g56](http://gdemir.me/file/g56.png)


``` php
<?php

// framework tetikleyicisi
g56::run();

// veritabani baglanti kurucu.
g56::config();

// $_POST, $_SESSION, $_FILES'larindan birinde bir veri var mi diye bakar.
g56::exists();

// $_POST, $_SESSION, $_FILES'larindan birindeki veriyi siler.
g56::clear();

// $_POST, $_SESSION, $_FILES'larindan birine bir veri yukler.
g56::set();

// $_POST, $_SESSION, $_FILES'larindaki birinden bir veriyi almaya yarar.
g56::get();

// olduğunuz dizindeki path'in yolunu doner.
g56::path();

// bir .php veya .html dosyasini cagirir.
g56::call();

// istediginiz dizine, istediginiz ismiyle resim yuklemeye yarar.
g56::img_upload();

// istediginiz resmi olcekler.
g56::img_small();

// resmin genisligini, yuksekligini doner.
g56::img_wh();

// istediginiz bir verinin veritabaninda olup, olmadigini kontrol eder.
g56->find();

// istediginiz bir veriyi veritabanindan yukler g56'nin alanlarina yukler.
g56->load();

// bir hash'i (or : $_POST) g56'nin alanlarina yukler.
g56->get_form();

// istediginiz bir veriyi veritabanindan siler.
g56->erase();

// bir veri yuklenmisse gunceller, eger hash (or : $_POST) ekler.
g56->save();

// birden cok verinin istenilen kisimlarini, sayisi ile birlikte doner.
g56->rows();

?>
```

#### AUTHOR gdemir
--
