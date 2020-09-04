<?php
   // date
   // untuk menetukan tanggal dengan format tertentu
   // echo date ("l,d M Y");


   // time
   // UNIX timestamp / EPOCH time
   //detik yang sudah berlalu sejak 1 januari 1870    
   // echo time ();
// echo date ("l, d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime (0, 0,0, 04, 19, 2001));

// strtotime
// echo date("l", strtotime("19 apr 2001"));



?>