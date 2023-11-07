<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $limit = 5;

    public function increment(){
        if($this->count<$this->limit){
          $this->count++;
        }else{
          session()->flash('status','The count is too high');
        }

  }
    public function decrement(){
        if($this->count>0){
            $this->count--;
        }else{
            session()->flash('status','The count is too low');
        }

}
      public function render()
    {
        // return view('livewire.components.layouts.app');
        return view('livewire.counter');
    }
}
