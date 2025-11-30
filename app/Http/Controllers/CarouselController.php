<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function update(Request $request) 
    {
        $request->validate([
            // Accept common web image formats including webp
            'banner1' => 'nullable|image|mimes:jpeg,png,jpg,webp,jfif|max:8192',
            'banner2' => 'nullable|image|mimes:jpeg,png,jpg,webp,jfif|max:8192',
            'banner3' => 'nullable|image|mimes:jpeg,png,jpg,webp,jfif|max:8192',
        ]);

        // Helper to remove existing carousel files with any supported extension
        $removeExisting = function($baseName) {
            $extensions = ['webp','jpg','jpeg','png'];
            foreach ($extensions as $ext) {
                $path = public_path("images/{$baseName}.{$ext}");
                if (file_exists($path)) {
                    @unlink($path);
                }
            }
        };

        // Banner 1
        if ($request->hasFile('banner1')) {
            $file = $request->file('banner1');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['webp','jpg','jpeg','png', 'jfif'])) {
                // Fallback to jpg if extension is unexpected
                $ext = 'jpg';
            }
            $baseName = 'carousel_1';
            // remove old variants
            $removeExisting($baseName);
            $imageName = $baseName . '.' . $ext;
            $file->move(public_path('images'), $imageName);
        }

        // Banner 2
        if ($request->hasFile('banner2')) {
            $file = $request->file('banner2');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['webp','jpg','jpeg','png', 'jfif'])) {
                $ext = 'jpg';
            }
            $baseName = 'carousel_2';
            $removeExisting($baseName);
            $imageName = $baseName . '.' . $ext;
            $file->move(public_path('images'), $imageName);
        }

        // Banner 3
        if ($request->hasFile('banner3')) {
            $file = $request->file('banner3');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['webp','jpg','jpeg','png', 'jfif'])) {
                $ext = 'jpg';
            }
            $baseName = 'carousel_3';
            $removeExisting($baseName);
            $imageName = $baseName . '.' . $ext;
            $file->move(public_path('images'), $imageName);
        }

        return back()->with('success', 'Imagens do carrossel atualizadas com sucesso!');
    }
}