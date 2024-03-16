<?php

namespace App\Imports;

use App\Models\Fixancare\MobileComplaint;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Auth;

class MobileComplaintImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MobileComplaint([
            //
        ]);
    }
    public function rules(): array
    {
        return [
            'brand_code' => 'required|unique:brands,code',
            'brand_name' => 'required',

             // Above is alias for as it always validates in batches
             '*.brand_code' => 'required|unique:brands,code',
             '*.brand_name' => 'required',
        ];
    }
}
