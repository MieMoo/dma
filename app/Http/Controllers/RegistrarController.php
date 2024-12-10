<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pulled;
use App\Models\Transaction;
use App\Models\Student; 
use Illuminate\Support\Facades\Auth;

class RegistrarController extends Controller
{
    public function show(Request $request) 
    { 
        $user = Auth::user();

        $query = $request->input('search');
    
        // Fetch data from the "students" table and apply the search filter
        $studinfos = DB::table('studinfos');
    
        if ($query) {
            $studinfos->where('studentno', 'LIKE', "%{$query}%")
                     ->orWhere('studentname', 'LIKE', "%{$query}%"); // Ensure this line ends with a semicolon
        }
    
        $courses = [];
        $window = $user->window;
    
        if ($window == 1) {
            $courses = ['BSIT', 'BSCS', 'BSIE', 'BSCE'];
        } elseif ($window == 2) {
            $courses = ['BSREM'];
        }

        $studinfos = $studinfos->get();

        return view('registrar.dashboard', compact('studinfos', 'user', 'courses'));
    }

    public function uploadFile() 
    { 
        return view('registrar.uploadFile'); 
    }

    public function transaction(Request $request) 
    { 
        return view('registrar.transaction'); 
    }

    public function storeTransaction(Request $request){
        $validated = $request->validate([
            'student_no' => 'required',
            'student_name' => 'required',
            'course' => 'nullable',
            'year_level' => 'nullable',
            'purpose' => 'required',
            'amount' => 'required|numeric',
            'invoice_number' => 'required|unique:transactions',
            'document_type' => 'required',
            'prioritization' => 'required',
        ]);

        $transactions = Transaction::create([
            'student_no' => $request->student_no,
            'student_name' => $request->student_name,
            'course' => $request->course,
            'year_level' => $request->year_level,
            'purpose' => $request->purpose,
            'amount' => $request->amount,
            'invoice_number' => $request->invoice_number,
            'document_type' => $request->document_type,
            'prioritization' => $request->prioritization,
        ]);

        return redirect()->route('registrar.transaction')->with('success', 'Data stored successfully!');
    }

    public function track(Request $request) 
    { 
        $query = $request->input('search');
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        $pulleds = DB::table('pulleds');
        $totalDocuments = $pulleds->count();
        
        $pulleds = $pulleds->get();
        // Fetch data from the "trackings" table and apply the search filter
        $students = DB::table('students');

        
        if ($fromDate && $toDate) {
            $students->whereBetween('updated_at', [$fromDate, $toDate]);
        }

        if ($query) {
            $students->where('student_number', 'LIKE', "%{$query}%")
                      ->orWhere('course', 'LIKE', "%{$query}%")
                      ->orWhere('first_name', 'LIKE', "%{$query}%")
                      ->orWhere('current_year_level', 'LIKE', "%{$query}%")
                      ->orWhere('last_name', 'LIKE', "%{$query}%");
        }

        // Retrieve the filtered or full data
        $students = $students->get();

        // Pass data to the "Track" view with the search term
        return view('registrar.Track', ['students' => $students, 'totalDocuments' => $totalDocuments, 'search' => $query]);
    }
    

    public function statRequest(Request $request) 
    { 
        
        $query = $request->input('search'); // Get search keyword from input

        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
       
        // Start the query on the transactions table
        $transactions = DB::table('transactions');
           
            
            if ($fromDate && $toDate) {
                $transactions->whereBetween('created_at', [$fromDate, $toDate]);
            }

        // Add search functionality
        if ($query) {
            $transactions->where(function ($q) use ($query) {
                $q->where('course', 'LIKE', "%{$query}%")
                  ->orWhere('student_no', 'LIKE', "%{$query}%")
                  ->orWhere('year_level', 'LIKE', "%{$query}%")
                  ->orWhere('student_name', 'LIKE', "%{$query}%");
            });
        }

        // Execute the query and get the results
        $transactions = $transactions->get();
        $totalDocuments = $transactions->count();
        $acceptedDocuments = $transactions->where('status', 'Accepted')->count(); // Filter accepted
        $archivedDocuments = $transactions->where('status', 'Archived')->count();

        // Pass the data to the view
        return view('registrar.statRequest', [
            'transactions' => $transactions,
            'totalDocuments' => $totalDocuments,
            'acceptedDocuments' => $acceptedDocuments, 
            'archivedDocuments' => $archivedDocuments,
            'search' => $query,
            
        ]);
    }


    public function validate() 
    { 
        return view('registrar.validate'); 
    }

    public function statTransac(Request $request) 
    { 
        $query = $request->input('search'); // Get search keyword from input

        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
       
        // Start the query on the transactions table
        $transactions = DB::table('transactions');
           
            
            if ($fromDate && $toDate) {
                $transactions->whereBetween('created_at', [$fromDate, $toDate]);
            }

        // Add search functionality
        if ($query) {
            $transactions->where(function ($q) use ($query) {
                $q->where('course', 'LIKE', "%{$query}%")
                  ->orWhere('student_no', 'LIKE', "%{$query}%")
                  ->orWhere('year_level', 'LIKE', "%{$query}%")
                  ->orWhere('student_name', 'LIKE', "%{$query}%");
            });
        }

        // Execute the query and get the results
        $transactions = $transactions->get();
        $totalDocuments = $transactions->count();
        $acceptedDocuments = $transactions->where('status', 'Accepted')->count(); // Filter accepted
        $archivedDocuments = $transactions->where('status', 'Archived')->count();

        // Pass the data to the view
        return view('registrar.statTransac', [
            'transactions' => $transactions,
            'totalDocuments' => $totalDocuments,
            'acceptedDocuments' => $acceptedDocuments, 
            'archivedDocuments' => $archivedDocuments,
            'search' => $query,
            
        ]);
    }

