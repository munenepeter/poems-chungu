<?php

namespace Chungu\Models;

class Author extends Model {


    public function poems() {
        return $this->hasMany(Poem::class, 'author_id');
    }
}
