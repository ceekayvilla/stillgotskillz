<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\FlashMessages;

class BaseController extends Controller
{
    use FlashMessages;

    protected $data = null;


    /**
     * set the page title & subTitle
     * @param   $page 
     * @param   $subTitle
     */
     protected function  setPageTitle($title, $subTitle){
        view()->share(['pageTitle'=>$title, 'subTitle'=>$subTitle]);
     }

     /**
      * show error page with custom message and type of error page we want to load
      * @param   int $errorCode
      * @param   null $message
      * @return   \Illuminate\Http\Response
      */
     protected function showErrorPage($errorCode = 404, $message=null){
        $data['message'] = $message;
        return response()->view('errors.'.$errorCode, $data, $errorCode);
     }

     /**
      * respond with JSON
      * @param  bool $error
      * @param  int $responseCode
      * @param  array $message
      * @param  null $data
      * @return   \Illuminate\Http\JsonResponse
      */
     protected function responseJson($error = true, $responseCode = 200, $message = [], $data = null){
        return response()->json([
            'error' =>  $error,
            'response_code' =>  $responseCode,
            'message'   =>  $message,
            'data'  =>  $data
        ]);
     }

     /**
      * Redirect to a page/route incase the response is HTTP
      * @param $route
      * @param $message
      * @param string $type
      * @param bool $error
      * @param bool $withOldInputWhenError
      * @return \Illuminate\Http\RedirectResponse
      */
     protected function responseRedirect($route, $message, $type='info', $error=false, $withOldInputWhenError=false){
        $this->setFlashMessage($message,$type);
        $this->showFlashMessages();
        if($error && $withOldInputWhenError){
            return redirect()->back()->withInput();
        }
        return redirect()->route($route);
     }

     /**
      * redirect to previous page
      * @param $message
      * @param string $type
      * @param bool $error
      * @param bool $withOldInputWhenError
      * @return \Illuminate\Http\RedirectResponse
      */
     protected function responseRedirectBack($message, $type='info', $error=false, $withOldInputWhenError=false){
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();
        return redirect()->back();
     }
 }