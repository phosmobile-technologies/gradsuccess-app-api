<?php


namespace App\Contracts;


use App\Models\Messages;

interface MessageContract
{
    /**
     * @param array $message
     * @return Messages
     */
    public function create(array $message): Messages;
}