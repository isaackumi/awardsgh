<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   Public function index(){
     return view('index');
   }

   Public function contact(){
     return view('contact');
   }

   Public function nominate(){
     return view('nominate');
   }

   Public function seatBooking(){
     return view('seat-booking');
   }

   Public function faqs(){
     return view('faqs');
   }

   Public function pricing(){
     return view('pricing');
   }

   Public function sponsorship(){
     return view('sponsorship');
   }

   Public function awardCategory(){
     return view('award-category');
   }


      Public function awardProcess(){
        return view('awarding-process');
      }

      Public function categoryDetails(){
        return view('category-details');
      }

      Public function categoryDetails1(){
        return view('category-details1');
      }

      Public function selectionCriteria(){
        return view('selection-criteria', ['title' => 'selection criteria']);
      }
}
