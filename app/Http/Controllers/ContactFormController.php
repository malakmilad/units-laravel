<?php

namespace App\Http\Controllers;

use App\Events\AdminMailEvent;
use App\Events\AdminSmsEvent;
use App\Http\Requests\StoreContactFormRequest;
use App\Http\Requests\UpdateContactFormRequest;
use App\Models\ContactForm;
use App\Models\Submission;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = ContactForm::get();
        return view('admin.form.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactFormRequest $request)
    {
        ContactForm::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'email' => $request->email ? $request->email : '',
            'phone' => $request->phone ? $request->phone : '',
        ]);
        return response()->json('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactForm $contactForm)
    {
        return view('admin.form.show', compact('contactForm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        return view('admin.form.edit', compact('contactForm'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactFormRequest $request, ContactForm $contactForm)
    {
        $contactForm->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'email' => $request->email ? $request->email : '',
            'phone' => $request->phone ? $request->phone : '',
        ]);
        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactForm $contactForm)
    {
        $contactForm->delete();
        return redirect()->route('form.index')->with(['success' => 'Form Deleted Successfully']);
    }

    public function getData(Request $request)
    {
        $data = ContactForm::findOrFail($request->id);
        return response()->json($data);
    }
    public function submit(Request $request)
    {
        $submission = Submission::create([
            'user_id' => $request->user_id,
            'form_id' => $request->form_id,
            'form' => $request->form,
        ]);
        $email = $submission->contactForm->email;
        if($email){
            event(new AdminMailEvent($submission));
        }
        $sms=$submission->contactForm->phone;
        if($sms){
            event(new AdminSmsEvent($submission));
        }
    }
    public function filter(Request $request)
    {
        $query = ContactForm::query();
        $search = $request->input('search.value');
        $orderDir = $request->input('order.0.dir');
        $orderName = $request->input('order.0.name');
        $perPage = $request->input('length');
        $start = $request->input('start');
        $page = ($start / $perPage) + 1;
        $query->paginate($perPage, ['*'], 'page', $page);
        if ($orderDir && $orderName) {
            $query->orderBy($orderName, $orderDir);
        }
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }
        $result = $query->get();
        $data = [
            'data' => $result,
        ];
        return response()->json($data);
    }
}
