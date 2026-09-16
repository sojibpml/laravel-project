<?php
namespace App\Services;
use Illuminate\Http\UploadedFile;
class ImageUploadService
{
    public function upload(UploadedFile $file, string $folder = 'uploads'): string
    {
        $fileName = time() . "_" . uniqid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($folder, $fileName, 'public');
        return $path;
    }
}