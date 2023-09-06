<?php

namespace App\Exports;

use App\Models\Invoices;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvociesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Invoices::all();

        return invoices::select('invoice_number','invoice_Date','Due_date','Status')->get();
    }
}
