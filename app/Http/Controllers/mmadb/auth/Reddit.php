<?php

namespace App\Http\Controllers\mmadb\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class Reddit extends Controller {
    /**
     * @return Response
     */
   public function receiveRedirect(Request $request) {
      $code = $request->input('code');

      $url = 'https://www.reddit.com/api/v1/access_token';
      $post = "grant_type=authorization_code&code=" . $code . "&redirect_uri=" . urlencode(env('REDDIT_URL'));
      
      $ch = curl_init();
      
      $headers = array(
         'Content-Type:application/x-www-form-urlencoded',
         'Authorization: Basic '. base64_encode(env('REDDIT_CLIENT_ID') . ":" . env('REDDIT_API_KEY')));
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);      
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_POST,3);
      curl_setopt($ch,CURLOPT_POSTFIELDS,$post);

      //execute post
      $result = curl_exec($ch);
      $result = json_decode($result);

      curl_close($ch);
      
         if(isset($result->error) && strlen($result->error) > 0) {  
            var_dump($result);
            return; // TODO ERROR HANDLING
         } else {
            $access_token = $result->access_token;
         }
         
      $headers = array("Authorization: bearer ".$access_token , "User-Agent:".$_SERVER['HTTP_USER_AGENT']       );
         
      $url = 'https://oauth.reddit.com/api/v1/me';
      
      $ch = curl_init();
      
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);      
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch,CURLOPT_URL,$url);
      $result = curl_exec($ch);
               
      $identity = json_decode($result);
      
         if(!isset($identity->name) || strlen($identity->name) == 0) {
            var_dump('IDENTITY FAIL');
            // TODO BETTER ERROR HANDLING
         }
      
         try {
            $user = User::where('username', $identity->name)->firstOrFail();
         } catch (Exception $e) {
            $user = new User;
            $user->username = $identity->name;
            $user->save();
         }
         
         Auth::login($user);
         return redirect('/');
   }
}