<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'name', 'top', 'parent',
];
    protected $table = 'categories';
	public function children() {
	  return $this->subCategory();
	}
  public function subCategory() {
    return $this->hasMany(Category::class, 'parent');
  }
  public function parentCategory()
  {
    //return $this->belongsTo(Category::class, 'id', 'parent');
   return $this->hasOne(Category::class,'id','parent');
  
  }
  public function products(){
  	return $this->hasMany(Product::class, 'category_id');
  }
  public function parent() {
     return $this->parentCategory();
  }
  public function getCategoriaCompleta() {
  return $this->parentCategory->name . " ". $this->name;


}


}


