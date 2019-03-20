<?php
namespace App\Libraries;
use App\Incoming;
use App\Phone;
use Maatwebsite\Excel\Concerns\FromCollection;
class IncommingExport implements FromCollection
{
  public function collection()
  {
    $incomming_array = Incoming::all();

    $result = [];
    foreach ($incomming_array as $item) {
      $newitem = (object)array();
      $newitem->phone = $item->phone->number;
      $newitem->message = $item->message;
      $newitem->created_at = $item->created_at;
      array_push($result, $newitem);
    }
    return collect($result);
  }
}