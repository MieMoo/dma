<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadRegistrarController extends Controller
{
    
    public function show(Request $request) 
    {
        $filterWord = $request->input('filter_word'); // Get filter word from dropdown
        $query = $request->input('search'); // Get search keyword from input

        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
       
        // Start the query on the transactions table
        $transactions = DB::table('transactions')
            ->when($filterWord, function ($query, $filterWord) {
                return $query->where('status', $filterWord); // Adjust 'status' to your actual column name
            });
            
            if ($fromDate && $toDate) {
                $transactions->whereBetween('created_at', [$fromDate, $toDate]);
            }

        // Add search functionality
        if ($query) {
            $transactions->where(function ($q) use ($query) {
                $q->where('course', 'LIKE', "%{$query}%")
                  ->orWhere('student_name', 'LIKE', "%{$query}%");
            });
        }

        // Execute the query and get the results
        $transactions = $transactions->get();
        $totalDocuments = $transactions->count();
        $acceptedDocuments = $transactions->where('status', 'Accepted')->count(); // Filter accepted
        $archivedDocuments = $transactions->where('status', 'Archived')->count();

        // Pass the data to the view
        return view('head-registrar.dashboard', [
            'transactions' => $transactions,
            'totalDocuments' => $totalDocuments,
            'acceptedDocuments' => $acceptedDocuments, 
            'archivedDocuments' => $archivedDocuments,
            'search' => $query,
            'filterWord' => $filterWord
        ]);
    }
    
}
