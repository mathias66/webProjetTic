<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use App\gestion\PhotoGestionInterface ;

class PhotoController extends Controller
{
    public function getPhoto()

    {

        return view('webProjetDb/clientViews.photo');

    }


    public function sendPhoto(ImagesRequest $request, PhotoGestion $photogestion)

    {

       /* $image = $request->file('image');

        if($image->isValid())
        {
            $chemin = config('images.path');
            $extension = $image->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($image->move($chemin, $nom)) {

                return view('webProjet/clientViews.photoOk');

            }

        }
        */
        if( $photogestion->save( $request->file( 'image' ) ) )
        {
            return view('webProjet/clientViews.photoOk');
        }

        return redirect('getPhoto')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');

    }
}
