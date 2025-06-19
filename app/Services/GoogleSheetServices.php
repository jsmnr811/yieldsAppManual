<?php

namespace App\Services;

use Carbon\Carbon;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetServices
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

   public function handle($data)
{
    $sheetName = 'Responses';
    $spreadsheetId = config('google.post_spreadsheet_id');

    // Get existing sheet titles
    $sheets = Sheets::spreadsheet($spreadsheetId)->sheetList();

    // Only add the sheet if it does not already exist
    if (!in_array($sheetName, $sheets)) {
        Sheets::spreadsheet($spreadsheetId)->addSheet($sheetName);
    }

    // Ensure $data is an array (in case it's a string)
    if (!is_array($data)) {
        $data = [$data];  // Wrap the string in an array
    }

    // Remove or replace null values with an empty string
    $data = array_map(function ($value) {
        return $value === null ? '' : $value;
    }, $data);

    // Append data to the sheet
    Sheets::spreadsheet($spreadsheetId)->sheet($sheetName)->append([$data]);
}
}
