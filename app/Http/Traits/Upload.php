<?php

namespace App\Http\Traits;

trait Upload
{
    public function imagemUpload($imagem)
    {
        $nomeImagem = null;

        if ($imagem && $imagem->isValid()) {

            $name = uniqid(date('HisYmd'));

            $extensao = $imagem->extension();

            $nomeImagem = "{$name}.{$extensao}";

            $upload = $imagem->move(public_path('storage/pessoas'), $nomeImagem);

            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
            }

            return $nomeImagem;
        }
    }
}
