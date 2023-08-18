<?php

namespace Chungu\Models;

class Poem extends Model {


    public function category() {
        return $this->belongsTo(Category::class, 'category_id'); // Assuming 'category_id' is the foreign key in the 'poems' table
    }

}