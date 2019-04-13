<?php

namespace obray\zpl;

Class ZPL
{
    /**
     * Load From File
     * 
     * Loads a ZPL from the specified file path
     */
    public function loadFromFile(string $filePath)
    {
        $contents = @file_get_contents($filePath);
        if($contents === FALSE){
            throw new \Exception("Unable to read file: " . $filePath);
        }
        $this->loadFromString($contents);
    }

    /**
     * Load From String
     * 
     * Loads a ZPL from the passed string and passes it to parse
     */
    public function loadFromString(string $string)
    {

    }

    private function parse(string $zpl)
    {
        
    }
}