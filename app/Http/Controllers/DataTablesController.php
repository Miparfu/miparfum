<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DataTablesController extends Controller
{
    public function index(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data'] ? $columnName_arr[$columnIndex]['data']  : 'name';// Column name
        $columnSortOrder = $order_arr[0]['dir'] ? $order_arr[0]['dir'] : 'desc'; // asc or desc
        $searchValue = $search_arr['value']; // Search value
        $searchValue = str_replace(",", " ", $searchValue);
        // Total records

        $totalRecords = Product::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Product::select('count(*) as allcount')->where('name', 'like', '%' .trim($searchValue). '%')->count();

        // Fetch records
        $records = Product::orderBy($columnName,$columnSortOrder)
            ->where('name', 'like', '%' .$searchValue . '%')
            ->where('price','>',0)
            ->select('src','name','price','id','slug')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $src = $record->src;
            $name = $record->name;
            $price = $record->price;
            $id = $record->id;
            $slug = $record->slug;
            $data_arr[] = array(
                    $src,
                    $name,
                    $price,
                    $slug,
                    $id

            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "data" => $data_arr
        );

        echo json_encode($response);
        exit;

//dd($data);

    }


}
