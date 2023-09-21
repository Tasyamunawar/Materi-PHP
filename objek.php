<?php

class kdrama {
    public $judul;
    public $gendre;
    public $episode;

    public function __construct($judul, $gendre, $episode){
        $this->judul = $judul;
        $this->gendre = $gendre;
        $this->episode = $episode;
    }

    public function showKdrama(){
        return "Judul drama yang sedang ditonton adalah $this->judul
        dramanya bergendre $this->gendre dan punya $this->episode eps";
        
    }
}

$nama = new kdrama("2521", "Sad Ending", 16);
print $nama->showKdrama();

?>