<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginRegister extends Controller
{
    public function postRegister(Request $request){
      //Retrieve the name input field
      $name = $request->input('name');
      echo 'Name: '.$name;
      echo '<br>';
      
      //Retrieve the username input field
      $username = $request->username;
      echo 'Username: '.$username;
      echo '<br>';
      
      //Retrieve the password input field
      $password = $request->password;
      echo 'Password: '.$password;

      //$name = $request->input('stud_name');
      // DB::insert('insert into student (name,username,password) values(?,?,?)',[$name,$username,$password]);
      // echo "Record inserted successfully.<br/>";
      // echo '<a href = "/insert">Click Here</a> to go back.';
   }

   
}
