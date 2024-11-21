<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "original_url",
        "short_code",
        "expires_at",
        "user_id",
    ];

    public function isExpired()
    {
        return $this->expires_at && Carbon::parse($this->expires_at)->isPast();
    }

    public function linkTracking(){
        return $this->hasMany(LinkTracking::class);
    }

    public static function sendContactMail($fullname, $email, $message) {

        $data["email"] = $email;
        $data["title"] = $fullname;
        $data["message"] = $message;
        $data['contact_us_mail'] = "contact@justanotherlinkcut.com";
        Mail::mailer('contact')
            ->to($data['contact_us_mail'])
            ->send(new ContactMail($data));
    }
}
