<?php

namespace App;

use Expsense;
use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    public function expenses(){
        return $this->hasMany(Expense::class);
    }
}
