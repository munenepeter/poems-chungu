<?php

namespace Chungu\Models;

class Category extends Model {


    public function poems() {
        return $this->hasMany(Poem::class, 'category_id'); 
    }
}