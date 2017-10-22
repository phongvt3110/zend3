<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 10/22/17
 * Time: 11:32 PM
 */

namespace Album\Model;


class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
    }
}