    public function reRecord() 
    { 
        return view('registrar.reRecord'); 
    }

    public function released(Request $request) 
    { 
        $query = $request->input('search'); // Get search keyword from input

        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
       
        // Start the query on the transactions table
        $transactions = DB::table('transactions');
           
            
            if ($fromDate && $toDate) {
                $transactions->whereBetween('created_at', [$fromDate, $toDate]);
            }

        // Add search functionality
        if ($query) {
            $transactions->where(function ($q) use ($query) {
                $q->where('course', 'LIKE', "%{$query}%")
                  ->orWhere('student_no', 'LIKE', "%{$query}%")
                  ->orWhere('year_level', 'LIKE', "%{$query}%")
                  ->orWhere('student_name', 'LIKE', "%{$query}%");
            });
        }

        // Execute the query and get the results
        $transactions = $transactions->get();
        $totalDocuments = $transactions->count();
 

        // Pass the data to the view
        return view('registrar.released', [
            'transactions' => $transactions,
            'totalDocuments' => $totalDocuments,
            'search' => $query,
            
        ]);
    }

    public function pulled(Request $request) 
    { 
        $query = $request->input('search');

        // Fetch data from the "trackings" table and apply the search filter
        $pulleds = DB::table('pulleds');

        if ($query) {
            $pulleds->where('studentNo', 'LIKE', "%{$query}%")
                      ->orWhere('tcourse', 'LIKE', "%{$query}%")
                      ->orWhere('tlevel', 'LIKE', "%{$query}%")
                      ->orWhere('studentName', 'LIKE', "%{$query}%");
        }

        // Retrieve the filtered or full data
        $pulleds = $pulleds->get();

        // Pass data to the "Track" view with the search term
        return view('registrar.pulled', ['pulleds' => $pulleds, 'search' => $query]);
        
    }

    public function storePulled(Request $request){
        $validated = $request->validate([
            'studentNo' => 'required|string',
            'studentName' => 'required|string',
            'tcourse' => 'required|string',
            'tlevel' => 'required|string',
            'fromDate' => 'required|date',
            //'toDate' => 'required|date',
            'documentCategory' => 'required|string',
            'descriptionRequest' => 'required|string',
        ]);

        $pulled = Pulled::create([
            'studentNo' => $request->studentNo,
            'studentName' => $request->studentName,
            'tcourse' => $request->tcourse,
            'tlevel' => $request->tlevel,
            'fromDate' => $request->fromDate,
          //  'toDate' => $request->toDate,
            'documentCategory' => $request->documentCategory,
            'descriptionRequest' => $request->descriptionRequest,
        ]);
        return redirect()->route('registrar.pulled')->with('success', 'Data stored successfully!');
    
    }
    

    public function checkIn(Request $request) 
    { 
        $query = $request->input('search');

        // Fetch data from the "trackings" table and apply the search filter
        $pulleds = DB::table('pulleds');

        if ($query) {
            $pulleds->where('studentNo', 'LIKE', "%{$query}%")
                      ->orWhere('tcourse', 'LIKE', "%{$query}%")
                      ->orWhere('tlevel', 'LIKE', "%{$query}%")
                      ->orWhere('studentName', 'LIKE', "%{$query}%");
        }

        // Retrieve the filtered or full data
        $pulleds = $pulleds->get();

        // Pass data to the "Track" view with the search term
        return view('registrar.checkIn', ['pulleds' => $pulleds, 'search' => $query]);
        
    }

    public function checkList(Request $request) 
    { 
        $query = $request->input('search');

        // Fetch data from the "trackings" table and apply the search filter
        $pulleds = DB::table('pulleds');

        if ($query) {
            $pulleds->where('studentNo', 'LIKE', "%{$query}%")
                      ->orWhere('tcourse', 'LIKE', "%{$query}%")
                      ->orWhere('tlevel', 'LIKE', "%{$query}%")
                      ->orWhere('studentName', 'LIKE', "%{$query}%");
        }

        // Retrieve the filtered or full data
        $pulleds = $pulleds->get();

        // Pass data to the "Track" view with the search term
        return view('registrar.checkList', ['pulleds' => $pulleds, 'search' => $query]);
        
       
    }

    public function update(Request $request)
    {
        $request->validate([
            'selected_students' => 'required|array',
            'selected_students.*' => 'exists:students,id', // Validate that the student ID exists in the DB
            'status' => 'required|array', // Ensure remarks are provided for each student
            'status.*' => 'in:Active,Inactive,Graduate', // Validate that the remark is one of the predefined options
        ]);

           // Loop through selected students and update their remarks
           foreach ($request->selected_students as $studentId) {
            $students = Student::find($studentId);
            if ($students) {
                $status = $request->input('status.' . $studentId); // Update the remarks field
                $students->status = $status;
                $students->save(); // Save the changes
            }
        }

        // Redirect back with a success message
        return redirect()->route('registrar.track')->with('success', 'Data stored successfully!');
    }
    
}

