<?php

require_once __DIR__ . '/GuestBookRecord.php';
//namespace public_html;


class GuestBook
{
    protected $path;
    protected $data = [];
    public function __construct()
    {
        $this->path = $path = __DIR__ . '/../bd';
        $lines =  file($this->path, FILE_IGNORE_NEW_LINES);
        //$ret = [];
        foreach ($lines as $line)
        {
            $this->data[] = new GuestBookRecord($line);
        }
    }
    public function getRecords()
    {
        return $this->data;
    }
    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
    }
    public function save()
    {
        $lines = [];
        foreach ($this->data as $record){
            $lines[] = $record->getMessage();

        }
        file_put_contents($this->path, implode("\n", $lines));
    }
}