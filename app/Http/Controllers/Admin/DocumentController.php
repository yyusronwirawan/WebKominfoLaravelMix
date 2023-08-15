<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Document\StoreDocumentRequest;
use App\Http\Requests\Admin\Document\UpdateDocumentRequest;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::latest()->get();
        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        $attr = $request->validated();

        if ($request->file('file') && $request->file('file')->isValid()) {

            $filename = $request->file('file')->hashName();
            $request->file('file')->storeAs('upload/document/', $filename, 'public');

            $attr['file'] = $filename;
        }

        Document::create($attr);
        return redirect()->route('admin.document.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('admin.document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('admin.document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $attr = $request->validated();

        if ($request->file('file') && $request->file('file')->isValid()) {

            $path = storage_path('app/public/upload/document/');
            $filename = $request->file('file')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // delete old file from storage
            if ($document->file != null && file_exists($path . $document->file)) {
                unlink($path . $document->file);
            }

            $request->file('file')->storeAs('upload/document/', $filename, 'public');

            $attr['file'] = $filename;
        }

        $document->update($attr);
        return redirect()->route('admin.document.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        try {
            // determine path file
            $pathFile = storage_path('app/public/upload/document/');

            // if document file exist remove file from directory
            if ($document->file != null && file_exists($pathFile . $document->file)) {
                unlink($pathFile . $document->file);
            }

            $document->delete();
            return redirect()->route('admin.document.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.document.index')
                ->with('error', __($th->getMessage()));
        }
    }
}
