<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Items;

class ItemController extends Controller
{
   function addItem(Request $req){

  $item =new Items();
  $item->id =null;
  $item->item =$req->item;
  $item->save();

   return redirect('/');

   }

    function showItem(){

  $items =Items::all();
  return view('index',['items'=>$items]);

    }

    function deleteItem($id){
    
      $item =  Items::find($id);
      $item->delete();
      return redirect('/');


    }

    function editItem($id){

      $items =Items::find($id);

      return view('edit',['items'=>$items]);




    }
    function updateItem(Request $req){

  $item=Items::find($req->id);
  $item->item = $req->item;
  $item->save();
  return redirect('/');


    }
}
