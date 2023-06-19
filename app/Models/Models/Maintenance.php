<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = ['start_date', 'end_date', 'message', 'status'];

    /**
     * Get the maintenance status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    /**
     * Check if maintenance is currently active.
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->status;
    }

    /**
     * Set the maintenance status to active.
     */
    public function activate()
    {
        $this->status = true;
        $this->save();
    }

    /**
     * Set the maintenance status to inactive.
     */
    public function deactivate()
    {
        $this->status = false;
        $this->save();
    }
    
    // Add more methods as per your requirements
}
