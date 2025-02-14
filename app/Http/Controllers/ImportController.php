<?php

namespace App\Http\Controllers;

use App\Jobs\ImportJob;
use App\Mail\ImportCompleteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;
use League\Csv\Reader;

class ImportController extends Controller
{

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',

        ],
            [
                'file.required' => 'Файл не может быть пустым',
                'file.mimes' => 'Файл не может другого формата',
            ]);

            $path = $request->file('file')->getRealPath();


            $reader = Reader::createFromPath( $path, 'r');
            $reader->setHeaderOffset(0);
            $reader->setDelimiter(';');
            $records = $reader->getRecords();
            // Название	Цена Количество	Сумма	Валюта	ID	SRC
            // импорт улетает в очередь!

            $batch = Bus::batch([])->onQueue('import')->dispatch();
            foreach (collect($records)->chunk(60) as $chunk){


               // dd($chunk);
                //dispatch(new ImportJob($chunk))->onQueue('import');
                $res = $batch->add(new ImportJob($chunk));
            }

                return redirect('/import')
                    ->with('success', 'Записи добавлены в очередь, обновление выполниться в фоновом режиме! ')
                    ->with('batch',$res->id);
    }

public function batch(Request $request)
{
    $complete = Bus::findBatch($request->input('id'));
    if($complete->finished()){
       Mail::to('7535@bk.ru')->cc("admin@vorlis.ru")->bcc("zakaz@miparfum.ru")->send(new ImportCompleteMail());
    }

    /*
       Mail::to('admin@vorlis.ru')
        ->cc($moreUsers)
        ->bcc($evenMoreUsers)
        ->send(new OrderShipped($order));
     */
    return Bus::findBatch($request->input('id'));
}


}
