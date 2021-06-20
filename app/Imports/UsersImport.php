<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use App\Mail\testMail;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $numb = 0;
    public function model(array $row)
    {
        if ($this->numb == 0) {
            $this->numb++;
            return;
        }
        $this->numb;
        $password = Str::random(15);
        $details = [
            'name' => $row[1],
            'password' => $password
        ];
       // $mail = new testMail($details);
        //\Mail::to($row[2])->send($mail);  
        if (User::where('Email', $row[2])->first()) {
            return;
        }
        return new User([
            'Surname'     => $row[1],
            'Email'    => $row[2],
            'Password'   => $password,
            'RoleId' => 1,
        ]);
    }
}