<?php

namespace App\Http\Controllers;

use App\Imports\BusinessImport;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BusinessController extends Controller
{
    // import file
    public function import(Request $request)
    {
        // Validate file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:10240',
        ]);

        Excel::import(new BusinessImport(), $request->file('file'));

        return redirect()->back()->with('success', 'File Imported Successfully');
    }

    // Display all businesses
    public function display()
    {
        $data = Business::paginate(10);
        $count = Business::count();

        return view('pages.reports.display', compact('data', 'count'));
    }

    // Find duplicate businesses
    public function duplicate()
    {

        $data = Business::select('business_name', 'area', 'city', DB::raw('COUNT(*) as total'))
            ->groupBy('business_name', 'area', 'city')
            ->having('total', '>', 1)
            ->get();


        return view('pages.duplicate', compact('data'));
    }

    // mergeDuplicates data
    public function mergeDuplicates()
    {
        // Find duplicate groups by name, area, and city
        $duplicates = Business::select('business_name', 'area', 'city')
            ->groupBy('business_name', 'area', 'city')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($duplicates as $duplicate) {
            // Fetch all records for the duplicate group
            $duplicateRecords = Business::where('business_name', $duplicate->business_name)
                ->where('area', $duplicate->area)
                ->where('city', $duplicate->city)
                ->get();

            // Keep the first record and delete others
            $primaryRecord = $duplicateRecords->shift(); // Keep the first record

            foreach ($duplicateRecords as $record) {
                $record->delete(); // Delete remaining records
            }
        }

        return redirect(route('businesses.duplicate'))->with('success', 'Duplicate records merged successfully!');
    }

    // Display city-wise data
    public function city()
    {
        $data = Business::select('city', DB::raw('count(*) as total'))->groupBy('city')->get();

        return view('pages.reports.city', compact('data'));
    }

    // Display category + city-wise data
    public function categoryCity()
    {
        $data = Business::select('category', 'city', DB::raw('COUNT(*) as count'))
            ->groupBy('category', 'city')
            ->get();

        return view('pages.reports.category-city', compact('data'));
    }

    // Display category + area-wise data
    public function categoryArea()
    {
        $data = Business::select('category', 'area', DB::raw('count(*) as total'))
            ->groupBy('category', 'area')
            ->get();


        return view('pages.reports.category-area', compact('data'));
    }

    // Display unique  records
    public function unique()
    {
        $data = Business::select('business_name', 'area', 'city', 'mobile_no', 'category', 'sub_category')
            ->distinct()
            ->get();

        $count = $data->count();

        return view('pages.reports.unique', compact('data', 'count'));
    }

    // Display duplicate  records
    public function reportDuplicate()
    {
        $data = Business::select('business_name', 'area', 'city')
            ->groupBy('business_name', 'area', 'city')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        // Count the number of duplicate records
        $count = $data->count();

        return view('pages.reports.duplicate', compact('data', 'count'));
    }

    // Display incomplete  records
    public function incomplete()
    {

        // Fetch records where any of the fields ('business_name', 'area', 'city', 'mobile_no', 'category', 'sub_category') are NULL or empty (including '0' for 'mobile_no').
        $data = Business::whereNull('business_name')
            ->orWhere('business_name', '')
            ->orWhereNull('area')
            ->orWhere('area', '')
            ->orWhereNull('city')
            ->orWhere('city', '')
            ->orWhereNull('mobile_no')
            ->orWhere('mobile_no', '')
            ->orWhere('mobile_no', '0')
            ->orWhereNull('category')
            ->orWhere('category', '')
            ->orWhereNull('sub_category')
            ->orWhere('sub_category', '')
            ->get();

        $count = $data->count();
        return view('pages.reports.incomplete', compact('data', 'count'));

    }

}
