<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Http\Requests\Admin\Service\UpdateServiceRequest;
use App\Models\Service;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $attr = $request->validated();

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $path = storage_path('app/public/upload/layanan/');
            $filename = $request->file('thumbnail')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('thumbnail')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            $attr['thumbnail'] = $filename;
        }

        Service::create($attr);
        return redirect()->route('admin.services.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $attr = $request->validated();

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $path = storage_path('app/public/upload/layanan/');
            $filename = $request->file('thumbnail')->hashName();

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            Image::make($request->file('thumbnail')->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($path . $filename);

            // delete old thumbnail from storage
            if ($service->thumbnail != null && file_exists($path . $service->thumbnail)) {
                unlink($path . $service->thumbnail);
            }

            $attr['thumbnail'] = $filename;
        }

        $service->update($attr);
        return redirect()->route('admin.services.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {
            // determine path thumbnail
            $path = storage_path('app/public/upload/layanan/');

            // if thumbnail exist remove file from directory
            if ($service->thumbnail != null && file_exists($path . $service->thumbnail)) {
                unlink($path . $service->thumbnail);
            }

            $service->delete();
            return redirect()->route('admin.services.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.services.index')
                ->with('error', __($th->getMessage()));
        }
    }
}
