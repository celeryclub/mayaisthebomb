<?php

class Reason extends Model {
    public static $_table = 'reasons';

    public function update($attributes) {
        $this->hydrate(array_merge($this->as_array(), $attributes));
    }
}
