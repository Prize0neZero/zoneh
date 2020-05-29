<?php
// PM : U21004145
// Coded By Muhammad Imam
// 087700935379 Contact ( Whatsapp )


system("clear");

function loadgif(){
$load = ".";
$i = 1;
$load++;
while ( $i <= 3 ){
echo $load;
system("sleep 2");
$i++;
}
}

function jalan(){

$kata = "T,e,r,i,m,a K,a,s,i,h T,e,l,a,h M,e,n,g,g,u,n,a,k,a,n T,o,o,l,s S,a,y,a";
$pecah = explode(",",$kata);

$kata2 = "S,e,m,a,n,g,a,t T,e,r,u,s M,e,n,g,e,j,a,r C,i,t,a,-,C,i,t,a M,u |,| C,o,n,t,a,c,t M,e J,i,k,a P,e,r,l,u 0,8,7,7,0,0,9,3,5,3,7,9 \n - P,r,i,z,e,0,n,e,Z,e,r,o\n";
$pecah2 = explode(",",$kata2);


foreach ( $pecah as $pc ){
   echo $pc;
   system("sleep 0.1");
}
echo "\n";

foreach ( $pecah2 as $pc2 ){
   echo $pc2;
   system("sleep 0.1");
}
}

function zonehsingle(){
system("clear");
echo "
///////////////////////
Zone H Notify By Prize0neZero
Tipe : Single 
Coded By Muhammad Imam 
Give https / http for url
///////////////////////
";
echo "Nick : ";
$nick = trim(fgets(STDIN));
echo "Url : ";
$url = trim(fgets(STDIN));
echo "ENTER UNTUK SUBMIT";
$enter = trim(fgets(STDIN));

echo "\n";
echo "Loading";
echo loadgif() . "\n";

$zoneh = zoneh($url, $nick);
      if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
      echo "$url -> OK\n";
      } else {
      echo "$url -> ERROR\n";
      }
}

function zonehmass(){
system("clear");
echo "
/////////////////////////

ZONE H MASS NOTIFY BY ME
PRIZE 0NE ZERO

/////////////////////////
";
echo "Your Nick : ";
$nick = trim(fgets(STDIN));
echo "SITE DROP DI site-list.txt ( ENTER UNTUK MULAI )";
$enter = trim(fgets(STDIN));

echo "\n";
echo "Loading";
echo loadgif() . "\n";

$site = fopen("site-list.txt","r");
$ukuran = filesize("site-list.txt");
$baca = fread($site,$ukuran);
$list = explode("\n",$baca);

foreach ( $list as $url ){
       $zoneh = zoneh($nick,$url);
      if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
      echo "$url -> OK\n";
      } else {
      echo "$url -> ERROR\n";
      }
}
liathasil();
xdgopen();
}


function xdgopen(){
   system("clear");
   echo "Your Nick : ";
   $nick = trim(fgets(STDIN));
   system("clear");
   echo "1.https://zone-h.org/archive/notifier=$nick ( Archive )\n";
   echo "2.https://zone-h.org/archive/notifier=$nick/published=0 ( Onhold )\n";
   echo "Choose 1 & 2 Want To Open\n";
   $open = trim(fgets(STDIN));
   if ( $open == 1 || $open == 01 ){
      system("xdg-open https://zone-h.org/archive/notifier=$nick");
  } else if ( $open == 2 || $open == 02 ){
      system("xdg-open https://zone-h.org/archive/notifier=$nick/published=0" );

}
}

function liathasil(){
    echo "Enter Untuk Redirect Ke Site Zone-H ";
    $enter = trim(fgets(STDIN));
    if ( isset($enter)){
     xdgopen();
}
}

function zoneh($nick,$url){
      $ch = curl_init("http://www.zone-h.com/notify/single");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
      return curl_exec($ch);
      curl_close($ch);
} 


echo "
////////////////////////////

WELCOME TO ZONE H NOTIFY

///////////////////////////
";
echo "1.Single - 2.Mass - 3.Exit\n";
$pil = trim(fgets(STDIN));
if ( $pil == 1 || $pil == 01 ){
   zonehsingle();
   liathasil();
} else if ( $pil == 2 || $pil == 02 ) {
    if ( file_exists("site-list.txt")){
    zonehmass();
    } else {
    $open = fopen("site-list.txt","a+");
    fwrite($open,"TARO BAWAH SITENYA ( TULISAN INI HAPUS AJA )");
    echo "File site-list.txt Created Open And Write Your List Website\n";
    system("sleep 2");
    echo "type : nano site-list.txt untuk nengisi list web\n";
}


} else {

   jalan();

} 
?>
