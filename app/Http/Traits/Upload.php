<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

trait Upload
{
    public function imgUpload($file, $tamanhos = null)
    {
        $nameFile = null;

        if ($file && $file->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $file->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $file->storeAs(env('IMAGEM_PATH') . $this->table, $nameFile, 's3');

            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
            }

            if (!empty($tamanhos)) {
                $arrTamanhos = explode(",", $tamanhos);
                foreach ($arrTamanhos as $size) {
                    list($width, $height) = explode('x', $size);

                    $resize = Image::make($file->getRealPath());
                    $resize->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    })->stream();

                    Storage::disk('s3')->put(env('IMAGEM_PATH') . $this->table . "/{$size}/{$nameFile}", $resize->__toString());
                }
            }

            return $nameFile;
        }
    }

    public function fileUpload($file)
    {
        $nameFile = null;

        if ($file && $file->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $file->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $file->storeAs(env('IMAGEM_PATH') . $this->table, $nameFile, 's3');

            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
            }

            return $nameFile;
        }
    }
}
