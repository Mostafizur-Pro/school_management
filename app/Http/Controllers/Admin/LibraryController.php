<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Book;
use App\BookIssue;
use App\Rack;
use Session;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use phpDocumentor\Reflection\Types\Null_;
use Carbon\Carbon;
class LibraryController extends Controller
{
    public function book_create()
    {
        Session::put('page', 'book_create');
        $racks = Rack::get();
        return view('admin.library.book_create',compact('racks'));
    }

    // rack
    public function rack_create()
    {
        Session::put('page', 'rack_create');
        $rack = Rack::get();
        return view('admin.library.rack_create',compact('rack'));
    }

    public function rack_store(Request $request)
    {
        $request->validate([
            'rack_name' => 'required',
        ]);

        $rack = new Rack();
        $rack->rack_name = $request->rack_name;
        $rack->save();

        Toastr::success('Rack Successfully Insert', 'success');
        return redirect()->back();
        
    }

    public function library_book_store(Request $request){
        $request->validate([
            
            'book_title'=> 'required',
            'book_edition'=> 'required',
            'book_isbn_number'=> 'required|unique:books',
            'book_publisher'=> 'required',
            'book_author'=> 'required',
            'book_qty'=> 'required',
            'book_rack_id'=> 'required',
            'book_rack_row'=> 'required',
            'book_rack_coloum'=> 'required',
            'book_post_date'=> 'required',
         ]);
            $data = $request->all();
            
            Book::create($data);
            Toastr::success('Book Successfull Added', 'success');
            return redirect(route('admin.library.book.list'));
    }

    public function library_book_list()
    {
        Session::put('page', 'library_book_list');
        $books = Book::orderBy('book_title')->get();
        return view('admin.library.book_list',compact('books'));
    }

    public function library_issue()
    {
        Session::put('page', 'library_issue');

        $bookIssues =BookIssue::
            join('students', 'book_issues.student_id', '=', 'students.roll')
            ->join('books', 'book_issues.book_id', '=', 'books.id')
            ->select('book_issues.id','book_issues.status','book_issues.returned','book_issues.issue_date','book_issues.return_date','students.student_name','students.roll','books.book_isbn_number','books.book_title')
            ->get();
        return view('admin.library.issue',compact('bookIssues'));
    }

    public function library_issue_create()
    {
        return view('admin.library.issueCreate');
    }

    public function library_issue_store(Request $request)
    {
         $request->validate([
            'student_id' => 'required',
            'book_id' => 'required',
            'issue_date' => 'required',
            'return_date' => 'required',
         ]);
         
        
            $student = Student::where('roll',$request->student_id)->first();
            $issubook = Book::where('book_isbn_number',$request->book_id)->first();

            if($student == NULL)
            {
                Toastr::error('Student id does not match', 'error');
                return redirect()->back();
            }elseif($issubook == NULL){
                Toastr::error('ISBN number does not match', 'error');
                return redirect()->back();
            }else{
                $bookIssue = new BookIssue();
                $bookIssue->student_id = $request->student_id;
                $bookIssue->book_id = $issubook->id;
                $bookIssue->issue_date = $request->issue_date;
                $bookIssue->return_date = $request->return_date;
                $bookIssue->save();
                Toastr::success('Book Issue Successfully', 'success');
                return redirect(route('admin.library.issue'));
            }
        
    }

    public function library_issue_return($id)
    {
        BookIssue::where('status',0)->where('id',$id)->update(['status'=>'1','returned'=> date('Y-m-d')]);
        return redirect()->back();
    }
}
