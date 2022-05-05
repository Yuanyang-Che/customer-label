<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Auth::user()->labels;

        $this->authorize('viewAny', Label::class);

        return view('labels.index', [
            'labels' => $labels
        ]);
    }

    public function create()
    {
        return view('labels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|unique:labels,label,' . Auth::user()->id
        ]);

        $label = new Label();
        $label->label = $request->input('label');
        $label->user()->associate(Auth::user());
        $label->save();

        return redirect()
            ->route('label.index')
            ->with('success', 'Successfully created label');
    }

    public function show($id)
    {
        $label = Label::find($id);

        $this->authorize('update', $label);

        return view('labels.show', [
            'label' => $label
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'label' => 'required|unique:labels,label,' . Auth::user()->id
        ]);

        $label = Label::find($id);
        $label->label = $request->input('label');
        $label->save();

        return redirect()
            ->route('label.index')
            ->with('success', 'Successfully updated label');
    }

    public function delete($id)
    {
        $label = Label::find($id);
        $this->authorize('delete', $label);
        $label->delete();

        return redirect()
            ->route('label.index')
            ->with('success', 'Successfully deleted label');
    }
}
