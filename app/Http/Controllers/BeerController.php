<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
  public function index ()
 {
   $brews = Contact::all();
   return Response::json($brews);
 }
 public function show ($id)
 {
   $brew = Contact::find($id);
   return Response::json($brew);
 }
 public function update (Request $request, $id)
 {
   $brew = Contact::find($id);
   $brew->update($request->all());
   return Response::json(['updated' => true]);
 }
 public function create (Request $request)
 {
   $brew = Contact::create($request->all());
   return Response::json(['created' => true]);
 }
 public function destroy ($id)
 {
   $brew = Contact::find($id);
   $brew->delete();
   return Response::json(['deleted' => true]);
 }
}
