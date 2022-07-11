<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class ThanksgivingListController extends Controller
{
    public function index(Request $request) {
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    public function saveitem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return redirect('/');
    }

    public function deleteItem(Request $request, int $id) {
        error_log(print_r('Delete route'));
        $listItem = ListItem::find($id);
        $listItem->delete();
        return redirect('/'); 
    }

    public function completeItem($id) {
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }
}