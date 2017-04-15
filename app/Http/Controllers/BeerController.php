<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class BeerController extends Controller
{
  public function index ()
  {
   $brews = Beer::all();
   return Response::json($brews);
  }
 public function show ($id)
  {
   $brew = Beer::find($id);
   return Response::json($brew);
  }
 public function update (Request $request, $id)
  {
   $brew = Beer::find($id);
   $brew->update($request->all());
   return Response::json(['updated' => true]);
  }
 public function create (Request $request)
 {
   $brew = Beer::create($request->all());
   return Response::json(['created' => true]);
 }
 public function destroy ($id)
 {
   $brew = Beer::find($id);
   $brew->delete();
   return Response::json(['deleted' => true]);
 }
}
