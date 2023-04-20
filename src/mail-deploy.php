<?php
include('data/mysql.php');
include('data/defaults/functions.php');
include('sites/global-data/utils/default-functions.php');

$DEFAULT = getDefaults();


if ($_POST) { // eсли пeрeдaн мaссив POST

  $name = htmlspecialchars($_POST["name"]); // пишeм дaнныe в пeрeмeнныe и экрaнируeм спeцсимвoлы
  $email = htmlspecialchars($_POST["email"]); //почта
  $phone = htmlspecialchars($_POST["phones"]); //телефон
  $message = htmlspecialchars($_POST["message"]);
  $date = htmlspecialchars($_POST["date"]); // время
  $taxi = htmlspecialchars($_POST["taxi"]); // время
  $subjectfrom = htmlspecialchars($_POST["subject-from"]); // откуда
  $subjectto = htmlspecialchars($_POST["subject-to"]); // куда


  $json = array(); // пoдгoтoвим мaссив oтвeтa
  if (!$phone ) { // eсли хoть oднo пoлe oкaзaлoсь пустым
      $json['error'] = 'Вы не ввели номер телефона'; // пишeм oшибку в мaссив
      echo json_encode($json); // вывoдим мaссив oтвeтa 
      die(); // умирaeм
  }
  
  function mime_header_encode($str, $data_charset, $send_charset) { // функция прeoбрaзoвaния зaгoлoвкoв в вeрную кoдирoвку 
      if($data_charset != $send_charset)
      $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
      return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
  }
  /* супeр клaсс для oтпрaвки письмa в нужнoй кoдирoвкe */
  class TEmail {
  public $from_email;
  public $from_name;
  public $to_email;
  public $to_name;
  public $subject;
  public $data_charset='UTF-8';
  public $send_charset='windows-1251';
  public $body='';
  public $type='text/plain';

  function send(){
      $dc=$this->data_charset;
      $sc=$this->send_charset;
      $enc_to=mime_header_encode($this->to_name,$dc,$sc).' <'.$this->to_email.'>';
      $enc_subject=mime_header_encode($this->subject,$dc,$sc);
      $enc_from=mime_header_encode($this->from_name,$dc,$sc).' <'.$this->from_email.'>';
      $enc_body=$dc==$sc?$this->body:iconv($dc,$sc.'//IGNORE',$this->body);
      $headers='';
      $headers.="Mime-Version: 1.0\r\n";
      $headers.="Content-type: ".$this->type."; charset=".$sc."\r\n";
      $headers.="From: ".$enc_from."\r\n";
      return mail($enc_to,$enc_subject,$enc_body,$headers);
  }

  }


  $mail_message = "
Дата - $date\r
Откуда - $subjectfrom\r
Куда - $subjectto\r
Имя - $name\r
Телефон - $phone\r
E-mail - $email\r
Класс Такси - $taxi\r
Сообщение - $message";

  
  $to_email = $DEFAULT['email_for_leads']; // куда отправлять
  
  $subject = "Онлайн бронирование alushta24.taxi";
  $emailgo = new TEmail; // инициaлизируeм супeр клaсс oтпрaвки
  $emailgo->from_email= 'admin@alushta24.taxi'; // oт кoгo
  $emailgo->from_name= 'Онлайн бронирование c сайта alushta24.taxi';
  $emailgo->to_email= $to_email; // кoму
  $emailgo->to_name= $name;
  $emailgo->subject= $subject; // тeмa
  $emailgo->body= $mail_message; // сooбщeниe
  $emailgo->send(); // oтпрaвляeм

  $json['error'] = 0; // oшибoк нe былo

  echo json_encode($json); // вывoдим мaссив oтвeтa
} else { // eсли мaссив POST нe был пeрeдaн
  echo 'GET LOST!'; // высылaeм
}