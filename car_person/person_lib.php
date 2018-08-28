<?php
class person {
    //savybes aprasomos klases virsuje
    var $name;

    //toliau aprasoma elgsena (metodai)
    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }

}