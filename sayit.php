<?
system('echo "(voice_cstr_pl_em_diphone)" > mow.txt');
system('echo "(SayText \"'.$_POST["text"].'\")" >> mow.txt');
system('echo "(quit)" >> mow.txt'); 
exec('festival mow.txt');
echo $_POST["text"];
