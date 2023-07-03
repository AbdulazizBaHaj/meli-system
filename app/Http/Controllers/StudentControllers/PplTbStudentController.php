<?php

use App\Http\Controllers\Controller;

use App\Models\StudentModels\PplTbStudent;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $students = PplTbStudent::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'UniqueNumber' => 'required|max:10',
            'FirstName' => 'nullable|max:250',
            'LastName' => 'nullable|max:250',
            'Email' => 'nullable|email|max:250',
            'Mobile' => 'nullable|max:10',
            'Company' => 'nullable|max:250',
            'EMADNumber' => 'nullable|max:250',
            'ReceiveMarketingEmails' => 'required|in:y,n',
            'IsActive' => 'nullable|in:y,n',
            'IsDeleted' => 'nullable|in:y,n',
        ]);

        $student = PplTbStudent::create($validatedData);

        // Optionally, you can redirect to the student's show page or perform any other actions

        return redirect()->route('students.show', $student->id);
    }

    public function show($id)
    {
        $student = PplTbStudent::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = PplTbStudent::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'UniqueNumber' => 'required|max:10',
            'FirstName' => 'nullable|max:250',
            'LastName' => 'nullable|max:250',
            'Email' => 'nullable|email|max:250',
            'Mobile' => 'nullable|max:10',
            'Company' => 'nullable|max:250',
            'EMADNumber' => 'nullable|max:250',
            'ReceiveMarketingEmails' => 'required|in:y,n',
            'IsActive' => 'nullable|in:y,n',
            'IsDeleted' => 'nullable|in:y,n',
        ]);

        $student = PplTbStudent::findOrFail($id);
        $student->update($validatedData);

        // Optionally, you can redirect to the student's show page or perform any other actions

        return redirect()->route('students.show', $student->id);
    }

    public function destroy($id)
    {
        $student = PplTbStudent::findOrFail($id);
        $student->delete();

        // Optionally, you can redirect to the students index page or perform any other actions

        return redirect()->route('students.index');
    }
}
