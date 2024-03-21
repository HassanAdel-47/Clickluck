<?php

namespace App\Rules;

use App\Models\Ticket;
use Illuminate\Contracts\Validation\Rule;

class TicketBelongToPhase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(public $phase_id)
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $bool = Ticket::where('ticket_number',$value)->where('phase_id',$this->phase_id)->first();
        if($bool != null)
        return true;
    return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The ticket does not belong to this phase.';
    }
}
