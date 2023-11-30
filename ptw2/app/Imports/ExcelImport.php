<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Contact([
            //
            'name' => $row['name'],
            'phone' => $row['phone'],
            'subject' => $row['subject'],
            'email' => $row['email'],
            'message' => $row['message'],
        ]);
    }
}