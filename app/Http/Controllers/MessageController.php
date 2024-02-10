<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('messages.index',[
            'messages' => Message::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        if ($request->hasFile('picture')) {            
            $extension = $request->file('picture')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('picture')->storeAs('public/images/messages', $proofNameToStore);
        }

        Message::create([
            'name' => $request->name,
            'picture' => $proofNameToStore,
            'position' => $request->position,
            'message' => $request->message,
            'status' => true,
        ]);

        return redirect()->route('messages.index')->with('success', 'Data sucessfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        return view('messages.edit',[
            'message' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        $request->validate([
            'name'=> 'sometimes|string|max:255',
            'picture' => 'image|mimes:jpg,png,jpeg',
            'position' => 'sometimes|string|max:499',
            'message' => 'sometimes|string|max:9999',
            'status' => 'sometimes',
        ]);

        if ($request->hasFile('picture')) {
            if ($message->picture != NULL)
                Storage::delete('public/images/messages/' . $message->picture);
            
            $extension = $request->file('picture')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('picture')->storeAs('public/images/messages', $proofNameToStore);
        } else {
            $proofNameToStore = $message->picture;
        }

        $message->update([
            'name' => $request->name,
            'picture' => $proofNameToStore,
            'position' => $request->position,
            'message' => $request->message,
            'status' => $request->status,
        ]);

        return redirect()->route('messages.index')->with('success', 'Data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Data successfully deleted!');
    }

    protected function validateRequest(Request $request)
    {
        return $request->validate([
            'name'=> 'required|string|max:255',
            'picture' => 'image|mimes:jpg,png,jpeg',
            'position' => 'required|string|max:499',
            'message' => 'required|string|max:9999'
        ]);
    }
}
