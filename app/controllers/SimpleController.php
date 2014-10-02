<?php

class SimpleController extends BaseController
{
   /**
      Handles form data
   */
   public function respond()
   {
      //  Make sure user entered something
      if (Input::has('name'))
      {
         //  User entered data
         //  Store data in variable
         $input = Input::get('name');
         //  Pass data to view, and return
         return View::make('response')->with('name', $input);
      }
      
   }
}

?>