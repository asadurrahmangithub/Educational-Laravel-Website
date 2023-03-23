<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturesItem extends Model
{
    use HasFactory;
    private static $featuresItem, $image, $imageNewName, $directory, $imgUrl;
    public static function saveFeaturesItem($request)
    {
        $validated = $request->validate([
            'feature_itemTitle' => 'required',
            'feature_itemSubtitle' => 'required',
            'image' => 'nullable',
        ]);
        if ($request->id){
            self::$featuresItem = FeaturesItem::find($request->id);
        }else{
            self::$featuresItem =new FeaturesItem();
        }
        self::$featuresItem->feature_itemTitle = $validated['feature_itemTitle'];
        self::$featuresItem->feature_itemSubtitle = $validated['feature_itemSubtitle'];
        if ($request->file('image')) {
            if (file_exists(self::$featuresItem->image)) {
                unlink(self::$featuresItem->image);
            }
            self::$featuresItem->image = self::getImagUrl($request);
        }
        self::$featuresItem->publication_status = $request->publication_status;
        self::$featuresItem->save();
    }

    private static function getImagUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'features-icon'.'-'.rand().'.'.self::$image->extension();
        self::$directory = 'adminAssets/assets/custom-image/features-icon/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public static function status($id)
    {
        self::$featuresItem = FeaturesItem::find($id);
        if (self::$featuresItem->publication_status == 1) {
            self::$featuresItem->publication_status = 2;
            self::$featuresItem->save();
        } else {
            self::$featuresItem->publication_status = 1;
            self::$featuresItem->save();
        }
    }
}
