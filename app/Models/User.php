<?php

namespace App\Models;
use QCod\ImageUp\HasImageUploads;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;
use QCod\ImageUp;
use QCod\ImageUp\ImageUpServiceProvider;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasImageUploads;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'userName',
        'region',
        'school',
        'country',
        'phone',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function leaderboard(){
        return $this->hasOne(Leaderboard::class);
    }
    //88888888888888888888888888888888888888888888888888888888888888888888888888888888
        // which disk to use for upload, can be override by field options
        protected $imagesUploadDisk = 'local';

        // path in disk to use for upload, can be override by field options
        protected $imagesUploadPath = 'uploads';

        // auto upload allowed
        protected $autoUploadImages = false;
        //88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
        protected static $imageFields = [
            'avatar' => [
                // width to resize image after upload
                'width' => 50,

                // height to resize image after upload
                'height' => 50,

                // set true to crop image with the given width/height and you can also pass arr [x,y] coordinate for crop.
                'crop' => true,

                // what disk you want to upload, default config('imageup.upload_disk')
                'disk' => 'public',

                // a folder path on the above disk, default config('imageup.upload_directory')
                'path' => 'avatars',

                // placeholder image if image field is empty
                'placeholder' => 'public/storage/avatars/1-avatar.png',

                // validation rules when uploading image
                'rules' => 'image|max:2000',

                // override global auto upload setting coming from config('imageup.auto_upload_images')
                'auto_upload' => false,

                // if request file is don't have same name, default will be the field name
                'file_input' => 'avatar',

                // if field (here "avatar") don't exist in database or you wan't this field in database
                'update_database' => true,

                // // a hook that is triggered before the image is saved
                // 'before_save' => BlurFilter::class,

                // // a hook that is triggered after the image is saved
                // 'after_save' => CreateWatermarkImage::class
            ],
        ];
        protected function avatarUploadFilePath($file) {
            return $this->id . '-avatar.'.$file->getClientOriginalExtension();
        }

}
