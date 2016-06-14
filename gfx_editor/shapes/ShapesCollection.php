<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\shapes;

/**
 * Description of ShapesCollection
 *
 * @author Victor Aluko
 */
class ShapesCollection implements \ArrayAccess, \Countable {
    
    protected $objects;
    
    public function __construct() {
        $this->objects = [];
    }

    public function count($mode = 'COUNT_NORMAL') {
        
    }

    public function offsetExists($offset) {
        
    }

    public function offsetGet($offset) {
        
    }

    public function offsetSet($offset, $value) {
        
    }

    public function offsetUnset($offset) {
        
    }
    
    public function addItem(IShape $item, $key) { 
        
        $this->objects[$key] = $item;
    }
    
    public function getItem($key) {
        if (is_null($key) || !isset($this->objects[$key])) {
            throw new \InvalidArgumentException("Key {$key} not found");
        }
        return $this->objects[$key];
    }
    
    public function deleteItem($key) {
        if (is_null($key) || !isset($this->objects[$key])) {
            throw new \InvalidArgumentException("Key {$key} not found");
        }
        unset($this->objects[$key]);
    }

}
