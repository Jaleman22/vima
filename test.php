<?php
$username=$_POST['username'];
$password=$_POST['pwd'];

if (isset($_POST['submit']))
{
   if(!empty($username) && !empty(password))
   {
      if($username=='VIMAPLAYER' && $password=='vima2022')
      {
         header (Location:"https://villarrealmanitoba.com");
      }
      else{
          echo "Please correct usarname or password
      }
    }
    else{
         echo "Please fill all fields"
    }
}
?>
